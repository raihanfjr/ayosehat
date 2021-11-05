<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Home - Dokter';
        $this->load->view('header', $data);
        $this->load->view('index_dokter');
        $this->load->view('footer');
    }

    public function bmi()
    {
        $data['title'] = 'Kalkulator BMI';
        $this->load->view('header', $data);
        $this->load->view('bmi_dokter');
        $this->load->view('footer');
    }

    public function applykeluhan()
    {
        $data['title'] = 'Apply Keluhan';

        $this->db->select('*');
        $this->db->from('keluhans');
        $this->db->where('id_dr', $this->session->userdata('id'));
        $query = $this->db->get();
        $data['res'] = $query->result();
        $this->load->view('header', $data);
        $this->load->view('apply_keluhan_dokter', $data);
        $this->load->view('footer');
    }

    function autocomplete()
    {

        // $this->db->select('*');
        // $this->db->from('users');
        $this->db->like('name', $_GET['term'], 'both');
        $this->db->order_by('name', 'ASC');
        // $this->db->limit(10);
        $result = $this->db->get('users')->result();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->name;
            echo json_encode($arr_result);
        }
    }

    public function cariartikel()
    {
        $data['title'] = 'Cari Artikel';

        $this->db->select('*');
        $this->db->from('artikels');
        $this->db->join('users', 'users.id = artikels.id_dr');
        $query = $this->db->get();
        $data['res'] = $query->result();

        $this->load->view('header', $data);
        $this->load->view('cari_artikel_dokter', $data);
        $this->load->view('footer');
    }

    public function detilartikel($id)
    {
        $data['title'] = 'Detail Artikel';

        $this->db->select('*');
        $this->db->from('artikels');
        $this->db->join('users', 'users.id = artikels.id_dr');
        $this->db->where('id_artikel', $id);
        $query = $this->db->get();
        $data['res'] = $query->row_array();

        $this->load->view('header', $data);
        $this->load->view('detil_artikel_dokter', $data);
        $this->load->view('footer');
    }

    public function createartikel()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Create Artikel';

            $this->load->view('header', $data);
            $this->load->view('create_artikel');
            $this->load->view('footer');
        } else {
            $email = $this->session->userdata('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('users', ['email' => $email])->row_array();

            if ($user) {

                if (password_verify($password, $user['password'])) {
                    $name       = $_FILES['photo']['name'];
                    $temp_name  = $_FILES['photo']['tmp_name'];
                    $location = './uploads/';
                    $data = [
                        'id_dr' => $this->session->userdata('id'),
                        'title' => $this->input->post('title'),
                        'body' => $this->input->post('body'),
                        'photo' => $_FILES['photo']['name']
                    ];

                    move_uploaded_file($temp_name, $location . $name);

                    $this->db->insert('artikels', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, your article has been uploaded !</div>');
                    redirect('c_dokter');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                    redirect('c_dokter/createartikel');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your email have not been registered.</div>');
                redirect('c_dokter/createartikel');
            }
        }
    }

    public function deleteartikel($id)
    {
        $where = array('id_artikel' => $id);
        $this->db->where($where);
        $this->db->delete('artikels');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Article deleted!</div>');
        redirect('c_dokter/cariartikel');
    }

    public function terimakeluhan($id)
    {
        $data = [
            'kondisi' => "Diterima"
        ];
        $this->db->where('konsultasi_id', $id);
        $this->db->update('keluhans', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
        redirect('c_dokter/applykeluhan');
    }

    public function tolakkeluhan($id)
    {
        $data = [
            'kondisi' => "Ditolak"
        ];
        $this->db->where('konsultasi_id', $id);
        $this->db->update('keluhans', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
        redirect('c_dokter/applykeluhan');
    }

    public function hapuskeluhan($id)
    {
        $where = array('konsultasi_id' => $id);
        $this->db->where($where);
        $this->db->delete('keluhans');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request deleted!</div>');
        redirect('c_dokter/applykeluhan');
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('hospital', 'Hospital', 'required');
        $this->form_validation->set_rules('job', 'Job', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('jenisk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Update Dokter';
            $this->db->select('*');
            $this->db->from('d_users');
            $this->db->where('id', $this->session->userdata('id'));
            $query = $this->db->get();
            $data['res'] = $query->row_array();
            $this->load->view('header', $data);
            $this->load->view('update_dokter', $data);
            $this->load->view('footer');
        } else {
            $email = $this->session->userdata('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('users', ['email' => $email])->row_array();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'name' => $this->input->post('name', true),
                        'email' => $this->input->post('email', true),
                        'birth_date' => $this->input->post('dob'),
                        'jenis_kelamin' => $this->input->post('jenisk')
                    ];
                    $datars = [
                        'id_rs' => $this->input->post('hospital'),
                        'jenis_dokter' => $this->input->post('job')
                    ];
                    $where = array(
                        'email' => $email
                    );

                    $wheres = array(
                        'id' => $this->session->userdata('id')
                    );

                    $this->db->where($where);
                    $this->db->update("users", $data);

                    $this->db->flush_cache();

                    $this->db->where($wheres);
                    $this->db->update("d_users", $datars);

                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Success !</div>');
                    redirect('c_dokter/update');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                    redirect('c_dokter/update');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your email have not been registered.</div>');
                redirect('c_dokter/update');
            }
        }
    }

    public function capotek()
    {
        $this->load->helper("url");
        $data['title'] = 'Cari Apotek';
        $res = file_get_contents(base_url() . "assets/json/apotek.json");
        $data['dres'] = json_decode($res);
        $this->load->view('header', $data);
        $this->load->view('cari_apotek_dokter', $data);
        $this->load->view('footer');
    }

    public function cdokter()
    {
        $data['title'] = 'Cari Dokter';

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role_id', 1);
        $this->db->join('d_users', 'd_users.id = users.id');
        $this->db->join('hospitals', 'd_users.id_rs = hospitals.hospitals_id');
        $query = $this->db->get();
        $data['res'] = $query->result();
        $this->load->view('header', $data);
        $this->load->view('cari_dokter_dokter', $data);
        // $this->load->view('footer');
    }

    public function sdokter()
    {
        $data['title'] = 'Search Dokter';

        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('name', $_GET['namedr'], 'both');
        $this->db->join('d_users', 'd_users.id = users.id');
        $this->db->join('hospitals', 'd_users.id_rs = hospitals.hospitals_id');
        $query = $this->db->get();
        $data['res'] = $query->result();
        $this->load->view('header', $data);
        $this->load->view('cari_dokter_pasien', $data);
        // $this->load->view('footer');
    }

    public function chospital()
    {
        $data['title'] = 'Cari Rumah Sakit';

        $this->db->select('*');
        $this->db->from('hospitals');
        $query = $this->db->get();
        $data['rs'] = $query->result();

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role_id', 1);
        $this->db->join('d_users', 'd_users.id = users.id');
        $this->db->join('hospitals', 'd_users.id_rs = hospitals.hospitals_id');
        $query = $this->db->get();
        $data['res'] = $query->result();

        $this->load->view('header', $data);
        $this->load->view('cari_hospital_dokter', $data);
        $this->load->view('footer');
    }

    public function aboutus()
    {
        $data['title'] = 'About Us';
        $this->load->view('header', $data);
        $this->load->view('aboutus_dokter');
        $this->load->view('footer');
    }
}

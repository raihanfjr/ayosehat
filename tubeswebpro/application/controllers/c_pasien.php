<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Home - Pasien';
        $this->load->view('header', $data);
        $this->load->view('index_pasien');
        $this->load->view('footer');
    }

    public function bmi()
    {
        $data['title'] = 'Kalkulator BMI';
        $this->load->view('header', $data);
        $this->load->view('bmi_pasien');
        $this->load->view('footer');
    }

    public function applykeluhan()
    {
        $data['title'] = 'Apply Keluhan';

        $this->db->select('*');
        $this->db->from('keluhans');
        $this->db->where('id_akun', $this->session->userdata('id'));
        $query = $this->db->get();
        $data['res'] = $query->result();
        $this->load->view('header', $data);
        $this->load->view('apply_keluhan_pasien', $data);
        $this->load->view('footer');
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
        $this->load->view('cari_artikel_pasien', $data);
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
        $this->load->view('detil_artikel_pasien', $data);
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
        $this->load->view('cari_hospital_pasien', $data);
        $this->load->view('footer');
    }

    function deletekeluhan($id)
    {
        $where = array('konsultasi_id' => $id);
        $this->db->where($where);
        $this->db->delete('keluhans');
        redirect('c_pasien/applykeluhan');
    }

    public function updatekeluhan($id)
    {
        $this->form_validation->set_rules('jenisk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('dok', 'Konsultasi Date', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Update Keluhan';
            $this->db->select('*');
            $this->db->from('keluhans');
            $this->db->where('konsultasi_id', $id);
            $query = $this->db->get();
            $data['res'] = $query->row_array();
            $this->load->view('header', $data);
            $this->load->view('update_keluhan', $data);
            $this->load->view('footer');
        } else {
            $data = [
                'kondisi' => "Diproses",
                'konsultasi_date' => $this->input->post('dok'),
                'keluhan' => $this->input->post('keluhan'),
            ];
            $this->db->where('konsultasi_id', $id);
            $this->db->update('keluhans', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your update succeed</div>');
            redirect('c_pasien/applykeluhan');
        }
    }

    public function jpasien($id)
    {
        $this->form_validation->set_rules('jenisk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('dok', 'Konsultasi Date', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Janji Pasien';
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('users.id', $id);
            $this->db->join('d_users', 'd_users.id = users.id');
            $this->db->join('hospitals', 'd_users.id_rs = hospitals.hospitals_id');
            $query = $this->db->get();
            $data['res'] = $query->row_array();
            $this->load->view('header', $data);
            $this->load->view('form_pasien', $data);
            $this->load->view('footer');
        } else {
            $data = [
                'id_dr' => $id,
                'id_akun' => $this->session->userdata('id'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'birth_date' => $this->input->post('dob'),
                'jenis_kelamin' => $this->input->post('jenisk'),
                'dr_name' => $this->input->post('named'),
                'hospitals_name' => $this->input->post('nameh'),
                'konsultasi_date' => $this->input->post('dok'),
                'keluhan' => $this->input->post('keluhan'),
                'kondisi' => "Diproses"
            ];
            $this->db->insert('keluhans', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your request has been processed, Please wait for your doctor responses. </div>');
            redirect('c_pasien');
        }
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
        $this->load->view('cari_dokter_pasien', $data);
        // $this->load->view('footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('jenisk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('password', 'Password1', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Update Pasien';
            $this->load->view('header', $data);
            $this->load->view('update_pasien');
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
                    $where = array(
                        'email' => $email
                    );
                    $this->db->where($where);
                    $this->db->update("users", $data);
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Success !</div>');
                    redirect('c_pasien/update');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                    redirect('c_pasien/update');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your email have not been registered.</div>');
                redirect('c_pasien/update');
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
        $this->load->view('cari_apotek_pasien', $data);
        $this->load->view('footer');
    }

    public function aboutus()
    {
        $data['title'] = 'About Us';
        $this->load->view('header', $data);
        $this->load->view('aboutus_pasien');
        $this->load->view('footer');
    }
}

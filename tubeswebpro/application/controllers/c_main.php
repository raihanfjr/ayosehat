<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('header', $data);
			$this->load->view('login');
			$this->load->view('footer');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users', ['email' => $email])->row_array();

			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						'name' => $user['name'],
						'image' => $user['image'],
						'birth_date' => $user['birth_date'],
						'role_id' => $user['role_id'],
						'jenis_kelamin' => $user['jenis_kelamin']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('c_dokter');
					} else if ($user['role_id'] == 2) {
						redirect('c_pasien');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
					redirect('c_main');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your email have not been registered.</div>');
				redirect('c_main');
			}
		}
	}

	public function indexguest()
	{
		$data['title'] = 'Home - Guest';
		$this->load->view('header', $data);
		$this->load->view('index_guest');
		$this->load->view('footer');
	}

	public function artikel()
	{
		$data['title'] = 'Cari Artikel';

		$this->db->select('*');
		$this->db->from('artikels');
		$this->db->join('users', 'users.id = artikels.id_dr');
		$query = $this->db->get();
		$data['res'] = $query->result();

		$this->load->view('header', $data);
		$this->load->view('cari_artikel_guest', $data);
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
		$this->load->view('detil_artikel_guest', $data);
		$this->load->view('footer');
	}

	public function aboutus()
	{
		$data['title'] = 'About Us';
		$this->load->view('header', $data);
		$this->load->view('aboutus_guest');
		$this->load->view('footer');
	}

	public function bmi()
	{
		$data['title'] = 'Kalkulator BMI';
		$this->load->view('header', $data);
		$this->load->view('bmi_guest');
		$this->load->view('footer');
	}

	public function register()
	{
		$data['title'] = 'Registrasi';
		$this->load->view('header', $data);
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function registerp()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		$this->form_validation->set_rules('jenisk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registrasi Pasien';
			$this->load->view('header', $data);
			$this->load->view('register_pasien');
			$this->load->view('footer');
		} else {
			$data = [
				'name' => $this->input->post('name', true),
				'email' => $this->input->post('email', true),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'birth_date' => $this->input->post('dob'),
				'jenis_kelamin' => $this->input->post('jenisk'),
				'role_id' => '2',
				'date_created' => time()
			];
			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, your account has been registered !</div>');
			redirect('c_main');
		}
	}

	public function registerd()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('hospital', 'Hospital', 'required');
		$this->form_validation->set_rules('job', 'Job', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		$this->form_validation->set_rules('jenisk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registrasi Dokter';
			$this->load->view('header', $data);
			$this->load->view('register_dokter');
			$this->load->view('footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'name' => $this->input->post('name', true),
				'email' => $this->input->post('email', true),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'birth_date' => $this->input->post('dob'),
				'jenis_kelamin' => $this->input->post('jenisk'),
				'role_id' => '1',
				'date_created' => time()
			];
			$this->db->insert('users', $data);

			$user = $this->db->get_where('users', ['email' => $email])->row_array();
			$id = $user['id'];
			$datad = [
				'id' => $id,
				'id_rs' => $this->input->post('hospital'),
				'jenis_dokter' => $this->input->post('job')
			];
			$this->db->insert('d_users', $datad);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, your account has been registered !</div>');
			redirect('c_main');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('image');
		$this->session->unset_userdata('birth_date');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('c_main');
	}
}

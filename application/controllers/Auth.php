<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	#---------HALAMAN LOGIN------------------#

	public function __construct()
	{
		parent ::__construct();
		$this->load->library('form_validation');
	}	

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/auth_header');
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');

		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$admin = $this->db->get_where('admin',['email' => $email])->row_array();

            

			if ($admin) {
				if (password_verify($password, $admin['password'])) {
					$data = [

						'email' => $admin['email'],
						'as_id' => $admin['as_id']

					];

					$this->session->set_userdata($data);

					if ($admin['as_id'] == 1){
						redirect('admin');
					} else {
						redirect('user');
					}

				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Password anda salah! </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
				Email salah, akun anda belum terdaftar! </div>');
				redirect('auth');

			}
		}
	}

	public function registrasi()
	{
		# Rules untuk mengisi form pembuatan akun
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
		# Validasi form
		if ($this->form_validation->run() == false){

			$this->load->view('template/auth_header');
			$this->load->view('auth/registrasi');
			$this->load->view('template/auth_footer');

		} else {

			$data = [

				'nama' 			=> $this->input->post('nama'),
				'email' 		=> $this->input->post('email'),
				'password' 		=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'as_id'			=> 1,
				'gambar' 		=> 'user.png',
				'date_created' 	=> time()

			];

			$this->db->insert('admin', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
			Selamat, anda sudah terdaftar! Silahkan login! </div>');

			redirect('auth');

		}
		
	}

    public function keluar()
    {
        $this->session->unset_userdata($data['email']);
        $this->session->unset_userdata($data['as_id']);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
		Anda sudah keluar! </div>');

		redirect('auth');
    }

}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
				
		$this->load->library('form_validation');
		$this->load->helper('my');
		$this->load->model('user_model');
	}

	// Register user
	public function register(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telefon', 'Telefon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){

			$this->load->view('register');

		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

			redirect('blog');
		}
	}

	// Log in user
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('login');
		} else {
			
	// Get username
	$username = $this->input->post('username');
	// Get & encrypt password
	$password = md5($this->input->post('password'));

	// Login user
	$id_user = $this->user_model->login($username, $password);

	if($id_user){
		// Buat session
		$user_data = array(
			'id_user' => $id_user,
			'username' => $username,
			'logged_in' => true,
			'levels' => $this->user_model->get_user_level($id_user)
		);

		$this->session->set_userdata($user_data);

		// Set message
		$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

		redirect('user/dashboard');
	} else {
		// Set message
		$this->session->set_flashdata('login_failed', 'Login invalid');

		redirect('user/login');
	}		
		}
	}

	// Log user out
	public function logout(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

		redirect('user/login');
	}

	// Fungsi Dashboard
	function dashboard()
	{
		// Must login
		if(!$this->session->userdata('logged_in')) 
			redirect('user/login');

		$id_user = $this->session->userdata('id_user');

		// Dapatkan detail dari User
		$data['user'] = $this->user_model->get_user_details($id_user);

		// Load view
		$this->load->view('dashboard', $data, FALSE);
	}

}

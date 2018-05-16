<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel');
	}

	public function index()
	{
		// Dapatkan data artikel dari model
		$artikel['data'] = $this->artikel->get_artikels();

		//$this->load->view("templates/header");
		$this->load->view('dt_json', $artikel);
		//$this->load->view("templates/footer");
	}

	public function get_json()
	{
		$artikel['data'] = $this->artikel->get_artikels();
		
		// Tampilkan dalam bentuk format
		echo json_encode($artikel);
	}

	public function view_json()
	{
		//$this->load->view("templates/header");
		$this->load->view('dt_json');
		//$this->load->view("templates/footer");
	}

}

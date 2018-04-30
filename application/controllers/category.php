<?php

class category extends CI_Controller {


	public function index()
	{
		$this->load->model('category_model');
		$data['category'] = $this->category_model->get_category();
		$this->load->view('view_kategori', $data);
	}

	public function create()
    {
    	$this->load->model('category_model');
    	$data = array();
		$this->load->library('form_validation');
        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules('cat_name', 'cat_name', 'required', array('required' => '%s harus diisi '));
		$this->form_validation->set_rules('cat_description', 'description', 'required', array('required' => '%s harus diisi '));

        if($this->form_validation->run() === FALSE){
            $this->load->view('create_kategori', $data);
        } else {
            $this->category_model->create_category();
            redirect('category');
        }
    }

    public function delete($id) {
		$this->load->model('category_model');
		$this->category_model->delete($id);
		redirect('category');
	}

	public function edit($id){
		$this->load->model('category_model');

		$data['single'] = $this->category_model->get_single($id);

		if($this->input->post('simpan')) {
			$this->category_model->update($id);
			redirect('category');
		}
		$this->load->view('edit_kategori', $data);
	}
}
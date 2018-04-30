<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}

	public function tambah()
	{
		$this->load->model('artikel');
		$this->load->model('category_model');
		$data = array();
		$data['kategori'] = $this->category_model->get_category();


		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul', 'judul_blog', 'required', array('required' => '%s harus diisi '));
		$this->form_validation->set_rules('input_content', 'content', 'required', array('required' => '%s harus diisi '));
		$this->form_validation->set_rules('input_tanggal', 'tanggal_blog', 'required', array('required' => '%s harus diisi '));
		// $this->form_validation->set_rules('input_gambar', 'image', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_penerbit', 'penerbit', 'required', array('required' => '%s harus diisi '));
		$this->form_validation->set_rules('input_sumber', 'sumber', 'required', array('required' => '%s harus diisi '));
		$this->form_validation->set_rules('input_penulis', 'penulis', 'required', array('required' => '%s harus diisi '));
		

		if($this->form_validation->run()==FALSE) {
			$this->load->view('form_tambah', $data);
		} 
		else {
			if ($this->input->post('simpan')) {
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') {
				$this->artikel->insert($upload);
				redirect('blog');
			}else{
				$data['message'] = $upload['error'];
			}
		}
	}
		
		//$this->load->view('form_tambah', $data);
	}

	public function delete($id) {
		$this->load->model('artikel');
		$this->artikel->hapus($id);
		redirect('blog');
	}

	public function edit($id) {
		$this->load->model('artikel');
		$this->load->model('category_model');
		$data['kategori'] = $this->category_model->get_category();
		$data['single'] = $this->artikel->get_single($id);

		if(isset($_POST['simpan'])){
			$upload=$this->artikel->upload();
			$this->artikel->edit($upload,$id);
			redirect('blog');
		}
		
		$this->load->view('form_edit', $data);
	}
}



		
	

	    
    



/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
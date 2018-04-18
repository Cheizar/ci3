<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();
	}

	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	} 

	public function insert($upload)
	{
		$data = array(
			'id_blog' => '',
			'judul_blog' => $this->input->post('input_judul'),
			'content' => $this->input->post('input_content'),
			'tanggal_blog' => $this->input->post('input_tanggal'),
			'image' => $upload['file']['file_name']
		);

		$this->db->insert('blog', $data);
	}

	public function hapus($id){
		$query = $this->db->query('DELETE from blog WHERE id_blog= '.$id);
	}

	public function edit($upload, $id_blog){
		if ($upload['result']=='success') {
			$data = array(
				'judul_blog' => $this->input->post('input_judul'),
				'tanggal_blog' => $this->input->post('input_tanggal'),
				'content' => $this->input->post('input_content'),
				'image' => $upload['file']['file_name']
			);
		} else {
			$data = array(
				'judul_blog' => $this->input->post('input_judul'),
				'tanggal_blog' => $this->input->post('input_tanggal'),
				'content' => $this->input->post('input_content'),
			);
		}
		$this->db->where('id_blog', $id_blog);
		$this->db->update('blog', $data);
	}
	
}

/* End of file blog.php */
/* Location: ./application/models/blog.php */
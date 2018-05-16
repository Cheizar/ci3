<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {
	function __construct()
    {
    	parent::__construct();
    }
	

	public function get_artikels( $limit = FALSE, $offset = FALSE ){
		if ( $limit ) {
            $this->db->limit($limit, $offset);
        }
    
        $this->db->order_by('blog.id_blog', 'ASC');
         // $this->db->join('kategori', 'kategori.id_kategori = blog.id_blog');
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_total() 
    {
        // Dapatkan jumlah total artikel
        return $this->db->count_all("blog");
    }

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();

		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('kategori', 'blog.id_kategori = kategori.id_kategori');
		$this->db->where('blog.id_blog='.$id);
		return $this->db->get()->result();
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
			'image' => $upload['file']['file_name'],
			// 'cat_name' => $this->input->post('cat_name')
		);

		$this->db->insert('blog', $data);
	}

	public function hapus($id){
		$query = $this->db->query('DELETE from blog WHERE id_blog= '.$id);
	}

	public function edit($upload, $id){
		if ($upload['result']=='success') {
			$data = array(
				'judul_blog' => $this->input->post('input_judul'),
				'tanggal_blog' => $this->input->post('input_tanggal'),
				'content' => $this->input->post('input_content'),
				'penerbit' => $this->input->post('input_penerbit'),
				'sumber' => $this->input->post('input_sumber'),
				'id_kategori' => $this->input->post('id_kategori'),
				'image' => $upload['file']['file_name']
			);
		} else {
			$data = array(
				'judul_blog' => $this->input->post('input_judul'),
				'tanggal_blog' => $this->input->post('input_tanggal'),
				'content' => $this->input->post('input_content'),
				'penerbit' => $this->input->post('input_penerbit'),
				'sumber' => $this->input->post('input_sumber'),
				'id_kategori' => $this->input->post('id_kategori'),
			);
		}
		$this->db->where('id_blog', $id_blog);
		$this->db->update('blog', $data);
	}
	
}

/* End of file blog.php */
/* Location: ./application/models/blog.php */
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
}

/* End of file blog.php */
/* Location: ./application/models/blog.php */
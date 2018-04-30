<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category_model extends CI_Model {

	public function get_category(){
		$query = $this->db->get('kategori');
		return $query->result();
	}

	public function create_category()
	{
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );
       return $this->db->insert('kategori', $data);
   }

   public function get_single($id)
   {
   		$query = $this->db->query('select * from kategori WHERE id_kategori='.$id);
   		return $query->result();
   }

   public function delete($id) {
   	$query = $this->db->query('DELETE from kategori WHERE id_kategori='.$id);
   }

   public function update($id){
   	$data = array(
   		'cat_name' => $this->input->post('cat_name'),
   		'cat_description' => $this->input->post('cat_description')
   	);
   	$this->db->where('id_kategori',$id);
   	$this->db->update('kategori', $data);
   }
}
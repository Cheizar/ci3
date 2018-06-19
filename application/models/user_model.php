<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telefon' => $this->input->post('telefon'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password
        );

        // Insert user
        return $this->db->insert('user', $data);
    }

    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('user');


        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }

        function get_user_level($id)
    {
        // Dapatkan data user berdasar $id
        $this->db->select('fk_level_id');
        $this->db->where('id', $id);

        $result = $this->db->get('user');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }

    function get_user_details($id)
    {
        $this->db->join('levels', 'levels.level_id = user.fk_level_id', 'left');
        $this->db->where('id', $id);

        $result = $this->db->get('user');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }
    }
}

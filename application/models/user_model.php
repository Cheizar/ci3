<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

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
            'password' => $enc_password,
            'fk_level_id' => $this->input->post('membersip')
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
            return $result->row(0)->id_user;
        } else {
            return false;
        }
    }

        public function get_user_level($id_user){
        // Dapatkan data user berdasar $id
        $this->db->select('level_id');
        $this->db->where('id_user', $id_user);

        $result = $this->db->get('user');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }

    function get_user_details($id_user)
    {
        $this->db->join('levels', 'levels.level_id = user.level_id', 'left');
        $this->db->where('id_user', $id_user);

        $result = $this->db->get('user');

        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }
    
}

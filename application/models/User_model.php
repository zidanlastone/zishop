<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	private $table = 'users';

	public function __construct(){
		$this->load->database();
	}

	private function getRows($where = array()){
		if (!empty($where)){
		$this->db->where($where);
		$query = $this->db->get($this->table);

			if ($query->num_rows() > 0){
				return $query->row_array();
			}

		}else{
			$query = $this->db->get($this->table);
			if ($query->num_rows() > 0){
				return $query->result_array();
			}
		}
	}

	public function register(){
		$data = array(
		'user_id' => uniqid(15),
		'name' => $this->input->post('name'),
		'role' => $this->input->post('role'),
		'username' => $this->input->post('username'),
		'password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
		'status' => '0'
		);
		return $this->db->insert($this->table, $data);
	}

	// Function login
	public function login($username, $password){

		$user = array('username' => $username, 'status' => '1' );
		$check_login = $this->getRows($user);
		$verified_pass = password_verify($password, $check_login['password']);

		if ($verified_pass) {
		$this->db->where('username', $username);
		$result = $this->db->get($this->table);

			if ($result->num_rows() == 1) {
				return $result->row(0)->user_id;
			}else{
				return false;
			}
		}

	}

}

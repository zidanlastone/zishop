<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}

	public function index(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('Template/login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user = $this->user_model->login($username, $password);

			if($user){
				$user_data = array(
					'id_user' => $user,
					'username' => $username,
					'logged_in' => TRUE
				);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_login','You are now Login');
				redirect('admin');
			}else{
				$this->session->set_flashdata('login_failed','Login is invalid');
				redirect('admin/user');
			}
		}
	}

	public function register(){
	$this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('role','Role','required');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('password2','Confirm Password','matches[password]');

		if ($this->form_validation->run()===FALSE) {
			$data['content'] = 'Template/register';
			$this->load->view('Template/template', $data);
		}else{
			$this->user_model->register();
			$this->session->set_flashdata('user_registered','You are now Registered and can Login');
			redirect('admin/user');
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('user_logout','You are now logout');
		redirect('admin/user');
	}
}

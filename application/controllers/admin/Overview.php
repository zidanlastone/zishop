<?php

class Overview extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}
	public function index(){
		$data['content'] = 'template/content';
		$data["products"] = $this->product_model->getAll()->num_rows();
		$this->load->view('template/template', $data);
	}

	public function users(){
		$data['content'] = 'template/content';
		$this->load->view('template/template', $data);
	}
}

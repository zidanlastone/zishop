<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('product_model');
		$data['content'] = 'pages/product-gallery';
		$data['products'] = $this->product_model->getAll()->result();
		$this->load->view('template/guest', $data);
	}

	public function about(){
		$data['content'] = 'pages/about';
		$this->load->view('template/guest', $data);
	}

	public function contact(){
		$data['content'] = 'pages/contact';
		$this->load->view('template/guest', $data);
	}


}

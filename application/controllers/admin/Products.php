<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
		if($this->session->userdata('logged_in') !== true ){
			redirect('admin/user');
		}

		$data["products"] = $this->product_model->getAll()->resilt();
		$data['content'] = 'admin/product/list';
        $this->load->view("Template/template", $data);
    }

    public function add()
    {
		if($this->session->userdata('logged_in') !== true ){
			redirect('admin/user');
		}
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('admin/products');
        }

		$data['content'] = 'admin/product/new_form';
        $this->load->view("Template/template", $data);
    }

    public function edit($id = null)
    {
		if($this->session->userdata('logged_in') !== true ){
			redirect('admin/user');
		}
        if (!isset($id)) redirect('admin/products');
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('admin/products');
        }

        $data["product"] = $product->getById($id);
		if (!$data["product"]) show_404();

		$data['content'] = 'admin/product/edit_form';
        $this->load->view("Template/template", $data);
    }

    public function delete($id=null)
    {
		if($this->session->userdata('logged_in') !== true ){
			redirect('admin/user');
		}
        if (!isset($id)) show_404();
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}

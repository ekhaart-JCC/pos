<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('employees_model');
	}
	public function index()
	{
		$data_header = ['title' => 'Employees | RC-POS'];
		$data = ['employees' => $this->employees_model->get_all()];
		$this->load->view('admin/template/header', $data_header);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/employees/index',$data);
        $this->load->view('admin/template/footer');
	}
}
<?php

class Dashboard extends CI_Controller {
    public function index(){
        $this->load->view('admin/dashboard/template/header');
        $this->load->view('admin/dashboard/template/sidebar');
        $this->load->view('admin/dashboard/template/topbar');
        $this->load->view('admin/dashboard/index');
        $this->load->view('admin/dashboard/template/footer');
    }
}
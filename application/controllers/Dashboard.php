<?php

class Dashboard extends CI_Controller {
    public function index(){
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dashboard/index');
        $this->load->view('admin/template/footer');
    }
}
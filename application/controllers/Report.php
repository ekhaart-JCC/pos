<?php

class Report extends CI_Controller {
    public function sales(){
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/sales/index');
        $this->load->view('admin/template/footer');
    }

    public function transaction(){
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/transaction/index');
        $this->load->view('admin/template/footer');
    }
}
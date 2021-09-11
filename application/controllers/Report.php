<?php

class Report extends CI_Controller {
    public function sales(){
        $this->load->view('admin/sales/template/header');
        $this->load->view('admin/sales/template/sidebar');
        $this->load->view('admin/sales/template/topbar');
        $this->load->view('admin/sales/index');
        $this->load->view('admin/sales/template/footer');
    }

    public function transaction(){
        $this->load->view('admin/transaction/template/header');
        $this->load->view('admin/transaction/template/sidebar');
        $this->load->view('admin/transaction/template/topbar');
        $this->load->view('admin/transaction/index');
        $this->load->view('admin/transaction/template/footer');
    }
}
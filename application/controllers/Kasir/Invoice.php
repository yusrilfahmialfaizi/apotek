<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("kasir/Penjualanmodel");
    }

    function index($id_penjualan)
    {
        $data['data']       = $this->Penjualanmodel->get_data($id_penjualan);
        $data['detail']     = $this->Penjualanmodel->get_detail($id_penjualan);
        $this->load->view("partials/main/header/header_print");
        $this->load->view("content/kasir/print_invoice", $data);
        $this->load->view("partials/main/footer");
    }
}

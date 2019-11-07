<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Detailkunjungan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model("owner/Kunjunganmodel");
        }

        function index($id_kunjungan)
        {
            if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
            $data['data']   = $this->Kunjunganmodel->detail_kunjungan($id_kunjungan);
            $this->load->view("partials/main/header/header_owner");
            $this->load->view("content/owner/detail_kunjungan", $data);
            $this->load->view("partials/main/footer");
        }

    }
    
?>
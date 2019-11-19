<?php 	
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Data_pembelian extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/PembelianModel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir"){
				redirect("login");
			}
			$data['pembelian']	= $this->PembelianModel->pembelian_data();
			$data['dp']	= $this->PembelianModel->pembelian_detail();

			$this->load->view("partials/main/header/header_kasir");
			$this->load->view("content/kasir/data_pembelian", $data);
			$this->load->view("partials/main/footer");
		}

	}
?>
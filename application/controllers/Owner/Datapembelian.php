<?php 	
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Datapembelian extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Pembelianmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['pembelian']	= $this->Pembelianmodel->pembelian_data();
			$data['dp']	= $this->Pembelianmodel->pembelian_detail();

			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/data_pembelian", $data);
			$this->load->view("partials/main/footer");
		}

	}
?>
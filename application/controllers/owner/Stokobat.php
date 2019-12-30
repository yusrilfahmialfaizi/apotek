<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Stokobat extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Obatmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['obat'] 	= $this->Obatmodel->stok();
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/stok_obatpraktik", $data);
			$this->load->view("partials/main/footer");
		}

	}
?>
<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Datakunjungan extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/buku_kunjungan");
			$this->load->view("partials/main/footer");
		}

	}
?>
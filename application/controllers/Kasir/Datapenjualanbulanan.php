<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Datapenjualanbulanan extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir"){
				redirect("login");
			}
			$this->load->view("partial_apotek/main/header/header_table");
			$this->load->view("content_apotek/kasir/datapenjualanbulanan");
			$this->load->view("partial_apotek/main/footer/footer_table");
		}

	}

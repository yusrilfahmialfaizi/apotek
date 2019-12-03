<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 *
	 */
	class Dashboard extends CI_Controller
	{

		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Apoteker"){
				redirect("login");
			}
			$this->load->view("partials/main/header/header_apoteker");
			$this->load->view("content/apoteker/dashboard");
			$this->load->view("partials/main/footer");
		}

	}
?>
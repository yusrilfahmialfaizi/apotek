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
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/dashboard");
			$this->load->view("partials/main/footer");
		}
	}
?>
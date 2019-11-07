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
			$this->load->view("partials/main/header/header_kasir");
			$this->load->view("content/kasir/dashboard");
			$this->load->view("partials/main/footer");
		}

	}
?>
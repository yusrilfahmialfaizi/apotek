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
		}

		function index()
		{
			$this->load->view("partial_apotek/main/header");
			$this->load->view("content_apotek/kasir/data_pembelian");
			$this->load->view("partial_apotek/main/footer");
		}

	}
?>
<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Opname_obat extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			$this->load->view("partial_apotek/main/header/header_table");
			$this->load->view("content_apotek/kasir/opname_obat");
			$this->load->view("partial_apotek/main/footer/footer_table");
		}

	}
?>
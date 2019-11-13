<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Stock_obat extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("kasir/Stock_Obat_Model");
		}

		function index()
		{
			$data['obat'] 	= $this->Stock_Obat_Model->stok();
			$this->load->view("partials/main/header/header_kasir");
			$this->load->view("content_apotek/kasir/stock_obat", $data);
			$this->load->view("partials/main/footer");
		}

	}
?>
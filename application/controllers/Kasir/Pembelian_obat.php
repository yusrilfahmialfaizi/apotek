<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 *
	 */
	class Pembelian_obat extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('kasir/Pembelianobat_model');

		function index()

			if($this-session->userdata('status') != "Login" || $this->session->userdata("jabatan");
		{
			$this->load->view("partials/main/header/header_kasir");
			$this->load->view("content/kasir/pembelian_obat");
			$this->load->view("partials/main/footer");
		}

	}
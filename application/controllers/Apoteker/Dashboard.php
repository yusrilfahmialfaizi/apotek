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
			$this->load->model("Dashboard_model");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Apoteker"){
				redirect("login");
			}
			$data['jumlah_user'] = $this->Dashboard_model->jumlah_user();
			$data['pendapatan_harian'] = $this->Dashboard_model->jumlah_pendapatan_harian();
			$data['pendapatan_bulanan'] = $this->Dashboard_model->jumlah_pendapatan_bulanan();
			$data['pendapatan_tahunan'] = $this->Dashboard_model->jumlah_pendapatan_tahunan();
			$data['transaksi_harian'] = $this->Dashboard_model->jumlah_transaksi_harian();
			$data['total_transaksi'] = $this->Dashboard_model->total_transaksi();
			$this->load->view("partials/main/header/header_apoteker");
			$this->load->view("content/apoteker/dashboard");
			$this->load->view("partials/main/footer");
		}

	}
	?>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
		/**
		 *
		 */
		class Laporan_harian extends CI_Controller
		{
			function __construct()
			{
				# code...
				parent::__construct();
				$this->load->model("kasir/LaporanHarianModel");
			}

			function index()
			{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir"){
				redirect("login");
			}
				$year = $this->input->post('tahun');
				$month = $this->input->post('bulan');
				$day = $this->input->post('hari');
				if ($year == null && $month == null) {
			# code...
			$data['all'] = $this->LaporanHarianModel->get_laporan();
			} else {
			$data['all'] = $this->LaporanharianModel->getTransaksiMonth($year, $month, $day);
		}	
				$data['year'] = $this->LaporanHarianModel->getYear();
				$this->load->view("partials/main/header/header_kasir");
				$this->load->view("content/kasir/laporan_harian", $data);
				$this->load->view("partials/main/footer");
			}
			function print()
			{
				$data['data'] 	= $this->LaporanHarianModel->get_laporan();
				$this->load->view("partials/main/header/header_print");
				$this->load->view("content/kasir/print_laporan_harian", $data);
				$this->load->view("partials/main/footer");
			}
		}

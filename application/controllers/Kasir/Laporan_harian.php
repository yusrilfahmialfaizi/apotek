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
				$tanggal = $this->input->post("tanggal");
				$date = date("Y-m-d",strtotime($tanggal));
				if ($tanggal == null) {
					# code...
					$data['all'] = $this->LaporanHarianModel->get_laporan();
				} else {
					$data['all'] = $this->LaporanHarianModel->getTransaksiMonth($date);
				}	
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

			function coba()
			{
				$data = $this->input->post("tanggal");
				$date = date("Y-m-d",strtotime($data));
				// $year 	= "2019";
				// $month 	= "11";
				// $day 	= "23";

				// $data = $this->LaporanHarianModel->getTransaksiMonth($year, $month, $day);

				echo "<pre>";
				print_r($date);
				echo "</pre>";
			}

		}

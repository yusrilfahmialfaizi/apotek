<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
		/**
		 *
		 */
		class Laporan_bulanan extends CI_Controller
		{
			function __construct()
			{
				# code...
				parent::__construct();
				$this->load->model("kasir/LaporanBulananModel");
			}

			function index()
			{
				$data['laporan_bulanan'] = $this->LaporanBulananModel->ambil_data();
				$this->load->view("partials/main/header/header_kasir");
				$this->load->view("content/kasir/laporan_bulanan", $data);
				$this->load->view("partials/main/footer");
			}
			function print()
			{
				$data['data'] 	= $this->LaporanBulananModel->get_laporan();
				$this->load->view("partials/main/header/header_print");
				$this->load->view("content/kasir/print_laporan_bulanan", $data);
				$this->load->view("partials/main/footer");
			}
		}
?>
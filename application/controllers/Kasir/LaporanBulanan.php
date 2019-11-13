<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
		/**
		 *
		 */
		class LaporanBulanan extends CI_Controller
		{
			function __construct()
			{
				# code...
				parent::__construct();
				/*$this->load->model("owner/Kunjunganmodel");*/
			}

			function index()
			{
				$this->load->view("partials/main/header/header_kasir");
				$this->load->view("content/kasir/laporan_bulanan"/*, $data*/);
				$this->load->view("partials/main/footer");
			}
			function print()
			{
				/*$data['data'] 	= $this->Kunjunganmodel->get_kunjungan();*/
				$this->load->view("partials/main/header/header_print");
				$this->load->view("content/kasir/print_laporan_bulanan", $data);
				$this->load->view("partials/main/footer");
			}
		}
?>
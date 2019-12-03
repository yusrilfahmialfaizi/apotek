<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class Laporan_bulanan extends CI_Controller
{
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("apoteker/LaporanBulananModel");
	}
	function index()
	{
		if ($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Apoteker") {
			redirect("login");
		}
		$year = $this->input->post('tahun');
		$month = $this->input->post('bulan');
		if ($year == null && $month == null) {
			# code...
			$data['all'] = $this->LaporanBulananModel->get_laporan();
		} else {
			$data['all'] = $this->LaporanBulananModel->getTransaksiMonth($year, $month);
		}
		$data['year'] = $this->LaporanBulananModel->getYear();
		$this->load->view("partials/main/header/header_apoteker");
		$this->load->view("content/apoteker/laporan_bulanan", $data);
		$this->load->view("partials/main/footer");
	}
	function print()
	{
			$data['data'] 	= $this->LaporanBulananModel->get_laporan();
		$this->load->view("partials/main/header/header_print");
		$this->load->view("content/apoteker/print_laporan_bulanan", $data);
		$this->load->view("partials/main/footer");
	}
}
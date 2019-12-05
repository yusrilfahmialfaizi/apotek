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
		$year = $this->uri->segment(5);
		$month = $this->uri->segment(4);

		if ($year == null && $month == null) {
			# code...
			$data['data'] = $this->LaporanBulananModel->get_laporan();
		} else {
			$data['data'] = $this->LaporanBulananModel->getTransaksiMonth($year, $month);
		}
		$this->load->view("partials/main/header/header_print");
		$this->load->view("content/apoteker/print_laporan_bulanan", $data);
		$this->load->view("partials/main/footer");
	}
	function show_cart()
	{
		$year = $this->input->post("tahun");
		$month = $this->input->post("bulan");
		if ($year == null && $month == null) {
			# code...
			$data = $this->LaporanBulananModel->get_laporan();
		} else {
			$data = $this->LaporanBulananModel->getTransaksiMonth($year, $month);
		}
		$output = '';
		$no = 1;
		foreach ($data as $key) {
			$output	.= '<tr>
		                      <td>' . $no++ . '</td>
		                  <td>' . $key->id_penjualan . '</td>
		                  <td>' . $key->nama_user . '</td>
		                  <td>' . $key->jabatan . '</td>
		                  <td>' . $key->tanggal . '</td>
		                  <td>' . $key->total_harga . '</td>
		                  <td>' . $key->bayar . '</td>
		                  <td>' . $key->kembalian . '</td>
		                    </tr>';
		}
		// return $output;
		echo $output;
	}

	function load_cart()
	{
		echo $this->show_cart();
	}
}

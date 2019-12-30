<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
		if ($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir") {
			redirect("login");
		}
		$tanggal = $this->input->post("tanggal");
		$date = date("Y-m-d", strtotime($tanggal));
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
		$Y = $this->uri->segment(6);
		$m = $this->uri->segment(4);
		$d = $this->uri->segment(5);
		$tanggal =  $Y . "-" . $m . "-" . $d;
		if ($tanggal == null) {
			# code...
			$data['data'] 	= $this->LaporanHarianModel->get_laporan();
		} else {
			$data['data'] 	= $this->LaporanHarianModel->get_laporan_where($tanggal);
		}
		$this->load->view("partials/main/header/header_print");
		$this->load->view("content/apoteker/print_laporan_harian", $data);
		$this->load->view("partials/main/footer");
	}

	function show_cart()
	{
		$tanggal = $this->input->post("tanggal");
		// $tanggal = "11/23/2019";
		$date = date("Y-m-d", strtotime($tanggal));
		if ($tanggal == null) {
			// 	# code...
			$data = $this->LaporanHarianModel->get_laporan();
		} else {
			$data = $this->LaporanHarianModel->getTransaksiMonth($date);
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
		print_r($output);
	}

	function load_cart()
	{
		echo $this->show_cart();
	}
}

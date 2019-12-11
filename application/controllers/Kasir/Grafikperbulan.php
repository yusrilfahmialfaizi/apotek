<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Grafikperbulan extends CI_Controller
{
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("kasir/LaporanBulananModel");
		$this->load->model('kasir/Grafik_model');
	}
	function index()
	{
		$tahun = $this->input->post('tahun');
		if ($tahun == null) {
			# code...
			foreach ($this->Grafik_model->data_penjualan_perbulan() as $row) {
				$data['grafik'][] = (float) $row['Januari'];
				$data['grafik'][] = (float) $row['Februari'];
				$data['grafik'][] = (float) $row['Maret'];
				$data['grafik'][] = (float) $row['April'];
				$data['grafik'][] = (float) $row['Mei'];
				$data['grafik'][] = (float) $row['Juni'];
				$data['grafik'][] = (float) $row['Juli'];
				$data['grafik'][] = (float) $row['Agustus'];
				$data['grafik'][] = (float) $row['September'];
				$data['grafik'][] = (float) $row['Oktober'];
				$data['grafik'][] = (float) $row['November'];
				$data['grafik'][] = (float) $row['Desember'];
			}
		} else {
			foreach ($this->Grafik_model->get_data_penjualan_perbulan($tahun) as $row) {
				$data['grafik'][] = (float) $row['Januari'];
				$data['grafik'][] = (float) $row['Februari'];
				$data['grafik'][] = (float) $row['Maret'];
				$data['grafik'][] = (float) $row['April'];
				$data['grafik'][] = (float) $row['Mei'];
				$data['grafik'][] = (float) $row['Juni'];
				$data['grafik'][] = (float) $row['Juli'];
				$data['grafik'][] = (float) $row['Agustus'];
				$data['grafik'][] = (float) $row['September'];
				$data['grafik'][] = (float) $row['Oktober'];
				$data['grafik'][] = (float) $row['November'];
				$data['grafik'][] = (float) $row['Desember'];
			}
		}
		$data['year'] = $this->LaporanBulananModel->getYear();


		$data['data'] = $this->Grafik_model->get_data_penjualan();

		$tahun = $this->input->post('tahun_barang');
		$id_obat = $this->input->post('id_obat');
		if ($id_obat == null && $tahun == null) {

			foreach ($this->Grafik_model->get_penjualan_barang() as $row) {
				$data['data_barang'][] = (float) $row['Januari'];
				$data['data_barang'][] = (float) $row['Februari'];
				$data['data_barang'][] = (float) $row['Maret'];
				$data['data_barang'][] = (float) $row['April'];
				$data['data_barang'][] = (float) $row['Mei'];
				$data['data_barang'][] = (float) $row['Juni'];
				$data['data_barang'][] = (float) $row['Juli'];
				$data['data_barang'][] = (float) $row['Agustus'];
				$data['data_barang'][] = (float) $row['September'];
				$data['data_barang'][] = (float) $row['Oktober'];
				$data['data_barang'][] = (float) $row['November'];
				$data['data_barang'][] = (float) $row['Desember'];
			}
		} else {
			foreach ($this->Grafik_model->get_data_penjualan_barang($tahun, $id_obat) as $row) {
				$data['data_barang'][] = (float) $row['Januari'];
				$data['data_barang'][] = (float) $row['Februari'];
				$data['data_barang'][] = (float) $row['Maret'];
				$data['data_barang'][] = (float) $row['April'];
				$data['data_barang'][] = (float) $row['Mei'];
				$data['data_barang'][] = (float) $row['Juni'];
				$data['data_barang'][] = (float) $row['Juli'];
				$data['data_barang'][] = (float) $row['Agustus'];
				$data['data_barang'][] = (float) $row['September'];
				$data['data_barang'][] = (float) $row['Oktober'];
				$data['data_barang'][] = (float) $row['November'];
				$data['data_barang'][] = (float) $row['Desember'];
			}
		}

		$data['obat'] = $this->Grafik_model->get_obat();

		$this->load->view("partials/main/header/header_kasir");
		$this->load->view("content/kasir/grafikperbulan", $data);
		$this->load->view("partials/main/footer");
	}
}

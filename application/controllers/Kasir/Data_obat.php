<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Data_obat extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('kasir/Dataobat_model');
	}

	function index()
	{
		if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir"){
				redirect("login");
			}
		$data['obat'] = $this->Dataobat_model->ambil_data();
		$data['kode'] = $this->Dataobat_model->id_obat();
		$this->load->view("partials/main/header/header_kasir");
		$this->load->view("content/kasir/data_obat", $data);
		$this->load->view("partials/main/footer");
		
	}

	function tambah()
	{
		$id_obat = $this->input->post("id_obat_isi");
		$nama_paten = $this->input->post("nama_paten_isi");
		$nama_generic = $this->input->post("nama_generic_isi");
		$nama_pabrik = $this->input->post("nama_pabrik_isi");
		$jenis = $this->input->post("jenis_isi");
		$kategori = $this->input->post("kategori_isi");
		$harga_per_biji = $this->input->post("harga_per_biji_isi");
		$harga_per_lembar = $this->input->post("harga_per_lembar_isi");
		$harga_beli = $this->input->post("harga_beli_isi");

		$data = array(
			'id_obat' 					=> $id_obat,
			'nama_paten'				=> $nama_paten,
			'nama_generic'				=> $nama_generic,
			'nama_pabrik'				=> $nama_pabrik,
			'jenis'						=> $jenis,
			'kategori'					=> $kategori,
			'harga_per_biji'			=> $harga_per_biji,
			'harga_per_lembar'			=> $harga_per_lembar,
			'harga_beli'				=> $harga_beli
		);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->Dataobat_model->tambahdata($data, $id_obat);
		redirect("kasir/data_obat");
	}

	function edit()
	{
		$id_obat = $this->input->post("id_obat_edit");
		$nama_paten = $this->input->post("nama_paten_edit");
		$nama_generic = $this->input->post("nama_generic_edit");
		$nama_pabrik = $this->input->post("nama_pabrik_edit");
		$jenis = $this->input->post("jenis_edit");
		$kategori = $this->input->post("kategori_edit");
		$harga_per_biji = $this->input->post("harga_per_biji_edit");
		$harga_per_lembar = $this->input->post("harga_per_lembar_edit");
		$harga_beli = $this->input->post("harga_beli_edit");

		$data = array(
			'id_obat' 					=> $id_obat,
			'nama_paten'				=> $nama_paten,
			'nama_generic'				=> $nama_generic,
			'nama_pabrik'				=> $nama_pabrik,
			'jenis'						=> $jenis,
			'kategori'					=> $kategori,
			'harga_per_biji'			=> $harga_per_biji,
			'harga_per_lembar'			=> $harga_per_lembar,
			'harga_beli'				=> $harga_beli
		);

		$this->Dataobat_model->editdata($data, $id_obat);
		redirect("kasir/data_obat");
	}

	function hapus($hapus)
	{
		$id_obat = $hapus;
		// print_r($id_obat);
		$this->Dataobat_model->hapusdata($id_obat);
		redirect("kasir/data_obat");
	}
}

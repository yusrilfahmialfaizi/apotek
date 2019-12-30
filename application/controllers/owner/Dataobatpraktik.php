<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Dataobatpraktik extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Obatmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['kode']	= $this->Obatmodel->kode_obat();
			$data['obat']	= $this->Obatmodel->ambil_obat();
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/data_obat",$data);
			$this->load->view("partials/main/footer");
		}

		function tambah()
		{
			$id_obat 		= $this->input->post("id_obat_isi");
			$nama_paten 	= $this->input->post("nama_paten_isi");
			$nama_generic 	= $this->input->post("nama_generic_isi");
			$nama_pabrik 	= $this->input->post("nama_pabrik_isi");
			$jenis 			= $this->input->post("jenis_isi");
			$kategori 		= $this->input->post("kategori_isi");
			$jumlahbiji		= $this->input->post("jumlahbiji_isi");
			$harga_beli 	= $this->input->post("harga_beli_isi");
			$harga_biji 	= $this->input->post("harga_biji_isi");
			$harga_lembar 	= $this->input->post("harga_lembar_isi");

			$data 	= array(
					'id_obat_praktik'	=>	$id_obat,
					'nama_paten'		=>	$nama_paten,
					'nama_generic'		=>	$nama_generic,
					'nama_pabrik'		=>	$nama_pabrik,
					'jenis'				=>	$jenis,
					'kategori'			=>	$kategori,
					'jumlah_biji'		=>	$jumlahbiji,
					'harga_beli'		=>	$harga_beli,
					'harga_per_biji'	=>	$harga_biji,
					'harga_per_lembar'	=>	$harga_lembar
				);
			$this->Obatmodel->tambahdata($data);
			redirect("owner/dataobatpraktik");
		}

		function edit()
		{
			$id_obat 		= $this->input->post("id_obat_isi");
			$nama_paten 	= $this->input->post("nama_paten_isi");
			$nama_generic 	= $this->input->post("nama_generic_isi");
			$nama_pabrik 	= $this->input->post("nama_pabrik_isi");
			$jenis 			= $this->input->post("jenis_isi");
			$kategori 		= $this->input->post("kategori_isi");
			$jumlahbiji 	= $this->input->post("jumlahbiji_update");
			$harga_beli 	= $this->input->post("harga_beli_isi");
			$harga_biji 	= $this->input->post("harga_biji_isi");
			$harga_lembar 	= $this->input->post("harga_lembar_isi");

			$data 	= array(
					'id_obat_praktik'	=>	$id_obat,
					'nama_paten'		=>	$nama_paten,
					'nama_generic'		=>	$nama_generic,
					'nama_pabrik'		=>	$nama_pabrik,
					'jenis'				=>	$jenis,
					'kategori'			=>	$kategori,
					'jumlah_biji'		=>	$jumlahbiji,
					'harga_beli'		=>	$harga_beli,
					'harga_per_biji'	=>	$harga_biji,
					'harga_per_lembar'	=>	$harga_lembar
				);
			$this->Obatmodel->editdata($data,$id_obat);
			redirect("owner/dataobatpraktik");
		}

		function hapus($id_obat)
		{
			$this->Obatmodel->hapusdata($id_obat);
			redirect("owner/dataobatpraktik");
		}

	}
?>
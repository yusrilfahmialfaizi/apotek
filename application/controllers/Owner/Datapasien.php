<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Datapasien extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Pasienmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['kode']	= $this->Pasienmodel->no_rm();
			$data['pasien'] = $this->Pasienmodel->ambil_data();
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/data_pasien",$data);
			$this->load->view("partials/main/footer");
		}

		function tambah()
		{
			$no_rm 			= $this->input->post("no_rm_isi");
			$nama 			= $this->input->post("nama_isi");
			$jenis_kelamin 	= $this->input->post("jenis_kelamin_isi");
			$tgl_lahir		= $this->input->post("birthday");
			$tgl 			= date("Y-m-d", strtotime($tgl_lahir));
			$usia 			= $this->input->post("usia_isi");
			$alamat			= $this->input->post("alamat_isi");

			$data 	= array(
					'no_rm'			=> $no_rm,
					'nama'			=> $nama,
					'jenis_kelamin'	=> $jenis_kelamin,
					'tgl_lahir'		=> $tgl,
					'usia'			=> $usia,
					'alamat'		=> $alamat
				);

			$this->Pasienmodel->tambahdata($data);
			redirect("owner/datapasien");
		}

		function hapus($hapus)
		{
			$no_rm = $hapus;

			$this->Pasienmodel->hapusdata($no_rm);
			redirect("owner/datapasien");
		}

	}
?>
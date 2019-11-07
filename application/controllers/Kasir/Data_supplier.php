<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Data_supplier extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('kasir/Supplier_model');
		}

		function index()
		{
			$data['supplier'] = $this->Supplier_model->ambil_data();
			$data['kode'] = $this->Supplier_model->id_supplier(); 
			$this->load->view("partial_apotek/main/header/header_table");
			$this->load->view("content_apotek/kasir/data_supplier", $data);
			$this->load->view("partial_apotek/main/footer/footer_table");
		}

		function tambah()
		{
			$id_supplier = $this->input->post("id_supplier_isi");
			$nama = $this->input->post("nama_isi");
			$alamat = $this->input->post("alamat_isi");
			$no_telepon = $this->input->post("no_telepon_isi");
			$nama_pabrik = $this->input->post("nama_pabrik_isi");

			$data = array(
				'id_supplier' 		=> $id_supplier ,
				'nama'				=> $nama ,
				'alamat'			=> $alamat ,
				'no_telepon'		=> $no_telepon , 
				'nama_pabrik'		=> $nama_pabrik );

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			$this->Supplier_model->tambahdata($data);
			redirect("kasir/data_supplier");
		}

		function edit()
		{
			$id_supplier = $this->input->post("id_supplier_edit");
			$nama = $this->input->post("nama_edit");
			$alamat = $this->input->post("alamat_edit");
			$no_telepon = $this->input->post("no_telepon_edit");
			$nama_pabrik = $this->input->post("nama_pabrik_edit");

			$data = array(
				'id_supplier' 		=> $id_supplier ,
				'nama'				=> $nama ,
				'alamat'			=> $alamat ,
				'no_telepon'		=> $no_telepon , 
				'nama_pabrik'		=> $nama_pabrik );

			$this->Supplier_model->editdata($data,$id_supplier);
			redirect("kasir/data_supplier");
		}

		function hapus($hapus)
		{
			$id_supplier = $hapus;

			$this->Supplier_model->hapusdata($id_supplier);
			redirect("kasir/data_supplier");
		}

	}
?>
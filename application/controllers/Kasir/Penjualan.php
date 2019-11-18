<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Penjualan extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("Kasir/Penjualanmodel");
		$this->load->model("Kasir/Dataobat_model");
	}

	function index()
	{
		if ($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir") {
			redirect("login");
		}
		$data["kode"]		= $this->Penjualanmodel->no_invoice();
		$data["id_obat"]	= $this->Dataobat_model->ambil_data();
		$this->load->view("partials/main/header/header_kasir");
		$this->load->view("content/kasir/penjualan", $data);
		$this->load->view("partials/main/footer");
	}

	function data_obat()
	{
		$id_obat 	= $this->input->post("id_obat");
		$data 		= $this->Dataobat_model->data($id_obat);
		echo json_encode($data);
	}

	function get_exp()
	{
		$id_obat = $this->input->post('id_obat', TRUE);
		$data = $this->Dataobat_model->get_exp($id_obat)->result();
		echo json_encode($data);
	}

	function data_stok()
	{
		$id_obat = $this->input->post('id_obat');
		$exp = $this->input->post('exp');
		$data = $this->Dataobat_model->get_stok($id_obat, $exp);
		echo json_encode($data);
	}
}

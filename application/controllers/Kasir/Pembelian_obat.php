<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Pembelian_obat extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('kasir/Pembelianobat_model');
	}

	function index()
	{
		if ($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir") {
			redirect("login");
		}
		$data['id'] = $this->Pembelianobat_model->get_obat();
		$this->load->view("partials/main/header/header_kasir");
		$this->load->view("content/kasir/pembelian_obat", $data);
		$this->load->view("partials/main/footer");
	}
	function data_obat()
	{
		$id_obat	= $this->input->post("id_obat");

		$data = $this->Pembelianobat_model->get_data($id_obat);
		echo json_encode($data);
	}
}

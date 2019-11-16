<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Opname_obat extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("kasir/Opnamemodel");
		$this->load->model("Owner/Obatmodel");
	}

	function index()
	{
		if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir"){
				redirect("login");
			}
		$data['opname'] = $this->Opnamemodel->get_opname();
		$data['obat'] 	= $this->Obatmodel->get_obat();
		$data['id'] 	= $this->Opnamemodel->id();
		$data['detail']	= $this->Obatmodel->get_det_obat();
		$this->load->view("partials/main/header/header_kasir");
		$this->load->view("content/kasir/opname_obat", $data);
		$this->load->view("partials/main/footer");
	}

	function data_obat()
	{
		$id_obat = $this->input->post("id_obat");

		$data = $this->Obatmodel->get_obat_where($id_obat);
		echo json_encode($data);
	}

	function exp_obat()
	{
		$id_obat = $this->input->post("id_obat");

		$data = $this->Obatmodel->exp_obat_where($id_obat);
		echo json_encode($data);
	}

	function stok_obat()
	{
		$id_obat = $this->input->post("id_obat");
		$exp = $this->input->post("exp");
		// $id_obat = "B00001";
		// $exp = "2019-11-15";

		$where = array('id_obat' => $id_obat, 'exp' => $exp);

		$data = $this->Obatmodel->stok_obat_where($where);
		echo json_encode($data);
	}

	function tambah()
	{
		$id_opname 	= $this->input->post("id_opname");
		$id_user 	= $this->session->userdata("id_user");
		$id_obat 	= $this->input->post("id_obat");
		$expired	= $this->input->post("expired");
		$stok_asli 	= $this->input->post("stok_asli");
		$stok_nyata = $this->input->post("stok_nyata");
		$selisih 	= $this->input->post("selisih");
		$ket 		= $this->input->post("ket");

		$data 		= array(
			'id_opname' 	=> $id_opname,
			'id_user' 		=> $id_user,
			'id_obat'		=> $id_obat,
			'exp'			=> $expired,
			'stok'			=> $stok_asli,
			'stok_nyata' 	=> $stok_nyata,
			'selisih'		=> $selisih,
			'ket'			=> $ket
		);
		$data_update = array('jumlah_stok' => $stok_nyata);
		$where = array('id_obat' => $id_obat, 'exp'	=> $expired);

		$this->Opnamemodel->tambahdata($data);
		$this->Opnamemodel->updatedata($data_update, $where);

		redirect("kasir/opname_obat");
	}
}

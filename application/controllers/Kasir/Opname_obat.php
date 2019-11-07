<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
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
			$data['opname'] = $this->Opnamemodel->get_opname();
			$data['obat'] 	= $this->Obatmodel->get_obat();
			$data['id'] 	= $this->Opnamemodel->id();
			$data['detail']	= $this->Obatmodel->get_det_obat();
			$this->load->view("partials/main/header/header_kasir");
			$this->load->view("content/kasir/opname_obat",$data);
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

	}
?>
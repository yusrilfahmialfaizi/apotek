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
		$this->load->model('kasir/Grafik_model');
	}
	function index()
	{
		$x['data']=$this->Grafik_model->get_data_penjualan();
		$x['dataperbulan']=$this->Grafik_model->get_data_penjualan_perbulan();
       

		$this->load->view("partials/main/header/header_kasir");
	    $this->load->view("content/kasir/grafikperbulan",$x);
	    $this->load->view("partials/main/footer");
	}
}

?> 
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
		$this->load->model("apoteker/LaporanBulananModel");
		$this->load->model('apoteker/Grafik_model');
	}
	function index()
	{	
		$tahun = $this->input->post('tahun');
		if ($tahun == null) {
			# code...
			foreach($this->Grafik_model->data_penjualan_perbulan() as $row)
		    {
			    $data['grafik'][]=(float)$row['Januari'];
			    $data['grafik'][]=(float)$row['Februari'];
			    $data['grafik'][]=(float)$row['Maret'];
			    $data['grafik'][]=(float)$row['April'];
			    $data['grafik'][]=(float)$row['Mei'];
			    $data['grafik'][]=(float)$row['Juni'];
			    $data['grafik'][]=(float)$row['Juli'];
			    $data['grafik'][]=(float)$row['Agustus'];
			    $data['grafik'][]=(float)$row['September'];
			    $data['grafik'][]=(float)$row['Oktober'];
			    $data['grafik'][]=(float)$row['November'];
			    $data['grafik'][]=(float)$row['Desember'];
		    }
		}else{
			foreach($this->Grafik_model->get_data_penjualan_perbulan($tahun) as $row)
		    {
			    $data['grafik'][]=(float)$row['Januari'];
			    $data['grafik'][]=(float)$row['Februari'];
			    $data['grafik'][]=(float)$row['Maret'];
			    $data['grafik'][]=(float)$row['April'];
			    $data['grafik'][]=(float)$row['Mei'];
			    $data['grafik'][]=(float)$row['Juni'];
			    $data['grafik'][]=(float)$row['Juli'];
			    $data['grafik'][]=(float)$row['Agustus'];
			    $data['grafik'][]=(float)$row['September'];
			    $data['grafik'][]=(float)$row['Oktober'];
			    $data['grafik'][]=(float)$row['November'];
			    $data['grafik'][]=(float)$row['Desember'];
		    }
		}
		$data['year'] = $this->LaporanBulananModel->getYear();


		$data['data']			=$this->Grafik_model->get_data_penjualan();
		// $data['dataperbulan']	=$this->Grafik_model->get_data_penjualan_perbulan();
       

		$this->load->view("partials/main/header/header_apoteker");
	    $this->load->view("content/apoteker/grafikperbulan",$data);
	    $this->load->view("partials/main/footer");
	}

	function coba(){
		$x	=$this->Grafik_model->get_data_penjualan();
		foreach ($x as $data_penjualan) {
		    $total_penjualan_pertahun[] = $data_penjualan->total_penjualan;
		    $tanggal_pertahun[] = $data_penjualan->tanggal;
		}
		echo "<pre>";
		print_r($x);
		echo "</pre>";
	}
}

?> 
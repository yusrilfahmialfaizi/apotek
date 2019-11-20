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
		$this->load->model('kasir/Dataobat_model');
	}
	function index()
	{
		$this->load->view("partials/main/header/header_kasir");
	    $this->load->view("content/kasir/grafikperbulan");
	    $this->load->view("partials/main/footer");
	}
} 
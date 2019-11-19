<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Tes extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('kasir/Dataobat_model');
	}

	function index()
	{
		echo("tes");
	}


}

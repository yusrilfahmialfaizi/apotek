<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class LaporanHarianModel extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function ambil_data()
		{
			return $this->db->get("laporan_bulanan")->result();
		}
		function get_laporan()
		{
			return $this->db->get("laporan_bulanan")->result();
		}
	}
?>
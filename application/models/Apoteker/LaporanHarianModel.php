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
		function getTransaksiMonth($date)
		{
			$this->db->where('DATE(tanggal)', $date);
			return $this->db->get('laporan_bulanan')->result();
		}
		function getYear()
		{
			return $this->db->query("Select DISTINCT YEAR(tanggal) as year From laporan_bulanan")->result();
		}
		function getDay()
		{
			return $this->db->query("Select DISTINCT DAY(tanggal) as day From laporan_bulanan")->result();
		}
	}
?>
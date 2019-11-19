<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class LaporanBulananModel extends CI_Model
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
	function getTransaksiMonth($year, $month)
	{
		$this->db->where('YEAR(tanggal)', $year);
		$this->db->where('MONTH(tanggal)', $month);
		return $this->db->get('laporan_bulanan')->result();
	}
	function getYear()
	{
		return $this->db->query("Select DISTINCT YEAR(tanggal) as year From laporan_bulanan")->result();
	}
}

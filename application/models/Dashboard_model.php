<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 *
	 */
	class Dashboard_Model extends CI_Model{

		function __construct()
		{
			parent::__construct();
		}

		function jumlah_user()
		{
			return $this->db->query("SELECT COUNT(id_user) AS jumlah FROM user")->result();
		}
		function jumlah_pendapatan_harian()
		{
			return $this->db->query("SELECT SUM(total_harga) as total_harga FROM penjualan WHERE date(tanggal) = date(now())")->result();
		}
		function jumlah_pendapatan_bulanan()
		{
			return $this->db->query("SELECT SUM(total_harga) as total_harga FROM penjualan WHERE month(tanggal) = month(now())")->result();
		}
		function jumlah_pendapatan_tahunan()
		{
			return $this->db->query("SELECT SUM(total_harga) as total_harga FROM penjualan WHERE year(tanggal) = year(now())")->result();
		}
		function jumlah_transaksi_harian()
		{
			return $this->db->query("SELECT COUNT(id_penjualan) AS jumlah FROM penjualan where date(tanggal) = date(now())")->result();
		}
		function total_transaksi()
		{
			return $this->db->query("SELECT COUNT(id_penjualan) AS jumlah FROM penjualan")->result();
		}

	}

	?>
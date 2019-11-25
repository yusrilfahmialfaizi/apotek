<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Penjualanmodel extends CI_Model
{

	function __construct()
	{
		# code...
		parent::__construct();
	}

	function no_invoice()
	{
		$this->db->select('MAX(RIGHT(penjualan.id_penjualan,6)) AS id_penjualan', FALSE);
		$this->db->where("DATE(tanggal) = DATE(NOW())");
		$this->db->order_by('id_penjualan', 'Desc');
		$this->db->limit(1);
		$query = $this->db->get('penjualan');

		if ($query->num_rows() <> 0) {
			# code...
			$data = $query->row();
			$id = intVal($data->id_penjualan) + 1;
		} else {
			$id = 1;
		}
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("Ymd");
		$batas = str_pad($id, 6, "0", STR_PAD_LEFT);
		$no_invoice = $tgl . $batas;
		return $no_invoice;
	}

	function data_penjualan($data_penjualan)
	{
		$this->db->insert('penjualan', $data_penjualan);
	}

	function detail_penjualan($keranjang)
	{
		$this->db->insert('detail_penjualan', $keranjang);
	}

	function get_data($id_penjualan)
	{
		return $this->db->get_where('penjualan', array('id_penjualan' => $id_penjualan))->result();
	}
}

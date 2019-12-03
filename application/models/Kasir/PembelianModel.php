<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class PembelianModel extends CI_Model
{

	function __construct()
	{
		# code...
		parent::__construct();
	}

	function add($data)
	{
		$this->db->insert('pembelian_obat_praktik', $data);
	}

	function add_detail_pembelian($data_detail_pembelian)
	{
		$this->db->insert('detail_pembelian_obat_praktik', $data_detail_pembelian);
	}

	function add_detail($data_detail)
	{
		$this->db->insert('detail_obat_praktik', $data_detail);
	}

	function update_detail($data_detail, $where)
	{
		$this->db->where($where);
		$this->db->update('detail_obat_praktik', $data_detail);
	}

	function pembelian_data()
	{
		return $this->db->get("pembelian_obat_praktik")->result();
	}

	function count($id_obat_praktik, $exp)
	{
		return $this->db->query("SELECT COUNT('id_detail_op') AS jml FROM detail_obat_praktik WHERE id_obat_praktik = '$id_obat_praktik' AND exp = '$exp'")->result_array();
	}

	function pembelian_detail()
	{
		return $this->db->get("detail_pembelian_op")->result();
	}
}

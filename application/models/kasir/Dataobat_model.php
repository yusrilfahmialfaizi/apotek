<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Dataobat_model extends CI_Model
{

	function __construct()
	{
		# code...
		parent::__construct();
	}

	function id_obat()
	{
		$this->db->select('MAX(RIGHT(obat.id_obat,4)) AS id_obat', FALSE);
		$this->db->order_by('id_obat', 'Desc');
		$this->db->limit(1);
		$query = $this->db->get('obat');

		if ($query->num_rows() <> 0) {
			# code...
			$data = $query->row();
			$id = intVal($data->id_obat) + 1;
		} else {
			$id = 1;
		}
		$batas = str_pad($id, 4, "0", STR_PAD_LEFT);
		$id_barang_tampil = "BJ" . $batas;
		return $id_barang_tampil;
	}

	public function ambil_data()
	{
		return $this->db->get('obat')->result();
	}

	function tambahdata($data)
	{
		return $this->db->insert("obat", $data);
	}

	function editdata($data, $id_obat)
	{
		$this->db->where('id_obat', $id_obat);
		return $this->db->update('obat', $data);
	}

	function hapusdata($id_obat)
	{
		$this->db->where('id_obat', $id_obat);
		return $this->db->delete("obat");
	}

	function data($id_obat)
	{
		$this->db->select("obat.id_obat, obat.nama_paten, obat.nama_generic, obat.nama_pabrik, obat.harga_per_lembar,obat.jenis, detail_obat.exp, detail_obat.jumlah_stok ");
		$this->db->from("obat");
		$this->db->where('obat.id_obat', $id_obat);
		$this->db->join("detail_obat", "detail_obat.id_obat = obat.id_obat", "left");
		$query =  $this->db->get()->result();

		foreach ($query as $obat) {
			# code...
			$data = array(
				'id_obat' 			=> $obat->id_obat,
				'nama_paten' 		=> $obat->nama_paten,
				'nama_generic'		=> $obat->nama_generic,
				'nama_pabrik'		=> $obat->nama_pabrik,
				'harga_per_lembar'	=> $obat->harga_per_lembar,
				'jenis'				=> $obat->jenis,
				'exp'				=> $obat->exp,
				'jumlah_stok'		=> $obat->jumlah_stok
			);
		}
		return $data;
	}

	function get_exp($id_obat)
	{
		$this->db->order_by("exp", "ASC");
		$query = $this->db->get_where('detail_obat', array('id_obat' => $id_obat));
		return $query;
	}

	function get_stok($id_obat, $exp)
	{
		$query = $this->db->get_where('detail_obat', array('id_obat' => $id_obat, 'exp' => $exp))->result();

		foreach ($query as $key) {
			# code...
			$data = array(
				'jumlah_stok' => $key->jumlah_stok
			);
		}
		return $data;
	}
}

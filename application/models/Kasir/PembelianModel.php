<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
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

		function kode_beli()
		{
			$this->db->select('MAX(RIGHT(pembelian_obat_praktik.id_pembelian,3)) AS id_pembelian', FALSE);
			// $this->db->where("NOW()");
			$this->db->order_by('id_pembelian','Desc');
			$this->db->limit(1);
			$query = $this->db->get('pembelian_obat_praktik');
			
			if ($query->num_rows() <> 0) {
				# code...
				$data = $query->row();
				$id = intVal($data->id_pembelian) + 1;
			}else{
				$id = 1;
			}
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date("dmY");
			$batas = str_pad($id, 3,"0", STR_PAD_LEFT);
			$id_barang_tampil = "JL"."-".$tgl.$batas;
			return $id_barang_tampil;
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

		function update_detail($data_detail,$where)
		{
			$this->db->where($where);
			$this->db->update('detail_obat_praktik', $data_detail);
		}

		function pembelian_data()
		{
			return $this->db->get("pembelian_obat_praktik")->result();
		}

		function count($id_obat_praktik,$exp){
			return $this->db->query("SELECT COUNT('id_detail_op') AS jml FROM detail_obat_praktik WHERE id_obat_praktik = '$id_obat_praktik' AND exp = '$exp'")->result_array();
		}

		function pembelian_detail()
		{
			return $this->db->get("detail_pembelian_op")->result();	
		}

	}
?>
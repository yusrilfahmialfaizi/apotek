<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
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
			$this->db->order_by('id_obat','Desc');
			$this->db->limit(1);
			$query = $this->db->get('obat');
			
			if ($query->num_rows() <> 0) {
				# code...
				$data = $query->row();
				$id = intVal($data->id_obat) + 1;
			}else{
				$id = 1;
			}
			$batas = str_pad($id, 4,"0", STR_PAD_LEFT);
			$id_barang_tampil = "BJ".$batas;
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
			return $this->db->update('obat',$data);
		}

		function hapusdata($id_obat)
		{
			$this->db->where('id_obat', $id_obat);
			return $this->db->delete("obat");
		}
	}
?>
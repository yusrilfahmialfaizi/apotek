<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Obatmodel extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function ambil_obat()
		{
			return $this->db->get('obat_praktik')->result();
		}

		function data_obat($id_obat)
		{
			$this->db->where("id_obat_praktik", $id_obat);
			$query 	= $this->db->get("obat_praktik");
			foreach ($query->result() as $key) {
				# code...
				$data =  array(
					'nama_paten' 	=> $key->nama_paten,
					'nama_generic' 	=> $key->nama_generic,
					'nama_pabrik'	=> $key->nama_pabrik,
					'jenis'			=> $key->jenis,
					'kategori'		=> $key->kategori,
					'harga_beli'	=> $key->harga_beli
				);
			}
			return $data;
		}

		function harga_obat($per,$id_obat)
		{
			$this->db->where("id_obat_praktik", $id_obat);
			$query 	= $this->db->get("obat_praktik");
			foreach ($query->result() as $key) {
				# code...
				if ($per == "Biji") {
					# code...
					$data =  array(
						'harga' 	=> $key->harga_per_biji
					);
				}elseif ($per == "Lembar") {
					# code...
					$data =  array(
						'harga' 	=> $key->harga_per_lembar
					);
				}
			}
			return $data;
		}

		function kode_obat()
		{
			$this->db->select('MAX(RIGHT(obat_praktik.id_obat_praktik,5)) AS id_obat', FALSE);
			$this->db->order_by('id_obat','Desc');
			$this->db->limit(1);
			$query = $this->db->get('obat_praktik');
			
			if ($query->num_rows() <> 0) {
				# code...
				$data = $query->row();
				$id = intVal($data->id_obat) + 1;
			}else{
				$id = 1;
			}
			$batas = str_pad($id, 5,"0", STR_PAD_LEFT);
			$id_barang_tampil = "B".$batas;
			return $id_barang_tampil;
		}

		function tambahdata($data)
		{
			return $this->db->insert('obat_praktik', $data);
		}

		function editdata($data,$id_obat)
		{
			$this->db->where('id_obat_praktik', $id_obat);
			return $this->db->update('obat_praktik', $data);
		}

		function hapusdata($id_obat)
		{
			$this->db->where('id_obat_praktik', $id_obat);
			return $this->db->delete('obat_praktik');
		}

		function stok()
		{
			return $this->db->query("SELECT op.id_obat_praktik, op.nama_paten, op.nama_generic, op.nama_pabrik, op.jenis, op.kategori, do.exp, do.jumlah_stok FROM detail_obat_praktik AS do ,obat_praktik AS op WHERE do.id_obat_praktik = op.id_obat_praktik")->result();
		}

		function get_exp($id_obat_praktik)
		{
			$query = $this->db->get_where('detail_obat_praktik', array('id_obat_praktik' => $id_obat_praktik));
        	return $query;
		}

		function get_stok($id_obat_praktik, $exp)
		{
			$query = $this->db->get_where('detail_obat_praktik', array('id_obat_praktik' => $id_obat_praktik,'exp' => $exp))->result();

			foreach ($query as $key) {
				# code...
				$data = array('jumlah_stok' => $key->jumlah_stok );
			}
        	return $data;
		}

		function get_id()
		{
			return $this->db->get('detail_obat_praktik')->result();
		}

		function get_id_where($where)
		{
			$this->db->where($where);
			return $this->db->get('detail_obat_praktik')->result();
		}

		function get_biji($id)
		{
			$this->db->where('id_obat_praktik', $id);
			return $this->db->get('obat_praktik')->result();
		}

		function get_op_where($where)
		{
			$this->db->where($where);
			return $this->db->get('obat_praktik')->result();
		}

	}
?>
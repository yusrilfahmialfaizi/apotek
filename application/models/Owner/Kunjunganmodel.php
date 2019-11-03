<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Kunjunganmodel extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function ambil_data()
		{
			return $this->db->get("pasien")->result();
		}

		function ambil_no_rm($no_rm)
		{
			$this->db->where('no_rm', $no_rm);
			$query	= $this->db->get("pasien")->result();
			foreach ($query as $key ) {
				# code...
				$date = date("m/d/Y", strtotime($key->tgl_lahir));
				$data = array(
					'no_rm' 		=> $key->no_rm,
					'nama'			=> $key->nama,
					'jenis_kelamin'	=> $key->jenis_kelamin,
					'tgl_lahir'		=> $date,
					'usia'			=> $key->usia,
					'alamat'		=> $key->alamat
				);
			}
			return $data;
		}

		function nama_paten()
		{
			return $this->db->get('obat_praktik')->result();
		}

		function no_kunjungan()
		{
			$this->db->select('MAX(RIGHT(kunjungan.id_kunjungan,4)) AS id_kunjungan', FALSE);
			$this->db->where("DATE(tgl_kunjungan) = DATE(NOW())");
			$this->db->order_by('id_kunjungan','Desc');
			$this->db->limit(1);
			$query = $this->db->get('kunjungan');
			
			if ($query->num_rows() <> 0) {
				# code...
				$data = $query->row();
				$id = intVal($data->id_kunjungan) + 1;
			}else{
				$id = 1;
			}
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date("Ymd");
			$batas = str_pad($id, 4,"0", STR_PAD_LEFT);
			$id_barang_tampil = $tgl.$batas;
			return $id_barang_tampil;
		}

		function kunjungan($data)
		{
			return $this->db->insert('kunjungan', $data);
		}
		function kunjungan_detail($data_detail)
		{
			return $this->db->insert('detail_kunjungan', $data_detail);
		}

		function update_jumlah_stok($where, $data)
		{
			$this->db->where($where);
			$this->db->update('detail_obat_praktik', $data);
		}

		function get_kunjungan()
		{
			return $this->db->query("SELECT kunjungan.id_kunjungan, kunjungan.no_rm, pasien.nama, 
			kunjungan.tgl_kunjungan, kunjungan.diagnosa_keperawatan, kunjungan.intervensi, kunjungan.tarif 
			From Kunjungan, Pasien WHERE kunjungan.no_rm = pasien.no_rm")->result();
		}

		function detail_kunjungan($id_kunjungan)
		{
			$this->db->select("detail_kunjungan.id_kunjungan, detail_kunjungan.id_obat_praktik, obat_praktik.nama_paten, obat_praktik.nama_generic, obat_praktik.nama_pabrik, obat_praktik.jenis as jenis_obat, detail_kunjungan.jenis, detail_kunjungan.qty");
			$this->db->from("detail_kunjungan");
			$this->db->where("id_kunjungan", $id_kunjungan);
			$this->db->join("obat_praktik", "obat_praktik.id_obat_praktik = detail_kunjungan.id_obat_praktik", "left");
			$query = $this->db->get()->result();
			return $query;
		}

	}
?>
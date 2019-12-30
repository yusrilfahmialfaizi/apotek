<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Pasienmodel extends CI_Model
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

		function no_rm()
		{
			$this->db->select("MAX(RIGHT(pasien.no_rm,6)) AS no_rm", FALSE);
			$this->db->order_by("no_rm", "DESC");
			$this->db->limit(1);
			$query = $this->db->get("pasien");

			if ($query->num_rows() <> 0)
			{
				# code...
				$data 	= $query->row();
				$id 	= intVal($data->no_rm) + 1;
			}else{
				$id 	= 1;
			}

			$batas 	= str_pad($id, 6, "0", STR_PAD_LEFT);
			$kode 	= "RM".$batas;
			return $kode;
		}

		function tambahdata($data)
		{
			return $this->db->insert("pasien", $data);
		}

		function hapusdata($no_rm)
		{
			$this->db->where('no_rm', $no_rm);
			return $this->db->delete("pasien");
		}

	}	
?>
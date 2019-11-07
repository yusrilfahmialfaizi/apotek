<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Opnamemodel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function get_opname()
		{
			$this->db->select("opname_obat.*, obat.*, user.*");
			$this->db->from("opname_obat");
			$this->db->join("obat", "obat.id_obat = opname_obat.id_obat", "left");
			$this->db->join("user", "user.id_user = opname_obat.id_user", "left");
			$query = $this->db->get();
			return $query->result();
		}

		function id()
		{
			$this->db->select('MAX(RIGHT(opname_obat.id_opname,6)) AS id_opname', FALSE);
			$this->db->order_by('id_opname','Desc');
			$this->db->limit(1);
			$query = $this->db->get('opname_obat');
			
			if ($query->num_rows() <> 0) {
				# code...
				$data = $query->row();
				$id = intVal($data->id_opname) + 1;
			}else{
				$id = 1;
			}
			$batas = str_pad($id, 6,"0", STR_PAD_LEFT);
			$id_opname = "OB".$batas;
			return $id_opname;
		}

	}
	
?>
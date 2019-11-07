<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Supplier_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function id_supplier()
		{
			$this->db->select('MAX(RIGHT(supplier.id_supplier,2)) AS id_supplier', FALSE);
			$this->db->order_by('id_supplier','Desc');
			$this->db->limit(1);
			$query = $this->db->get('supplier');
			
			if ($query->num_rows() <> 0) {
				# code...
				$data = $query->row();
				$id = intVal($data->id_supplier) + 1;
			}else{
				$id = 1;
			}
			$batas = str_pad($id, 2,"0", STR_PAD_LEFT);
			$id_barang_tampil = "Sup".$batas;
			return $id_barang_tampil;
		}

		public function ambil_data()
		{
			return $this->db->get('supplier')->result();
		}

		function tambahdata($data)
		{
			return $this->db->insert("supplier", $data);
		}

		function editdata($data, $id_supplier)
		{
			$this->db->where('id_supplier', $id_supplier);
			return $this->db->update('supplier',$data);
		}

		function hapusdata($id_supplier)
		{
			$this->db->where('id_supplier', $id_supplier);
			return $this->db->delete("supplier");
		}
	}
?>
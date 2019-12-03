<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembelianobat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_obat()
    {
        return $this->db->get("obat")->result();
    }

    function get_data($id_obat)
    {
        $query = $this->db->get_where('obat', array('id_obat'   => $id_obat))->result();

        foreach ($query as $obat) {
            # code...
            $data = array(
                'id_obat'       => $obat->id_obat,
                'nama_paten'    => $obat->nama_paten,
                'nama_generic'  => $obat->nama_generic,
                'nama_pabrik'   => $obat->nama_pabrik,
                'jenis'         => $obat->jenis,
                'kategori'      => $obat->kategori
            );
        }
        return $data;
    }

    function add($data)
    {
        $this->db->insert("pembelian", $data);
    }

    function add_detail_pembelian($data_detail_pembelian)
    {
        $this->db->insert("detail_pembelian", $data_detail_pembelian);
    }

    function pembelian_data()
    {
        return $this->db->get("pembelian")->result();
    }

    function pembelian_detail()
    {
        $this->db->from("detail_pembelian");
        $this->db->join("obat", "obat.id_obat = detail_pembelian.id_obat", "LEFT");
        return $this->db->get()->result();
    }

    function get_supplier()
    {
        return $this->db->get("supplier")->result();
    }

    function data_supplier($id_supplier)
    {
        $query =  $this->db->get_where("supplier", array('id_supplier' => $id_supplier))->result();
        foreach ($query as $key) {
            # code...
            $data = array(
                'id_supplier'   => $key->id_supplier,
                'nama'          => $key->nama,
                'alamat'        => $key->alamat,
                'no_telepon'    => $key->no_telepon,
                'nama_pabrik'   => $key->nama_pabrik
            );
        }
        return $data;
    }

    function count($id_obat, $exp)
    {
        return $this->db->query("SELECT COUNT('id_detail_ob') AS jml FROM detail_obat WHERE id_obat = '$id_obat' AND exp = '$exp'")->result_array();
    }

    function get_id()
    {
        return $this->db->get('detail_obat')->result();
    }

    function get_id_where($where)
    {
        $this->db->where($where);
        return $this->db->get('detail_obat')->result();
    }

    function update_detail($data_detail, $where)
    {
        $this->db->where($where);
        $this->db->update('detail_obat', $data_detail);
    }

    function add_detail($data_detail)
    {
        $this->db->insert('detail_obat', $data_detail);
    }
}

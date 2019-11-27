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
}

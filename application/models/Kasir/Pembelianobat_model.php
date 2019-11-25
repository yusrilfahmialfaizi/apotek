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
}

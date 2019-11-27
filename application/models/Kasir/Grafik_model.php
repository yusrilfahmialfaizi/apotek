<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 *
	 */
class Grafik_model extends CI_Model{

    function get_data_penjualan(){
        $query = $this->db->query("SELECT YEAR (tanggal) As tanggal,SUM(id_penjualan) AS total_penjualan FROM penjualan GROUP BY YEAR (tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_penjualan_perbulan(){
        $query = $this->db->query("SELECT YEAR (tanggal),MONTH (tanggal) As tanggal,SUM(id_penjualan) AS total_penjualan FROM penjualan GROUP BY YEAR (tanggal), MONTH (tanggal)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}

?>
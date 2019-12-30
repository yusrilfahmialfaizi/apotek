<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Penjualan extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("Kasir/Penjualanmodel");
		$this->load->model("Kasir/Dataobat_model");
	}

	function index()
	{
		if ($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir") {
			redirect("login");
		}
		$id_tmp = $this->session->userdata("id_tmp");
		$data['total'] 		= $this->Penjualanmodel->sum($id_tmp);
		$data['data']		= $this->Penjualanmodel->get_tmp($id_tmp);
		$data["kode"]		= $this->Penjualanmodel->no_invoice();
		$data["id_obat"]	= $this->Dataobat_model->ambil_data();
		$this->load->view("partials/main/header/header_menukasir");
		$this->load->view("content/kasir/penjualan", $data);
		$this->load->view("partials/main/footer");
	}

	function data_obat()
	{
		$id_obat 	= $this->input->post("id_obat");
		$data 		= $this->Dataobat_model->data($id_obat);
		echo json_encode($data);
	}

	function get_exp()
	{
		$id_obat = $this->input->post('id_obat', TRUE);
		$data = $this->Dataobat_model->get_exp($id_obat)->result();
		echo json_encode($data);
	}

	function data_stok()
	{
		$id_obat = $this->input->post('id_obat');
		$exp = $this->input->post('exp');
		$data = $this->Dataobat_model->get_stok($id_obat, $exp);
		echo json_encode($data);
	}

	function keranjang_belanja()
	{
		$tgl 			= $this->input->post("exp");
		$exp 			= date("Y-m-d", strtotime($tgl));
		$harga 			= $this->input->post("harga_per_lembar");
		$qty 			= $this->input->post("qty");
		$sub_total		= $harga * $qty;
		$id_tmp 		= $this->session->userdata('id_tmp');
		$id_obat 		= $this->input->post('id_obat_isi');
		$where 			= array('id_tmp' => $id_tmp, 'id_obat' => $id_obat, 'exp' => $exp);

		$count = $this->Penjualanmodel->count_tmp($id_tmp, $id_obat, $exp);
		foreach ($count as $con) {
			# code...
			if ($con['jml'] > 0) {
				$get = $this->Penjualanmodel->get_tmp($id_tmp);
				foreach ($get as $d) {
					# code...
					$qty_tot = $d->qty + $qty;
					$where = array('id_tmp' => $id_tmp, 'id_obat' => $id_obat, 'exp' => $exp);
					$data_update		= array(
						'id_tmp' 		=> $id_tmp,
						'id_obat'		=> $id_obat,
						'exp'			=> $exp,
						'qty'			=> $qty_tot,
						'harga'			=> $harga,
						'sub_total'		=> $sub_total
					);
				}
				$this->Penjualanmodel->update_tmp($where, $data_update);
				redirect("kasir/penjualan");
			} else {
				$data 			= array(
					'id_tmp' 		=> $id_tmp,
					'id_obat'		=> $id_obat,
					'exp'			=> $exp,
					'qty'			=> $qty,
					'harga'			=> $harga,
					'sub_total'		=> $sub_total
				);
				$this->Penjualanmodel->detail_tmp($data);
				redirect("kasir/penjualan");
			}
		}
	}
	function hapus_cart()
	{
		$id_tmp		= $this->uri->segment(4);
		$id_obat	= $this->uri->segment(5);
		$year		= $this->uri->segment(6);
		$month		= $this->uri->segment(7);
		$date		= $this->uri->segment(8);
		$exp		= $year . "-" . $month . "-" . $date;

		$data 	= array(
			'id_tmp' 	=> $id_tmp,
			'id_obat'	=> $id_obat,
			'exp'		=> $exp
		);
		// print_r($data);
		$this->Penjualanmodel->delete($data);
		redirect("kasir/penjualan");
		// $this->cart->update($data);
	}

	function save()
	{
		date_default_timezone_set("Asia/Jakarta");
		$id_penjualan 	= $this->input->post("id_penjualan");
		$id_user		= $this->session->userdata("id_user");
		$tanggal 		= date("Y-m-d h:i:s");
		$total_harga	= $this->input->post("total");
		$bayar 			= $this->input->post("bayar");
		$kembali 		= $this->input->post("kembali");
		$id_tmp 		= $this->session->userdata("id_tmp");
		$tmp 			= $this->Penjualanmodel->get_tmp($id_tmp);

		$data_penjualan  = array(
			'id_penjualan'	=> $id_penjualan,
			'id_user'		=> $id_user,
			'tanggal'		=> $tanggal,
			'total_harga'	=> $total_harga,
			'bayar'			=> $bayar,
			'kembalian'		=> $kembali
		);
		$this->Penjualanmodel->data_penjualan($data_penjualan);


		if ($tmp) {
			# code...
			foreach ($tmp as $cart) {
				# code...
				$keranjang = array(
					'id_penjualan' 	=> $id_penjualan,
					'id_obat'		=> $cart->id_obat,
					'exp'			=> $cart->exp,
					'qty'			=> $cart->qty,
					'harga'			=> $cart->harga,
					'sub_total'		=> $cart->sub_total
				);
				$this->Penjualanmodel->detail_penjualan($keranjang);
			}
			$this->Penjualanmodel->hapus_detail_tmp($id_tmp);
			$msg = "success";
			$data = array('msg' => $msg, 'no_invoice' => $id_penjualan);
			echo json_encode($data);
		}
	}
}

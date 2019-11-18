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
		$data["kode"]		= $this->Penjualanmodel->no_invoice();
		$data["id_obat"]	= $this->Dataobat_model->ambil_data();
		$this->load->view("partials/main/header/header_kasir");
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
		$data 			= array(
			'id' 			=> $this->input->post('id_obat'),
			'name' 			=> $this->input->post("nama_paten"),
			'qty'			=> $this->input->post("qty"),
			'price'			=> $this->input->post("harga"),
			'nama_generic'	=> $this->input->post("nama_generic"),
			'nama_pabrik'	=> $this->input->post("nama_pabrik"),
			'jenis'			=> $this->input->post("jenis_obat"),
			'exp'			=> $exp
		);

		$this->cart->insert($data);
		echo  $this->show_cart();
	}

	function show_cart()
	{
		$output = '';
		foreach ($this->cart->contents() as $key) {
			$output	.= '<tr>
	                          <td>' . $key['id'] . '</td>
	                          <td>' . $key['name'] . '</td>
	                          <td>' . $key['nama_generic'] . '</td>
	                          <td>' . $key['nama_pabrik'] . '</td>
	                          <td>' . $key['jenis'] . '</td>
	                          <td>' . number_format($key['price']) . '</td>
	                          <td>' . $key['exp'] . '</td>
	                          <td>' . $key['qty'] . '</td>
	                          <td>' . number_format($key['subtotal']) . '</td>
	                          <td>
	                            <div class="form-group">
	                              <div class="form-group">
	                                   <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".edit_obat' . $key['rowid'] . '"></button>


	                                   <button type="button" class="btn btn-danger btn-sm glyphicon glyphicon-remove " id="remove_cart" data-id="' . $key['rowid'] . '"></button>
	                            </div>
	                          </td>
	                        </tr>';
		}
		$output .= '
				<tr>
					<th colspan="8"><h3>Total Harga</h3></th>
					<th colspan="2"><h3>' . 'Rp ' . number_format($this->cart->total()) . '</h3></th>
				</tr>
			';
		return $output;
	}

	function load_cart()
	{
		echo $this->show_cart();
	}

	function updatekeranjang()
	{
		$rowid 	= $this->input->post('rowid');
		$qty 	= $this->input->post('qty');
		$exp 	= $this->input->post('exp');
		$data 	= array(
			'rowid'	=> $rowid,
			'qty'	=> $qty,
			'exp'	=> $exp
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	function hapus_cart()
	{
		$rowid	= $this->input->post('row_id');

		$data 	= array(
			'rowid' 	=> $rowid,
			'qty'		=> 0
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
}

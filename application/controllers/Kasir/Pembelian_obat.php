<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Pembelian_obat extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('kasir/Pembelianobat_model');
	}

	function index()
	{
		if ($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Kasir") {
			redirect("login");
		}
		$data['id'] = $this->Pembelianobat_model->get_obat();
		$this->load->view("partials/main/header/header_kasir");
		$this->load->view("content/kasir/pembelian_obat", $data);
		$this->load->view("partials/main/footer");
	}
	function data_obat()
	{
		$id_obat	= $this->input->post("id_obat");

		$data = $this->Pembelianobat_model->get_data($id_obat);
		echo json_encode($data);
	}

	function cart()
	{
		$tgl 		= $this->input->post("exp");
		$exp 		= date("Y-m-d", strtotime($tgl));
		$data 		= array(
			'id' 			=> $this->input->post('obat'),
			'name' 			=> $this->input->post("nama_paten"),
			'qty'			=> $this->input->post("qty"),
			'price'			=> $this->input->post("harga"),
			'nama_generic'	=> $this->input->post("nama_generic"),
			'nama_pabrik'	=> $this->input->post("nama_pabrik"),
			'jenis'			=> $this->input->post("jenis_obat"),
			'kategori'		=> $this->input->post("kategori_obat"),
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
	                          <td>' . $key['kategori'] . '</td>
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
					<th colspan="9">Total Harga</th>
					<th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
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

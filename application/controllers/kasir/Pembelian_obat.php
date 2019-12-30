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
		$data['sp'] = $this->Pembelianobat_model->get_supplier();
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

	function add()
	{
		$id_pembelian 	= $this->input->post("id_pembelian");
		$id_user		= $this->session->userdata("id_user");
		$id_supplier 	= $this->input->post("id_supplier");
		$tgl 			= $this->input->post("tanggal");
		$tanggal 		= date("Y-m-d", strtotime($tgl));
		$total_harga	= $this->cart->total();

		$data 			= array(
			'id_pembelian' 		=> $id_pembelian,
			'id_user'			=> $id_user,
			'id_supplier'		=> $id_supplier,
			'tanggal' 			=> $tanggal,
			'total_harga' 		=> $total_harga
		);
		$this->Pembelianobat_model->add($data);
		if ($this->cart->contents()) {
			if ($this->Pembelianobat_model->get_id()) {
				foreach ($this->cart->contents() as $key) {

					$id_obat = $key['id'];
					$exp = $key['exp'];
					$count = $this->Pembelianobat_model->count($id_obat, $exp);
					// echo $count[0]['jml'];
					$data_detail_pembelian 	= array(
						'id_obat'	=> $key['id'],
						'id_pembelian'		=> $id_pembelian,
						'qty'				=> $key['qty'],
						'exp'				=> $key['exp'],
						'harga'				=> $key['price'],
						'subtotal'			=> $key['subtotal']
					);
					$this->Pembelianobat_model->add_detail_pembelian($data_detail_pembelian);
					foreach ($count as $con) {
						if ($con['jml'] > 0) {
							$where = array('id_obat' => $key['id'], 'exp'	=> $key['exp']);
							foreach ($this->Pembelianobat_model->get_id_where($where) as $w) {
								$jumlah_stok 	= $w->jumlah_stok + $key['qty'];

								$data_detail 	= array(
									'id_obat'			=> $key['id'],
									'exp'				=> $key['exp'],
									'jumlah_stok'		=> $jumlah_stok,
								);

								echo "<pre>";
								print_r($data_detail);
								echo $jumlah_stok . '' . 'a';
								echo "</pre>";

								$where = array('id_obat' => $key['id'], 'exp'	=> $key['exp']);
								$this->Pembelianobat_model->update_detail($data_detail, $where);
							}
						} else {
							$data_detail 	= array(
								'id_obat'	=> $key['id'],
								'exp'				=> $key['exp'],
								'jumlah_stok'		=> $key['qty']
							);
							$this->Pembelianobat_model->add_detail($data_detail);
						}
					}
				}
				$this->cart->destroy();
				redirect("kasir/pembelian_obat");
			} else {
				foreach ($this->cart->contents() as $key) {
					# code...
					$where = array('id_obat' => $key['id']);
					$data_detail_pembelian 	= array(
						'id_obat'	=> $key['id'],
						'id_pembelian'		=> $id_pembelian,
						'qty'				=> $key['qty'],
						'exp'				=> $key['exp'],
						'harga'				=> $key['price'],
						'subtotal'			=> $key['subtotal']
					);
					$this->Pembelianobat_model->add_detail_pembelian($data_detail_pembelian);
					$data_detail 	= array(
						'id_obat'		=> $key['id'],
						'exp'			=> $key['exp'],
						'jumlah_stok'	=> $key['qty'],
					);
					$this->Pembelianobat_model->add_detail($data_detail);
				}
				$this->cart->destroy();
				redirect("kasir/pembelian_obat");
			}
		}
	}

	function data_supplier()
	{
		$id_supplier = $this->input->post("id_supplier");

		$data = $this->Pembelianobat_model->data_supplier($id_supplier);
		echo json_encode($data);
	}
}

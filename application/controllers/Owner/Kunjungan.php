<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Kunjungan extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Kunjunganmodel");
			$this->load->model("owner/Obatmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['kode']	= $this->Kunjunganmodel->no_kunjungan();
			$data['pasien']	= $this->Kunjunganmodel->ambil_data();
			$data['obat'] 	= $this->Kunjunganmodel->nama_paten();
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/kunjungan_pasien", $data);
			$this->load->view("partials/main/footer");
		}

		function rm()
		{
			$no_rm 	= $this->input->post("no_rm");
			$data 	= $this->Kunjunganmodel->ambil_no_rm($no_rm);
			echo json_encode($data);
		}

		function data_obat()
		{
			$id_obat 	= $this->input->post("id_obat");
			$send 		= $this->Obatmodel->data_obat($id_obat);
			echo json_encode($send);
		}

		function harga_obat()
		{
			$id_obat 	= $this->input->post("id_obat");
			$per 		= $this->input->post("per");
			$send 		= $this->Obatmodel->harga_obat($per,$id_obat);
			echo json_encode($send);
		}

		function keranjang_obat()
		{
			$data = array(
				'id' 			=> $this->input->post('obat'),
				'name' 			=> $this->input->post("nama_paten"),
				'qty'			=> $this->input->post("qty"),
				'price'			=> $this->input->post("harga"),
				'nama_generic'	=> $this->input->post("nama_generic"),
				'nama_pabrik'	=> $this->input->post("nama_pabrik"),
				'jenis'			=> $this->input->post("jenis_obat"),
				'kategori'		=> $this->input->post("kategori_obat"),
				'per'			=> $this->input->post("per"),
				'exp'			=> $this->input->post("exp")
				);

			$this->cart->insert($data);
			// redirect("owner/kunjungan");
			echo  $this->show_cart();
		}

		function show_cart()
		{
			$output = '';

            foreach ($this->cart->contents() as $items){
			$output .=	'<tr>
                              <td>'.$items['id'].'</td>
                              <td>'.$items['name'].'</td>
                              <td>'.$items['nama_generic'].'</td>
                              <td>'.$items['nama_pabrik'].'</td>
                              <td>'.$items['jenis'].'</td>
                              <td>'.$items['kategori'].'</td>
                              <td>'.number_format($items['qty']).'</td>
                              <td>'.$items['per'].'</td>
                              <td>'.$items['exp'].'</td>
                              <td>'.number_format($items['price']).'</td>
                              <td>'.number_format($items['subtotal']).'</td>
                              <td>
								<div class="form-group">
									<button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".edit_obat'.$items['rowid'].'"></button>
	                                
	                                  
									<button type="button" class="btn btn-danger btn-sm glyphicon glyphicon-remove " id="remove_cart" data-id="'.$items['rowid'].'"></button>
								</div>
	                          </td>
                            </tr>
                        ';
            }
            return $output;
		}

		function load_cart()
		{
			echo $this->show_cart();
		}

		function hapus_cart()
		{
			$rowid	= $this->input->post('row_id');

			$data 	= array(
				'rowid' 	=> $rowid,
				'qty'		=> 0);
			$this->cart->update($data);
			echo $this->show_cart();
		}

		function edit_cart()
		{
			$qty 	= $this->input->post('qty');
			$rowid	= $this->input->post('rowid');

			$data 	= array(
				'rowid' 	=> $rowid,
				'qty'		=> $qty);
			$this->cart->update($data);
			echo $this->show_cart();
		}

		function proses()
		{
			date_default_timezone_set("Asia/Jakarta");

			$id_kunjungan 	= $this->input->post("id_kunjungan");
			$tanggal 		= date("Y-m-d h:i:s");
			$no_rm 			= $this->input->post("no_rm");
			$diagnosa 		= $this->input->post("diagnosa");
			$intervensi 	= $this->input->post("intervensi");
			$tarif 			= $this->input->post("tarif");
			$data 			= array(
				'id_kunjungan' 			=> $id_kunjungan,
				'tgl_kunjungan'			=> $tanggal,
				'no_rm'					=> $no_rm,
				'diagnosa_keperawatan'	=> $diagnosa,
				'intervensi'			=> $intervensi,
				'tarif'					=> $tarif
			);
			// print_r($data);
			$proses = $this->Kunjunganmodel->kunjungan($data);
			if ($this->cart->contents()){
				# code...
				// echo '<pre>';
				// print_r($this->cart->contents());
				// // echo 'Lembar ='.$qty;
				// echo '</pre>';
				foreach ($this->cart->contents() as $key) {
					# code...
					$data_detail 	= array(
						'id_kunjungan'		=> $id_kunjungan,
						'id_obat_praktik'	=> $key['id'],
						'jenis'				=> $key['per'],
						'qty'				=> $key['qty']
					);
					$query = $this->Obatmodel->get_stok_op($key['id'],$key['exp']);
					$biji_asli = $this->Obatmodel->get_biji($key['id']);
					// echo '<pre>';
					// // print_r($data_detail);
					// echo '</pre>';
					// echo '<pre>';
					// print_r($query);
					// echo '</pre>';
					foreach ($query as $stok) {
						foreach ($biji_asli as $biji) {
							# code...
							$where = array('id_obat_praktik' => $key['id'], 'exp'	=> $key['exp'] );
							if ($key['per'] == "Lembar") {
								# code...
								# code...
								// $qty = $stok->jumlah_stok - $key['qty'];
								$dalam_biji	= $key['qty'] * $biji->jumlah_biji;
								$qty		= $stok->jumlah_biji - $dalam_biji;
								$stok_akhir = $qty / $biji->jumlah_biji ;
								$data = array('jumlah_stok' => ceil($stok_akhir), 'jumlah_biji' => $qty );
								// echo '<pre>';

								// echo '<pre>';
								// // print_r($stok->jumlah_stok);
								// print_r($data);
								// echo 'Lembar ='.$qty;
								// echo 'Lembar ='.ceil($stok_akhir);
								// echo 'biji ='.$stok_biji;
								// echo '</pre>';
								// $this->Kunjunganmodel->kurang($key['qty'],$key['id']);
								$this->Kunjunganmodel->kunjungan_detail($data_detail);
								$this->Kunjunganmodel->update_jumlah_stok($where, $data);
							}else{
								$qty = $stok->jumlah_biji - $key['qty'];
								$stok_akhir = $qty / $biji->jumlah_biji;
								$data = array('jumlah_stok' => ceil($stok_akhir), 'jumlah_biji' => $qty );
								// echo '<pre>';
								// print_r($data);
								// echo 'stok akhir ='.ceil($stok_akhir);
								// echo '</pre>';
								$this->Kunjunganmodel->kunjungan_detail($data_detail);
								$this->Kunjunganmodel->update_jumlah_stok($where, $data);
							}
						}
					}
					// print_r($data_detail);
				}
			}
			$this->cart->destroy();

			redirect("owner/kunjungan");
		}

		function get_exp()
		{
			$id_obat_praktik = $this->input->post('id_obat_praktik',TRUE);
        	$data = $this->Obatmodel->get_exp($id_obat_praktik)->result();
        	echo json_encode($data);
		}

		function get_stok()
		{
			$id_obat_praktik	= $this->input->post('id_obat_praktik');
			$exp 				= $this->input->post('exp');
        	$data = $this->Obatmodel->get_stok($id_obat_praktik, $exp);
        	echo json_encode($data);
		}

	}
?>
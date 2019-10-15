<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Pembelianobat extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Obatmodel");
			$this->load->model("owner/Pembelianmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['id_obat_isi']	= $this->Obatmodel->ambil_obat();
			$data['obat']			= $this->Obatmodel->ambil_obat();
			$data['kode']			= $this->Pembelianmodel->kode_beli();

			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/pembelian_obat", $data);
			$this->load->view("partials/main/footer");
		}
		
		function tambah()
		{
			$id_obat 		= $this->input->post("id_obat");
			$nama_paten 	= $this->input->post("nama_paten_isi");
			$nama_generic 	= $this->input->post("nama_generic_isi");
			$nama_pabrik 	= $this->input->post("nama_pabrik_isi");
			$jenis 			= $this->input->post("jenis_isi");
			$kategori 		= $this->input->post("kategori_isi");
			$harga_beli 	= $this->input->post("harga_beli_isi");
			$harga_biji 	= $this->input->post("harga_biji_isi");
			$harga_lembar 	= $this->input->post("harga_lembar_isi");

			$data 	= array(
					'id_obat_praktik'	=>	$id_obat,
					'nama_paten'		=>	$nama_paten,
					'nama_generic'		=>	$nama_generic,
					'nama_pabrik'		=>	$nama_pabrik,
					'jenis'				=>	$jenis,
					'kategori'			=>	$kategori,
					'harga_beli'		=>	$harga_beli,
					'harga_per_biji'	=>	$harga_biji,
					'harga_per_lembar'	=>	$harga_lembar
				);
			$this->Obatmodel->tambahdata($data);
			redirect("owner/dataobatpraktik");
		}

		function data_obat()
		{
			$id_obat 	= $this->input->post("id_obat");
			$send 		= $this->Obatmodel->data_obat($id_obat);
			echo json_encode($send);
		}

		function keranjang_obat()
		{
			$tgl 			= $this->input->post("exp");
			$exp 		= date("Y-m-d", strtotime($tgl));
			$data = array(
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
			foreach ($this->cart->contents() as $key)
			{
	            $output	.='<tr>
	                          <td>'. $key['id'].'</td>
	                          <td>'. $key['name'].'</td>
	                          <td>'. $key['nama_generic'].'</td>
	                          <td>'. $key['nama_pabrik'].'</td>
	                          <td>'. $key['jenis'].'</td>
	                          <td>'. $key['kategori'].'</td>
	                          <td>'. number_format($key['price']).'</td>
	                          <td>'. $key['exp'].'</td>
	                          <td>'. $key['qty'].'</td>
	                          <td>'. number_format($key['subtotal']).'</td>
	                          <td>
	                            <div class="form-group">
	                              <div class="form-group">
	                                   <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".edit_obat'.$key['rowid'].'"></button>
	                                
	                                  
	                                   <button type="button" class="btn btn-danger btn-sm glyphicon glyphicon-remove " id="remove_cart" data-id="'.$key['rowid'].'"></button>
	                            </div>
	                          </td>
	                        </tr>';
            }
        	$output .= '
				<tr>
					<th colspan="9">Total Harga</th>
					<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
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
				'qty'		=> 0);
			$this->cart->update($data);
			echo $this->show_cart();
		}

		function add()
		{
			$id_pembelian 	= $this->input->post("id_pembelian");
			$id_user		= $this->session->userdata("id_user");
			$tgl 			= $this->input->post("tanggal");
			$tanggal 		= date("Y-m-d", strtotime($tgl));
			$total_harga	= $this->cart->total();

			$data 			= array(
				'id_pembelian' 		=> $id_pembelian,
				'id_user'			=> $id_user,
				'tanggal' 			=> $tanggal,
				'total_harga' 		=> $total_harga
			);
			$this->Pembelianmodel->add($data);
			if ($this->cart->contents())
			{
				if ($this->Obatmodel->get_id())
				{
					foreach ($this->cart->contents() as $key)
					{
					
						$id_obat_praktik = $key['id'];
						$exp = $key['exp'];
						$count = $this->Pembelianmodel->count($id_obat_praktik,$exp);
						// echo $count[0]['jml'];
						$data_detail_pembelian 	= array(
							'id_obat_praktik'	=> $key['id'],
							'id_pembelian'		=> $id_pembelian,
							'qty'				=> $key['qty'],
							'exp'				=> $key['exp'],
							'harga'				=> $key['price'],
							'subtotal'			=> $key['subtotal']
						);
						$this->Pembelianmodel->add_detail_pembelian($data_detail_pembelian);
						foreach ($count as $con)
						{
							if ($con['jml'] > 0)
							{
								$where = array('id_obat_praktik' => $key['id'], 'exp'	=> $key['exp']);
								$id = $key['id'];
									foreach ($this->Obatmodel->get_id_where($where) as $w)
									{
										foreach ($this->Obatmodel->get_biji($id) as $a)
										{
											$jumlah_stok 	= $w->jumlah_stok + $key['qty'];
											$jumlah 		= $key['qty'] * $a->jumlah_biji;
											$jumlahbiji 	= $jumlah + $w->jumlah_biji;
											
											$data_detail 	= array(
												'id_obat_praktik'	=> $key['id'],
												'exp'				=> $key['exp'],
												'jumlah_stok'		=> $jumlah_stok,
												'jumlah_biji'		=> $jumlahbiji
											);

											echo "<pre>";
											print_r($data_detail);
											echo $jumlah_stok.' '.$jumlah.' '.$jumlahbiji.''.'a';
											echo "</pre>";

											$where = array('id_obat_praktik' => $key['id'], 'exp'	=> $key['exp']);
											$this->Pembelianmodel->update_detail($data_detail,$where);
										}
									}
								}else{
									# code...
									$id = $key['id'];							
									foreach ($this->Obatmodel->get_biji($id) as $a)
									{
										$jumlahbiji 	= $key['qty'] * $a->jumlah_biji;
										$data_detail 	= array(
											'id_obat_praktik'	=> $key['id'],
											'exp'				=> $key['exp'],
											'jumlah_stok'		=> $key['qty'],
											'jumlah_biji'		=> $jumlahbiji
										);
										$this->Pembelianmodel->add_detail($data_detail);
									}
								}
							}
						}
					$this->cart->destroy();
					redirect("owner/pembelianobat");
					}else{
						foreach ($this->cart->contents() as $key) 
						{
							# code...
							$where = array('id_obat_praktik' => $key['id']);
							echo "string";
							foreach ($this->Obatmodel->get_op_where($where) as $w)
							{
								$jumlahbiji 	= $key['qty'] * $w->jumlah_biji;
								$data_detail_pembelian 	= array(
									'id_obat_praktik'	=> $key['id'],
									'id_pembelian'		=> $id_pembelian,
									'qty'				=> $key['qty'],
									'exp'				=> $key['exp'],
									'harga'				=> $key['price'],
									'subtotal'			=> $key['subtotal']
								);
								$this->Pembelianmodel->add_detail_pembelian($data_detail_pembelian);
								$data_detail 	= array(
									'id_obat_praktik'	=> $key['id'],
									'exp'				=> $key['exp'],
									'jumlah_stok'		=> $key['qty'],
									'jumlah_biji'		=> $jumlahbiji
								);
								$this->Pembelianmodel->add_detail($data_detail);
							}
						}
					$this->cart->destroy();
					redirect("owner/pembelianobat");
				}
			}
		}
		
	}
?>
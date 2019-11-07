<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Datakunjungan extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model("owner/Kunjunganmodel");
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['kunjungan'] 	= $this->Kunjunganmodel->get_kunjungan(); 
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/buku_kunjungan", $data);
			$this->load->view("partials/main/footer");
		}

		function print()
		{
			$data['data'] 	= $this->Kunjunganmodel->get_kunjungan();
			$this->load->view("partials/main/header/header_print");
			$this->load->view("content/owner/print_buku_kunjungan", $data);
			$this->load->view("partials/main/footer");
			// $no = 1;
			// echo "<table class='table table-hover'>
            //             <thead>
            //                 <tr>
            //                     <th>No.</th>
			// 					<th>ID Kunjungan</th>
			// 					<th>No. RM</th>
			// 					<th>Nama Pasien</th>
			// 					<th>Tanggal Kunjungan</th>
			// 					<th>Dignosa Keperawatan</th>
			// 					<th>Intervensi</th>
			// 					<th>Tarif</th>
            //                 </tr>
			// 			</thead>";
			// foreach ($this->Kunjunganmodel->get_kunjungan() as $key) {
			// 	# code...
			// 	echo "<tbody>
            //             <tr>
            //               <td>".$no++."</td>
            //               <td>".$key->id_kunjungan."</td>
            //               <td>".$key->no_rm."</td>
            //               <td>".$key->nama."</td>
            //               <td>".$key->tgl_kunjungan."</td>
            //               <td>".$key->diagnosa_keperawatan."</td>
            //               <td>".$key->intervensi."</td>
			// 			  <td>".$key->tarif."</td>
			// 			</tr>
			// 			</tbody>
			// 			";
			// }
			// window.print();				
		}

	}
?>
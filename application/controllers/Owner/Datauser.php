<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Datauser extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('owner/Usermodel');
		}

		function index()
		{
			if($this->session->userdata('status') != "Login" || $this->session->userdata("jabatan") != "Owner"){
				redirect("login");
			}
			$data['user'] = $this->Usermodel->ambil_data();
			$data['kode'] = $this->Usermodel->id_user(); 
			$this->load->view("partials/main/header/header_owner");
			$this->load->view("content/owner/data_user",$data);
			$this->load->view("partials/main/footer");
		}

		function tambah()
		{
			$id_user = $this->input->post("id_user_isi");
			$nama = $this->input->post("nama_isi");
			$jk = $this->input->post("jenis_kelamin_isi");
			$alamat = $this->input->post("alamat_isi");
			$jabatan = $this->input->post("jabatan_isi");
			$username = $this->input->post("username_isi");
			$pass = $this->input->post("password_isi");
			$password = password_hash($pass, PASSWORD_DEFAULT);

			$data = array(
				'id_user' 		=> $id_user ,
				'nama_user'		=> $nama ,
				'jenis_kelamin'	=> $jk ,
				'alamat'		=> $alamat ,
				'jabatan'		=> $jabatan , 
				'username'		=> $username ,
				'password'		=> $password);

			$this->Usermodel->tambahdata($data);
			redirect("owner/datauser");

			// echo $nama;
			// print_r($id_user." ".$nama." ".$jk." ".$alamat." ".$jabatan." ".$username." ".$password." ");
		}

		function edit()
		{
			$id_user = $this->input->post("id_user");
			$nama = $this->input->post("nama");
			$jk = $this->input->post("jenis_kelamin");
			$alamat = $this->input->post("alamat");
			$jabatan = $this->input->post("jabatan");
			$username = $this->input->post("username");
			$pass = $this->input->post("password");
			$password = password_hash($pass, PASSWORD_DEFAULT);

			$data = array(
				'id_user' 		=> $id_user ,
				'nama_user'		=> $nama ,
				'jenis_kelamin'	=> $jk ,
				'alamat'		=> $alamat ,
				'jabatan'		=> $jabatan , 
				'username'		=> $username ,
				'password'		=> $password);

			$this->Usermodel->editdata($data,$id_user);
			redirect("owner/datauser");

			// echo $nama;
			// print_r($id_user." ".$nama." ".$jk." ".$alamat." ".$jabatan." ".$username." ".$password." ");
		}

		function hapus($hapus)
		{
			$id_user = $hapus;

			$this->Usermodel->hapusdata($id_user);
			redirect("owner/datauser");
		}
	}
?>
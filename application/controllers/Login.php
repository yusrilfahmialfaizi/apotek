<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Login extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('Loginmodel');
	}
	function index()
	{
		$this->load->view("partials/login/header");
		$this->load->view("partials/login/body");
		$this->load->view("partials/login/footer");
	}

	function process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// print_r($username." ".$password);

		$cek_username = $this->Loginmodel->cek_username($username)->num_rows();
		if ($cek_username > 0) {
			# code...
			$cek_password = $this->Loginmodel->cek_password($username);
			foreach ($cek_password as $key) {
				# code...
				if ($key->username == $username && password_verify($password, $key->password) && $key->jabatan == "Owner") {
					# code...
					$data_session = array(
						'id_user'		=> $key->id_user,
						'nama'			=> $key->nama_user,
						'jenis_kelamin'	=> $key->jenis_kelamin,
						'alamat'		=> $key->alamat,
						'jabatan' 		=> $key->jabatan,
						'status'		=> "Login"
					);
					$this->session->set_userdata($data_session);
					redirect("owner/dashboard");
				} else if ($key->username == $username && password_verify($password, $key->password) && $key->jabatan == "Apoteker") {
					# code...

					$data_session = array(
						'id_user'		=> $key->id_user,
						'nama'			=> $key->nama_user,
						'jenis_kelamin'	=> $key->jenis_kelamin,
						'alamat'		=> $key->alamat,
						'jabatan' 		=> $key->jabatan,
						'status'		=> "Login"
					);
					$this->session->set_userdata($data_session);
					redirect("apoteker/dashboard");
					// echo "apoteker";
				} else if ($key->username == $username && password_verify($password, $key->password) && $key->jabatan == "Kasir") {
					# code...
					$id_tmp = $this->Loginmodel->tmp();
					$data_session = array(
						'id_user'		=> $key->id_user,
						'nama'			=> $key->nama_user,
						'jenis_kelamin'	=> $key->jenis_kelamin,
						'alamat'		=> $key->alamat,
						'jabatan' 		=> $key->jabatan,
						'id_tmp'		=> $id_tmp,
						'status'		=> "Login"
					);
					$data_tmp = array('id_tmp' => $id_tmp, "total_harga" => 0);
					$this->Loginmodel->tambah_tmp($data_tmp);
					$this->session->set_userdata($data_session);
					redirect("kasir/dashboard");
					// echo "kasir";
				} else {
					$this->session->set_flashdata("gagal", "Username / Password salah !!!");
					redirect("login");
				}
			}
		} else {
			$this->session->set_flashdata("gagal", "Username salah !!!");
			redirect("login");
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
}

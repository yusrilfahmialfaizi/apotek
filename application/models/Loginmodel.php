<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Loginmodel extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function cek_username($username)
		{
			$this->db->where('username', $username);
			return $this->db->get('user');
		}

		function cek_password($username)
		{
			$this->db->where('username', $username);
			return $this->db->get('user')->result();
		}

	}
?>
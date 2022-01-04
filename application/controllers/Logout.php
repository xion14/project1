<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
	        $tanggal = date('Y-m-d');
	        $waktu   = date('H:i:s');
		

		$this->session->sess_destroy();

		redirect(base_url('masukpak'));
	}

}
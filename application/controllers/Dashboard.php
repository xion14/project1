<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')==FALSE) {
	 		redirect('login');
	 	}
	}

	public function index()
	{
		$uid=$this->session->userdata('uid');
		
		
		$this->load->view('template/atas');
		$this->load->view('dashboard');
		$this->load->view('template/bawah');
	}
}

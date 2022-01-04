<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masukpak extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
			redirect(''.base_url().'Dashboard');
		}
		else
		{
			
			$this->load->view('vlogin');
		}
	}

	public function register()
	{
  		
		
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
	    	
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah pengguna'
				
			);
			
			$this->load->view('register', $data);


		}else{
			$tanggal=date('Y-m-d');
			$username=$this->input->post('username');
			$cekpengguna=$this->Ambil->countByParam('tb_login',array('username'=>$username));
			if($cekpengguna > 0){
				echo "<script>alert('Registrasi Gagal, Username Sudah Ada.');</script>";
			redirect('register/','refresh');
			}else{
				//memasukan ke array
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'level' => 'User'
			);
			//tambahkan akun ke database
			$this->Ambil->create('tb_login', $data);

			echo "<script>alert('Registrasi User Berhasil.');</script>";
			redirect('register/','refresh');
			}
			
			
		
		}
		
	}



	public function cek_login()
	{
		
		
		$string = $this->input->post('password',TRUE);
		$username = $this->input->post('username',TRUE);
		$password = md5($string);

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		if($this->form_validation->run() == FALSE)
		{
			
				echo "<script>alert('Gagal login: Cek username, dan password!');history.go(-1);</script>";
		}
		else
		{
			
	        $tanggal = date('Y-m-d');
	        $waktu   = date('H:i:s');
			
			$query = $this->Masuk->checkUser($username, $password);
			
	        
	        if($query){
	        	redirect('Dashboard');
	        }
			else
			{
				echo "<script>alert('Gagal login: Cek username, dan password!');history.go(-1);</script>";
			}

			
		
		}
		
	}

	

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

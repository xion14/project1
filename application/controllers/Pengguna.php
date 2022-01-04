<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')==FALSE) {
			redirect('login');
		}
		
	}

	
	public function index()
	{
		$this->db->order_by('level','ASC');
		$this->db->order_by('username','ASC');
		$data=array(
			'namatabel'=>'pengguna',
			'pengguna'=>$this->Ambil->read('tb_login')
			);
		$this->load->view('template/atas');
		$this->load->view('admin/pengguna/showpengguna', $data);
		$this->load->view('template/bawah');
		
	}
	
	public function tambahpengguna()
	{
  		
		
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
	    	
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah pengguna'
				
			);
			


	    	$this->load->view('template/atas');
			$this->load->view('admin/pengguna/tambahpengguna', $data);
			$this->load->view('template/bawah');


		}else{
			$tanggal=date('Y-m-d');
			$username=$this->input->post('username');
			$cekpengguna=$this->Ambil->countByParam('tb_login',array('username'=>$username));
			if($cekpengguna > 0){
				echo "<script>alert('Data Gagal Ditambahkan, Username Sudah Ada.');</script>";
			redirect('tambah-pengguna/','refresh');
			}else{
				//memasukan ke array
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'level' => $this->input->post('level')
			);
			//tambahkan akun ke database
			$this->Ambil->create('tb_login', $data);

			echo "<script>alert('Simpan Data Berhasil.');</script>";
			redirect('show-pengguna/','refresh');
			}
			
			
		
		}
		
	}

	public function editpengguna($id)
	{
  

		
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
	    	
	    	$where=array('username'=>$id);
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah pengguna',
				'edit' => $this->Ambil->getByParam('tb_login', $where)
				
			);

	    	$this->load->view('template/atas',$data);
			$this->load->view('admin/pengguna/editpengguna', $data);
			$this->load->view('template/bawah');

		}else{

		$where=array('username'=>$this->input->post('id'));
		
		
			if(!empty($this->input->post('password'))){
				//memasukan ke array
			$data = array(
				
				'password' => md5($this->input->post('password')),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'level' => $this->input->post('level')
			);
			//tambahkan akun ke database
			$this->Ambil->update('tb_login', $data, $where);

			echo "<script>alert('Edit Data Berhasil.');</script>";
			redirect('show-pengguna','refresh');

			}else{
				//memasukan ke array
			$data = array(
				
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'level' => $this->input->post('level')
			);
			//tambahkan akun ke database
			$this->Ambil->update('tb_login', $data, $where);

			echo "<script>alert('Edit Data Berhasil .');</script>";
			redirect('show-pengguna','refresh');

			}
			
			
		
		}
		
	}

	public function hapuspengguna($id)
	{
  		
		
		$where=array('username'=>$id);
			//tambahkan akun ke database
			$this->Ambil->delete('tb_login', $where);

			echo "<script>alert('Hapus Data Berhasil.');</script>";
			redirect('show-pengguna/','refresh');
		
		
		
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */
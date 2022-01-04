<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daerah extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')==FALSE) {
			redirect('login');
		}
		
	}
	
	public function index()
	{
		$this->db->order_by('level');
		$data=array(
			'namatabel'=>'daerah',
			'daerah'=>$this->Ambil->read('tb_daerah')
			);
		$this->load->view('template/atas');
		$this->load->view('admin/daerah/showdaerah', $data);
		$this->load->view('template/bawah');
		
	}
	
	public function tambahdaerah()
	{
		$this->form_validation->set_rules('nama_daerah', 'nama_daerah', 'trim|required');	
		if ($this->form_validation->run() === FALSE) {	    	
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah daerah'	
			);
	    	$this->load->view('template/atas');
			$this->load->view('admin/daerah/tambahdaerah', $data);
			$this->load->view('template/bawah');
		}else{
			//memasukan ke array
			$data = array(
				'id_daerah' => $this->input->post(''),
				'nama_daerah' => $this->input->post('nama_daerah'),
				'level' => $this->input->post('level')
			);
			//tambahkan akun ke database
			$this->Ambil->create('tb_daerah', $data);
			echo "<script>alert('Simpan Data Berhasil.');</script>";
			redirect('show-daerah/','refresh');			
		}
		
	}

	public function editdaerah($id)
	{
  

		
		$this->form_validation->set_rules('id_daerah', 'id_daerah', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
	    	
	    	$where=array('id_daerah'=>$id);
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah daerah',
				'daerah' => $this->Ambil->getByParam('tb_daerah', $where)
				
			);

	    	$this->load->view('template/atas',$data);
			$this->load->view('admin/daerah/editdaerah', $data);
			$this->load->view('template/bawah');

		}else{

		$where=array('id_daerah'=>$this->input->post('id_daerah'));
		
		
			
			//memasukan ke array
			$data = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'level' => $this->input->post('level'),
			);
			//tambahkan akun ke database
			$this->Ambil->update('tb_daerah', $data, $where);

			echo "<script>alert('Edit Data Berhasil.');</script>";
			redirect('show-daerah','refresh');
			
		
		}
		
	}

	public function hapusdaerah($id)
	{
  		
		
		$where=array('id_daerah'=>$id);
			//tambahkan akun ke database
			$this->Ambil->delete('tb_daerah', $where);

			echo "<script>alert('Hapus Data Berhasil.');</script>";
			redirect('show-daerah/','refresh');
		
		
		
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prosedur extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')==FALSE) {
			redirect('login');
		}
		
	}
	
	public function index()
	{
		$this->db->order_by('id_prosedur');
		$data=array(
			'namatabel'=>'prosedur',
			'prosedur'=>$this->Ambil->read('tb_prosedur')
			);
		$this->load->view('template/atas');
		$this->load->view('admin/prosedur/showprosedur', $data);
		$this->load->view('template/bawah');
		
	}
	
	public function tambahprosedur()
	{
		$this->form_validation->set_rules('prosedur', 'prosedur', 'trim|required');	
		if ($this->form_validation->run() === FALSE) {	    	
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah prosedur'	
			);
	    	$this->load->view('template/atas');
			$this->load->view('admin/prosedur/tambahprosedur', $data);
			$this->load->view('template/bawah');
		}else{
			//memasukan ke array
			$data = array(
				'id_prosedur' => $this->input->post(''),
				'judul' => $this->input->post('judul'),
				'prosedur' => $this->input->post('prosedur')
			);
			//tambahkan akun ke database
			$this->Ambil->create('tb_prosedur', $data);
			echo "<script>alert('Simpan Data Berhasil.');</script>";
			redirect('show-prosedur/','refresh');			
		}
		
	}

	public function editprosedur($id)
	{
  

		
		$this->form_validation->set_rules('id_prosedur', 'id_prosedur', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
	    	
	    	$where=array('id_prosedur'=>$id);
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah prosedur',
				'prosedur' => $this->Ambil->getByParam('tb_prosedur', $where)
				
			);

	    	$this->load->view('template/atas',$data);
			$this->load->view('admin/prosedur/editprosedur', $data);
			$this->load->view('template/bawah');

		}else{

		$where=array('id_prosedur'=>$this->input->post('id_prosedur'));
		
		
			
			//memasukan ke array
			$data = array(
				'judul' => $this->input->post('judul'),
				'prosedur' => $this->input->post('prosedur')
			);
			//tambahkan akun ke database
			$this->Ambil->update('tb_prosedur', $data, $where);

			echo "<script>alert('Edit Data Berhasil.');</script>";
			redirect('show-prosedur','refresh');
			
		
		}
		
	}

	public function hapusprosedur($id)
	{
  		
		
		$where=array('id_prosedur'=>$id);
			//tambahkan akun ke database
			$this->Ambil->delete('tb_prosedur', $where);

			echo "<script>alert('Hapus Data Berhasil.');</script>";
			redirect('show-prosedur/','refresh');
		
		
		
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */
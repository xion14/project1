<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')==FALSE) {
			redirect('login');
		}
		
	}
	
	public function index()
	{$username=$this->session->userdata('username');	    	
			
		$data=array(
			'namatabel'=>'lokasi',
			'lokasi'=>$this->Ambil->read('tb_lokasi'),
			'lokasi_saya'=>$this->Ambil->getByParam('tb_lokasi_saya',array('username'=>$username)),	
			);
		$this->load->view('template/atas');
		$this->load->view('admin/lokasi/showlokasi', $data);
		$this->load->view('template/bawah');
		
	}
	
	public function marker()
	{
		$data=array(
			'namatabel'=>'lokasi',
			'title'=>'LOKASI PISANG',
			'lokasi'=>$this->Ambil->read('tb_lokasi')
			);
		$this->load->view('template/atas');
		$this->load->view('admin/lokasi/show_marker', $data);
		$this->load->view('template/bawah');
		
	}
	
	public function jarak($id)
	{
		$username=$this->session->userdata('username');	    	
			
		$data=array(
			'namatabel'=>'lokasi',
			'title'=>'LOKASI PISANG',
			'lokasi'=>$this->Ambil->getByParam('tb_lokasi',array('id_lokasi'=>$id)),
			'lokasi_saya'=>$this->Ambil->getByParam('tb_lokasi_saya',array('username'=>$username)),
			);
		$this->load->view('template/atas');
		$this->load->view('admin/lokasi/show_jarak', $data);
		$this->load->view('template/bawah');
		
	}
	
	public function tambahlokasi()
	{
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');	
		if ($this->form_validation->run() === FALSE) {	    	
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah lokasi'	
			);
	    	$this->load->view('template/atas');
			$this->load->view('admin/lokasi/tambahlokasi', $data);
			$this->load->view('template/bawah');
		}else{


			//start
		$tanggal=date('Y-m-d');
		$tgl=date('Y-m-d');
		$tgl_date=date('Y-m-d H:i:s');
		$ip=$this->input->ip_address();
		
		$nama_asli = $_FILES['userfile']['name'];
		$nama = "lokasi-".date('YmdHis');
		$judul=$this->input->post('nama_lokasi');
	
		$config['file_name'] = $nama.'_'.'_'.text2slug($judul);
		$config['upload_path'] = './assets/image';
		
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '5120';
		
		
		// End Konfigurasi Upload Gambar
	
		// Memuat Library Upload File
		// $this->load->library('upload', $config);
		$this->upload->initialize($config);
	
		$this->form_validation->set_message('required', '%s is required.');
		$this->form_validation->set_message('min_length', '%s Minimal %s Karakter.');
		$this->form_validation->set_message('max_length', '%s Maksimal %s Karakter.');
		$this->form_validation->set_message('is_unique', '%s Telah Terdaftar');
		$this->form_validation->set_message('matches', '%s Tidak Cocok dengan %s.');
		$this->form_validation->set_message('numeric', '%s Harus diisi Angka.');
		
	
		if (($this->form_validation->run() === FALSE) || (! $this->upload->do_upload()))
		{
			

			//memasukan ke array
			$tanggal=date('Y-m-d h:i:s');
			$data = array(
				'id_lokasi' => $this->input->post(''),
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'id_daerah' => $this->input->post('daerah'),
				'alamat' => $this->input->post('alamat'),
				'lat' => $this->input->post('lat'),
				'long' => $this->input->post('lng'),
				'created_date'=>$tanggal,
				'created_by'=>$this->session->userdata('username')
			);
			//tambahkan akun ke database
			$this->Ambil->create('tb_lokasi', $data);
			echo "<script>alert('Simpan Data Berhasil.');</script>";
			redirect('show-lokasi/','refresh');	

			// $pesan=$this->upload->display_errors();
			// print_r($pesan);
		
		}
		else{
		
			$data = array('upload_data' => $this->upload->data());
			
			$get_name = $this->upload->data();
			$nama_foto = $get_name['file_name'];
		
			//memasukan ke array
			$tanggal=date('Y-m-d h:i:s');
			$data = array(
				'id_lokasi' => $this->input->post(''),
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'id_daerah' => $this->input->post('daerah'),
				'alamat' => $this->input->post('alamat'),
				'foto'=>$nama_foto,
				'lat' => $this->input->post('lat'),
				'long' => $this->input->post('lng'),
				'created_date'=>$tanggal,
				'created_by'=>$this->session->userdata('username')
			);
			//tambahkan akun ke database
			$this->Ambil->create('tb_lokasi', $data);
			echo "<script>alert('Simpan Data Berhasil.');</script>";
			redirect('show-lokasi/','refresh');	
			}
			//end

					
		}
		
	}

	public function editlokasi($id)
	{
  

		
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
	    	
	    	$where=array('id_lokasi'=>$id);
			$data = array(
				'error' => '',
				'halaman' => 'Halaman Admin | ',
				'breadcrumb' => 'Tambah lokasi',
				'lokasi' => $this->Ambil->getByParam('tb_lokasi', $where)
				
			);

	    	$this->load->view('template/atas',$data);
			$this->load->view('admin/lokasi/editlokasi', $data);
			$this->load->view('template/bawah');

		}else{

		$where=array('id_lokasi'=>$this->input->post('id_lokasi'));
		
			//start
			$tanggal=date('Y-m-d');
			$tgl=date('Y-m-d');
			$tgl_date=date('Y-m-d H:i:s');
			$ip=$this->input->ip_address();
			
			$nama_asli = $_FILES['userfile']['name'];
			$nama = "lokasi-".date('YmdHis');
			$judul=$this->input->post('nama_lokasi');
		
			$config['file_name'] = $nama.'_'.'_'.text2slug($judul);
			$config['upload_path'] = './assets/image';
			
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '5120';
			
			
			// End Konfigurasi Upload Gambar
		
			// Memuat Library Upload File
			// $this->load->library('upload', $config);
			$this->upload->initialize($config);
		
			$this->form_validation->set_message('required', '%s is required.');
			$this->form_validation->set_message('min_length', '%s Minimal %s Karakter.');
			$this->form_validation->set_message('max_length', '%s Maksimal %s Karakter.');
			$this->form_validation->set_message('is_unique', '%s Telah Terdaftar');
			$this->form_validation->set_message('matches', '%s Tidak Cocok dengan %s.');
			$this->form_validation->set_message('numeric', '%s Harus diisi Angka.');
			
		
			if (($this->form_validation->run() === FALSE) || (! $this->upload->do_upload()))
			{
				
	
				//memasukan ke array
				$data = array(
					'id_daerah' => $this->input->post('daerah'),
					'nama_lokasi' => $this->input->post('nama_lokasi'),
					'alamat' => $this->input->post('alamat'),
					'lat' => $this->input->post('lat'),
					'long' => $this->input->post('lng'),
				);
				//tambahkan akun ke database
				$this->Ambil->update('tb_lokasi', $data, $where);

				echo "<script>alert('Edit Data Berhasil.');</script>";
				redirect('show-lokasi','refresh');
	
				// $pesan=$this->upload->display_errors();
				// print_r($pesan);
			
			}
			else{
			
				$data = array('upload_data' => $this->upload->data());
				
				$get_name = $this->upload->data();
				$nama_foto = $get_name['file_name'];
			
				//memasukan ke array
				$tanggal=date('Y-m-d h:i:s');
				$data = array(
					'id_daerah' => $this->input->post('daerah'),
					'foto' => $nama_foto,
					'nama_lokasi' => $this->input->post('nama_lokasi'),
					'alamat' => $this->input->post('alamat'),
					'lat' => $this->input->post('lat'),
					'long' => $this->input->post('lng'),
				);
				//tambahkan akun ke database
				$this->Ambil->update('tb_lokasi', $data, $where);

				echo "<script>alert('Edit Data Berhasil.');</script>";
				redirect('show-lokasi','refresh');
				}
				//end		
			
		
		}
		
	}

	public function hapuslokasi($id)
	{
  		
		
		$where=array('id_lokasi'=>$id);
			//tambahkan akun ke database
			$this->Ambil->delete('tb_lokasi', $where);

			echo "<script>alert('Hapus Data Berhasil.');</script>";
			redirect('show-lokasi/','refresh');
		
		
		
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */
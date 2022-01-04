<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

	public function __construct() {
		parent::__construct();
	
		$this->db->order_by('id_posts','DESC');
		$this->db->select('id_posts,post_content,post_title,post_image,post_date,post_slug,post_category,category_name');
		$this->data['posts']=$this->Ambil->getPagingByParam('vpost',array('post_status'=>'1','kode_penghubung'=>'1'),'3','0');

		$this->db->order_by('id_posts','DESC');
		$this->db->select('id_posts,post_content,post_title,post_image,post_date,post_slug,post_category,category_name');
		$this->data['pengumuman']=$this->Ambil->getPagingByParam('vpost',array('post_status'=>'1','kode_penghubung'=>'2'),'3','0');

		$this->data['slides']=$this->Ambil->getPaging('vslide','3','0');

		
		$this->db->order_by('id_konsultasi','DESC');
		$this->data['konsultasi']=$this->Ambil->getPagingByParam('v_konsultasi',array('public'=>'1'),'5','0');
		$this->db->order_by('id_konsultasi','DESC');
		$this->data['konsultasinya']=$this->Ambil->getPagingByParam('v_konsultasi',array('public'=>'1'),'3','0');

		$this->db->order_by('id_kategori','ASC');
		$this->data['kategori']=$this->Ambil->getPaging('t_kategori','4','0');

			

		$this->db->order_by('id_kategori','ASC');
		$this->db->select('kategori');
		$this->data['kategori2']=$this->Ambil->getPaging('t_kategori','4','0');

		$this->db->order_by('id_laporan','DESC');
		$this->data['produk']=$this->Ambil->getPagingByParam('vlaporan',array('kode_penghubung'=>'3'), '5','0');

		$this->db->order_by('id_laporan','DESC');
		$this->data['laporan']=$this->Ambil->getPagingByParam('vlaporan',array('kode_penghubung'=>'4'), '5','0');
		$this->data['slide'] = FALSE;

		$this->data['full_page'] = FALSE;


		$this->output->set_common_meta(
			$this->data['site_name'],
			$this->data['site_desc'],
			'DPMN,Cendra Wadisman, Wadisman System ');
		$this->output->set_canonical(''.site_url().'');
		$this->output->set_meta('author','DPMN');

		$this->data['property'] = array(
			'og:url'         => ''.site_url().'',
			'og:type'        => 'article',
			'og:title'       => ''.$this->data['site_name'].'',
			'og:image'       => ''.base_url('assets/logo-white.png').'',
			'og:description'       => '',
			'og:site_name'       => ''.$this->data['site_name'].' - '.$this->data['site_desc'].'',
			'fb:app_id' => '',

			);

	}

}

/* End of file Siswa_Controller.php */
/* Location: ./application/libraries/Siswa_Controller.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambil extends CI_Model {

	public function read($table)
	{
		$query = $this->db->get($table);
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function readtoarray($table)
	{
		$query = $this->db->get($table);
		if ($query) {
			return $query->result_array();
		}else{
			return FALSE;
		}
	}

	public function create($table, $data)
	{
		$query = $this->db->insert($table, $data);
		if ($query) {
			return $query;
		}else{
			return FALSE;
		}
	}
	
	public function update($table, $data, $where)
	{
		$this->db->where($where);
		$query = $this->db->update($table, $data);
		if ($query) {
			return $query;
		}else{
			return FALSE;
		}
	}

	public function delete($table, $where)
	{
		$this->db->where($where);
		$query = $this->db->delete($table);
		if ($query) {
			return $query;
		}else{
			return FALSE;
		}
	}

	public function getAllExtra($table, $extra)
	{
		$extra;
		$query = $this->db->get($table);
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getAllByParam($table, $where)
	{
		$this->db->where($where);
		$query = $this->db->get($table);
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getAllByExtraParam($table, $where, $extra)
	{
		$this->db->where($where);
		$extra;
		$query = $this->db->get($table);
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getByParam($table, $where)
	{
		$this->db->where($where);
		$query = $this->db->get($table);
		if ($query) {
			return $query->first_row();
		}else{
			return FALSE;
		}
	}

	public function getByParamExtra($table, $where, $extra)
	{
		$extra;
		$this->db->where($where);
		$query = $this->db->get($table);
		if ($query) {
			return $query->first_row();
		}else{
			return FALSE;
		}
	}

	public function CountBy($table)
	{
		$this->db->from($table);
		$hitung = $this->db->count_all_results();
		if ($hitung) {
			return $hitung;
		}else{
			return FALSE;
		}
	}

	public function CountByParam($table, $where)
	{
		$this->db->where($where);
		$this->db->from($table);
		$hitung = $this->db->count_all_results();
		if ($hitung) {
			return $hitung;
		}else{
			return FALSE;
		}
	}

	public function CountByParams($table, $where, $like)
	{
		$like;
		$this->db->where($where);
		$this->db->from($table);
		$hitung = $this->db->count_all_results();
		if ($hitung) {
			return $hitung;
		}else{
			return FALSE;
		}
	}

	public function getPaging($table, $num, $offset)
	{	
		$query = $this->db->get($table, $num, $offset);	 
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getPagingExtra($table, $num, $offset, $extra)
	{	
		$extra;
		$query = $this->db->get($table, $num, $offset);	 
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getPagingByParam($table, $where, $num, $offset)
	{	
		$this->db->where($where);
		$query = $this->db->get($table, $num, $offset);	 
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getPagingByParamExtra($table, $where, $num, $offset, $extra)
	{	
		$extra;
		$this->db->where($where);
		$query = $this->db->get($table, $num, $offset);	 
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}
	public function getPagingByParamExtraLike($table, $where, $num, $offset, $extra, $like)
	{	
		$like;
		$extra;
		$this->db->where($where);
		$query = $this->db->get($table, $num, $offset);	 
		if ($query) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function kode_otomatis($table, $where)   {
		  $this->db->select('RIGHT('.$where.',4) as kode', FALSE);
		  $this->db->order_by($where,'DESC');  
		  $this->db->limit(1);    
		  $query = $this->db->get($table);      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}



}

/* End of file aktifrecord.php */
/* Location: ./application/views/aktifrecord.php */
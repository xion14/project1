<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Model {

	public function checkUser($username, $password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('tb_login');

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $rows) 
            {
                $data = array(
                    'uid'             => $rows->uid,
                    'username'             => $rows->username,
                    'nama_lengkap'             => $rows->nama_lengkap,
                    'nis'             => $rows->nomor_identitas,
                    'level'             => $rows->level,
                    'logged_in'         => TRUE
                    );  
            }
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }

    

}

/* End of file m_user.php */
/* Location: ./application/views/m_user.php */
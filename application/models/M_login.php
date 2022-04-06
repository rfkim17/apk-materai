<?php 
   class M_login extends CI_Model{
    public function cekuser()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        return $this->db->get_where('pegawai',array('username'=> $username, 'password'=> $password))->result();
    }
    }
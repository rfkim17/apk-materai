<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

    function datapegawai()
    {

        return $this->db->get('Pegawai')->result();
    }
     function simpan_data()
     {
         $username = $this->input->post('username');
         $nama = $this->input->post('nama');
         $no_hp = $this->input->post('no_hp');
         $password = $this->input->post('password');

         $data = array(
             
             'username'=>$username,
             'nama'=>$nama,
             'no_hp'=>$no_hp,
             'password'=>$password
         );

         $this->db->insert('pegawai',$data);
     }
     function hapus_pegawai($id)
     {
         $this->db->delete('pegawai',array('id'=>$id));
     }
     function edit_pegawai($id)
     {
       return $this->db->get_where('pegawai',array('id'=>$id))->result();
     }
   function simpan_edit()
   {
    $username = $this->input->post('username');
    $nama = $this->input->post('nama');
    $no_hp = $this->input->post('no_hp');
    $password = $this->input->post('password');
    $id = $this->input->post('id');

    $data = array(
        'username'=>$username,
        'nama'=>$nama,
        'no_hp'=>$no_hp,
        'password'=>$password,
    );
      $this->db->where('id',$id);
      $this->db->update('pegawai',$data);
   }
}
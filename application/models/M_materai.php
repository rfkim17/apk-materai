<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_materai extends CI_Model {

    function datamaterai()
    {

        return $this->db->get('materai')->result();
    }
     function simpan_data()
     {
         $nilai = $this->input->post('nilai');
         $harga = $this->input->post('harga');
         $stok = $this->input->post('stok');
         $foto = $this->input->post('foto');
        

         $data = array(
             'nilai'=>$nilai,
             'harga'=>$harga,
             'stok'=>$stok,
             'foto'=>$foto,
         );

         $this->db->insert('materai',$data);
     }
     function hapus_materai($id)
     {
         $this->db->delete('materai',array('id'=>$id));
     }
     function edit_materai($id)
     {
       return $this->db->get_where('materai',array('id'=>$id))->result();
     }
   function simpan_edit()
   {
    $nilai = $this->input->post('nilai');
    $harga = $this->input->post('harga');
    $stok  = $this->input->post('stok');
    $foto  = $this->input->post('foto');
    $id = $this->input->post('id');

    $data = array(
        'nilai'=>$nilai,
        'harga'=>$harga,
        'stok'=>$stok,
        'foto'=>$foto
    );
      $this->db->where('id',$id);
      $this->db->update('materai',$data);
   }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

    function datatransaksi()
    {

        return $this->db->get('transaksi')->result();
    }
     function simpan_data()
     {
         $tanggal = $this->input->post('tanggal');
         $id = $this->input->post('id');
         $nama = $this->input->post('nama');
         $pegawai = $this->input->post('pegawai');
         $jenis_materai = $this->input->post('jenis_materai');
         $banyaknya = $this->input->post('banyaknya');
         $jumlah = $this->input->post('jumlah');
         $foto = $this->input->post('foto');




         $data = array(
             'tanggal'=>$tanggal,
             'id'=>$id,
             'nama'=>$nama,
             'pegawai'=>$pegawai,
             'jenis_materai'=>$jenis_materai,
             'banyaknya'=>$banyaknya,
             'jumlah'=>$jumlah,
             'foto'=>$foto
         );

         $this->db->insert('transaksi',$data);
     }
     function hapus_transaksi($id)
     {
         $this->db->delete('transaksi',array('id'=>$id));
     }
     function edit_transaksi($id)
     {
       return $this->db->get_where('transaksi',array('id'=>$id))->result();
     }
   function simpan_edit()
   {
    $tanggal = $this->input->post('tanggal');
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $pegawai = $this->input->post('pegawai');
    $jenis_materai = $this->input->post('jenis_materai');
    $banyaknya = $this->input->post('banyaknya');
    $jumlah = $this->input->post('jumlah');
    $foto = $this->input->post('foto');

    $data = array(
        'tanggal'=>$tanggal,
        'id'=>$id,
        'nama'=>$nama,
        'pegawai'=>$pegawai,
        'jenis_materai'=>$jenis_materai,
        'banyaknya'=>$banyaknya,
        'jumlah'=>$jumlah,
        'foto'=>$foto
    );
      $this->db->where('id',$id);
      $this->db->update('transaksi',$data);
   }

function simpan_print()
{
 $tanggal = $this->input->post('tanggal');
 $id = $this->input->post('id');
 $nama = $this->input->post('nama');
 $pegawai = $this->input->post('pegawai');
 $jenis_materai = $this->input->post('jenis_materai');
 $banyaknya = $this->input->post('banyaknya');
 $jumlah = $this->input->post('jumlah');
 $foto = $this->input->post('foto');

 $data = array(
     'tanggal'=>$tanggal,
     'id'=>$id,
     'nama'=>$nama,
     'pegawai'=>$pegawai,
     'jenis_materai'=>$jenis_materai,
     'banyaknya'=>$banyaknya,
     'jumlah'=>$jumlah,
     'foto'=>$foto
 );
   $this->db->where('id',$id);
   $this->db->update('transaksi',$data);
}

    function simpan_transaksi($id)
    {
      return  $this->db->get_where('transaksi',array('id'=>$id))->result();
    }
}
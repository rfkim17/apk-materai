<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cetak extends CI_Controller {
 public function __construct()
 {
 parent::__construct();
 $this->load->library('pdf');//load libray pdf yang sudah kita buat tadi
 }
 public function index()
 {
 $title_page = 'transaksi';
 $data = array(
 array('tanggal' => '2021-10-13','id' => '5','nama' => 'nuru','pegawai'=> 'dewi','jenis_materai'=>'3000','banyaknya'=>'50','foto'=>'foto')
 );
 //misalkan load data data dari database ,tinggal panggil model / load langsung di controller.
 
 //load html dari viev ^_^
 $HTML=$this->load->view('v_print',array('title_page'=>$title_page,'transaksi'=>$data),true);
 $this->pdf->pdf_create($HTML,$title_page,'A4','potrait');//render atau membuat pdf dari html diatas
 //$this->pdf->pdf_create($HTML,$title_page,'A4','potrait',FALSE);//jika langsung didownload pdf-nya
 }
}
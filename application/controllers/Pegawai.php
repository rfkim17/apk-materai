<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('M_pegawai');
    }

	public function index()
	{
        $data['pegawai'] = $this->M_pegawai->datapegawai();
		$this->load->view('template/header');
		$this->load->view('pegawai/data_pegawai',$data);
		$this->load->view('template/footer');
	}
    
    function tambah_data()
    {
        $this->load->view('template/header');
		$this->load->view('pegawai/tambah_pegawai');
		$this->load->view('template/footer');
        
    }
    function simpan_pegawai()   
    {
        $this->M_pegawai->simpan_data();
       
           $this->session->set_flashdata('data', '<div class="alert alert-info" role="alert">
           data berhasil ditambahkan!
         </div>');
        
        redirect('Pegawai');
    }
    function hapus_pegawai($id)
    {
        $this->M_pegawai->hapus_pegawai($id);
       
        $this->session->set_flashdata('isi', '<div class="alert alert-danger" role="alert">
        data berhasil dihapus!!!
      </div>');
        redirect("Pegawai");
    }
    function edit_pegawai($id)
    {
        $this->load->view('template/header');
        $data['editpegawai'] = $this->M_pegawai->edit_pegawai($id);
		$this->load->view('pegawai/edit_pegawai',$data);
		$this->load->view('template/footer');
    }
    function simpan_edit_pegawai()
    {
       $this->M_pegawai->simpan_edit();
       
       $this->M_pegawai->simpan_edit();
       $this->session->set_flashdata('file', '<div class="alert alert-info" role="alert">
       data berhasil diubah!
     </div>');
       redirect('Pegawai');
    }
}
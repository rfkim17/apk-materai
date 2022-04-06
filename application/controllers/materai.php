<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materai extends CI_Controller {
    public function __construct(){
        parent:: __construct();

        $this->load->model('M_materai');
    }

	public function index()
	{
        $data['materai'] = $this->M_materai->datamaterai();
		$this->load->view('template/header');
		$this->load->view('materai/data_materai',$data);
		$this->load->view('template/footer');
	}
    
    function tambah_data()
    {
        $this->load->view('template/header');
		$this->load->view('materai/tambah_materai');
		$this->load->view('template/footer');
    }
    function simpan_materai()   
    {
        $this->M_materai->simpan_data();
        redirect('Materai');
    }
    function upload_foto()
    {
        $config['upload_path']          = './foto/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            echo "Gagal Tambah";
        }
        else
        {
           $foto = $this->upload->data();
           $file_name = $foto['file_name'];
           $id = $this->input->post('id', TRUE);
           $nilai = $this->input->post('nilai', TRUE);
           $harga = $this->input->post('harga', TRUE);
           $stok = $this->input->post('stok', TRUE);
           $foto = $this->input->post('foto', TRUE);

           $data = array(
               'nilai' => $nilai,
               'harga' => $harga,
               'stok' => $stok,
               'foto' => $file_name,
           );
           
           $this->db->insert('materai', $data);
           $this->session->set_flashdata('data', '<div class="alert alert-info" role="alert">
           data berhasil ditambahkan!
         </div>');

             redirect('materai');
        }
    }
    function hapus_materai($id)
    {
        $this->M_materai->hapus_materai($id);
        $this->session->set_flashdata('isi', '<div class="alert alert-danger" role="alert">
        data berhasil dihapus!!!
      </div>');
        redirect("Materai");
         
    }
    function edit_materai($id)
    {
        $this->load->view('template/header');
        $data['editmaterai'] = $this->M_materai->edit_materai($id);
		$this->load->view('Materai/edit_materai',$data);
		$this->load->view('template/footer');
    }
    function simpan_edit_materai()
    {
       $this->M_materai->simpan_edit();
    //    $this->db->insert('materai', $data);
           $this->session->set_flashdata('file','<div class="alert alert-info" role="alert">
           data berhasil diubah!
         </div>');
       redirect('materai');
    }
}
    

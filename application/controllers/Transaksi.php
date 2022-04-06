<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('M_transaksi');
    }

	public function index()
	{
        $data['transaksi'] = $this->M_transaksi->datatransaksi();
		$this->load->view('template/header');
		$this->load->view('transaksi/data_transaksi',$data);
		$this->load->view('template/footer');
	}
    function tambah_data()
    {
        $this->load->view('template/header');
		$this->load->view('transaksi/tambah_transaksi');
		$this->load->view('template/footer');
    }
    function simpan_transaksi()   
    {
        $this->M_transaksi->simpan_data();
        redirect('Transaksi');
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
                   $tanggal = $this->input->post('tanggal', TRUE);
                   $nama = $this->input->post('nama', TRUE);
                   $pegawai = $this->input->post('pegawai', TRUE);
                   $jenis_materai = $this->input->post('jenis_materai', TRUE);
                   $banyaknya = $this->input->post('banyaknya', TRUE);
                   $jumlah = $this->input->post('jumlah', TRUE);
                   $foto = $this->input->post('foto', TRUE);

                   $data = array(
                       'tanggal' => $tanggal,
                       'id' => $id,
                       'nama' => $nama,
                       'pegawai' => $pegawai,
                       'jenis_materai' => $jenis_materai,
                       'banyaknya' => $banyaknya,
                       'jumlah' => $jumlah,
                       'foto' => $file_name,
                   );

           $this->db->insert('transaksi', $data);
           $this->session->set_flashdata('data', '<div class="alert alert-info" role="alert">
           data berhasil ditambahkan!
         </div>');
        redirect('transaksi');
                }
    }

    function hapus_transaksi($id)
    {
        $this->M_transaksi->hapus_transaksi($id);

    
        $this->M_transaksi->hapus_transaksi($id);
        $this->session->set_flashdata('isi', '<div class="alert alert-danger" role="alert">
        data berhasil dihapus!!!
      </div>');
        
         
        redirect("transaksi");
    }
    function edit_transaksi($id)
    {
        $this->load->view('template/header');
        $data['edittransaksi'] = $this->M_transaksi->edit_transaksi($id);
		$this->load->view('Transaksi/edit_transaksi',$data);
		$this->load->view('template/footer');
    }
    function simpan_edit_transaksi()
    {
       $this->M_transaksi->simpan_edit();
       $this->M_transaksi->hapus_transaksi($id);
       $this->session->set_flashdata('file', '<div class="alert alert-info" role="alert">
       data berhasil diubah!
     </div>');
      
        
       redirect('transaksi');
    }

   function print_transaksi($id)
{
    $data['transaksi'] = $this->M_transaksi->simpan_transaksi($id);
    $this->load->view('transaksi/v_print',$data);
        
}
}
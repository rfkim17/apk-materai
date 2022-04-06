<?php 
    class Login extends CI_Controller {
        public function __construct(){
            parent ::__construct();
            $this->load->model('M_login');

            
        }
        
        public function index()
        {
            $this->load->view('halaman_login');
        }
        // public function dashboard()
        // {
        //     $this->load->view('template/header');
        //     $this->load->view('dashboard');
        //     $this->load->view('template/footer');
        // }

        function proses_login()
        {
            $hasilcek = $this->M_login->cekuser();

         if($hasilcek){
              $sess_data['id'] = $hasilcek[0]->id;
              $sess_data['level'] = $hasilcek[0]->level;
              $sess_data['username']= $hasilcek[0]->username;
             

              $this->session->set_userdata($sess_data);

              if($sess_data['level'] == 'admin'){
                  redirect(base_url('Admin'));
              }else{
                  redirect(base_url('user'));
                }
         }else{
             redirect('/');
         }
        }

        function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url('Login'));
    
        }
    }

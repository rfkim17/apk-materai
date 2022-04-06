<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct()
        {
                parent ::__construct();
                if($_SESSION['level'] == '' or $_SESSION['level'] !='admin')
                {
                        redirect('/');
                }
        }

	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
	}
	
}

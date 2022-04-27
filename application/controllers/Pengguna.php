<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pengguna extends CI_Controller {
        
        function __construct() {

            parent::__construct();

            // load model 
            $this->load->model('M_pengguna');
        }

        public function index()
        {

            $data['petugas'] = $this->M_pengguna->tampil_petugas();

            $this->load->view('template/template_header');
            $this->load->view('pengguna/index', $data);
            $this->load->view('template/template_footer');
        }


        public function tambah() {

            $this->load->view('template/template_header');
            $this->load->view('pengguna/tambah');
            $this->load->view('template/template_footer');
        }



        // proses tambah
        function proses_tambah() {

            $ambilNama      = $this->input->post('nama');
            $ambilUsername  = $this->input->post('nip');
            $ambilPassword  = $this->input->post('password');
            $ambilStatus    = $this->input->post('status');
        }
    
    }
    
    /* End of file Pengguna.php */
    
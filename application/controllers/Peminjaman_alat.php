<?php

class Peminjaman_alat extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
    }
    //views utama 

    public function index()
    {
        $this->load->view('template/template_header');


        $this->load->view('peminjaman_alat/peminjaman');

        $this->load->view('template/template_footer');
    }
}

<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_alat extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
    }



    // view utama
    public function index()
    {
        $this->load->view('template/template_header');

        // view utama
        $this->load->view('kelola_alat/alat_tersedia');

        $this->load->view('template/template_footer');
    }

    function tambah_alat()
    {
        $this->load->view('template/template_header');
        $this->load->view('kelola_alat/tambah_alat');
        $this->load->view('template/template_footer');
    }
}

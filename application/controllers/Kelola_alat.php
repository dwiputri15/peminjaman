<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_alat extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

        $this->load->model('M_barang');
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

    function proses_ambil()
    {
        $ambilBarang    = $this->input->post('kd_barang');
        $ambilMatkul    = $this->input->post('kd_matkul');
        $ambilNama      = $this->input->post('nm_barang');
        $ambilJumlah    = $this->input->post('jmlh_barang');
        $ambilStatus    = $this->input->post('status');

        //proses deklarasi tb db
        $tb_barang = array(
            'kode_barang'      =>  $ambilBarang,
            'kode_matkul'      =>  $ambilMatkul,
            'nama barang'      =>  $ambilNama,
            'jumlah barang'    =>  $ambilJumlah,
            'status akun'      =>  $ambilStatus


        );

        // eksekusi model
        $this->M_barang->insert($tb_barang);

        redirect('kelola_alat/index');
    }
}

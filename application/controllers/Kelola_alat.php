<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_alat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // panggil model 
        $this->load->model('M_barang');
    }



    // view utama
    public function index()
    {
        $data['tb_barang'] = $this->M_barang->get_barang();

        $this->load->view('template/template_header');

        // view utama
        $this->load->view('kelola_alat/alat_tersedia', $data);

        $this->load->view('template/template_footer');
    }

    function tambah_alat()
    {
        $this->load->view('template/template_header');
        $this->load->view('kelola_alat/tambah_alat');
        $this->load->view('template/template_footer');
    }

    // proses ambil value dari inputan user 
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
            'nama_barang'      =>  $ambilNama,
            'jumlah_barang'    =>  $ambilJumlah,
            'status_akun'      =>  $ambilStatus


        );

        // eksekusi model
        $this->M_barang->insert($tb_barang);

        $isi_pesan = "Alat Praktikum " . $ambilNama . ' berhasil ditambahkan';
        // $isi_pesan = "Matakuliah berhasil ditambah";
        $this->session->set_flashdata('pesan', $isi_pesan);


        redirect('kelola_alat/index');
    }

    // proses hapus data
    function proses_hapus($kode_alat)
    {

        $this->M_barang->delete($kode_alat);

        $isi_pesan = 'Kode matakuliah ' . $kode_alat . ' berhasil dihapus';
        $this->session->set_flashdata('pesan', $isi_pesan);


        redirect('kelola_alat/index');
    }

    //view sunting
    public function edit_data($kode_alat)
    {

        $data['tb_barang'] = $this->M_barang->get_kode_barang($kode_alat);

        $this->load->view('template/template_header');
        $this->load->view('kelola_alat/tambah_alat_edit', $data);
        $this->load->view('template/template_footer');
    }

    //proses sunting
    function proses_edit()
    {

        $ambilBarang    = $this->input->post('kd_barang');
        $ambilMatkul    = $this->input->post('kd_matkul');
        $ambilNama      = $this->input->post('nm_barang');
        $ambilJumlah    = $this->input->post('jmlh_barang');
        $ambilStatus    = $this->input->post('status');

        //proses deklarasi tb db
        $tb_barang = array(

            'kode_matkul'      =>  $ambilMatkul,
            'nama_barang'      =>  $ambilNama,
            'jumlah_barang'    =>  $ambilJumlah,
            'status_akun'      =>  $ambilStatus


        );

        // eksekusi model
        $this->M_barang->edit($ambilBarang, $tb_barang);

        $isi_pesan = "Matakuliah " . $ambilNama . ' berhasil diperbarui';
        // $isi_pesan = "Matakuliah berhasil ditambah";
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('kelola_alat/index');
    }
}

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    function __construct()
    {

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


    public function tambah()
    {

        $this->load->view('template/template_header');
        $this->load->view('pengguna/tambah');
        $this->load->view('template/template_footer');
    }



    // proses tambah
    function proses_tambah()
    {
        //ambil inputan user
        $ambilNama      = $this->input->post('nama');
        $ambilNip       = $this->input->post('nip');
        $ambilUsername  = $this->input->post('username');
        $ambilPassword  = $this->input->post('password');
        $ambilStatus    = $this->input->post('status');

        //deklarasi tb db
        $tb_pengguna = array(

            // 'nama'          => $ambilNama,
            // 'NIP'           => $ambilNip,
            'username'      => $ambilUsername,
            'password'      => $ambilPassword,
            'status_akun'   => $ambilStatus

        );



        //masukke db 
        $this->M_pengguna->insert($tb_pengguna);
        // $this->M_pengguna->insert_petugas($tb_petugas);


        $isi_pesan = "Admin " . $ambilUsername . ' berhasil ditambahkan';
        // $isi_pesan = "Matakuliah berhasil ditambah";
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('pengguna/index');
    }

    //edit 
    function edit($nama_petugas)
    {
        $data['petugas'] = $this->M_pengguna->get_nama_petugas($nama_petugas);

        $this->load->view('template/template_header');
        $this->load->view('pengguna/edit', $data);
        $this->load->view('template/template_footer');
    }

    function proses_edit()
    {

        //ambil inputan user
        $ambilNama      = $this->input->post('nama');
        $ambilNip       = $this->input->post('nip');
        $ambilUsername  = $this->input->post('username');
        $ambilPassword  = $this->input->post('password');
        $ambilStatus    = $this->input->post('status');

        //deklarasi tb db
        $tb_pengguna = array(

            // 'nama'          => $ambilNama,
            // 'NIP'           => $ambilNip,

            'password'      => $ambilPassword,
            'status_akun'   => $ambilStatus

        );



        //masukke db 
        $this->M_pengguna->get_nama_petugas($ambilUsername, $tb_pengguna);
        // $this->M_pengguna->insert_petugas($tb_petugas);


        $isi_pesan = "Admin " . $ambilUsername . ' berhasil diubah';
        // $isi_pesan = "Matakuliah berhasil ditambah";
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('pengguna/index');
    }
}
    
    /* End of file Pengguna.php */

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
            'password'      => password_hash($ambilPassword, PASSWORD_ARGON2I),
            'status_akun'   => $ambilStatus

        );



        //masukke db 
        $id_user = $this->M_pengguna->insert($tb_pengguna);

        $tb_petugas = array(

            'id_user'   => $id_user,
            'NIP'       => $ambilNip,
            'nama'      => $ambilNama
        );

        $this->M_pengguna->insert_petugas( $tb_petugas );
    
        // $this->M_pengguna->insert_petugas($tb_petugas);


        $isi_pesan = "Admin " . $ambilUsername . ' berhasil ditambahkan';
        // $isi_pesan = "Matakuliah berhasil ditambah";
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('pengguna/index');
    }

    //edit 
    function edit($id_user)
    {
    
        $data['petugas'] = $this->M_pengguna->get_id_petugas($id_user);

        $this->load->view('template/template_header');
        $this->load->view('pengguna/edit', $data);
        $this->load->view('template/template_footer');
    }

    function proses_edit( $id_user )
    {


        $tb_user = $this->M_pengguna->get_id_petugas($id_user);

        //ambil inputan user
        $ambilNama      = $this->input->post('nama');
        $ambilNip       = $this->input->post('nip');
        $ambilPassword  = $this->input->post('password');
        $ambilStatus    = $this->input->post('status');


        $password = "";

        if ( !empty( $ambilPassword ) ) {

            $password = password_hash($ambilPassword, PASSWORD_ARGON2I);
        }else {

            $password = $tb_user['password'];
        }

        // tabel user 
        $tb_pengguna = array(

            'password'      => $password,
            'status_akun'   => $ambilStatus
        );

        $tb_petugas = array(

            'NIP'   => $ambilNip,
            'nama'  => $ambilNama
        );


        // proses update
        $this->M_pengguna->proses_edit_user( $tb_pengguna, $id_user );
        $this->M_pengguna->proses_edit_petugas( $tb_petugas, $id_user );


        $isi_pesan = "Admin " . $ambilNama . ' berhasil diubah';
        // $isi_pesan = "Matakuliah berhasil ditambah";
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('pengguna/index');
    }



    // hapus
    function hapus( $id_user ) {

        $this->M_pengguna->proses_hapus( $id_user );    

        $isi_pesan = "Operasi berhasil pada ". date('d F Y H.i A');
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('pengguna/index');
    }
}
    
    /* End of file Pengguna.php */

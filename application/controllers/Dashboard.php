<?php

class Dashboard extends CI_Controller
{


    public function index()
    {
        

        $this->load->model('M_dashboard');
        $this->load->view('template/template_header');


        $data['pinjam'] = $this->M_dashboard->ambil_data_peminjaman("dipinjam");
        $data['kembali']= $this->M_dashboard->ambil_data_peminjaman("selesai");
        $data['alat']   = $this->M_dashboard->ambil_data_alat();

        // view utama
        $this->load->view('dashboard/dashboard', $data);

        $this->load->view('template/template_footer');
    }




    function buat_pw()
    {


        echo password_hash("1212", PASSWORD_ARGON2I);
    }
}

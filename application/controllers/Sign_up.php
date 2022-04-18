<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sign_up extends CI_Controller
{
    // tampilan utama
    public function index()
    {
        // view utama
        $this->load->view('login/sign_up');
    }

    function ambil_data()
    {
        $ambilId = $this->input->post('id');
        $ambiluser = $this->input->post('nama');
        $ambilPw = $this->input->post('pw');
        $ambilStatus = $this->input->post('akun');

        $tb_users = array(

            'id_user' => $ambilId,
            'username' => $ambiluser,
            'password' => $ambilPw,
            'status_akun' => $ambilStatus

        );

        //eksekusi model
        $this->M_signup->insert_akun($tb_users);

        redirect('login/index');
    }
}

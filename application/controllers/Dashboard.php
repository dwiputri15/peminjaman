<?php

class Dashboard extends CI_Controller
{

    public function index()
    {

        $this->load->view('template/template_header');

        // view utama
        $this->load->view('dashboard/dashboard');

        $this->load->view('template/template_footer');
    }




    function buat_pw()
    {


        echo password_hash("1212", PASSWORD_ARGON2I);
    }
}

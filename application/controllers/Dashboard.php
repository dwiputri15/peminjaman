<?php

class Dashboard extends CI_Controller {
    
    public function index(){
        
        $this->load->view('dashboard');
    }




    function buat_pw() {


        echo password_hash("1212", PASSWORD_ARGON2I);
    }
}
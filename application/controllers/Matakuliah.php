<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Matakuliah extends CI_Controller {
        
        function __construct() {

            parent::__construct();
        }



        // view utama
        public function tampilan()
        {
            $this->load->view('template/template_header');

            // view utama
            $this->load->view('matakuliah/V_matakuliah');
            
            $this->load->view('template/template_footer');
        }
    
    }
    
    /* End of file Matakuliah.php */
    
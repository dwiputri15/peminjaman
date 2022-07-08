<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {
        

        public function index(){

            $this->load->library('cart');

            // clear all cart, if session is exist 
            if ( count( $this->cart->contents() ) > 0 ) {

                $this->cart->destroy();
            }
            
            $this->load->view('mobile/template/template_header');
            $this->load->view('mobile/dashboard/view_dashboard');
            $this->load->view('mobile/template/template_footer');
        }
    
    }
    
    /* End of file Dashboard.php */
    
<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Transaksi extends CI_Controller {
    
        public function pembelian()
        {
            $this->load->view('pembelian');
        }
    }
    
    /* End of file Transaksi.php */
    
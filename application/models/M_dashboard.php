<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_dashboard extends CI_Model {
    
        
        function ambil_data_peminjaman( $status ) {

            return $this->db->get_where('tb_peminjaman', ['status' => $status])->num_rows();
        }



        function ambil_data_alat() {

            return $this->db->get('tb_barang')->num_rows();
        }
    }
    
    /* End of file M_dashboard.php */
    
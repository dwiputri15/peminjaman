<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
    
        
        function pencocokanAkun( $ambilUsername ) {

            // opsi
            // $sql = "SELECT * FROM `tb_users` WHERE username = '$username'";
            // return $this->db->query($sql);


            // opsi 2 
            $this->db->where('username', $ambilUsername);
            $query = $this->db->get('tb_users');


            return $query;


            // opsi 3 
            // $this->db->where('username', $username)->get('tb_users');


            // opsi 4
            // $this->db->get_where('tb_users', ['username' => $username]);
        }
    
    }
    
    /* End of file M_login.php */
    
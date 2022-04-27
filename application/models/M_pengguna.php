<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_pengguna extends CI_Model {
    
        
        function tampil_petugas() {

            $this->db->select('tb_petugas.id_petugas, tb_petugas.NIP, tb_petugas.nama, 
                                tb_users.id_user, tb_users.username, tb_users.status_akun, tb_users.created_at');
            $this->db->from('tb_petugas');
            $this->db->join('tb_users', 'tb_users.id_user = tb_petugas.id_user');

            return $this->db->get();
        }
    }   
    
    /* End of file M_pengguna.php */
    
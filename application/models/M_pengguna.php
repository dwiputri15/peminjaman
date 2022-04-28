<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{

    function insert($tb_pengguna)
    {
        //$this->db->select('tb.petugas.nama, tb_petugas.NIP, tb_users_username, tb_users.password, tb_users_status_akun');

        $this->db->insert('tb_users', $tb_pengguna);
    }



    function tampil_petugas()
    {

        $this->db->select('tb_petugas.id_petugas, tb_petugas.NIP, tb_petugas.nama, 
                                tb_users.id_user, tb_users.username, tb_users.status_akun, tb_users.created_at');
        $this->db->from('tb_petugas');
        $this->db->join('tb_users', 'tb_users.id_user = tb_petugas.id_user');

        return $this->db->get();
    }

    function get_nama_petugas($nama_petugas)
    {

        $this->db->where('username', $nama_petugas);

        $query = $this->db->get('tb_users')->row_array();
        return $query;
    }
}   
    
    /* End of file M_pengguna.php */

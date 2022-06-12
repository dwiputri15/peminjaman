<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{






    function insert($tb_pengguna)
    {
        //$this->db->select('tb.petugas.nama, tb_petugas.NIP, tb_users_username, tb_users.password, tb_users_status_akun');

        $this->db->insert('tb_users', $tb_pengguna);


        return $this->db->insert_id();
    }



    // insert 
    function insert_petugas( $tb_petugas ) {

        $this->db->insert('tb_petugas', $tb_petugas);
    }



    function tampil_petugas()
    {

        $this->db->select('tb_petugas.id_petugas, tb_petugas.NIP, tb_petugas.nama, 
                                tb_users.id_user, tb_users.username, tb_users.status_akun, tb_users.created_at');
        $this->db->from('tb_petugas');
        $this->db->join('tb_users', 'tb_users.id_user = tb_petugas.id_user', 'LEFT');

        return $this->db->get();
    }

    function get_id_petugas($id_user)
    {

        $this->db->select('tb_petugas.id_petugas, tb_petugas.NIP, tb_petugas.nama, tb_users.password,
                                tb_users.id_user, tb_users.username, tb_users.status_akun, tb_users.created_at');
        $this->db->from('tb_petugas');
        $this->db->join('tb_users', 'tb_users.id_user = tb_petugas.id_user', 'LEFT');

        $this->db->where('tb_users.id_user', $id_user);

        return $this->db->get()->row_array();
    }



    // petugas
    function proses_edit_petugas( $data, $id_user ) {


        $this->db->where('id_user', $id_user);
        $this->db->update('tb_petugas', $data);
    }


    // user
    function proses_edit_user( $data, $id_user ) {

        $this->db->where('id_user', $id_user);
        $this->db->update('tb_users', $data);
    }


    // hapus user
    function proses_hapus( $id_user ) {



        // petugas
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_petugas');

        // hapus tabel user
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_users');


        
    }
}   
    
    /* End of file M_pengguna.php */

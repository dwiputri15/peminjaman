<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_signup extends CI_Model
{
    function insert_akun($tb_users)
    {

        // table, nilai
        $this->db->insert_akun('tb_users', $tb_users);
    }
}

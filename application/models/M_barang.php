<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{

    function insert($tb_barang)
    {
        // table, nilai
        $this->db->insert('tb_barang', $tb_barang);
    }
}

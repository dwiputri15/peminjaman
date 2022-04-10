<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{

    function get_barang()
    {

        $query = $this->db->get('tb_barang')->result_array();
        return $query;
    }


    function insert($tb_barang)
    {
        // table, nilai
        $this->db->insert('tb_barang', $tb_barang);
    }

    function delete($kode_alat)
    {

        $this->db->where('kode_barang', $kode_alat);
        $this->db->delete('tb_barang');
    }

    function edit($ambilBarang, $kode_alat)
    {

        $this->db->where('kode_alat', $ambilBarang);
        $this->db->update('tb_barang', $kode_alat);
    }

    function get_kode_barang($kode_alat)
    {
        $this->db->where('kode_barang', $kode_alat);
        $query = $this->db->get('tb_barang')->row_array();
        return $query;
    }
}

<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_matakuliah extends CI_Model {
        

        function get_matakuliah() {

            $query = $this->db->get('tb_matakuliah')->result_array();
            return $query;
        }


        // ambil matakuliah berdasarkan kode matkul 
        function get_matakuliah_berdasarkan_kode( $kd_matkul_controller ) {

            $this->db->where('kode_matkul', $kd_matkul_controller);

            $query = $this->db->get('tb_matakuliah')->row_array();
            return $query;
        }
        
        function get_matakuliah_berdasarkan_smt( $smt ) {

            $this->db->where('semester', $smt);

            $query = $this->db->get('tb_matakuliah')->result_array();
            return $query;
        }

        
        function insert_matakuliah( $tb_matakuliah_controller ) {

            // table, nilai
            $this->db->insert( 'tb_matakuliah', $tb_matakuliah_controller );
        }


        function delete_matakuliah( $kd_matkul_controller ) {

            $this->db->where('kode_matkul', $kd_matkul_controller);
            $this->db->delete('tb_matakuliah');
        }


        function edit_matakuliah( $ambilKode, $tb_matakuliah_controller ) {

            $this->db->where('kode_matkul', $ambilKode);
            $this->db->update('tb_matakuliah', $tb_matakuliah_controller);
        }
    }
    
    /* End of file M_matakuliah.php */
    
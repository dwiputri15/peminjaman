<?php 

use chriskacerguis\RestServer\RestController;
class Matakuliah extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "tb_matakuliah";
    }



    // method get
    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Matakuliah Kosong";


        // ambil data kode_matkul 
        $kd_matkul = $this->input->get('kode_matkul');
        $dt_matakuliah = []; // data matakuliah

        // Request :: Menampilkan user berdasarkan kode matkul
        if ( !empty( $kd_matkul ) ) {

            $where = ['kode_matkul' => $kd_matkul];
            $ambil_data = $this->M_api->get( $this->table, $where );
            
            if ( $ambil_data->num_rows() > 0 ) {

                $dt_matakuliah = $ambil_data->result_array();
            }
        } else {

            $ambil_data = $this->M_api->get( $this->table );
            $dt_matakuliah = $ambil_data->result_array();
        }

        // Matakuliah
        if ( count( $dt_matakuliah ) > 0 ) {

            $status = true;
            $pesan = "Berhasil Menampilkan Data Matakuliah";
        }





        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $dt_matakuliah

        ], JSON_PRETTY_PRINT);
    }
}
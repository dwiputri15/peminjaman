<?php 

use chriskacerguis\RestServer\RestController;
class Notifikasi extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "tb_notifikasi";
    }



    // method get
    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Notifikasi Kosong";


        // ambil data nim
        $nim = $this->input->get('nim');
        $dt_notifikasi = []; // data notifikasi

        // Request :: Menampilkan notifikasi berdasarkan nim
        if ( !empty( $nim ) ) {

            $where = ['NIM' => $nim, 'read_status' => "pending"];
            $ambil_data = $this->M_api->get( $this->table, $where );
            
            if ( $ambil_data->num_rows() > 0 ) {

                $dt_notifikasi = $ambil_data->result_array();
            }
        }

        // Barang
        if ( count( $dt_notifikasi ) > 0 ) {

            $status = true;
            $pesan = "Berhasil Menampilkan Data Notifikasi";
        }





        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $dt_notifikasi

        ], JSON_PRETTY_PRINT);
    }
}
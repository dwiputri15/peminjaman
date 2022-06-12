<?php 

use chriskacerguis\RestServer\RestController;
class Alat extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "tb_barang";
    }



    // method get
    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Alat Kosong";


        // ambil data kode_barang
        $kd_barang = $this->input->get('kode_barang');
        $dt_barang = []; // data barang

        // Request :: Menampilkan user berdasarkan kode matkul
        if ( !empty( $kd_barang ) ) {

            $where = ['kode_matkul' => $kd_barang];
            $ambil_data = $this->M_api->get( $this->table, $where );
            
            if ( $ambil_data->num_rows() > 0 ) {

                $dt_barang = $ambil_data->result_array();
            }
        } else {

            $ambil_data = $this->M_api->get( $this->table );
            $dt_barang = $ambil_data->result_array();
        }

        // Barang
        if ( count( $dt_barang ) > 0 ) {

            $status = true;
            $pesan = "Berhasil Menampilkan Data Barang";
        }





        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $dt_barang

        ], JSON_PRETTY_PRINT);
    }


    public function index_post() {


        // atribut
        $status = false;
        $pesan = "Alat Kosong";


        $data = array(

            'kode_barang'   => $this->input->post('kode_barang'),
            'kode_matkul'   => $this->input->post('kode_matkul'),
            'nama_barang'   => $this->input->post('nama_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'status_akun'   => "tersedia"
        );

        $this->M_api->insert( $this->table, $data );


        echo json_encode([

            'status'    => 200,
            'pesan'     => true,

        ], JSON_PRETTY_PRINT);
    }

}
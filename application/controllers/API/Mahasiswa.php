<?php 

use chriskacerguis\RestServer\RestController;
class Mahasiswa extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "tb_mahasiswa";
    }



    // method get
    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Mahasiswa Kosong";


        // ambil data NIM 
        $nim = $this->input->get('nim');
        $dt_mahasiswa = []; // data mahasiswa

        // Request :: Menampilkan user berdasarkan NIM
        if ( !empty( $nim ) ) {

            $where = ['NIM' => $nim];
            $ambil_data_mahasiswa = $this->M_api->get( $this->table, $where );
            
            if ( $ambil_data_mahasiswa->num_rows() > 0 ) {

                $dt_mahasiswa = $ambil_data_mahasiswa->result_array();
            }
        } else {

            $ambil_data_mahasiswa = $this->M_api->get( $this->table );
            $dt_mahasiswa = $ambil_data_mahasiswa->result_array();
        }

        // mahasiswa
        if ( count( $dt_mahasiswa ) > 0 ) {

            $status = true;
            $pesan = "Berhasil Menampilkan Data Mahasiswa";
        }





        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $dt_mahasiswa

        ], JSON_PRETTY_PRINT);
    }


    public function index_post() {

        // atribut
        $status = false;
        $pesan = "";

        // ambil data input
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $kelompok = $this->input->post('kelompok');
        $ktm = $this->input->post('ktm');


        // Request cek apakah user memiliki NIM pada tabel mahasiswa 
        $where = ['NIM' => $nim];
        $cek = $this->M_api->get( $this->table, $where );

        // apabila NIM kosong atau belum pernah terdaftar oleh sistem
        if ( $cek->num_rows() == 0 ) {

            $status = true;
            $pesan = "Insert Berhasil";
            $data = array(

                'NIM'       => $nim,
                'nama'      => $nama,
                'prodi'     => $prodi,
                'kelas'     => $kelas,
                'kelompok'  => $kelompok,
                'ktm'       => $ktm
            );

            $this->M_api->insert( $this->table, $data );
        } else {

            $status = true; 
            $pesan = "Data sudah ada";
        }


        // -------------------------

        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => ['NIM' => $nim]

        ], JSON_PRETTY_PRINT);

    }
}
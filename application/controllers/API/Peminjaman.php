<?php 

use chriskacerguis\RestServer\RestController;
class Peminjaman extends RestController{


    protected $table;

    function __construct() {

        parent::__construct();

        $this->load->model('API/M_api');
        $this->table = "tb_peminjaman";
    }



    // method get
    public function index_get() {

        // atribut
        $status = false;
        $pesan = "Peminjaman Kosong";


        // ambil data NIM 
        $nim = $this->input->get('nim');
        $id_peminjaman = $this->input->get('id_peminjaman');
        $dt_peminjaman = []; // data mahasiswa

        // Request :: Menampilkan user berdasarkan NIM
        if ( !empty( $nim ) ) {


            // menampilkan keseluruhan peminjaman berdasarkan NIM
            if ( empty( $id_peminjaman ) ) {

                $where = ['NIM' => $nim];
                $ambil_data = $this->M_api->get( $this->table, $where );
                
            // menampilkan peminjaman secara spesifik
            } else {

                $where = ['NIM' => $nim, 'id_peminjaman' => $id_peminjaman];
                $ambil_data = $this->M_api->get( $this->table, $where );
            }



            // olah data variabel "$ambil_data"
            if ( $ambil_data->num_rows() > 0 ) {
                foreach ( $ambil_data->result_array() AS $isi ) {

                    $id_peminjaman = $isi['id_peminjaman'];

                    // ambil data peminjaman detail 
                    $dt_detail = [];
                    

                    $where = ['id_peminjaman' => $id_peminjaman];
                    $ambil_peminjaman_detail = $this->M_api->get( "tb_peminjaman_detail", $where );

                    // looping data barang
                    foreach ( $ambil_peminjaman_detail->result_array() AS $isi_detail ) {

                        $where = [ 'kode_barang' => $isi_detail['kode_barang'] ];
                        $ambil_barang = $this->M_api->get("tb_barang", $where);

                        $dt_barang = [];

                        // set
                        $dt_barang = $ambil_barang->row_array();

                        // combine data between data barang + data detail
                        $dt_merge = array_merge( $isi_detail, $dt_barang );

                        array_push( $dt_detail, $dt_merge );
                    }


                    // combine with peminjaman
                    $column = array(

                        'informasi_peminjaman' => $isi,
                        'informasi_detail'     => $dt_detail
                    );

                    // push 
                    array_push( $dt_peminjaman, $column );
                    
                }
            }
        }

        // mahasiswa
        if ( count( $dt_peminjaman ) > 0 ) {

            $status = true;
            $pesan = "Berhasil Menampilkan Data Peminjaman";
        }





        echo json_encode([

            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $dt_peminjaman

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
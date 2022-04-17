<?php

class Peminjaman_alat extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('M_peminjaman');
    }
    //views utama 

    public function index()
    {

        $data['peminjaman'] = $this->M_peminjaman->ambil_data_peminjaman();

        $this->load->view('template/template_header');
        $this->load->view('peminjaman_alat/peminjaman', $data);
        $this->load->view('template/template_footer');
    }




    // detail peminjaman
    function detail( $id_peminjaman ) {

        $data['peminjaman'] = $this->M_peminjaman->ambil_data_peminjaman_detail( $id_peminjaman );

        $this->load->view('template/template_header');
        $this->load->view('peminjaman_alat/peminjaman_detail', $data);
        $this->load->view('template/template_footer');
    }


    function pengembalian()
    {

        $hasil = array();

        $keyword = $this->input->get('search');

        if ( $keyword ) {

            $hasil = $this->M_peminjaman->ambil_data_pencarian( $keyword );
        }

        $data['peminjaman']  = $hasil;

        $this->load->view('template/template_header');
        $this->load->view('peminjaman_alat/pengembalian', $data);
        $this->load->view('template/template_footer');
    }





    



    function konfirmasi_admin( $id_peminjaman ) {
        
        $keterangan = $this->input->post('keterangan');

        $data = array(

            'keterangan'    => $keterangan
        );

        // do update
        $this->M_peminjaman->update_peminjaman( $id_peminjaman, $data );

        // menuju tampil qrcode
        redirect( 'peminjaman_alat/qrcode/'. $id_peminjaman );
    }



    function qrcode( $id_peminjaman ) {

        $data['peminjaman'] = $this->M_peminjaman->ambil_data_peminjaman_detail( $id_peminjaman );

        $this->load->view('template/template_header');
        $this->load->view('peminjaman_alat/pengembalian_qrcode', $data);
        $this->load->view('template/template_footer');
    }






    // lapor barang rusak
    function lapor_barang_rusak() {

        // session
        $id_petugas = $this->session->userdata('id_petugas');

        $id_peminjaman = $this->input->post('id_peminjaman');
        $kode_barang = $this->input->post('kode_barang');
        $jenis = $this->input->post('jenis');
        $keterangan = $this->input->post('keterangan');
        $search = $this->input->post('search');



        $upload = "";

        /** Upload file */
        $config['upload_path']          = './assets/kerusakan/'; // direktori penyimpanan
        $config['allowed_types']        = 'jpg|png|jpeg'; // ekstensi yang diizinkan
        $config['max_size']             = 3000; // maksimal upload 3 mb
        $config['file_name']    = strtotime("now").'-'.uniqid(); // kombinasi kode waktu dan kode random (untuk random file name)

        $this->load->library('upload', $config);


        // cek terlebih dahulu apakah user menambahkan foto dokumentasi
        if ( $_FILES['userfile']['name'] ) {

            // yes user melakukan upload 
            if ( $this->upload->do_upload('userfile')) {


                // 
                $upload = $this->upload->data('file_name');

            } else {

                // display error 
                echo $this->upload->display_errors();
            }
        }

        $data = array(

            'id_petugas'    => $id_petugas,
            'id_peminjaman' => $id_peminjaman,
            'kode_barang'   => $kode_barang,
            'jenis'         => $jenis,
            'keterangan'    => $keterangan,
            'foto'          => $upload
        );

        $this->M_peminjaman->laporan_kerusakan( $data );

        // setelah melakukan pelaporan dilanjutkan dengan mengembalikan ke halaman sebelumnya

        $isi_pesan = "Pelaporan alat berhasil ditambahkan ";
        $this->session->set_flashdata('pesan', $isi_pesan);

        redirect('peminjaman_alat/pengembalian?search='. $search);
    }
}

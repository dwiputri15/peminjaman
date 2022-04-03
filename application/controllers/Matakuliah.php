<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Matakuliah extends CI_Controller {
        
        function __construct() {

            parent::__construct();


            // panggil model 
            $this->load->model('M_matakuliah');
        }


        // tampilan utama
        function index() {

            $data['tb_matakuliah'] = $this->M_matakuliah->get_matakuliah();

            $this->load->view('template/template_header');

            // view utama
            $this->load->view('matakuliah/V_matakuliah', $data);
            
            $this->load->view('template/template_footer');
        }


        // view tambah
        public function tambah()
        {
            $this->load->view('template/template_header');

            // view utama
            $this->load->view('matakuliah/V_matakuliah_tambah');
            
            $this->load->view('template/template_footer');
        }


        // proses tambah
        function proses_tambah() {


            // @TODO 1 : Ambil nilai dari view
            $ambilKode          = $this->input->post('kode_matkul');
            $ambilMatakuliah    = $this->input->post('nama_matkul');
            $ambilSmt           = $this->input->post('semester_matkul');


            // TODO 2 : Mempersiapkan nilai utk tabel "tb_matakuliah"
            $tb_matakuliah_controller = array(

                'kode_matkul'   => $ambilKode,
                'nama'          => $ambilMatakuliah,
                'semester'      => $ambilSmt
            );

            // eksekusi di model
            $this->M_matakuliah->insert_matakuliah( $tb_matakuliah_controller );

            $isi_pesan = "Matakuliah ". $ambilMatakuliah. ' berhasil ditambahkan';
            // $isi_pesan = "Matakuliah berhasil ditambah";
            $this->session->set_flashdata('pesan', $isi_pesan);

            redirect('matakuliah/index');
        }



        // proess hapus
        function proses_hapus( $kd_matkul_controller ) {

            $this->M_matakuliah->delete_matakuliah( $kd_matkul_controller );

            $isi_pesan = 'Kode matakuliah '. $kd_matkul_controller.' berhasil dihapus';
            $this->session->set_flashdata('pesan', $isi_pesan);

            redirect('matakuliah/index');
        }









        // view edit
        public function edit( $kd_matkul_controller )
        {

            $data['tb_matakuliah'] = $this->M_matakuliah->get_matakuliah_berdasarkan_kode( $kd_matkul_controller );

            $this->load->view('template/template_header');

            // view utama
            $this->load->view('matakuliah/V_matakuliah_edit', $data);
            
            $this->load->view('template/template_footer');
        }



        // proses edit
        function proses_edit() {

            // @TODO 1 : Ambil nilai dari view
            $ambilKode          = $this->input->post('kode_matkul');
            $ambilMatakuliah    = $this->input->post('nama_matkul');
            $ambilSmt           = $this->input->post('semester_matkul');


            // TODO 2 : Mempersiapkan nilai utk tabel "tb_matakuliah"
            $tb_matakuliah_controller = array(

                'nama'          => $ambilMatakuliah,
                'semester'      => $ambilSmt
            );

            // eksekusi di model
            $this->M_matakuliah->edit_matakuliah( $ambilKode, $tb_matakuliah_controller );

            $isi_pesan = "Matakuliah ". $ambilMatakuliah. ' berhasil diperbarui';
            // $isi_pesan = "Matakuliah berhasil ditambah";
            $this->session->set_flashdata('pesan', $isi_pesan);


            redirect('matakuliah/index');
        }


    }
    
    /* End of file Matakuliah.php */
    
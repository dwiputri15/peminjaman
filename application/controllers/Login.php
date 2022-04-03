<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        
        function __construct()
        {
            parent::__construct();

            // load model 
            $this->load->model('M_login');
        }

        public function index()
        {
            $this->load->view('login');
        }
        


        // proses login
        function proses_login() {

            /**
             * 
             *  Todo List
             *  1. Ambil username dan password dari inputan user
             *  2. Pencocokan ke dalam tabel "tb_users"
             *  3. Cek apakah username terdaftar 
             *      3.1 jika terdaftar maka dilanjutkan pencocokan password, lanjut ke step 4
             *      3.2 jika tidak maka selesai -> output username tidak terdaftar / diketahui
             * 
             *  4. Cek password apakah benar ? 
             *      4.1 benar : lanjut ke dashboard
             *      4.2 salah : lanjut ke 5 dengan memberikan error -> pw salah
             */


            // @TODO 1 : Ambil username dan password dari inputan user
            $ambilUsername = $this->input->post('username');
            $ambilPassword = $this->input->post('password');


            // @TODO 2 : Pencocokan ke dalam tabel "tb_users"
            $pencocokanUsername = $this->M_login->pencocokanAkun( $ambilUsername );
            
            // @TODO 3 : cek (0 | 1)
            $cekStatus = $pencocokanUsername->num_rows();
            if ( $cekStatus == 1 ) {

                // @TODO 3.1 Lanjut 4 
                $informasi = $pencocokanUsername->row_array();

                // @TODO 4 : Pencocokan password
                if ( password_verify($ambilPassword, $informasi['password']) ){

                    // controller/function
                    redirect('dashboard/index');

                } else {

                    $html = '<div class="alert alert-danger">Pemberitahuan <small>Kata sandi salah</small></div>';

                    $this->session->set_flashdata('pesan', $html);
                    redirect('login/index');
                }

            } else {

                $html = '<div class="alert alert-danger">Pemberitahuan <small>Username tidak terdaftar</small></div>';

                $this->session->set_flashdata('pesan', $html);
                redirect('login/index');
            }
        }



        function buat() {


            echo password_hash("123", PASSWORD_ARGON2I);

        }
    }
    
    /* End of file Login.php */
    
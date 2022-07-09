<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
        
        public function __construct() {

            parent::__construct();
        }

        public function index(){
            
            $this->load->view('mobile/login/view_login');
        }



        public function logout() {

            $this->session->sess_destroy();
            redirect('mobile/login');
        }



        // cek login
        public function process() {

            $nim = $this->input->post('nim');

            $cek = $this->db->get_where('tb_mahasiswa', ['NIM' => $nim]);
            if ( $cek->num_rows() > 0 ) {

                $kolom = $cek->row_array();
                $session = array(

                    'nim'   => $kolom['NIM'],
                    'nama'   => $kolom['nama'],
                );
                $this->session->set_userdata( $session );

                redirect('mobile/dashboard');

            } else {

                $this->session->set_flashdata('msg-error', 'login_error');
                redirect('mobile/login');
            }
        }



        // register
        public function register() {

            $this->load->view('mobile/login/view_register');
        }


        public function prosesregister() {

            $data = array(

                'NIM'   => $this->input->post('nim'),
                'nama'  => $this->input->post('nama'),
                'prodi' => $this->input->post('prodi'),
                'kelas' => $this->input->post('kelas'),
            );

            $this->db->insert('tb_mahasiswa', $data);
            
            $this->session->set_flashdata('msg-error', 'register');
            redirect('mobile/login');
        }
    
    }
    
    /* End of file Login.php */
    
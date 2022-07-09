<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Peminjaman extends CI_Controller {
        
        public function __construct() {

            parent::__construct();
            $this->load->model('M_matakuliah');
            $this->load->model('M_barang');
            $this->load->model('M_peminjaman');


            $this->load->library('cart');

        }

        public function index(){
            
            $this->load->view('mobile/template/template_header');
            $this->load->view('mobile/peminjaman/view_peminjaman');
            $this->load->view('mobile/template/template_footer');
        }



        // history
        public function history(){

            $dt_peminjaman = array();
            $history = $this->M_peminjaman->history_peminjaman_mobile()->result_array();

            foreach ( $history AS $isi ) {

                // ambil data detail 
                $detail = $this->M_peminjaman->ambil_data_peminjaman_detail( $isi['id_peminjaman'] );
                array_push( $dt_peminjaman, array(

                    'info'  => $isi,
                    'detail'=> $detail
                ) );

            }
            
            $data['history'] = $dt_peminjaman;
            $this->load->view('mobile/template/template_header');
            $this->load->view('mobile/peminjaman/view_history', $data);
            $this->load->view('mobile/template/template_footer');
        }


        public function carimatkul_berdasarkanSMT() {

            $smt = $this->input->get('semester');
            $matkul = $this->M_matakuliah->get_matakuliah_berdasarkan_smt( $smt );

            $option = "";
            foreach ( $matkul AS $mt ) {

                $option .= '<option value="'.$mt['kode_matkul'].'">'.$mt['nama'].'</option>';
            }

            echo $option;

        }




        // tampil semua alat
        public function listbarang() {


            if ( $this->session->userdata('kode_matkul') ) {

                $input_matkul = $this->session->userdata('kode_matkul');

            } else {
                // session kosong
                $input_matkul = $this->input->get('matkul');
                $this->session->set_userdata( 'kode_matkul', $input_matkul );
            }

            

            // ambil data barang berdasrkan matkul id 
            $data['barang'] = $this->M_barang->get_barang_berdasarkanmatkul( $input_matkul );

            // // print_r( $input_matkul );
            
            $this->load->view('mobile/template/template_header');
            $this->load->view('mobile/peminjaman/view_pilihalat', $data);
            $this->load->view('mobile/template/template_footer');
        }









        public function cart_tambah( $kode_barang ) {

            $barang = $this->M_barang->get_kode_barang( $kode_barang );

            $data = array(
                'id'      => $kode_barang,
                'qty'     => 1,
                'price'   => 0,
                'name'    => $barang['nama_barang'],
                'options' => array('Size' => '')
            );
            
            $this->cart->insert($data);


            $html = '
            <div id="message" class="alert alert-secondary">
                <small>Item '.$barang['nama_barang'].' berhasil ditambahkan</small>
            </div>';
            $this->session->set_flashdata('pesan', $html);

            redirect('mobile/peminjaman/listbarang');
            
        }



        public function cart_hapus( $rowid ) {

            $data = array(
                'rowid' => $rowid,
                'qty'   => 0
            );
            
            $this->cart->update($data);
            redirect('mobile/peminjaman/listbarang');
        }




        public function final(){



            $kodePeminjaman = strtoupper(uniqid());

            $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = './assets/'; //string, the default is application/cache/
            $config['errorlog']     = './assets/'; //string, the default is application/logs/
            $config['imagedir']     = './assets/qrcode/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);
    
            $image_name=$kodePeminjaman.'.png'; //buat name dari qr code sesuai dengan nim
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
    
            


            // simpan data peminjaman
            $dt_peminjaman = array(

                'NIM'               => $this->session->userdata('nim'),
                'tanggal_awal'      => date('Y-m-d H:i:s'),
                'tanggal_berakhir'  => null,
                'status'            => "diproses",
                'qrcode'            => $image_name
            );

            $this->db->insert('tb_peminjaman', $dt_peminjaman);
            $id_peminjaman = $this->db->insert_id();




            // insert data detail
            $dt_detail = array();
            foreach ( $this->cart->contents() AS $isi ) {

                array_push( $dt_detail, array(

                    'id_peminjaman' => $id_peminjaman,
                    'kode_barang'   => $isi['id'],
                    'jumlah'        => $isi['qty']
                ) );
            }

            // insert batch
            $this->db->insert_batch('tb_peminjaman_detail', $dt_detail);


            $params['data'] = $id_peminjaman; //data yang akan di jadikan QR CODE
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


            redirect('mobile/peminjaman/verifikasi_peminjaman/'. $id_peminjaman);

        }



        public function cek_qr() {

            $qr = $this->input->get('qr');
            $where = ['id_peminjaman', $qr];

            $cek = $this->db->get_where('tb_peminjaman', $where)->result_array();
            

            if ( count($cek) == 1 ) {

                $status = true;
                $this->db->where('id_peminjaman', $qr)->update('tb_peminjaman', ['status' => "dipinjam"]);

            } else {

                $status = false;
            }
            echo json_encode( ['status' => $status, 'qr' => $qr] );
        }


        public function verifikasi_peminjaman( $id_peminjaman ) {

            $peminjaman = $this->db->get_where('tb_peminjaman', ['id_peminjaman' => $id_peminjaman])->row_array();
            $image_qr = base_url('assets/qrcode/'. $peminjaman['qrcode']);


            $data['img_qr']         = $image_qr;
            $data['id_peminjaman']  = $id_peminjaman;
            $this->load->view('mobile/template/template_header');
            $this->load->view('mobile/scan/view_scan_peminjaman', $data);
            $this->load->view('mobile/template/template_footer');
        }




        public function verifikasi_pengembalian() {

            $this->load->view('mobile/template/template_header');
            $this->load->view('mobile/scan/view_scan_pengembalian');
            $this->load->view('mobile/template/template_footer');
        }

        public function proses_pengembalian() {

            $qr = $this->input->get('qr');
            $where = ['id_peminjaman', $qr];

            $cek = $this->db->get_where('tb_peminjaman', $where)->result_array();
            

            if ( count($cek) == 1 ) {

                $status = true;
                $this->db->where('id_peminjaman', $qr)->update('tb_peminjaman', ['status' => "selesai"]);
                
            } else {

                $status = false;
            }
            echo json_encode( ['status' => $status, 'qr' => $qr] );
        }





        // check status verifikasi (apabila telah disetujui atau diputuskan oleh petugas)
        public function cekverifikasiadmin( $id_peminjaman ) {

            $peminjaman = $this->db->get_where('tb_peminjaman', ['id_peminjaman' => $id_peminjaman])->row_array();
            $status = $peminjaman['status'];


            echo json_encode( ['status' => $status, 'id' => $id_peminjaman] );
        }





        // cek notifikasi
        public function notifikasi() {

            $nim = $this->session->userdata('nim');
            $cek_peminjaman = $this->db->get_where('tb_peminjaman', ['status'   => "dipinjam"]);


            $status = false;
            if ( $cek_peminjaman->num_rows() > 0 ) {

                // ambil data pengecekan
                $kolom = $cek_peminjaman->row_array();
                
                // ambil waktu peminjaman
                // tanggal maksimal 4 jam sejak awal tgl peminjaman
                

            } else {


            }
        }
    
    
    }
    
    /* End of file Peminjaman.php */
    
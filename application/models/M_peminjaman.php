<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_peminjaman extends CI_Model {
        


        // tambah
        function tambah_peminjaman() {

            $id_peminjaman = 0;

            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = './assets/'; //string, the default is application/cache/
            $config['errorlog']     = './assets/'; //string, the default is application/logs/
            $config['imagedir']     = './assets/qrcode/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);
    
            $image_name=uniqid().'-'.$id_peminjaman.'.png'; //buat name dari qr code sesuai dengan nim
    
            $params['data'] = $id_peminjaman; //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
        }



        // update peminjaman
        function update_peminjaman( $id_peminjaman, $data ) {

            $this->db->where('id_peminjaman', $id_peminjaman);
            $this->db->update('tb_peminjaman', $data);

        }


        // laporan kerusakan 
        function laporan_kerusakan($data) {

            $this->db->insert('tb_kerusakan', $data);
        }




        function ambil_data_peminjaman() {

            $this->db->select('tb_peminjaman.*, tb_mahasiswa.*, SUM(jumlah) AS jumlah_peminjaman')->from('tb_peminjaman');
            $this->db->join('tb_peminjaman_detail', 'tb_peminjaman.id_peminjaman = tb_peminjaman_detail.id_peminjaman');
            $this->db->join('tb_mahasiswa', 'tb_mahasiswa.NIM = tb_peminjaman.NIM');

            $this->db->group_by('id_peminjaman');
            
            
            return $this->db->get();
        }  
        
        
        function ambil_data_peminjaman_detail( $id_peminjaman ) {

            $this->db->select('tb_peminjaman.*, tb_barang.*, tb_mahasiswa.*, tb_peminjaman_detail.*, tb_peminjaman.created_at AS pembuatan, tb_matakuliah.nama AS nama_matkul')->from('tb_peminjaman');
            $this->db->join('tb_mahasiswa', 'tb_mahasiswa.NIM = tb_peminjaman.NIM');          
            
            
            $this->db->join('tb_peminjaman_detail', 'tb_peminjaman.id_peminjaman = tb_peminjaman_detail.id_peminjaman');
            $this->db->join('tb_barang', 'tb_barang.kode_barang = tb_peminjaman_detail.kode_barang');
            $this->db->join('tb_matakuliah', 'tb_matakuliah.kode_matkul = tb_barang.kode_matkul');
            
            $this->db->where('tb_peminjaman.id_peminjaman', $id_peminjaman);

            return $this->db->get()->result_array();
        }  



        // query pencaarian
        function ambil_data_pencarian( $keyword ) {

            $this->db->select('tb_peminjaman.*, tb_barang.*, tb_mahasiswa.*, tb_peminjaman_detail.*, tb_peminjaman.created_at AS pembuatan, tb_matakuliah.nama AS nama_matkul')->from('tb_peminjaman');
            $this->db->join('tb_mahasiswa', 'tb_mahasiswa.NIM = tb_peminjaman.NIM');          
            
            
            $this->db->join('tb_peminjaman_detail', 'tb_peminjaman.id_peminjaman = tb_peminjaman_detail.id_peminjaman');
            $this->db->join('tb_barang', 'tb_barang.kode_barang = tb_peminjaman_detail.kode_barang');
            $this->db->join('tb_matakuliah', 'tb_matakuliah.kode_matkul = tb_barang.kode_matkul');


            $this->db->like('tb_peminjaman.NIM', $keyword);
            $this->db->where('tb_peminjaman.status !=', "selesai");

            return $this->db->get()->result_array();
        }
    }
    
    /* End of file M_peminjaman.php */
    
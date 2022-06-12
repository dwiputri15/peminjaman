<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Laporan extends CI_Controller {
        
        public function __construct() {

            parent::__construct();

            $this->load->library('pdf');

            $this->load->model('M_peminjaman');
        }

        function index() {

                              
            // header attribute
            $name_file = 'LA-PEMINJAMAN -'.rand(1, 999999).'-'.date('Y-m-d');
            $pdf = $this->header_attr( $name_file );

            // add a page
            $pdf->AddPage('P', 'A4');


            // Sub header
            // $pdf->Ln(5, false);
            $html = '<table border="0">
                <tr>
                    <td align="center"><h2>LAPORAN PEMINJAMAN ALAT LABORATORIUM</h2></td>
                </tr>
            </table>';

            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Ln(5, false);



            $peminjaman = $this->M_peminjaman->ambil_data_peminjaman();


            $data = array();

            $start = $this->input->get('start');
            $end = $this->input->get('end');

                            
            foreach ( $peminjaman->result_array() AS $row ) {

                $tanggal = strtotime( date('Y-m-d', strtotime($row['tanggal_awal'])) );


                // melakukan filter
                if ( !empty($start) ) {

                    $filterAwal = strtotime( $start );
                    $filterAkhir = strtotime( $end );

                    if ( ($filterAwal <= $tanggal) && ($tanggal <= $filterAkhir) ) {
                        array_push( $data, $row );
                    }
                                    
                } else {

                    array_push( $data, $row );
                }
            }

            


            $table_body = "";

            if ( count($data) > 0 ) {

                $no = 1;
                foreach ( $data AS $row ) {

                    $table_body .= '<tr>
                        <td>'.$no.'</td>
                        <td>'.$row['NIM'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$row['prodi'].' '.$row['kelas'].'</td>
                        <td>'.date('d M Y H.i A', strtotime($row['tanggal_awal'])).'</td>
                        <td>'.date('d M Y H.i A', strtotime($row['tanggal_berakhir'])).'</td>
                    </tr>';

                    $no++;
                }
            }


            $table = '<table style="border-collapse: collapse" border="1" cellpadding="6">
                <tr>
                    <th width="5%"><b>No</b></th>
                    <th width="12%"><b>NIM</b></th>
                    <th width="20%"><b>Nama</b></th>
                    <th width="20%"><b>Prodi</b></th>
                    <th width="22%"><b>Tgl.Pinjam</b></th>
                    <th width="22%"><b>Tgl.Kembali</b></th>
                </tr>

                '.$table_body.'
            </table>';

            
            $pdf->writeHTML($table, true, false, true, false, '');
            $pdf->Ln(5, false);


            




            // output
            $pdf->Output($name_file.'.pdf', 'I');

        }



        // header attr
        function header_attr( $title ) {

            // create new PDF document
            $this->load->library('pdf');
            $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Dwi Nur Cahyo');
            $pdf->SetTitle($title);
            // $pdf->SetSubject('TCPDF Tutorial');
            // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

            // set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, 35, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

            // set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
                $pdf->setLanguageArray($l);
            }

            // ---------------------------------------------------------

            // set font
            $pdf->SetFont('times', '', 10);

            return $pdf;
        }
    
    }
    
    /* End of file Laporan.php */
    
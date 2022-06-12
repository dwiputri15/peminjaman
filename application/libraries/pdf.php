<?php 


include_once APPPATH . '/third_party/tcpdf/tcpdf.php';
class Pdf extends TCPDF {


     //Page header
     public function Header() {
        // Logo
        $image_file = './assets/polinema.png';
        
        $this->Image($image_file, 10, 10, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        
        // Title
        $this->Ln(3, true);
        $this->setCellMargins(20, 0, 0, 0);
        
        $this->SetFont('times', 'B', 11);
        $this->Cell(60, 10, 'Laporan Peminjaman Laboratorium', 0, 2, 'L', 0, '', 0, false, 'M', 'M');

        $this->SetFont('times', '', 8);
        $this->Cell(0, 8, 'Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 0, 2, 'L', 0, '', 0, false, 'M', 'M');
        $this->Cell(0, 8, 'Telp : (0341) 404424, Politeknik Negeri Malang', 0, 2, 'L', 0, '', 0, false, 'M', 'M');
        $this->Cell(0, 7, 'Situs : http://www.polinema.ac.id/', 0, 2, 'L', 0, '', 0, false, 'M', 'M');


    
        
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $date = date('d/m/Y');
        $this->Cell(0, 10, 'Laporan Peminjaman Laboratorium | '.$date, 0, 0, 'L');
        
        $this->Cell(0, 10, 'Halaman '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 0, 'R');
    }
}
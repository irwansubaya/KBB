<?php
 
/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');
 
/* konstruktor halaman pdf sbb :
   P  = Orientasinya "Potrait"
   cm = ukuran halaman dalam satuan centimeter
   A4 = Format Halaman
 
   jika ingin mensetting sendiri format halamannya, gunakan array(width, height)
   contoh : $this->fpdf->FPDF("P","cm", array(20, 20));
*/
 
$this->fpdf->FPDF("L","cm","A4");
 
// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(1,1,1);
 
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
   di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();
 
// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();
 
// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Times','B',14);
 
/* Kita akan membuat header dari halaman pdf yang kita buat
   -------------- Header Halaman dimulai dari baris ini -----------------------------
*/
$this->fpdf->Cell(25,0.7,'PT JADIN PRATAMA',0,0,'C');
 
// fungsi Ln untuk membuat baris baru
//$this->fpdf->Ln();
//$this->fpdf->Cell(19,0.7,'TERAKREDITASI "B" BAN PT',0,0,'C');
 
$this->fpdf->Ln();
/* Setting ulang Font : String Family, String Style, Font size
   kenapa disetting ulang ???
   jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
   tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
   maka kita harus mensetting ulang Font nya.
   jika diatas settingannya : helvetica, 'B', '12'
   khusus untuk penulisan alamat, kita setting : helvetica, '', 10
   yang artinya string stylenya normal / tidak Bold dan ukurannya 10
*/
//$this->fpdf->SetFont('helvetica','',10);
//$this->fpdf->Cell(19,0.5,'Dear Ibu Herly Yuliarti,',0,0,'L');
//$this->fpdf->Ln();
//$this->fpdf->Cell(19,0.5,'Berikut ini kami kirimkan Form KlikBCA Bisnis Installation and Support, Yang telah dilaksanakan tanggal '.date('d/M/Y').' ',0,0,'L');
 
//$this->fpdf->Ln();
//$this->fpdf->Cell(19,0.5,'homepage : www.stikku.ac.id  email : info@stikku.ac.id',0,0,'C');
 
/* Fungsi Line untuk membuat garis */
//$this->fpdf->Line(1,3.5,20,3.5);
//$this->fpdf->Line(1,3.55,20,3.55);
 
/* -------------- Header Halaman selesai ------------------------------------------------*/
 
//$this->fpdf->Ln(1);
//$this->fpdf->SetFont('Times','B',12);
//$this->fpdf->Cell(19,1,'LAPORAN DATA KARYAWAN',0,0,'C');
 
/* setting header table */
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0.8  , 1, 'No'           , 1, 'LR', 'C');
$this->fpdf->Cell(3  , 1, 'Corporate ID'           , 1, 'LR', 'C');
$this->fpdf->Cell(4 , 1, 'Nama Perusahaan' , 1, 'LR', 'C');
$this->fpdf->Cell(3,1, 'PIC' , 1, 'LR', 'C');
$this->fpdf->Cell(2,1, 'Type' , 1, 'LR', 'C');
$this->fpdf->Cell(1 , 1, 'Key' , 1, 'LR', 'C');
$this->fpdf->Cell(4 , 1, 'Time Schedule' , 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Address' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 1, 'Phone' , 1, 'LR', 'C');

 
/* generate hasil query disini */
$i=1;

foreach($kbb->result() as $data)
{
    $this->fpdf->Ln();
    $this->fpdf->SetFont('Times','',12);
    $this->fpdf->Cell(0.8  , 0.7, $i++  , 1, 'LR', 'C');
    $this->fpdf->Cell(3 , 0.7, $data->cus_corporate_id , 1, 'LR', 'L');
    $this->fpdf->Cell(4 , 0.7, $data->cus_nama_perusahaan , 1, 'LR', 'L');
    $this->fpdf->Cell(3,0.7, $data->cus_cp , 1, 'LR', 'L');
    $this->fpdf->Cell(2,0.7,$data->pkt_tipe , 1, 'LR', 'C');
    $this->fpdf->Cell(1 , 0.7,$data->pkt_jumlah_key , 1, 'LR', 'C');
    $this->fpdf->Cell(4 , 0.7, $data->sched_date , 1, 'LR', 'C');
    $this->fpdf->Cell(5 , 0.7, $data->sched_alamat_kirim  , 1, 'LR', 'L');
    $this->fpdf->Cell(3 , 0.7, $data->cus_handphone  , 1, 'LR', 'C');

}
/* setting posisi footer 3 cm dari bawah */
$this->fpdf->SetY(-3);
 
/* setting font untuk footer */
$this->fpdf->SetFont('Times','',10);
 
/* setting cell untuk waktu pencetakan */
$this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y H:i').' | Created by : Anton Sofyan',0,'LR','L');
 
/* setting cell untuk page number */
$this->fpdf->Cell(9.5, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');
 
/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output("laporan_next.pdf","I");
?>
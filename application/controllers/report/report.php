<?php
         class report extends CI_Controller
          {
            public function __construct()
              {
                 parent::__construct();
                 $this->load->model("report_m");
                 $this->load->library("fpdf");  // Akses library fpdf
             }
     
            public function index()
            {
              $hasil=$this->report_m->ambil_data();
        
             // Setting fpdf //
             $fpdf=new FPDF();
             $fpdf->AddPage();
             $fpdf->SetFont("Arial","",13);
             $baris=10;
              if ($hasil->num_rows()>0)
                  {
                     $hasilnya=$hasil->result();
             
                    $fpdf->Text(10,5,"NIS");
                    $fpdf->Text(25,5,"NAMA");
                    $fpdf->Text(65,5,"ALAMAT");
                   foreach ($hasilnya as $row)
                      {                 
                        $fpdf->Text(10,10+$baris,$row->nis);
                        $fpdf->Text(25,10+$baris,$row->nama);
                        $fpdf->Text(65,10+$baris,$row->alamat);
                        $baris=$baris+6;                 
                      }
                $fpdf->Output();  
             }
          }
      }  
 ?>
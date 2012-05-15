<?php
  class report_m extends CI_Model
   {
     function __construct()
      {
        parent::__construct();
      }
      
      function ambil_data()
      {
        $query_ambil_data="select * from customer";
        $hasil_ambil_data=$this->db->query("$query_ambil_data");
        return $hasil_ambil_data;
      }
   }
 ?>
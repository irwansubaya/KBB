<?php
  class cetakan_m extends CI_Model
   {
     function __construct()
      {
        parent::__construct();
      }
      
      function ambil_data()
      {
        $query_ambil_data="select * from tb_schedule 
                        join tb_customer 
                        WHERE tb_schedule.cus_idx= tb_customer.cus_idx";
        $hasil_ambil_data=$this->db->query("$query_ambil_data");
        return $hasil_ambil_data;
      }
   }
 ?>
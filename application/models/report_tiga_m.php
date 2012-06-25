<?php
  class Report_tiga_m extends CI_Model
   {
     function __construct()
      {
        parent::__construct();
      }
      function get_all()
      {
          return $this->db->get('tb_schedule');
      }
      function ambil_data()
      {
        $query_ambil_data="select * from tb_schedule 
                        join tb_customer
                        join tb_paket
                        WHERE tb_schedule.cus_idx= tb_customer.cus_idx 
                        AND tb_schedule.pkt_idx= tb_paket.pkt_idx";
        $hasil_ambil_data=$this->db->query("$query_ambil_data");
        return $hasil_ambil_data;
      }
   }
 ?>
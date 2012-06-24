<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Admin/Admin Controller
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author              NDI-SOFTWARE DEVELOPMENT TEAM
 * @author              Purwandi <free6300@gmail.com>
 * @since		CodeIgniter Version 2.0
 * @filesource
 */

/**
 * MY Controller Class
 *
 * Loads Table
 *
 * @package		CodeIgniter
 * @subpackage	        Controller
 * @author              Purwandi <free6300@gmail.com>
 * @category	        Model
 */

class Report_tiga extends MY_Controller {

	public $module = array('report/report', 'report', 'report');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		$this->load->model(array(
			'paket_m',
                        'schedule_m'
		));
	}

	/**
	 * Index
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function index ()
	{
		#$this->params['data'] = $this->admin_m->get();
		$this->_view('main_1_3', 'report_next');
	}
        
        
	public function pdf ()
	{
	        $this->load->library('parser');
	        $this->load->library('session');
	        $session = $this->session->userdata('module');
                $data = $this->schedule_m->ambil_data_tiga();
/*
 echo "<pre>";
 var_dump(array_sum($data));
 echo "</pre>";
 exit;
*/              
	 $html = "
        <p align=\"center\"><b>PT. JADIN PRATAMA <br>
        <p align=\"center\"><b>LAPORAN H+3 <br>
        <p align=\"center\"> ".date("d-M-Y",strtotime("-72 hours"))."
	<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\" width=\"100%\">
	    <tr>
            <td align=\"center\"><b>No</td>
            <td align=\"center\" width=\"10%\"><b>Corporate ID</td>
            <td align=\"center\" width=\"15%\"><b>Nama Perusahaan</td>
            <td align=\"center\" width=\"15%\"><b>PIC</td>
            <td align=\"center\" width=\"10%\"><b>Tgl Koneksi</td>
            <td align=\"center\" width=\"15%\"><b>No Telp</td>
            <td align=\"center\" width=\"10%\"><b>Cabang</td>
            <td align=\"center\" width=\"10%\"><b>Status</td>
            <td align=\"center\" width=\"15%\"><b>Respon</td>
            <td align=\"center\" width=\"20%\"><b>Keterangan</td>
            <td align=\"center\" width=\"10%\"><b>No Rekening</td>
	    </tr> ";

$no = 1;
for($i = 0; $i < count($data); $i++)  {
    $html .= "
        <tr>
            <td align=\"center\">".$no++."</td>
            <td align=\"center\">".$data[$i]->cus_corporate_id."</td>
            <td align=\"center\">".$data[$i]->cus_nama_perusahaan."</td>
            <td align=\"center\">".$data[$i]->cus_cp."</td>
            <td align=\"center\">".date('d-M-Y',strtotime($data[$i]->pkt_tanggal_koneksi ))."</td>
            <td align=\"center\">".$data[$i]->cus_telepon_kantor."<br>
                ".$data[$i]->cus_telepon_rumah."<br>
                ".$data[$i]->cus_handphone."
            <td align=\"center\">".$data[$i]->cus_cabang."</td>
            <td align=\"center\">".$data[$i]->sched_status."</td>
            <td align=\"center\">".$data[$i]->call_konfirm."</td>
            <td>".$data[$i]->call_keterangan."</td>
            <td align=\"center\">".$data[$i]->cus_no_rekening."</td>
        </tr>
    ";
}
	 $html .= "</table>";
         $this->load->library('mpdf');
	 $mpdf = new mPDF('','A4-L');
	 $mpdf->WriteHTML($html);
	 $mpdf->Output();

	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
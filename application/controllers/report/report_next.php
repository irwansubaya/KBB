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

class Report_next extends MY_Controller {

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
                $data = $this->schedule_m->ambil_data_next();
/*
 echo "<pre>";
 var_dump(array_sum($data));
 echo "</pre>";
 exit;
*/              
	 $html = "
         <p align=\"center\"><b>PT. JADIN PRATAMA <br>
         <p align=\"center\"><b>LAPORAN BERIKUTNYA <br>
         <p align=\"center\"> STATUS AKTIF
	<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\" width=\"100%\">
	    <tr>
            <td align=\"center\"><b>No</td>
            <td align=\"center\" width=\"10%\"><b>Corporate ID</td>
            <td align=\"center\" width=\"15%\"><b>Nama Perusahaan</td>
            <td align=\"center\" width=\"20%\"><b>PIC</td>
            <td align=\"center\" width=\"10%\"><b>Jenis Paket</td>
            <td align=\"center\" width=\"10%\"><b>Jumlah Key</td>
            <td align=\"center\" width=\"15%\"><b>Schedule</td>
            <td align=\"center\" width=\"20%\"><b>Alamat</td>
            <td align=\"center\" width=\"15%\"><b>Phone</td>
	    </tr> ";

$no = 1;
for($i = 0; $i < count($data); $i++)  {
    $html .= "
        <tr>
            <td align=\"center\">".$no++."</td>
            <td align=\"center\">".$data[$i]->cus_corporate_id."</td>
            <td align=\"center\">".$data[$i]->cus_nama_perusahaan."</td>
            <td align=\"center\">".$data[$i]->cus_cp."</td>
            <td align=\"center\">".$data[$i]->pkt_jenis."</td>
            <td align=\"center\">".$data[$i]->pkt_jumlah_key."</td>
            <td>".date('d-M-Y',strtotime($data[$i]->sched_date ))."
                  ".$data[$i]->sched_time."</td>
            <td>".$data[$i]->sched_alamat_kirim."</td>
            <td align=\"center\">".$data[$i]->cus_handphone."</td>
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
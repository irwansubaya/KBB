<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Admin Model
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
 * Admin Class
 *
 * Loads Table
 *
 * @package		CodeIgniter
 * @subpackage	        Model
 * @author              Purwandi <free6300@gmail.com>
 * @category	        Model
 */

class Schedule_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'schedule';
		$this->idx	 = 'sched_idx';
		$this->fields	 = array(
			'cus_idx' => array('', TRUE),
			'pkt_idx' => array('', TRUE),
			'sched_visit' => array('Schedule Visit', FALSE),
			'sched_status' => array('Schedule Status', TRUE),
			'sched_alamat_kirim' => array('Alamat Kirim', FALSE),
			'sched_resolve_date' => array('Resolve Date',FALSE,'convert_date'),
			'sched_date' => array('Schedule Date',FALSE, 'convert_date'),
			'sched_time' => array('Schedule Time',FALSE),
			'sched_engineer' => array('Engineer', FALSE),
			'sched_keterangan' => array('Keterangan', FALSE)		
		);
	}

	/**
	 * Insert Call
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	 */
	public function insert_call ($sched_idx = FALSE)
	{
		$call[0] = $this->input->post('item_call_nama_admin');
		$call[1] = $this->input->post('item_call_date');
		$call[2] = $this->input->post('item_call_konfirm');
		$call[3] = $this->input->post('item_call_cp_lain');
		$call[4] = $this->input->post('item_call_telp_lain');
		$call[5] = $this->input->post('item_call_status');
		$call[6] = $this->input->post('item_call_keterangan');

		// delete old call, insert new call
		$this->db->delete('call', array('sched_idx' => $sched_idx));
		
		if ($this->input->post('item_call_date'))
		{
			for($i=0; $i<count($this->input->post('item_call_date')); $i++)
			{
				$this->db->set('sched_idx', $sched_idx);
				$this->db->set('call_nama_admin', $call[0][$i]);
				$this->db->set('call_date', convert_datetime($call[1][$i]));
				$this->db->set('call_konfirm',$call[2][$i]);
				$this->db->set('call_cp_lain', $call[3][$i]);
				$this->db->set('call_telp_lain', $call[4][$i]);
				$this->db->set('call_status', $call[5][$i]);
				$this->db->set('call_keterangan', $call[6][$i]);
				$this->db->insert('call');
			}
		}
		return TRUE;
	}

	/**
	 * Get record 
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	*/
	public function get_sched_detail ($sched_idx, $cus_idx, $pkt_idx)
	{
		if ($sched_idx) { $this->db->join('schedule', 'paket.pkt_idx = schedule.pkt_idx'); }
		$this->db->where('customer.cus_idx', $cus_idx);
		$this->db->where('paket.pkt_idx', $pkt_idx);
		if ($sched_idx) { $this->db->where('sched_idx', $sched_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get();
	}

	public function get_sched ($sched_idx,$pkt_idx)
	{
		$this->db->join('customer', 'customer.cus_idx = schedule.cus_idx');
		$this->db->join('paket', 'paket.pkt_idx = schedule.pkt_idx');
		$this->db->order_by('pkt_konfirm','pkt_konfirm = aktif');
		//$this->db->where('schedule.sched_idx', $sched_idx);
		//$this->db->where('paket.pkt_idx', $pkt_idx);
		return parent :: get();
	}
	
	/**
	 * Save method
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	 */
	public function save ($idx = FALSE)
	{
		//$resolved =  ($this->input->post('sched_resolve_date') == '') ? '' : convert_date($this->input->post('sched_resolve_date'));
		//$date =  ($this->input->post('sched_date') == '') ? '' : convert_date($this->input->post('sched_date'));
		$agenda = (($this->input->post('agenda_kunjungan')) > 0) ? implode(',',$this->input->post('agenda_kunjungan')) : '';
		$fitur = (($this->input->post('sched_fitur')) > 0) ? implode(',',$this->input->post('sched_fitur')) : '';

		//$this->db->set('sched_resolve_date',  $resolved);
		//$this->db->set('sched_date',  $date);
		$this->db->set('sched_agenda_kunjungan', $agenda);
		$this->db->set('sched_fitur', $fitur);

		parent :: save ($idx);
		if(!$idx) $idx = $this->db->insert_id();

		// Update status related paket
		$this->db->where('pkt_idx', $this->input->post('pkt_idx'));
		$this->db->update('paket', array('pkt_konfirm'=>$this->input->post('pkt_konfirm'))); 

		return $this->insert_call($idx);
	}

	/**
	 * Save hasil kunjungan method
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	 */
	public function save_hasjung ($idx = FALSE)
	{		
		$this->db->where('sched_idx', $this->input->post('sched_idx'));
		$this->db->update('schedule',
			array('sched_status'=>$this->input->post('sched_status'),
			      'sched_resolve_date'=>convert_date($this->input->post('sched_resolve_date')),
			      'sched_engineer'=>$this->input->post('sched_engineer'),
			      'sched_keterangan'=>$this->input->post('sched_keterangan'),
			      ));
		$this->db->where('pkt_idx', $this->input->post('pkt_idx'));
		$this->db->update('paket', array('pkt_konfirm'=>$this->input->post('sched_status'))); 

		return TRUE;
	}	

	public function ambil_data()
	{
		$this->db->join('customer', 'customer.cus_idx = schedule.cus_idx');
		$this->db->join('paket', 'paket.pkt_idx = schedule.pkt_idx');
		$this->db->where('sched_date', date('Y-m-d'));				  
		return parent :: get();
	}
	public function ambil_data_next()
	{
		$this->db->join('customer', 'customer.cus_idx = schedule.cus_idx');
		$this->db->join('paket', 'paket.pkt_idx = schedule.pkt_idx');
		$this->db->order_by('sched_date ASC');
		$this->db->where('sched_status','active');
		return parent :: get();
	}
	public function ambil_data_tiga()
	{
		$this->db->join('customer', 'customer.cus_idx = schedule.cus_idx');
		$this->db->join('paket', 'paket.pkt_idx = schedule.pkt_idx');
		//$this->db->join('key', 'key.cus_idx = paket.cus_idx');
		$this->db->join('call', 'call.sched_idx = schedule.sched_idx ');		
		//$this->db->order_by('pkt_tanggal_koneksi ASC');
		$this->db->where('pkt_tanggal_koneksi',date("y-m-d",strtotime("-72 hours")));
		
		return parent :: get();
	}
	
}
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
			'cus_corporate_id'=>array('Corporate ID',true),
			'pkt_idx' => array('', TRUE),
			'sched_status' => array('Status', TRUE),
			'sched_date' => array('Schedule Date', TRUE),
			'sched_time' => array('Schedule Time', TRUE),
			//'sched_alamat_kirim' => array('Schedule Time', TRUE),
			'sched_agenda_kunjungan' => array('Schedule Time', TRUE)
		);
	}
	
	
	/**
	 * Get record 
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	*/
	
	
	/*
	public function get_sched_detail ($sched_idx)
	{
		//$this->db->join('paket', 'customer.cus_idx = paket.cus_idx');
		$this->db->join('customer AS cus', 'cus.cus_idx = schedule.cus_idx');
		$this->db->join('paket AS pkt', 'pkt.pkt_idx = cus.pkt_idx');		
		if ($sched_idx) { $this->db->where('pkt_idx', $sched_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get();
	}

	*/	
	/**
	 * Insert SN Key
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	 */
	public function insert_call ($sched_idx = FALSE, $call_idx = FALSE)
	{
		$call = $this->input->post('item_call_admin');
		$call = $this->input->post('item_call_date');
		$call = $this->input->post('item_call_konfirm');
		//$call_kategori = $this->input->post('item_call_kategori');
		//$call_status = $this->input->post('item_call_status');
		$call_cp_lain = $this->input->post('item_call_cp_lain');
		$call_telp_lain = $this->input->post('item_call_telp_lain');
		$call_konfirm = $this->input->post('item_call_keterangan');
		// delete old key, insert key baru
		$this->db->delete('call', array('sched_idx ' => $sched_idx));
		
		if ($this->input->post('item_call_date'))
		{
			for($i=0; $i<count($this->input->post('item_call_date')); $i++)
			{
				$this->db->set('sched_idx', $sched_idx);
				$this->db->set('call_idx', $call_idx);
				$this->db->set('adm_id', $adm_id);
				$this->db->set('adm_username', $call[$i]);
				$this->db->set('call_date', $call[$i]);
				$this->db->set('call_konfirm', $call[$i]);
				//$this->db->set('$call_kategori', $call_kategori[$i]);
				//$this->db->set('call_kategori', $call_status[$i]);
				$this->db->set('call_cp_lain', $call_cp_lain[$i]);
				$this->db->set('Call_telp_lain', $call_telp_lain[$i]);
				$this->db->set('call_keterangan', $call_keterangan[$i]);
				$this->db->insert('call');
			}
		}
		return TRUE;
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
		//$this->db->set('pkt_tanggal_input',date('d-m-y'));
		//$this->db->set('pkt_admin_input','irwan');
		parent :: save ($idx);
		if(!$idx) $idx = $this->db->insert_id();
		return $this->insert_call($idx, $this->input->post('cus_idx'));
		//return parent :: save ($idx);	
	}
}
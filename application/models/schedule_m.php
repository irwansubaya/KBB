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
		$this->idx	 = 'sched_id';
		$this->fields	 = array(
			'cus_idx' => array('', TRUE),
			'cus_corporate_id'=>array('Corporate ID',true),
			'pkt_idx' => array('', TRUE),
			'sched_status' => array('Status', TRUE),
			'sched_date' => array('Schedule Date', TRUE),
			'sched_time' => array('Schedule Time', TRUE),
			'sched_alamat_kirim' => array('Schedule Time', TRUE),
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
	
	public function get_sched_detail ($pkt_idx = FALSE)
	{
		$this->db->join('paket', 'paket.pkt_idx = schedule.pkt_idx');
		$this->db->join('customer', 'customer.cus_idx = paket.cus_idx');
		if ($pkt_idx) { $this->db->where('pkt_idx', $pkt_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get ();
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
		return parent :: save ($idx);	
	}
}
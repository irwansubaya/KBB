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

class Call_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'call';
		$this->idx	 = 'call_idx';
		$this->fields	 = array(
			'call_nama_admin' => array('Nama Admin', TRUE),
			'call_date' => array('Call Date', TRUE),
			'call_konfirm' => array('Komfirm', TRUE),
                        'call_cp_lain' => array('CP Lain', false),
			'call_telp_lain' => array('Telp Lain', false),
			'call_status' => array('Call Status', true),
			'call_keterangan' => array('Keterangan',true)
		);
	}
	
	
	/**
	 * Get record 
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	*/
	public function get_sched_call ($sched_idx = FALSE)
	{
		$this->db->where('sched_idx', $sched_idx);
		$this->db->order_by('call_nama_admin');
		return parent :: get ();
	}
	
	public function get_call_detail ($call_idx = FALSE, $cus_idx = FALSE)
	{
		$this->db->join('customer', 'customer.cus_idx = call.cus_idx');
		if ($call_idx) { $this->db->where('call_idx', $call_idx); }
		if ($cus_idx) { $this->db->where('customer.cus_idx', $cus_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get ();
	}
	
	public function save ($idx = FALSE)
	{
		return parent :: save ($idx);	
	}
	
	public function convert_date ($str = FALSE)
	{
		return date('y-m-d', strtotime($str));
	}
}
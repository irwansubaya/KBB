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
			'cus_idx' => array('Cus Id', TRUE),
			'pkt_idx' => array('Pkt Id', TRUE),
			'sched_status' => array('Status', TRUE),
			'sched_date' => array('Date', TRUE),
                        'sched_time' => array('Time', TRUE),
			'sched_alamat_kirim' => array('Alamat Kirim', TRUE),
			'sched_agenda_kunjungan' => array('Agenda Kunjungan', TRUE),
		);
	}
	
	/**
	 * Insert SN Key
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	 */
	public function insert_sn ($pkt_idx = FALSE, $cus_idx = FALSE)
	{
		$sn = $this->input->post('item_key_sn');
		$username = $this->input->post('item_key_username');
		// delete old key, insert key baru
		$this->db->delete('key', array('pkt_idx' => $pkt_idx));
		
		if ($this->input->post('item_key_sn'))
		{
			for($i=0; $i<count($this->input->post('item_key_sn')); $i++)
			{
				$this->db->set('pkt_idx', $pkt_idx);
				$this->db->set('cus_idx', $cus_idx);
				$this->db->set('key_id', $sn[$i]);
				$this->db->set('key_nama_user', $username[$i]);
				$this->db->insert('key');
			}
		}
		$this->db->set('pkt_jumlah_key', $pkt_idx);
		return TRUE;
	}
	
	/*public function get_paket_detail ($pkt_idx = FALSE)
	{
		$this->db->join('customer', 'customer.cus_idx = paket.cus_idx');
		if ($pkt_idx) { $this->db->where('pkt_idx', $pkt_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get ();
	}
	*/
	/**
	 * Get record 
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	*/
	public function get_schedule_detail ($sched_idx=false, $cus_idx =FALSE)
	{
		$this->db->join('customer', 'customer.cus_idx = schedule.cus_idx');
		if ($sched_idx) { $this->db->where('sched_idx', $sched_idx); }
		else if ($cus_idx) { $this->db->where('customer.cus_idx ', $cus_idx); }
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
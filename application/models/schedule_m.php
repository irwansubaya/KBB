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
			//'sched_date_time' => array('Date/Time', TRUE, 'convert_datetime'),
			'sched_date_time' => array('Date/Time'),
			'sched_visit' => array('Schedule Visit',true),
			'sched_agenda_kunjungan'=>array ('Agenda Kunjungan'),
			'sched_alamat_kirim' => array('Alamat Kirim', FALSE)
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
		$call[5] = $this->input->post('item_call_keterangan');

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
				$this->db->set('call_keterangan', $call[5][$i]);
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
		$agenda = (($this->input->post('agenda_kunjungan')) > 0) ? implode(',',$this->input->post('agenda_kunjungan')) : '';
		$this->db->set('sched_agenda_kunjungan', $agenda);
		parent :: save ($idx);
		if(!$idx) $idx = $this->db->insert_id();
		return $this->insert_call($idx);
	}
}
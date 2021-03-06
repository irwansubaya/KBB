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

class Customer_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'customer';
		$this->idx	 = 'cus_idx';
		$this->fields	 = array(			
			'cus_corporate_id' => array('Corporate ID', TRUE,'exact_length[10]'),
			'cus_nama_perusahaan' => array('Nama Perusahaan', TRUE),
			'cus_no_ktp' => array('No KTP', FALSE),
			'cus_no_rekening' => array('No Rekening', FALSE,'integer|exact_length[10]'),
			'cus_bidang_usaha' => array('Bidang Usaha', FALSE),
			'cus_alamat' => array('Alamat', TRUE),
			'cus_cp' => array('Contact Person', TRUE),			
			'cus_kec' => array('Kecamatan', FALSE),
			'cus_kel' => array('Kelurahan', FALSE),
			'cus_kota' => array('Kota', FALSE),
			'cus_kodepos' => array('Kode Pos', FALSE,'integer|exact_length[5]'),
			'cus_telepon_kantor' => array('Telp Kantor', FALSE),
			'cus_telepon_rumah' => array('Telp Rumah', FALSE),
			'cus_handphone' => array('Handphone', FALSE),
			'cus_no_fax' => array('No Fax', FALSE),
			'cus_cabang' => array('Cabang', FALSE),
			'cus_kode_cabang' => array('Kode Cabang', FALSE,'integer|exact_length[4]'),
			'cus_email' => array('Email', false, 'valid_email')
		);

		$this->data = array(
			'cus_nama_perusahaan'=>$this->input->get('cus_nama_perusahaan'),
			'asdes'		=> $this->input->get('asdes'),
			'corpname'		=> $this->input->get('cus_nama_perusahaan'),
			'cus_corporate_id'	=> $this->input->get('cus_corporate_id'),
			'cus_tanggal_input'	=> $this->input->get('cus_tanggal_input'),
			'pkt_tanggal_koneksi'=> $this->input->get('pkt_tanggal_koneksi'),
			'pkt_konfirm'		=> $this->input->get('pkt_konfirm')
		);

		$this->page         = $this->input->get('page') != 0 ? ((int) ($this->input->get('page') - 1) * 25) : 0;
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
		$this->db->set('cus_tanggal_input',date('Y-m-d'));
		$this->db->set('cus_admin_input','irwan');		
		return parent :: save ($idx);	
	}

	public function get_schedule_detail ($sched_idx = FALSE)
	{
		$this->db->join('paket', 'paket.cus_idx = customer.cus_idx');
		$this->db->join('schedule', 'schedule.pkt_idx = paket.pkt_idx');
		//$this->db->join('call', 'call.call_idx = schedule.call_idx');
		$this->db->where('sched_idx', $sched_idx);
		return parent :: get ();
	}

	public function get_paket_schedule ($cus_idx, $pkt_idx, $sched_idx = FALSE)
	{
		$this->db->join('paket', 'paket.cus_idx = customer.cus_idx');
		if ($sched_idx) { $this->db->join('schedule', 'paket.pkt_idx = schedule.pkt_idx'); }
		$this->db->where('customer.cus_idx', $cus_idx);
		$this->db->where('paket.pkt_idx', $pkt_idx);
		if ($sched_idx) { $this->db->where('sched_idx', $sched_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get();
	}

	
	public function get_list_schedule ($cus_idx, $pkt_idx)
	{
		$this->db->join('paket', 'paket.cus_idx = customer.cus_idx');
		$this->db->join('schedule', 'paket.pkt_idx = schedule.pkt_idx');
		$this->db->where('customer.cus_idx', $cus_idx);
		$this->db->where('paket.pkt_idx', $pkt_idx);
		//$this->db->order_by('sched_date_time');
		return parent :: get();
	}	

	public function get_by_corporate_id ($cus_corporate_id = false)
	{
		$this->db->where('cus_corporate_id', $cus_corporate_id);
		return parent :: get ();
	}
	
	/**
	 * [get_customer pagination]
	 * @return [type] [description]
	 */
	public function get_customer ()
	{
		$this->db->join('paket', 'customer.cus_idx = paket.cus_idx', 'left');
		foreach ($this->data as $key => $value) 
		{
			if ($value && $key == 'cus_nama_perusahaan') $this->db->like($key, $value);
			elseif ($value && $key == 'cus_corporate_id') $this->db->like($key, $value);
			elseif ($value && $key == 'cus_tanggal_input') $this->db->where($key, date('Y-m-d', strtotime($value)));
			elseif ($value && $key == 'pkt_tanggal_koneksi') $this->db->where($key, date('Y-m-d', strtotime($value)));
			elseif ($value && $key == 'pkt_konfirm') $this->db->like($key, $value);
			//$this->db->order_by('pkt_konfirm','Follo');
			$this->db->order_by('pkt_konfirm DESC, pkt_tanggal_koneksi');
		}
		$this->db->limit('25',$this->page);
		return parent::get();
	}

	/**
	 * [count_customer description]
	 * @return int [description]
	 */
	public function count_customer ()
	{
		foreach ($this->data as $key => $value) 
		{
			if ($value && $key == 'cus_nama_perusahaan') $this->db->like($key, $value);
			else if ($value && $key == 'cus_corporate_id') $this->db->like($key, $value);
			else if ($value && $key == 'cus_tanggal_input') $this->db->where($key, date('Y-m-d', strtotime($value)));
			//else if ($value && $key == 'pkt_tanggal_koneksi') $this->db->where($key, date('Y-m-d', strtotime($value)));
			//else if ($value && $key == 'pkt_konfirm') $this->db->where($key,$value);
		}
		return parent :: count_record();
	}

	/**
	 * Return data
	 * 
	 * @return array [description]
	 */
	public function data ()
	{
		return $this->data;
	}

}
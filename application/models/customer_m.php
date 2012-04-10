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
			'cus_corporate_id' => array('Corporate ID', TRUE),
			'cus_nama_perusahaan' => array('Nama Perusahaan', TRUE),
			'cus_bidang_usaha' => array('Bidang Usaha', TRUE),
			'cus_no_rekening' => array('No Rekening', TRUE),
                        'cus_no_ktp' => array('No KTP', TRUE),
			'cus_cp' => array('Contact Person', TRUE),
			'cus_cabang' => array('Cabang', TRUE),
                        'cus_email' => array('Email', FALSE),
			'cus_alamat' => array('Alamat', TRUE),
			'cus_kota' => array('Kota', TRUE),
                        'cus_kodepos' => array('Kode Pos', FALSE),
			'cus_telepon_kantor' => array('Telp Kantor', FALSE),
			'cus_telepon_rumah' => array('Telp Rumah', FALSE),
			'cus_handphone' => array('Handphone', FALSE),
                        'cus_no_fax' => array('No Fax', FALSE),
		);
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
	
	public function get_paket_detail ($pkt_idx = FALSE)
	{
		$this->db->join('customer', 'customer.cus_idx = paket.cus_idx');
		if ($pkt_idx) { $this->db->where('pkt_idx', $pkt_idx); }
		$this->db->order_by('cus_corporate_id');
		return parent :: get ();
	}
	public function get_by_corporate_id ($cus_corporate_id = false)
	{
		$this->db->where('cus_corporate_id', $cus_corporate_id);
		return parent :: get ();
	}
}
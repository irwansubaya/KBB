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
			'cus_corporate_id' => array('Corporate ID', TRUE,'exact_length[10]|alpha'),
			'cus_nama_perusahaan' => array('Nama Perusahaan', TRUE),
			'cus_no_ktp' => array('No KTP', FALSE),
			'cus_no_rekening' => array('No Rekening', TRUE,'integer|exact_length[10]'),
			'cus_bidang_usaha' => array('Bidang Usaha', FALSE),
                        'cus_alamat' => array('Alamat', TRUE),
			'cus_cp' => array('Contact Person', TRUE),
			'cus_kota' => array('Kota', TRUE),
                        'cus_kodepos' => array('Kode Pos', FALSE,'integer|exact_length[5]'),
			'cus_telepon_kantor' => array('Telp Kantor', FALSE,'integer'),
			'cus_telepon_rumah' => array('Telp Rumah', FALSE,'integer'),
			'cus_handphone' => array('Handphone', FALSE,'integer'),
                        'cus_no_fax' => array('No Fax', FALSE,'integer'),
			'cus_cabang' => array('Cabang', TRUE),
			'cus_kode_cabang' => array('Kode Cabang', FALSE,'integer'),
                        'cus_email' => array('Email', TRUE, 'valid_email'),
			'cus_tanggal_input' => array('Tanggal Input Customer', TRUE),
                        'cus_admin_input' => array('Nama Admin', TRUE)
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
		$this->db->set('cus_tanggal_input',date('Y-m-d'));
		$this->db->set('cus_admin_input','irwan');
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
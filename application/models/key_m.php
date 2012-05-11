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

class Key_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'key';
		$this->idx	 = 'key_idx';
		$this->fields	 = array(
			'cus_corporate_id' => array('Corporate ID', TRUE),
			'pkt_jenis' => array('Jenis Paket', TRUE),
			'pkt_tipe' => array('Tipe Paket', TRUE),
			'pkt_fitur' => array('Fitur Paket', TRUE),
                        'pkt_jumlah_key' => array('Jumlah Key BCA', TRUE),
			'pkt_tanggal_koneksi' => array('Tnaggal Koneksi', TRUE),
			'pkt_tanggal_terima' => array('Tanggal Terima Paket', TRUE),
			'pkt_jatuh_tempo' => array('Tanggal Jatuh Tempo', TRUE),
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
	
	
	/**
	 * Get record 
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	*/
	public function get_paket_key ($pkt_idx = FALSE)
	{
		$this->db->where('pkt_idx', $pkt_idx);
		$this->db->order_by('key_nama_user');
		return parent :: get ();
	}
}
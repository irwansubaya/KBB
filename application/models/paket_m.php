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

class Paket_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();

		// load date helper
		$this->load->helper('date');
		
		$this->tableName = 'paket';
		$this->idx	 = 'pkt_idx';
		$this->fields	 = array(
			'cus_idx' => array('Cus Id', TRUE),
			'pkt_jenis' => array('Jenis Paket', TRUE),
			'pkt_tipe' => array('Tipe Paket', TRUE),
			//'pkt_fitur'=>array('Tipe Paket',true),
                        'pkt_jumlah_key' => array('Jumlah Key BCA', false),
			'pkt_tanggal_koneksi' => array('Tanggal Koneksi', TRUE, 'convert_date'),
			'pkt_tanggal_terima' => array('Tanggal Terima Paket', TRUE, 'convert_date'),
			'pkt_jatuh_tempo' => array('Tanggal Jatuh Tempo', TRUE, 'convert_date'),
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
		return TRUE;
	}
	
	/**
	 * Get record 
	 *
	 * @access	public
	 * @param	integer
	 * @return	boolean
	*/
	public function get_paket_detail ($pkt_idx = FALSE, $cus_idx = FALSE)
	{
		$this->db->join('customer', 'customer.cus_idx = paket.cus_idx');
		if ($pkt_idx) { $this->db->where('pkt_idx', $pkt_idx); }
		if ($cus_idx) { $this->db->where('customer.cus_idx', $cus_idx); }
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
		//$this->db->set('pkt_fitur', implode(',', $this->input->post('fitur')));
		parent :: save ($idx);
		if(!$idx) $idx = $this->db->insert_id();
		return $this->insert_sn($idx, $this->input->post('cus_idx'));
	}

}
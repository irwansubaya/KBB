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

class Bidus_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'bidang_usaha';
		$this->idx	 = 'bid_idx';
		$this->fields	 = array(
			'bid_name' => array('Name', TRUE),
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
		return parent :: save ($idx);	
	}
	
	public function get_by_bidus ($bidus_name = false)
	{
		$this->db->where('bid_name', $bidus_name);
		return parent :: get ();
	}
        
        public function dropdown()
        {
            $arr = array();
            
            $data = parent ::get();
            if ($data)
            {
                foreach($data as $d)
                {
                    $arr[$d->bid_name] = $d->bid_name;
                }
                
                return $arr;
            }
        }
	public function get_bidus ()
	{
		//$this->db->join('paket', 'customer.cus_idx = paket.cus_idx', 'left');
		#foreach ($this->data as $key => $value) 
		#{
			if ($value && $key == 'bid_name') $this->db->like($key, $value);
			//$this->db->order_by('pkt_konfirm DESC, pkt_tanggal_koneksi');
		#}
		$this->db->limit('25',$this->page);
		return parent::get();
	}
	public function count_bidus()
	{
		#foreach ($this->data as $key => $value) 
		#{
			if ($value && $key == 'bid_name') $this->db->like($key, $value);
		#}
		return parent :: count_record();
	}
	public function data ()
	{
		return $this->data;
	}
}
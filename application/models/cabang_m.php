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

class Cabang_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'cabang';
		$this->idx	 = 'cab_idx';
		$this->fields	 = array(
			'cab_code' => array('Kode Cabang', TRUE,'integer'),
			'cab_name' => array('Nama Cabang', TRUE),
		);
		$this->data = array(
			'cab_code'	=>$this->input->get('cab_code'),
			'cab_name'	=> $this->input->get('cab_name'),
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
        
	public function get_by_kodecabang ($cab_code = false)
	{
		$this->db->where('cab_code', $cab_code);
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
                    $arr[$d->cab_name] = $d->cab_name;
                }
                
                return $arr;
            }
        }
	public function get_kodecab ()
	{
		//$this->db->join('paket', 'customer.cus_idx = paket.cus_idx', 'left');
		foreach ($this->data as $key => $value) 
		{
			if ($value && $key == 'cab_code') $this->db->like($key, $value);
			elseif ($value && $key == 'cab_name') $this->db->like($key, $value);
			//$this->db->order_by('pkt_konfirm DESC, pkt_tanggal_koneksi');
		}
		$this->db->limit('25',$this->page);
		return parent::get();
	}
	public function count_kodecab ()
	{
		foreach ($this->data as $key => $value) 
		{
			if ($value && $key == 'cab_code') $this->db->like($key, $value);
			else if ($value && $key == 'cab_name') $this->db->like($key, $value);
		}
		return parent :: count_record();
	}
	public function data ()
	{
		return $this->data;
	}
}
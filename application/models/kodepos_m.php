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

class Kodepos_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'kodepos';
		$this->idx	 = 'kodepos_idx';
		$this->fields	 = array(
			'kodepos_no' => array('NO Kodepos', TRUE,'integer'),
			'kodepos_kel' => array('Kelurahan', TRUE),
			'kodepos_kec' => array('Kecamatan', TRUE),
                        'kodepos_kota' => array('Kota', TRUE),
		);
		$this->data = array(
			'kodepos_no'=>$this->input->get('kodepos_no'),
			'kodepos_kel'		=> $this->input->get('kodepos_kel'),
			'kodepos_kec'		=> $this->input->get('kodepos_kec'),
			'kodepos_kota'	=> $this->input->get('kodepos_kota'),
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
	
	public function get_by_kodepos_no ($kodepos_no = false)
	{
		$this->db->where('kodepos_no', $kodepos_no);
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
                    $arr[$d->kodepos_kota] = $d->kodepos_kota;
                }
                
                return $arr;
            }
        }
	
	public function get_kodepos ()
	{
		//$this->db->join('paket', 'customer.cus_idx = paket.cus_idx', 'left');
		foreach ($this->data as $key => $value) 
		{
			if ($value && $key == 'kodepos_no') $this->db->like($key, $value);
			elseif ($value && $key == 'kodepos_kel') $this->db->like($key, $value);
			elseif ($value && $key == 'kodepos_kec') $this->db->like($key, $value);
			elseif ($value && $key == 'kodepos_kota') $this->db->like($key, $value);
			//$this->db->order_by('pkt_konfirm DESC, pkt_tanggal_koneksi');
		}
		$this->db->limit('25',$this->page);
		return parent::get();
	}
	public function count_kodepos ()
	{
		foreach ($this->data as $key => $value) 
		{
			if ($value && $key == 'kodepos_no') $this->db->like($key, $value);
			else if ($value && $key == 'kodepos_kel') $this->db->like($key, $value);
			else if ($value && $key == 'kodepos_kec') $this->db->where($key, $value);
			else if ($value && $key == 'kodepos_kota') $this->db->where($key, $value);
		}
		return parent :: count_record();
	}
	public function data ()
	{
		return $this->data;
	}
}
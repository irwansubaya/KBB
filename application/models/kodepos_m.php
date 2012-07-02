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
			'kodepos_idx' => array('ID', TRUE),
			'kodepos_no' => array('NO Kodepos', TRUE),
			'kodepos_kel' => array('Kelurahan', TRUE),
			'kodepos_kec' => array('Kecamatan', TRUE),
                        'kodepos_kota' => array('Kota', TRUE),
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
}
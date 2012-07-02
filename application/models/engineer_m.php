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

class Engineer_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'engineer';
		$this->idx	 = 'se_id';
		$this->fields	 = array(
			'se_nama' => array('Nama SE', TRUE),
			'se_tgl_lahir'=>array('Tgl Lahir',TRUE),
			'se_alamat' => array('Alamat', TRUE),
			'se_no_ktp' => array('No KTP', TRUE),
			'se_telepon_rumah' => array('Telp Rumah', false),
			'se_handphone' => array('Handphone', false),
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
	
	public function get_by_se_nama ($se_nama = false)
	{
		$this->db->where('se_nama', $se_nama);
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
                    $arr[$d->se_nama] = $d->se_nama;
                }
                
                return $arr;
            }
        }
}
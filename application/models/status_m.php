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

class Status_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'status';
		$this->idx	 = 'stat_idx';
		$this->fields	 = array(
			'stat_nama' => array('Nama', TRUE),
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
        
        public function dropdown()
        {
            $arr = array();
            
            $data = parent ::get();
            if ($data)
            {
                foreach($data as $d)
                {
                    $arr[$d->stat_nama] = $d->stat_nama;
                }
                
                return $arr;
            }
        }
}
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

class kategori_m extends MY_Model {
	
	public function __construct ()
	{
		parent :: __construct ();
		$this->tableName = 'kategori';
		$this->idx	 = 'kat_idx';
		$this->fields	 = array(
			'kat_nama' => array('Name', TRUE),
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
                    $arr[$d->kat_nama][0] = $d->kat_nama;
		    $arr[$d->kat_nama][1] = $d->kat_status;
                }
                
                return $arr;
            }
        }
}
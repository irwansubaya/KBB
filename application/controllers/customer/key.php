<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Admin/Admin Controller
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
 * MY Controller Class
 *
 * Loads Table
 *
 * @package		CodeIgniter
 * @subpackage	        Controller
 * @author              Purwandi <free6300@gmail.com>
 * @category	        Model
 */

class Key extends MY_Controller {

	public $module = array('customer/key', 'customer', 'key');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		$this->load->model(array(
			'key_m',
		));
	}

	/**
	 * Index
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function index ()
	{
		$this->params['data'] = $this->key_m->get();
		$this->_view('main_1_3', 'index');
	}
	
	/**
	 * Add new supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function insert ()
	{
		if ($this->input->post('save'))
		{
			if ($this->key_m->isValid())
			{
				if ($this->key_m->save())
				{
					setSucces('Data is saved');
					redirect ($this->module[0]);
				}
				else
				{
					setError('Unable to save');
				}
			}
		}
		$this->_view('main_1_3', 'key_new');
	}

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function update ($idx)
	{
		if ($idx AND $this->key_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				if ($this->key_m->isValid())
				{
					// save data
					if ($this->key_m->save($idx))
					{
						setSucces('Data is edited');
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
			$this->params['data']		= $this->key_m->get($idx);
			$this->params['labels']		= $this->key_m->getLabels();
			$this->_view('main_1_3', 'key_new');
		}
		
	}

	/**
	 * Delete supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function delete ($idx)
	{
		$this->key_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
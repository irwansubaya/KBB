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

class Engineer extends MY_Controller {

	public $module = array('admin/engineer', 'admin', 'engineer');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();
		$this->load->library('calendar');
		$this->load->model(array(
			'engineer_m',
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
		$this->params['data'] = $this->engineer_m->get();
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
			if ($this->engineer_m->isValid())
			{
				if ($this->engineer_m->save())
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
		$this->_view('main_1_3', 'engineer_new');
	}

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function update ($idx)
	{
		if ($idx AND $this->engineer_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				if ($this->engineer_m->isValid())
				{
					// save data
					if ($this->engineer_m->save($idx))
					{
						setSucces('Data is edited');
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
			$this->params['data']		= $this->engineer_m->get($idx);
			$this->params['labels']		= $this->engineer_m->getLabels();
			$this->_view('main_1_3', 'engineer_new');
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
		$this->engineer_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
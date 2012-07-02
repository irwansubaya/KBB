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

class Admin extends MY_Controller {

	public $module = array('admin/admin', 'admin', 'admin');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		// cek apakah login
		$this->auth_m->is_secure_redirect(); 

		// cek apakah yang login admin
		if ($this->auth_m->data('adm_status') != 'Administrator')
		{
			$this->auth_m->logout();
			redirect('login');
		}
	

		$this->load->model(array(
			'admin_m',
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
		$this->params['data'] = $this->admin_m->get();
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
			if ($this->admin_m->get_by_adm_username($this->input->post('adm_username')))	# Check cus_corporate_id
			{
				setError('Username <b>'.$this->input->post('adm_username').'</b> already exist. Please check your current input.');
			}
			else
			{
				if ($this->admin_m->isValid())
				{
					if ($this->admin_m->save())
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
			
		}
			$this->_view('main_1_3', 'admin_new');
	}
	

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	
	public function update ($idx)
	{
		if ($idx AND $this->admin_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				$query = $this->admin_m->get_by_adm_username($this->input->post('adm_username'));

				if ($query && count($query) >= 1 && $this->input->post('adm_username_old') != $this->input->post('adm_username'))
				{
					setError('Username <b>'.$this->input->post('adm_username').'</b> already exist. Please check your current input.');
				}
				else
				{
					#if ($this->customer_m->isValid())
					#{
						if ($this->admin_m->save($idx))
						{
							setSucces('Data is saved');
							redirect ($this->module[0].'/update/'.$idx);
						}
						else
						{
							setError('Unable to save');
						}
					#}
				}
			}
			$this->params['data']		= $this->admin_m->get($idx);
			$this->params['labels']		= $this->admin_m->getLabels();
			$this->_view('main_1_3', 'admin_new');
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
		$this->admin_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
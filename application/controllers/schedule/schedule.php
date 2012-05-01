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

class Schedule extends MY_Controller {

	public $module = array('schedule/schedule', 'schedule', 'schedule');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		$this->load->model(array(
			'schedule_m',
			'paket_m',
			'customer_m',
			'visit_m',
			'kategori_m'
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
		$this->params['data'] = $this->schedule_m->get_sched_detail();
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
			if ($this->schedule_m->isValid())
			{
				if ($this->schedule_m->save())
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
		$this->params['kategori'] = $this->kategori_m->dropdown();
		$this->params['visit'] = $this->visit_m->dropdown();
		$this->_view('main_1_3', 'schedule_new');
	}

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function update ($idx)
	{
		if ($idx AND $this->schedule_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				if ($this->schedule_m->isValid())
				{
					// save data
					if ($this->schedule_m->save($idx))
					{
						setSucces('Data is edited');
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
			$this->params['kategori'] = $this->kategori_m->dropdown();
			$this->params['visit'] = $this->visit_m->dropdown();
			$this->params['data']		= $this->schedule_m->get($idx);
			$this->params['labels']		= $this->schedule_m->getLabels();
			$this->_view('main_1_3', 'schedule_new');
		}
		
	}
	/**
	 * Autocomplete using ajax calling data Customer
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function customer_ajax ()
	{
		if ($this->input->is_ajax_request())
		{
			$this->load->model('customer_m');
			$this->db->like('cus_corporate_id', $this->input->get('q'));
			echo json_encode($this->customer_m->get());
		}
	}


	/**
	 * Delete customer
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function delete ($idx)
	{
		$this->schedule_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
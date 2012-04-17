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

class Customer extends MY_Controller {

	public $module = array('customer/customer', 'customer', 'customer');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		$this->load->model(array(
			'customer_m',
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
		$this->params['data'] = $this->customer_m->get_by_date(date('y-m-d'));
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
			if ($this->customer_m->get_by_corporate_id($this->input->post('cus_corporate_id')))	# Check cus_corporate_id
			{
				setError('Customer Corporate ID <b>'.$this->input->post('cus_corporate_id').'</b> already exist. Please check your current input.');
			}
			else
			{
				if ($this->customer_m->isValid())
				{
					if ($this->customer_m->save())
					{
						setSucces('Data is saved');
						redirect ($this->module[0].'/update/'.$this->db->insert_id());
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
			
		}
		// load kota model
		$this->load->model('kota_m');
		$this->load->model('bidus_m');
		$this->load->model('cabang_m');
		$this->params['kota'] = $this->kota_m->dropdown();
		$this->params['bidus'] = $this->bidus_m->dropdown();
		$this->params['cabang'] = $this->cabang_m->dropdown();
		$this->_view('main_1_3', 'customer_new');
	}

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function update ($idx)
	{
		if ($idx AND $this->customer_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				$query = $this->customer_m->get_by_corporate_id($this->input->post('cus_corporate_id'));

				if ($query && count($query) >= 1 && $this->input->post('cus_corporate_id_old') != $this->input->post('cus_corporate_id'))
				{
					setError('Customer Corporate ID <b>'.$this->input->post('cus_corporate_id').'</b> already exist. Please check your current input.');
				}
				else
				{
					if ($this->customer_m->isValid())
					{
						if ($this->customer_m->save($idx))
						{
							setSucces('Data is saved');
							redirect ($this->module[0].'/update/'.$idx);
						}
						else
						{
							setError('Unable to save');
						}
					}
				}
			}
			$this->load->model('kota_m');
			$this->load->model('bidus_m');
			$this->load->model('cabang_m');
			$this->params['kota'] = $this->kota_m->dropdown();
			$this->params['bidus'] = $this->bidus_m->dropdown();
			$this->params['cabang'] = $this->cabang_m->dropdown();
			$this->params['data']		= $this->customer_m->get($idx);
			$this->params['labels']		= $this->customer_m->getLabels();
			$this->_view('main_1_3', 'customer_new');
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
		$this->customer_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
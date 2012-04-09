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

class Paket extends MY_Controller {

	public $module = array('customer/paket', 'customer', 'paket');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		$this->load->model(array(
			'customer_m',
			'paket_m',
			'key_m'
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
		$this->params['data'] = $this->paket_m->get_paket_detail();
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
#			if ($this->paket_m->isValid())
#			{
				if ($this->paket_m->save())
				{
					setSucces('Data is saved');
					redirect ($this->module[0]);
				}
				else
				{
					setError('Unable to save');
				}
#			}
		}
		$this->_view('main_1_3', 'paket_new');
	}

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function update ($idx)
	{
		if ($idx AND $this->paket_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				$this->paket_m->insert_sn($idx, $this->input->post('cus_idx'));
				redirect ($this->module[0] . '/update/' . $idx);
			}
			$this->params['data']	 = $this->paket_m->get_paket_detail($idx);
			$this->params['key']	 = $this->key_m->get_paket_key($idx);
			$this->params['labels'] = $this->paket_m->getLabels();
			$this->_view('main_1_3', 'paket_detail');
		}
		
	}
	/**
	 * Autocomplete using ajax calling data Supplier
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
	 * Delete supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function delete ($idx)
	{
		$this->paket_m->delete($idx);
		$this->customer_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
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
			'customer_m',
			'paket_m',
			'schedule_m'
		));
	}

	/**
	 * Index
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function index ($cus_idx, $pkt_idx)
	{
		$this->params['cus_idx'] = $cus_idx;
		$this->params['pkt_idx'] = $pkt_idx;
		$this->params['cus'] = $this->customer_m->get($cus_idx);
		$this->params['data'] = $this->customer_m->get_list_schedule($cus_idx, $pkt_idx);
		$this->_view('main_1_3', 'index');
	}

	public function update ($cus_idx, $pkt_idx, $sched_idx)
	{
		
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
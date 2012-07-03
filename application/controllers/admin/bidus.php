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

class Bidus extends MY_Controller {

	public $module = array('admin/bidus', 'admin', 'bidus');

	/**
	 * Constructor
	 *
	 */
	public function __construct ()
	{
		parent :: __construct ();

		$this->load->model(array(
			'bidus_m',
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
		$this->load->helper('pagination');
		$this->params['param'] 	= $this->bidus_m->data();
		$this->params['data'] 	= $this->bidus_m->get_bidus();
		//$this->params['data'] = $this->kodepos_m->get();
		#foreach ($this->params['param'] as $key => $value) 
		#{
			$this->url .= $key.'='.$value.'&';
		#}

		$this->params['page']	= create_pagination (
			array(
				'uri'			=> base_url().$this->module[0].'?'.$this->url,
				'limit'		=> 25,
				'query' 		=> TRUE,
				'total_rows'	=> $this->bidus_m->count_bidus()
			)
		);
		
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
			if ($this->bidus_m->get_by_bidus($this->input->post('bid_name')))	# Check cus_corporate_id
			{
				setError('Bidang Usaha <b>'.$this->input->post('bid_name').'</b> already exist. Please check your current input.');
			}
			else
			{
				if ($this->bidus_m->isValid())
				{
					if ($this->bidus_m->save())
					{
						setSucces('Data is saved');
						//redirect ($this->module[0]);
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
			
		}
			$this->_view('main_1_3', 'bidus_new');
	}
	

	/**
	 * Update supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	
	public function update ($idx)
	{
		if ($idx AND $this->bidus_m->get($idx))
		{
			if ($this->input->post('save'))
			{
				$query = $this->bidus_m->get_by_bidus($this->input->post('bid_name'));

				if ($query && count($query) >= 1 && $this->input->post('bid_name_old') != $this->input->post('bid_name'))
				{
					setError('Bidang Usaha <b>'.$this->input->post('bid_name').'</b> already exist. Please check your current input.');
				}
				else
				{
					#if ($this->customer_m->isValid())
					#{
						if ($this->bidus_m->save($idx))
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
			$this->params['data']		= $this->bidus_m->get($idx);
			$this->params['labels']	= $this->bidus_m->getLabels();
			$this->_view('main_1_3', 'bidus_new');
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
		$this->bidus_m->delete($idx);
		redirect ($this->module[0]);
	}
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
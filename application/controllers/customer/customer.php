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
	public $url;

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
			'key_m',
			'kota_m',
			'bidus_m',
			'cabang_m',
			'schedule_m',
			'status_m',
			'call_m',
			'kategori_m'
		));
	}

	/**
	 * Index
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function index ($date = FALSE, $corp_id = FALSE)
	{
		$this->load->helper('pagination');

		$this->params['param'] 	= $this->customer_m->data();
		$this->params['data'] 	= $this->customer_m->get_customer();

		// loop and implode to create an url exist
		foreach ($this->params['param'] as $key => $value) 
		{
			$this->url .= $key.'='.$value.'&';
		}

		$this->params['page']	= create_pagination (
			array(
				'uri'			=> base_url().$this->module[0].'?'.$this->url,
				'limit'			=> 25,
				'query' 		=> TRUE,
				'total_rows'	=> $this->customer_m->count_customer()
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
						redirect ($this->module[0].'/update/detail/'.$this->db->insert_id());
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
			
		}
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
	public function update ($action, $idx)
	{
		if ($idx AND $this->customer_m->get($idx))
		{
			$this->params['action'] = $action;
			if ($action == 'detail')
			{
				if ($this->input->post('save'))
				{
						if ($this->customer_m->isValid())
						{
							if ($this->customer_m->save($idx))
							{
								setSucces('Data is saved');
								redirect ($this->module[0]. '/update/detail/' . $idx);
							}
							else
							{
								setError('Unable to save');
							}
						}
					
				}				
				$this->params['data'] = $this->customer_m->get($idx);
				$this->params['kota'] = $this->kota_m->dropdown();
				$this->params['bidus'] = $this->bidus_m->dropdown();
				$this->params['cabang'] = $this->cabang_m->dropdown();
				$this->params['labels']= $this->customer_m->getLabels();
				$this->_view('main_1_3', 'customer_detail');
			}
			else if ($action == 'paket')
			{
				$this->params['cus'] = $this->customer_m->get($idx);
				$this->params['data'] = $this->paket_m->get_paket_detail(false, $idx);
				$pkt_idx = (!$this->params['data']) ? null : $this->params['data'][0]->pkt_idx;
				$this->params['key'] = $this->key_m->get_paket_key($idx);
				if ($this->input->post('save'))
				{
					if ($this->paket_m->isValid())
					{
						if ($this->paket_m->save($pkt_idx))
						{
							setSucces('Data is saved');
							redirect ($this->module[0]. '/update/paket/' . $idx);
						}
						else
						{
							setError('Unable to save');
						}
					}
				}				
				$this->_view('main_1_3', 'customer_detail_paket');
			}
			else if ($action == 'list_paket')
			{
				$this->params['cus'] = $this->customer_m->get($idx);
				//$this->params['data'] = $this->call_m->get_call_detail(false, $idx);
				//$call_idx = (!$this->params['data']) ? null : $this->params['data'][0]->call_idx;
				//$this->params['key'] = $this->key_m->get_paket_key($pkt_idx);
				/*if ($this->input->post('save'))
				{
					if ($this->call_m->isValid())
					{
						if ($this->call_m->save($call_idx))
						{
							setSucces('Data is saved');
							redirect ($this->module[0]. '/update/call/' . $idx);
						}
						else
						{
							setError('Unable to save');
						}
					}
				}*/
				//$this->params['status'] = $this->status_m->dropdown();
				//$this->params['kategori'] = $this->kategori_m->dropdown();
				$this->_view('main_1_3', 'customer_detail_list_paket');
			}
			/*else if ($action == 'schedule')
			{
				$this->params['cus'] = $this->customer_m->get($idx);
				$this->params['data'] = $this->schedule_m->get_schedule_detail(false, $idx);
				$sched_idx = (!$this->params['data']) ? null : $this->params['data'][0]->sched_idx;
				//$this->params['key'] = $this->key_m->get_paket_key($pkt_idx);
				if ($this->input->post('save'))
				{
					if ($this->schedule_m->isValid())
					{
						if ($this->schedule_m->save($sched_idx))
						{
							setSucces('Data is saved');
							redirect ($this->module[0]. '/update/schedule/' . $idx);
						}
						else
						{
							setError('Unable to save');
						}
					}
				}
				$this->params['status'] = $this->status_m->dropdown();
				$this->_view('main_1_3', 'customer_detail_schedule');
			}
			else if ($action == 'Hasil Kunjungan')
			{
				$this->params['cus'] = $this->customer_m->get($idx);
				$this->params['data'] = $this->hasjung_m->get_hasjung_detail(false, $idx);
				$_idx = (!$this->params['data']) ? null : $this->params['data'][0]->sched_idx;
				//$this->params['key'] = $this->key_m->get_paket_key($pkt_idx);
				if ($this->input->post('save'))
				{
					if ($this->schedule_m->isValid())
					{
						if ($this->schedule_m->save($sched_idx))
						{
							setSucces('Data is saved');
							redirect ($this->module[0]. '/update/hasjung/' . $idx);
						}
						else
						{
							setError('Unable to save');
						}
					}
				}
				$this->params['status'] = $this->status_m->dropdown();
				$this->_view('main_1_3', 'customer_detail_hasil_kunjungan');
			}*/
		}
	}
	
	/**
	 * Autocomplete using ajax calling data Supplier
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function cabang_ajax ()
	{
		if ($this->input->is_ajax_request())
		{
			$this->load->model('cabang_m');
			$this->db->like('cab_code', $this->input->get('q'));
			echo json_encode($this->cabang_m->get());
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
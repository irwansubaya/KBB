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
			'schedule_m',
			'status_m',
			'visit_m',
			'konfirm_m',
			'call_m',
			'engineer_m'
		));
	}

	/**
	 * Index
	 *
	 * @access	public
	 * @return	parent class function
	 */
	public function index ($cus_idx = false, $pkt_idx=false)
	{
		$this->params['param'] 	= $this->customer_m->data();
		$this->params['cus_idx'] = $cus_idx;
		$this->params['pkt_idx'] = $pkt_idx;
		$this->params['cus'] = $this->customer_m->get($cus_idx);
		$this->params['data'] = $this->customer_m->get_list_schedule($cus_idx, $pkt_idx);
		$this->_view('main_1_3', 'index');
	}
	public function schedule_list ($cus_idx, $pkt_idx)
	{
		$this->params['cus_idx'] = $cus_idx;
		$this->params['pkt_idx'] = $pkt_idx;
		$this->params['cus'] = $this->customer_m->get($cus_idx);
		$this->params['data'] = $this->customer_m->get_list_schedule($cus_idx, $pkt_idx);
		$this->_view('main_1_3', 'schedule_list');
	}
	public function insert ($cus_idx, $pkt_idx)
	{
		
		if ($this->input->post('save'))
		{
			if ($this->schedule_m->isValid())
			{
				if ($this->schedule_m->save())
				{
					setSucces('Data is saved');
					$cus_idx = $this->input->post('cus_idx');
					$pkt_idx = $this->input->post('pkt_idx');
					redirect ($this->module[0].'/schedule_list/'.$cus_idx.'/'.$pkt_idx);
				}
				else
				{
					setError('Unable to save');
				}
			}
		}
		$this->params['cus']=$this->customer_m->get($cus_idx);
		$this->params['data'] = $this->customer_m->get_paket_schedule($cus_idx, $pkt_idx);
		//$this->params['pkt_idx'] = $this->paket_m->get_paket($sched_idx);
		$this->params['visit'] = $this->visit_m->dropdown();
		$this->params['konfirm'] = $this->konfirm_m->dropdown();
		$this->_view('main_1_3', 'schedule_new');
	}
	/*
	public function update ($cus_idx, $pkt_idx, $sched_idx)
	{
		if ($sched_idx AND $this->schedule_m->get($sched_idx))
		{
			
			if ($this->input->post('save'))
			{
				if ($this->schedule_m->isValid())
				{
					if ($this->schedule_m->save($sched_idx))
					{						
						setSucces('Data is saved');
						$cus_idx = $this->input->post('cus_idx');
						$pkt_idx = $this->input->post('pkt_idx');
						redirect ($this->module[0].'/schedule_list/'.$cus_idx.'/'.$pkt_idx.'/'.$sched_idx);
						//redirect ($this->module[0].'/update/'.$cus_idx.'/'.$pkt_idx.'/'.$sched_idx);
					}
					else
					{
						setError('Unable to save');
					}
				}
			}
		$this->params['cus']=$this->customer_m->get($cus_idx);
		$this->params['data'] = $this->customer_m->get_schedule_detail($sched_idx);
		$this->params['call'] = $this->call_m->get_sched_call($sched_idx);
		$this->params['visit'] = $this->visit_m->dropdown();
		$this->params['konfirm'] = $this->konfirm_m->dropdown();
		$this->params['status'] = $this->status_m->dropdown();
		$this->_view('main_1_3', 'schedule_detail');
		}	
	}*/
	
	public function update ($action, $cus_idx, $pkt_idx = FALSE, $sched_idx = false)
	{ 
		if ($sched_idx AND $this->schedule_m->get($sched_idx))
		{
			$this->params['action'] = $action;
			if ($action == 'schedule')
			{				
				if ($this->input->post('save'))
				{
					if ($this->schedule_m->isValid())
						{
							if ($this->schedule_m->save($sched_idx))
							{						
								//setSucces('Data is saved');
								$cus_idx = $this->input->post('cus_idx');
								$pkt_idx = $this->input->post('pkt_idx');
								redirect ($this->module[0].'/schedule_list/'.$cus_idx.'/'.$pkt_idx);
								//redirect ($this->module[0].'/update/schedule/'.$cus_idx.'/'.$pkt_idx.'/'.$sched_idx);
							}
							else
							{
								setError('Unable to save');
							}
						}
				}
				$this->params['cus']=$this->customer_m->get($cus_idx);
				$this->params['data'] = $this->customer_m->get_schedule_detail($sched_idx);
				$this->params['call'] = $this->call_m->get_sched_call($sched_idx);
				$this->params['visit'] = $this->visit_m->dropdown();
				$this->params['konfirm'] = $this->konfirm_m->dropdown();
				$this->params['status'] = $this->status_m->dropdown();
				$this->_view('main_1_3', 'schedule_detail');
			}
			else if ($action == 'hasjung')
			{
				if ($this->input->post('save'))
				{
					if ($this->schedule_m->isValid())
						{
							if ($this->schedule_m->save($sched_idx))
							{						
								//setSucces('Data is saved');
								$cus_idx = $this->input->post('cus_idx');
								$pkt_idx = $this->input->post('pkt_idx');
								redirect ($this->module[0].'/update/hasjung/'.$cus_idx.'/'.$pkt_idx.'/'.$sched_idx);
							}
							else
							{
								setError('Unable to save');
							}
						}
				}
				$this->params['cus']=$this->customer_m->get($cus_idx);
				$this->params['data'] = $this->customer_m->get_schedule_detail($sched_idx);
				$this->params['call'] = $this->call_m->get_sched_call($sched_idx);
				$this->params['visit'] = $this->visit_m->dropdown();
				$this->params['konfirm'] = $this->konfirm_m->dropdown();
				$this->params['status'] = $this->status_m->dropdown();
				$this->params['engineer'] = $this->engineer_m->dropdown();
				$this->_view('main_1_3', 'schedule_hasil_kunjungan');
			}
			/*
			else if ($action == 'hasjung')
			{
				if ($this->input->post('save'))
				{
					if ($this->hasil_kunjungan_m->isValid())
					{
						if ($this->hasil_kunjungan_m->save($sched_idx))
						{
								setSucces('Data is saved');
								$cus_idx = $this->input->post('cus_idx');
								$pkt_idx = $this->input->post('pkt_idx');
								redirect ($this->module[0].'/update/schedule/'.$cus_idx.'/'.$pkt_idx.'/'.$sched_idx);
						}
							else
						{
							setError('Unable to save');
						}
					}
					
				}
				$this->params['cus']=$this->customer_m->get($cus_idx);
				$this->params['data'] = $this->customer_m->get_schedule_detail($sched_idx,$cus_idx,$pkt_idx);
				$this->params['call'] = $this->call_m->get_sched_call($sched_idx);
				$this->params['visit'] = $this->visit_m->dropdown();
				$this->params['konfirm'] = $this->konfirm_m->dropdown();
				$this->params['status'] = $this->status_m->dropdown();
				$this->_view('main_1_3', 'schedule_hasil_kunjungan');
			}
			
			else if ($action == 'schedule')
			{
				if ($this->input->post('save'))
				{
					if ($this->schedule_m->isValid())
					{
						if ($this->schedule_m->save($idx))
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
				//$this->params['cus'] = $this->customer_m->get($idx);
				$this->params['cus'] = $this->customer_m->get_paket_schedule($idx, $pkt_idx, $sched_idx);
				$this->params['visit'] = $this->visit_m->dropdown();
				$this->params['konfirm'] = $this->konfirm_m->dropdown();
				$this->params['status'] = $this->status_m->dropdown();
				$this->params['labels']= $this->customer_m->getLabels();
				$this->_view('main_1_3', 'customer_detail_schedule');
			}*/
			/*
			else if ($action == 'schedule')
			{
				if($sched_idx)
				{
					if ($sched_idx == 'customer_new_schedule')
					{
						$this->params['cus'] = $this->customer_m->get($idx);
						$this->params['data'] = $this->customer_m->get_paket_schedule($idx, $pkt_idx, $sched_idx);
						$sched_idx = (!$this->params['data']) ? null : $this->params['data'][0]->pkt_idx;
						$this->params['key'] = $this->call_m->get_call_detail(false,$idx);
						if ($this->input->post('save'))
						{
							if ($this->schedule_m->isValid())
							{
								if ($this->schedule_m->save())
								{
									setSucces('Data is saved');
									redirect ($this->module[0]. '/update/schedule/' . $idx . '/' . $this->db->insert_call());
								}
								else
								{
									setError('Unable to save');
								}
							}
						}				
						$this->_view('main_1_3', 'customer_new_schedule');
					}
					else
					{
						$this->params['cus'] = $this->customer_m->get($idx);
						$this->params['data'] = $this->customer_m->get_paket_schedule($idx, $pkt_idx, $sched_idx);
						$sched_idx = (!$this->params['data']) ? null : $this->params['data'][0]->pkt_idx;
						$this->params['call'] = $this->call_m->get_call_detail($sched_idx);
						if ($this->input->post('save'))
						{
							if ($this->schedule_m->isValid())
							{
								if ($this->schedule_m->save($pkt_idx))
								{
									setSucces('Data is saved');
									redirect ($this->module[0]. '/update/schedule/' . $idx . '/' . $pkt_idx);
								}
								else
								{
									setError('Unable to save');
								}
							}
						}				
						$this->_view('main_1_3', 'customer_detail_schedule');
					}
				}
				else
				{
					$this->params['cus'] = $this->customer_m->get_schedule_detail($idx);
					$this->params['data'] = $this->customer_m->get_paket_schedule(false, $idx);
					$this->_view('main_1_3', 'customer_list_schedule');
				}
			}*/
						
		}
	}
	
}
/* End class Admin */
/* Location ./application/controllers/admin/admin.php */
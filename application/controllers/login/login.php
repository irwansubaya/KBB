<?php
class Login extends MY_Controller {
	
	public $module = 'login';
	
	//constructor
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function index() 
	{
		if ($_POST)
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == TRUE)
			{
				if ($this->auth_m->login())
				{
					if ($this->auth_m->data('adm_status') == 'Administrator')
					{
						redirect('admin/admin');
					}
					elseif ($this->auth_m->data('adm_status') == 'Operator')
					{
						redirect('admin/engineer');
					}
				}
				else
				{
					setError('Username dan password tidak valid');
				}
			}
		}

		$this->load->view('login/index');
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->params['logout'] = 'You have been logged out.';
		redirect ('login');
	}
}
/* End class login.php*/ 
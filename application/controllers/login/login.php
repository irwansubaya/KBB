<?php
class Login extends MY_Controller {
	
	public $module = 'welcome';
	
	//constructor
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		// $this->load->library('session');
	}
	//index for showing the login form
	public function index() 
	{
		parent :: index ();
		// $this->load->view('login_view');
	}
	public function welcome()
	{
		parent::welcome('welcome');
	}
	public function insert ()
	{
		parent :: insert();
	}
	//this function will do the login process
	public function proseslogin() 
	{
		$username = $this->input->post('username'); //read the username that filled by the user
		$password = $this->input->post('password'); //read the password that filled by the user
		
		//$passwordx = md5($password); //this is for change $password into MD5 form
		//the query is to matching the username+password user with username+password from database
		$q = $this->db->query("SELECT * FROM tb_admin WHERE adm_username='$username' AND adm_password='$password'");
		
		// jika terdapat record
		if ($q->num_rows() == 1) 
		{
			// if the query is TRUE, then save the username into session and load the welcome view
			$nama = $q->row()->adm_username;
			
			// save variebel $nama ke session
			$this->session->set_userdata('username',$nama);
			
			//$data['welcome'] = "Welcome $nama";
			//$this->load->view('welcome_login_view', $data);
			
			$this->params['nama_user'] = ''. $nama ;
			parent :: index ('welcome');
		}
		else
		{
			// query error
			//$data['error']='!! Wrong Username or Password !!';
			//$this->load->view('login_view', $data);
			$this->params['error']= 'Username atau password salah';
			parent::index();
		}
	}
	//to do logout process
	public function logout()
	{
		$this->session->sess_destroy();
		$this->params['logout'] = 'You have been logged out.';
		redirect (parent :: index ());
		
	}
}
/* End class login.php*/ 
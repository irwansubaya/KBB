<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Extending Controller
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author      	Purwandi <free6300@gmail.com>
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

class MY_Controller extends CI_Controller {

        public $params = array ();
        public $module = '';
    
        /**
         * Constructor
         *
         */
	public function __construct ()
	{
		parent :: __construct ();

		// load spark template
		$this->load->spark('layout-library/1.0.0');
		$this->load->spark('Debug-Toolbar/1.0.7');
		// load spark library
		$this->load->library('template');
		if (! $this->input->is_ajax_request())
		{
			$this->output->enable_profiler(true);
			$this->load->library('console');
			Console::log_memory();
		}
	}
        
        // ---------------------------------------------------------------------
        
        /**
         * View content
         *
         * Load content view 
         *
         * @access      protected
         * @param       string
         * @return      void
         * @filesource
         */
        protected function _view ($template = 'main_1_3', $actions = 'main')
        {       
                $this->title    = ucwords(preg_replace('/[_]+/', ' ', strtolower(trim($this->router->fetch_class()))));
                $this->method   = ucwords(preg_replace('/[_]+/', ' ', strtolower(trim($this->router->fetch_method()))));

		$this->params['actions']		= $actions;
		$this->params['module']			= $this->module;
		$this->params['method']			= $this->method;
		//$this->params['breadcrumbs']		= anchor(base_url(), 'Base Home').' &raquo; '. ucfirst($this->uri->segment(1)) . ' &raquo; ' . anchor($this->module[0].'/index/'.$this->uri->segment(3), $this->title).' &raquo; '.$this->method;                
		// load template
		if ( ! $this->input->is_ajax_request())
		{
			$this->template
				// loading css file
				->add_stylesheet('jquery-ui-1.8.18.custom.css')
				->add_stylesheet('bootstrap.css')
				->add_stylesheet('bootstrap-responsive.css')
				->add_stylesheet('custom.css')

				// loading javascript file
				->add_javascript('jquery-1.7.1.min.js')
				->add_javascript('jquery-ui-1.8.18.custom.min.js')
				->add_javascript('custom.js')
				->add_javascript('bootstrap.js')
				->add_javascript('date.js')
				->add_javascript('jquery-ui-timepicker-addon.js')
				->add_javascript('jquery.autocomplete.js');
		}

		$this->template ->set_base_title($this->title)
				->add_title_segment($this->method)
				->set_template('layouts/'.$template) // application/views/layouts/default.php
				// and here we go ............................
				->build($this->module[0].'/'.$actions, $this->params);
        }
        
        // ---------------------------------------------------------------------
        
        /**
         * Default Index Page Of Module
         * 
         */
        public function index ()
        {
		$this->_view();
        }
        
}
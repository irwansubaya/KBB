<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Auth
 *
 * @package     Auth
 * @author      Purwandi <pur@purwandi.me>
 * @copyright   Copyright (c) 2009 - 2012, Purwandi. (http://purwandi.me/)
 * @link        http://purwandi.me/
 * @since       Version 1.0
 * @filesource
 */
class Auth_m extends MY_Model {
    
    /**
     * Session key
     */
    private $key = '8bas8wdw';
    
    /**
     * The constructor
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Cek is login
     * 
     * @access public
     * @return void
     */
    public function is_secure ()
    {
        if ($this->session->userdata($this->key))
        {
            return TRUE;
        }
    }
    
    /**
     * Cek is login
     * 
     * @access public
     * @return void
     */
    public function is_secure_redirect ()
    {
        if ( ! $this->session->userdata($this->key))
        {
            redirect (base_url().'login');
            exit;
        }
    }
    
    
    /**
     * Save login
     *
     * @param   array   data
     * @param   string  login tipe
     * return void
     */
    public function login()
    {
        $query = $this->db
                        ->from('admin')
                        ->where('adm_username', $this->input->post('username'))
                        ->where('adm_password', $this->input->post('password'))
                        ->get();
        
        // cek there is a record
        if ($query->num_rows() > 0)
        {
            $this->session->set_userdata($this->key, $query->row_array());
            $query->free_result();
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    /**
     * Get value from session
     *
     * return array     data array session
     */
    public function data($userdata)
    {
        $data = $this->session->userdata($this->key);
        return $data[$userdata];
    }
    
    /**
     * Destroy session
     *
     * return array     data array session
     */
    public function logout()
    {
        return $this->session->unset_userdata($this->key);
    }
}

/* End of file auth.php */
/* Location: ./application/model/auth.php */
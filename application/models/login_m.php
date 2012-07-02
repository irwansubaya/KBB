<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login_m extends MY_Model {
 
    public function _construct()
    {
        parent::_construct();
    }
    
    public function periksa_user($data_user)
    {
        $password=substr(md5($data_user['adm_password']),0,16);
        $this->db->where('adm_username',$data_user['adm_username']);
        $this->db->where('adm_password',$password);
        $hasil_query=$this->db-get('adm_username');
        return $hasil_query;
    }
    
    
    /*public function login($user_id)
        {
        $CI =& get_instance();
        $CI->session->set_userdata('logged', $user_id);
        }
     
    public function logout()
        {
        $CI =& get_instance();
        $CI->session->sess_destroy();
        }
     
    public function validate($username,$password)
        {
        $query = $this->db->get_where('admin', array('username' => $username));
        $cek = $query->num_rows();
        if($cek != 0)
        {
        foreach($query->result() as $row):
        $client['adm_id'] = $row->id;
        $client['adm_username'] = $row->username;
        $client['adm_password'] = $row->password;
        endforeach;
         
        $passmd5 = md5($password);
         
        if($passmd5 == $client['adm_password'])
        {
        $this->login($client['adm_id']);
        return true;
        }
        else
        {
        return false;
        }
        }
        else
        {
        return false;
        }
    }*/
 
}
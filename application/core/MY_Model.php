<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ORM Model
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package     CodeIgniter
 * @author      Purwandi <free6300@gmail.com>
 * @since       CodeIgniter Version 2.0
 * @filesource
 */
 
/**
 * ORM Class
 *
 * Loads Table
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @author      Purwandi <free6300@gmail.com>
 * @category    Model
 */
 
class MY_Model extends CI_Model {
     
	public $tableName;
	public $idx;
	public $fields = array ();
	public $has_relations = array ();      // set relationship one to one
	private $query;
	private $db;
	 
	/**
	 * Sample to use this class
	 * 
	 * $tableName   = '';
	 * $idx = '';
	 * $fields = array (
	 *  'id'    => array ('deskripsi fields', TRUE, 'required|valid_emails'),
	 *  'nama'  => array ('deskripsi fields', TRUE, 'required'),
	 *  'alamat'    => array ('deskripsi fields', FALSE)
	 *  )
	 * public has_one = array ('table_name'=>'id_fk')
	 * public has_many = array ('table_name'=>'id_fk', 'table_name'=>'id_fk', 'table_name'=>'id_fk')
	 */
	  
	// set cunstructor
	public function __construct ()
	{
		$CI = & get_instance ();
		$this->db = $CI->db;
		unset ($CI);
	}
	 
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Cek Validation 
	 *
	 * @access  public
	 * @param   string  the field
	 * @param   string  an alias
	 * @return  object
	 */
	public function isValid ($ignoreField = FALSE)
	{
		foreach ($this->fields as $key=>$values)
		{
		     
			if (is_array($ignoreField) && in_array($key,$ignoreField)) continue;
			 
			$rules = 'trim';
			 
			if (count($values) > 1)
			{
				if ( $values[1] ) $rules .= '|required';
				if ( isset($values[2]) ) $rules .= '|'.$values[2];
			}
				 
			$this->form_validation->set_rules($key, $values[0], $rules);
		}
		return $this->form_validation->run();
	}   
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Save and Edit Record 
	 *
	 * @access  public
	 * @param   string
	 * @return  object
	 */
	public function save ($id = FALSE)
	{
		foreach ($this->fields as $key=>$values)
		{
			$this->db->set($key,$this->input->post($key));              
		}
		 
		if ( ! empty($id))
		{
			$this->db->where($this->idx,$id);
			$this->db->update($this->tableName);
		}
		 
		else
		{
			$this->db->insert($this->tableName);
		}
		return ($this->db->affected_rows() == 1);
	}
	     
	// --------------------------------------------------------------------
	 
	/**
	 * Get Record from the table
	 *
	 * @access  public
	 * @param   string  the field
	 * @param   string  an alias
	 * @return  object
	 */
	public function get( $id = FALSE, $page = FALSE)
	{
		if ($this->has_relations) $this->_relationship ();
		if ($id)
		{
			$this->db->where($this->idx,$id);
			return $this->row($this->tableName);
		}
		else
		{
			if ($page)
			{
				$this->db->limit('25',$page);
			}
			return $this->all($this->tableName);
		}
		 
	}
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Get Count Record from the table
	 *
	 * @access  public
	 * @return  object
	 */
	public function count_record()
	{
		return $this->db->count_all_results($this->tableName); 
	}                   
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Delete Record from the table
	 *
	 * @access  public
	 * @param   string  the field
	 * @return  object
	 */
	public function delete($id = FALSE)
	{
		if ( ! empty($id))
		{
			$this->db->where($this->idx,$id);
			$this->db->delete($this->tableName);
			return TRUE;
		}
	     
	}
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Get the labels from array the table
	 *
	 * @access  public
	 * @return  object
	 */
	public function getLabels()
	{
		$labels = array();
		 
		foreach ( $this->fields as $key=>$value )
		{
			$labels[$key] = $value[0];
		}
		 
		return (object) $labels;
	}
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Get the value from fields
	 *
	 * @access  public
	 * @param   string  the field
	 * @param   string  the field
	 * @return  string
	 */
	public function getValue($field = FALSE, $id = FALSE)
	{
		if ( ! empty($field) AND ! empty($id))
		{
			$this->db->where($this->idx,$id);
			$this->db->select($field);
			return $this->one($this->tableName);
		}
	     
	}
	 
	// --------------------------------------------------------------------
	 
	/**
	 * Print error
	 *
	 * @access  public
	 * @param   string  the field
	 * @return  string
	 */
	public function errorMessage($error = FALSE)
	{
	     
		if ( ! empty($error))
		{
			return $this->errorMessage .= $error.br();
		}
	     
	} 
	     
	// ----------------------------------------------------------
	 
	/**
	 * Cek if id is exist
	 *
	 * @access  public
	 * @param   string
	 * @return  boolean
	 */
	public function cek_key ( $key, $string )
	{
		if ( ! empty($key) AND ! empty($string))
		{
		    $this->db->where( $key ,$string);
		    if ( $this->row($this->tableName))
		    {
				return TRUE;
		    }
		    else
		    {
				return FALSE;
		    }
		}
	}
	 
	// AND HE WE GO ADO FUNCTION .......................................
	// ---------------------------------------------------------------------
	 
	/**
	 * Ado Function
	 *
	 * An open source application development framework for PHP 5.1.6 or newer
	 *
	 * @package     CodeIgniter
	 * @author      Purwandi <free6300@gmail.com>
	 * @since       CodeIgniter Version 2.0
	 * @filesource
	 */
	 
	// ---------------------------------------------------------------------
	 
	 
	/**
	 * Get Row
	 * 
	 * @access     public
	 * @param      string
	 * @param      array
	 * @return     boolean
	 */
	public function row ($sql, $where = array())
	{
		if ($this->_get ($sql,$where))
		{
			return $this->query->row();
		}
		else
		{
			return FALSE;
		}
	}
	 
	/**
	 * Get All
	 * 
	 * @access     public
	 * @param      string
	 * @param      array
	 * @return     boolean
	 */
	public function all ($sql, $where = array())
	{
		if ( $this->_get($sql,$where))
		{
			$data = array();
			foreach ($this->query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		 
		else
		{
			return FALSE;
		}
	}
	 
	 
	/**
	 * Get One
	 * 
	 * @access     public
	 * @param      string
	 * @param      array
	 * @return     boolean
	 */
	public function one ($sql,$where = array ())
	{
		if ( $this->_get($sql,$where))
		{
		     
			$arr = $this->query->row_array();
			$val = "";
			 
			foreach ($arr as $a)
			{
				$val = $a; break;
			}
			 
			return $val;
		}
		else
		{
		    return FALSE;
		}
	}
     
	/**
	 * Cek num rows
	 *
	 * Cek apakah ada record di dalam query
	 * 
	 * @access     private
	 * @param      string
	 * @param      array
	 * @return     boolean
	 */
	private function _get ($sql, $where = array ())
	{
		if( (count($where) > 1) OR (!preg_match('/ /',trim($sql))))
		{
			$this->query = $this->db->get_where($sql,$where) or die(mysql_error());
		}
		else
		{
			$this->query = $this->db->query($sql) or die(mysql_error());
		} 
		     
		return ($this->query->num_rows() > 0); 
	}
	 
	/**
	 * Relationship
	 * 
	 * @access     private
	 * @return     boolean
	 */
	private function _relationship ()
	{
		if ( ! empty( $this->has_relations))
		{
			foreach ($this->has_relations as $value=>$item)
			{
				$this->db->join($value,$value.'.'.$item.'='.$this->tableName.'.'.$this->idx);
			}
		}
		 
		return $this;
	}
}
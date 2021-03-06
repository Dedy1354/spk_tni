<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	protected $_table_name;
	protected $_primary_key;
	protected $_order_by;
	protected $_order_by_type;
	protected $_primary_filter = 'intval';
	
	public $rules;

	public function __construct(){
		parent::__construct();
	}

	public function insert($data,$batch=FALSE){
		$data['created_at'] = date("Y-m-d H:i:s");
		if($batch==TRUE){
			$this->db->insert_batch($this->_table_name,$data);
		}else{
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
			return $id;
		}
	}

	public function update($data,$where=array())
	{
		$data['updated_at'] = date("Y-m-d H:i:s");
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($this->_table_name);
	}

	public function get($id=NULL ,$single=FALSE){
		if($id!=NULL){
			$filter = $this->_primary_filter;
			//$id = $filter($id);
			$this->db->where($this->_primary_key,$id);
			$method = 'row';
		}
		else if($single==TRUE){ 
			$method = 'row';
		}else{
			$method = 'result';
		}
		
		if($this->_order_by_type){
			$this->db->order_by($this->_order_by,$this->_order_by_type);
		}
		else{
			$this->db->order_by($this->_order_by);
		}
		return $this->db->get($this->_table_name)->$method();
	}

	public function get_by($where = NULL , $limit=NULL, $offset = NULL , $single =  FALSE  , $select = NULL)
	{
		if($select!=NULL){
			$this->db->select($select);
		}
		if($where){
			$this->db->where($where);
		}
		if(($limit) && ($offset)){
			$this->db->limit($limit ,$offset);
		}
		else if ($limit){
			$this->db->limit($limit);
		}

		return $this->get(NULL,$single);
	}

	public function delete($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);

		if(!$id){
			return FALSE;
		}
		$this->db->where($this->_primary_key, $id);
		$this->db->delete($this->_table_name);
	}

	public function delete_by($where = NULL){
		if($where){
			$this->db->where($where);
		}
		$this->db->delete($this->_table_name);
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */
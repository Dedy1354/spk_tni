<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'users';
		$this->_primary_key = 'id';
	}

	public function check_user($username , $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->_table_name)->row();
	}

	public function join_personel($id=NULL){
		$this->db->select('personel.*, users.*');
		$this->db->from('users','personel');
		$this->db->join('personel', 'users.personel_id = personel.id','left');
		$method = 'result';
		if($id!=NULL){
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		return $this->db->get()->$method();
	}


	/*
	public function check_username($username){
		$this->db->where_in('username', $username);
		return $this->db->get($this->_table_name)->result();
	}
	*/
}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_personel extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'personel';
		$this->_primary_key = 'id';
	}

	public function get_personel($id=NULL){
		$this->db->select('personel.id, personel.nama');
		$this->db->from('penilaian','personel');
		$this->db->where('penilaian.personel_id != personel.id');
		$method = 'result';
		if($id!=NULL){
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		return $this->db->get()->$method();
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
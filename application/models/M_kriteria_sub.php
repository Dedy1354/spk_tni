<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria_sub extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'kriteria_sub';
		$this->_primary_key = 'id';
	}

	private function get_total_bobot(){
		$this->db->select('kriteria_id');
		$this->db->select_sum('bobot');
		$this->db->group_by('kriteria_id');
		//SELECT kriteria_id, SUM(bobot) as total FROM kriteria_sub GROUP BY (kriteria_id)
		return  $this->db->get($this->_table_name)->result();
	}
	public function get_bobot_ternomalisasi(){
		$kriteria_sub = $this->get();
		$data = array();
		$total_bobot = $this->get_total_bobot();
		$i = 1;
		foreach ($total_bobot as $b) {
			foreach ($kriteria_sub as $ks) {
				if($ks->kriteria_id == $b->kriteria_id){
					$data[$i++] = $ks->bobot / $b->bobot;
				}
			}
			
		}
		return $data;
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'kriteria';
		$this->_primary_key = 'id';
	}
	private function get_total_bobot(){
		$this->db->select_sum('bobot');
		return  $this->db->get($this->_table_name)->row();
	}
	public function get_bobot_ternomalisasi(){
		$kriteria = $this->get();
		$data = array();
		$total_bobot = $this->get_total_bobot()->bobot;
		foreach ($kriteria as $kriteria) {
			$data[$kriteria->id] = $kriteria->bobot / $total_bobot;
		}
		return $data;
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
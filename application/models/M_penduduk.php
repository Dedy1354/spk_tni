<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penduduk extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'penduduk';
		$this->_primary_key = 'nik';
	}

	public function jumlah_penduduk($id_lksa){
		$sql = 'SELECT COUNT(id_lksa) as jumlah_penduduk FROM `penduduk` WHERE id_lksa='.$id_lksa;
		return $this->db->query($sql)->row(); 
	}

}

/* End of file M_penduduk.php */
/* Location: ./application/models/M_penduduk.php */
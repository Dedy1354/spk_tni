<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends MY_Model {
	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'penilaian';
		$this->_primary_key = 'id';
	}

	public function get_personel($id=NULL){

		if($this->get()==NULL){
			$this->db->select('personel.id, personel.nama');
			$this->db->where('personel.keterangan', 'Anggota');
			$this->db->from('personel');
			return $this->db->get()->result();
		}else{
			$sql = 'SELECT personel.id , personel.nama FROM personel WHERE personel.id NOT IN (SELECT penilaian.personel_id FROM penilaian) AND personel.keterangan = "Anggota"';
			return $this->db->query($sql)->result();
	
		}
	}

	public function join_personel($id=NULL){
		$this->db->select('personel.*, penilaian.id as id_pel , penilaian.personel_id, penilaian.kriteria, penilaian.kriteria_sub , penilaian.kriteria_kv, penilaian.kriteria_sub_kv, penilaian.skor');
		$this->db->from('penilaian','personel');
		$this->db->join('personel', 'penilaian.personel_id = personel.id','left');
		$method = 'result';
		if($id!=NULL){
			$this->db->where('penilaian.personel_id', $id);
			$this->db->where('personel.level', $id);
			$method = 'row';
		}
		$this->db->order_by('skor', 'DESC');
		
		return $this->db->get()->$method();
	}

	public function detail_penilaian($id=NULL){
		$this->db->select('personel.*, penilaian.id as id_pel , penilaian.personel_id, penilaian.kriteria, penilaian.kriteria_sub , penilaian.kriteria_kv, penilaian.kriteria_sub_kv, penilaian.skor');
		$this->db->from('penilaian','personel');
		$this->db->join('personel', 'penilaian.personel_id = personel.id','left');
		$method = 'result';
		if($id!=NULL){
			$this->db->where('penilaian.personel_id', $id);
			$method = 'row';
		}
		$this->db->order_by('skor', 'DESC');
		
		return $this->db->get()->$method();
	}

}
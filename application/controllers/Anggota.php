<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();$this->load->model('m_kriteria');
		$this->load->model('m_kriteria_sub');
		$this->load->model('m_penilaian');
		$this->load->model('m_personel');
		$this->load->model('m_berita');
		$this->load->model('m_users');
		$this->load->library('hitung');
		$this->side = 'anggota';
		//$this->site = 'penilaian';
		$this->url = $this->side;
		if($this->session->userdata('level')!='Anggota'){
			redirect('login');
		}
	}

	public function penilaian(){
		$data['title'] = 'List Penilaian';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_penilaian->join_personel();
		// url Create, Update and Delete
		$data['url_add'] = site_url($this->url.'/form');
		$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');
		$data['url_detail'] = site_url($this->url.'/detail_penilaian/');
		$this->template('v_list_penilaian',$data);
	}

	public function berita(){
		$data['title'] = 'List Berita';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_berita->get();
		$data['url_detail'] =  site_url($this->url.'/detail_berita/');
		$this->template('v_list_berita',$data);
	}

	public function detail_berita($id){
		$data['title'] = 'List Berita';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_berita->get_by(array('id'=>$id));
		$this->template('v_detail_berita',$data);
	}

	public function detail_penilaian($id){
		$data['title'] = 'List Penilaian';
		$data['data'] = $this->m_penilaian->detail_penilaian($id);
		$kriteria = json_decode($data['data']->kriteria,true);
		$kriteria_sub = json_decode($data['data']->kriteria_sub,true);

		$kriteria_kv = json_decode($data['data']->kriteria_kv,true);
		$kriteria_sub_kv = json_decode($data['data']->kriteria_sub_kv,true);

		$k = array();
		for ($i = 1; $i < sizeof($kriteria)+1; $i++) {
			$k[$i] = $this->hitung->nilai_kriteria_kv($kriteria[$i]);
		}
		$data['kriteria'] = $k;

		$ks = array();
		for ($i = 1; $i <= 8; $i++) {
			$ks[$i] = $kriteria_sub[$i];
		}
		for ($i = 9; $i < sizeof($kriteria_sub)+1; $i++) {
			$ks[$i] = $this->hitung->nilai_kesehaan_luar_kv($kriteria_sub[$i]);
		}
		$data['kriteria_sub'] = $ks;

		//print_r(json_decode($data['data']->kriteria_kv,true));
		$this->template('v_detail_penilaian',$data);
	}

	public function profil($id){
		$data['title'] = 'List Penilaian';
		$data['action'] = site_url($this->url.'/ganti_password/'.$id);
		$data['data'] = $this->m_personel->get_by(array('id' => $id));
		
		$this->template('v_profil',$data);
	}
	public function ganti_password($id){
		$pw_lama =  $this->input->post('password_lama',true);
	    $pw_baru =  $this->input->post('password_baru',true);

	    $row = $this->m_users->get_by(array('password' => $pw_lama));

	    if($row){
	    	$data = array(
				'password'		=> $pw_baru,
			);
	    	$this->m_users->update($data,array('username'=>$id));
	    	$this->session->set_flashdata('success', 'Password Berhasil Diganti');
	    }else{
	    	$this->session->set_flashdata('error', 'Password Lama Salah');
	    }

	    redirect('anggota/profil/'.$id,'refresh');
	}
}

/* End of file Anggota.php */
/* Location: ./application/controllers/admin/User.php */
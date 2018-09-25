<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->side = 'komandan';
		$this->site = 'berita';
		$this->url = $this->side.'/'.$this->site;
		if($this->session->userdata('level')!='Komandan'){
			redirect('login');
		}
	}


	public function index(){
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


}

/* End of file Anggota.php */
/* Location: ./application/controllers/admin/User.php */
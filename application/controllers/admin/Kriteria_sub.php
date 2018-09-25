<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_sub extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		$this->load->model('m_kriteria_sub');
		$this->load->model('m_kriteria');
		$this->side = 'admin';
		$this->site = 'kriteria_sub';
		$this->url = $this->side.'/'.$this->site;
		
	}


	public function form($id=NULL){
		// Kriteria
		if($id==NULL){
			$data['title'] = 'Tambah Kriteria';
			$data['action'] = site_url($this->url.'/insert');
		}else{
			$row = $this->m_kriteria_sub->get($id);
			if($row){
				$data['row'] = $row;
				$data['title'] = 'Update Kriteria Sub';
				$data['action'] = site_url($this->url.'/update/'.$id);	
			}else{
				$data['title'] = 'Tambah Kriteria';
				$data['action'] = site_url($this->url.'/insert');	
			}
			
		}

		$data['kriteria'] = $this->m_kriteria_sub->get();
		$data['url_update'] = site_url($this->url.'/form/');
		// url back
		$data['url_back'] = site_url('admin/kriteria/form/'.$this->session->userdata('kriteria_id'));

		$this->template('v_form_kriteria_sub', $data);	
	}

	
	public function insert(){

     	$data = array (
        		'id' 	=> $this->input->post('id',true),
        		'kriteria'	=> $this->input->post('kriteria',true),
        );

     	$row = $this->m_kriteria_sub->get($data['id']);
     	if($row){
     		$this->session->set_flashdata('error', 'Gagal Insert Data');
        	
     	}else{
     		$this->m_kriteria_sub->insert($data);
     		$this->session->set_flashdata('success', 'Berhasil Insert Data');
     	}

     	$this->session->set_flashdata('message', $message);
        redirect($this->url.'/form');
    }

    public function update($id){
     	$data = array (
        		'kriteria_sub'	=> $this->input->post('kriteria_sub',true),
        		'bobot'	=> $this->input->post('bobot',true),
        );
     	$this->m_kriteria_sub->update($data,array('id'=>$id));

     	$this->session->set_flashdata('success', 'Bobot Kriteria Sub Berhasil Di Edit');
     	$url = $this->side.'/kriteria/form/'.$this->session->userdata('kriteria_id');
        redirect($url);			
    }

	public function delete($id){
		$row = $this->m_kriteria_sub->get($id);
		$this->m_kriteria_sub->delete($id);
		
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect($this->url);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
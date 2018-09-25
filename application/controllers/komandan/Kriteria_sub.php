<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_sub extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		$this->load->model('m_kriteria');
		$this->load->model('m_kriteria_sub');
		$this->side = 'admin';
		$this->site = 'kriteria_sub';
		$this->url = 'admin/'.$this->site;
		if($this->session->userdata('level')!='Komandan'){
			redirect('login');
		}
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

		$data['kriteria'] = $this->m_kriteria->get();
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

     	$row = $this->m_kriteria->get($data['id']);
     	if($row){
     		$message = '<div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
								<span class="text-semibold">ID Sudah Ada ! Gagal Tambah Data </span>
					    </div>';
        	
     	}else{
     		$this->m_kriteria->insert($data);
	      	$message = '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
								<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold"> Data Berhasil Disimpan </span>
					    </div>';
     	}

     	$this->session->set_flashdata('message', $message);
        redirect($this->url.'/form');
    }

    public function update($id){
     	$data = array (
        		'kriteria_id'	=> $this->input->post('kriteria_id',true),
        		'kriteria_sub'	=> $this->input->post('kriteria_sub',true),
        );
     	$this->m_kriteria->update($data,array('id'=>$id));
     	$message = '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold"> Data Berhasil Diupdate </span>
					</div>';
	      	

     	$this->session->set_flashdata('message', $message);
        redirect($this->url);			
    }

	public function delete($id){
		$row = $this->m_kriteria->get($id);
		$this->m_kriteria->delete($id);
		$message = '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
								<span class="text-semibold"> Data Berhasil Dihapus </span>
					    </div>';
		$this->session->set_flashdata('message', $message);
		redirect($this->url);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
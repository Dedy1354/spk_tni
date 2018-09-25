<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		// load model
		$this->load->model('m_kriteria');
		$this->load->model('m_kriteria_sub');
		// directori
		$this->side = 'komandan';
		$this->site = 'kriteria';

		$this->url = $this->side.'/'.$this->site;
		if($this->session->userdata('level')!='Komandan'){
			redirect('login');
		}
	}

	public function index()
	{

		$data['title'] = 'List Kriteria';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_kriteria->get();
		// url Create, Update and Delete
		$data['url_add'] = site_url($this->url.'/form');
		$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');

		$this->template('v_list_kriteria',$data);
	}

	public function form($id=NULL){
		// Kriteria Create dan Update
		if($id==NULL){
			$data['title'] = 'Tambah Kriteria';
			$data['action'] = site_url($this->url.'/insert');
		}else{
			$row = $this->m_kriteria->get($id);
			if($row){
				$data['row'] = $row;
				$data['title'] = 'Update Kriteria';
				$data['action'] = site_url($this->url.'/update/'.$id);
				$this->session->set_userdata('kriteria_id',$id);
			}else{
				$data['title'] = 'Tambah Kriteria';
				$data['action'] = site_url($this->url.'/insert');	
			}
			
		}
		$data['title_tab'] = $this->side.'-'.$data['title'];
		$data['url_back'] = site_url($this->url);

		// Data Kriteria Sub
		$data['title_kriteria_sub'] = 'Kriteria Sub';
		$data['kriteria'] = $this->m_kriteria->get($id);
		$where = array('kriteria_id'=>$id); 
		$data['kriteria_sub'] = $this->m_kriteria_sub->get_by($where);
		$data['url_update'] = site_url('admin/kriteria_sub/form/');
		
		$this->template('v_form_kriteria', $data);	
	}
	
	public function insert(){

     	$data = array (
        		'id' 	=> $this->input->post('id',true),
        		'kriteria'	=> $this->input->post('kriteria',true),
        );
     	// cek data dengan primary key
     	$row = $this->m_kriteria->get($data['id']);
     	if($row){
     		// Data Sudah Ada (Gagal Add)
     		$message = '<div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
								<span class="text-semibold">ID Sudah Ada ! Gagal Tambah Data </span>
					    </div>';
        	
     	}else{
     		// Data Belum Ada (Sukses Add)
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
        		'kriteria'	=> $this->input->post('kriteria',true),
        );
     	// update data
     	$this->m_kriteria->update($data,array('id'=>$id));
     	$message = '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold"> Data Berhasil Diupdate </span>
					</div>';
	      	
     	$this->session->set_flashdata('message', $message);
        redirect($this->url);	
    }

	public function delete($id){
		// delete data
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
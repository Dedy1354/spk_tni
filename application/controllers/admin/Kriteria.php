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
		$this->side = 'admin';
		$this->site = 'kriteria';

		$this->url = $this->side.'/'.$this->site;

		if($this->session->userdata('level')!='Admin'){
			redirect('login');
		}
		
	}

	public function index()
	{

		$data['title'] = 'List Kriteria';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_kriteria->get();
		// url Create, Update and Delete

		//$data['url_add'] = site_url($this->url.'/form');
		//$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');

		$this->template('v_list_kriteria',$data);
	}

	public function form($id=NULL){
		// Kriteria Create dan Update
		// Jika id = null maka akan mengarah ke FORM INSERT
		// Jika id = id personel maka akan mengarah ke FORM UPDATE
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

		// Ambil Data Kriteria Sub
		$data['title_kriteria_sub'] = 'Kriteria Sub';
		$data['kriteria'] = $this->m_kriteria->get($id);
		$where = array('kriteria_id'=>$id); 
		$data['kriteria_sub'] = $this->m_kriteria_sub->get_by($where);
		$data['url_update'] = site_url('admin/kriteria_sub/form/');
		
		$this->template('v_form_kriteria', $data);	
	}
	
	public function insert(){
		// Data Dari FORM INSERT
     	$data = array (
        		'id' 	=> $this->input->post('id',true),
        		'kriteria'	=> $this->input->post('kriteria',true),
        );
     	// cek data dengan primary key
     	$row = $this->m_kriteria->get($data['id']);
     	if($row){
     		// Data Sudah Ada (Gagal Add)
			$this->session->set_flashdata('error', 'ID Sudah Ada ! Gagal Tambah Data');
        	
     	}else{
     		// Data Belum Ada (Sukses Add)
     		$this->m_kriteria->insert($data);
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
     	}

        redirect($this->url.'/form');
    }

    public function update($id){
    	// Data dari FORM UPDATE
     	$data = array (
        		'kriteria'	=> $this->input->post('kriteria',true),
        		'bobot'		=> $this->input->post('bobot',true),
        );
     	// Update Data pada Tabel Kriteria By ID 
     	$this->m_kriteria->update($data,array('id'=>$id));
     	$this->session->set_flashdata('success', 'Bobot Kriteria Berhasil Di Edit');
        redirect($this->url);	
    }

	public function delete($id){
		// delete data
		$this->m_kriteria->delete($id);
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect($this->url);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
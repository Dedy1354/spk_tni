<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		// load model
		$this->load->model('m_users');
		// directori
		$this->side = 'admin';
		$this->site = 'users';

		$this->url = $this->side.'/'.$this->site;
		if($this->session->userdata('level')!='Admin'){
			redirect('login');
		}
	}

	public function index()
	{

		$data['title'] = 'List User';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_users->get();
		$data['url_add'] = site_url($this->url.'/form');
		$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');
		$this->template('v_list_users',$data);
	}

	public function form($id=NULL){
		// User Create dan Update
		if($id==NULL){
			$data['title'] = 'Tambah User';
			$data['action'] = site_url($this->url.'/insert');
		}else{
			$row = $this->m_users->get($id);
			if($row){
				$data['row'] = $row;
				$data['title'] = 'Update User';
				$data['action'] = site_url($this->url.'/update/'.$id);
				$this->session->set_userdata('User_id',$id);
			}else{
				$data['title'] = 'Tambah User';
				$data['action'] = site_url($this->url.'/insert');	
			}
			
		}
		$data['title_tab'] = $this->side.'-'.$data['title'];
		$data['url_back'] = site_url($this->url);
		
		$this->template('v_form_users', $data);	
	}
	
	public function insert(){

     	$data = array (
        		'id' 	=> $this->input->post('id',true),
        		'user'	=> $this->input->post('user',true),
        );
     	// cek data dengan primary key
     	$row = $this->m_users->get($data['id']);
     	if($row){
     		// Data Sudah Ada (Gagal Add)
     		$this->session->set_flashdata('error', 'ID Sudah Ada ! Gagal Tambah Data');
        	
     	}else{
     		// Data Belum Ada (Sukses Add)
     		$this->m_users->insert($data);
	      	$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
     	}

     	
        redirect($this->url.'/form');
    }

    public function update($id){
     	$user = array (
	        		'username'		=> $this->input->post('username',true),
	        		'password'		=> $this->input->post('password',true),
	        );
     	// update data
     	$this->session->set_flashdata('success', 'Data Berhasil Diedit');
     	$this->m_users->update($user,array('id'=>$id));
     	
     	//print_r($user);
	      	
     	
        redirect($this->url);	
    }

	public function delete($id){
		// delete data
		$this->m_users->delete($id);
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect($this->url);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
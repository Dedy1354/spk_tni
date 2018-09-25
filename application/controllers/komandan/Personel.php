<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personel extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		// load model
		$this->load->model('m_personel');
		$this->load->model('m_users');
		$this->load->model('m_penilaian');
		// directori
		$this->side = 'komandan';
		$this->site = 'personel';

		$this->url = $this->side.'/'.$this->site;
		if($this->session->userdata('level')!='Komandan'){
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'List Personel';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		// Ambil Semua Data Personel Di Database
		$data['data'] = $this->m_personel->get();
		// Url Action pada Create, Update dan Delete
		$data['url_add'] = site_url($this->url.'/form');
		$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');
		// Load Template dan Kirim Data
		$this->template('v_list_personel',$data);
	}

	public function form($id=NULL){
		// Kriteria Create dan Update
		// Jika id = null maka akan mengarah ke FORM INSERT
		// Jika id = id personel maka akan mengarah ke FORM UPDATE
		if($id==NULL){	// Insert Personel
			$data['title'] = 'Tambah Personel';
			$data['action'] = site_url($this->url.'/insert');
		}else{	// Update Personel By ID	
			$row = $this->m_personel->get($id);	// Ambil Data Personel Di Database By ID
			if($row){	// Jika Ada Data Personel Buka FORM UPDATE
				$data['row'] = $row;
				$data['title'] = 'Update Personel';
				$data['action'] = site_url($this->url.'/update/'.$id);
			}else{		// Jika Tidak Ada Data Personel Buka FORM INSERT (Jaga-Jaga Ada Orang Iseng Masukan ID ngawur pada URL
				$data['title'] = 'Tambah Personel';
				$data['action'] = site_url($this->url.'/insert');	
			}
			
		}

		$data['title_tab'] = $this->side.'-'.$data['title'];
		$data['url_back'] = site_url($this->url);
		// Load Template
		$this->template('v_form_personel', $data);	
	}
	
	public function insert(){
		// Data Dari FORM INSERT
     	$data = array (
        		'id' 	=> $this->input->post('id',true),
        		'nama'	=> $this->input->post('nama',true),
        		'pangkat'	=> $this->input->post('pangkat',true),
        		'keterangan'	=> $this->input->post('keterangan',true),
        );
     	// cek data dengan primary key (ID) pada Tabel PERSONEL
     	$row = $this->m_personel->get($data['id']);
     	if($row){
     		// Data Sudah Ada (Gagal INSERT)
			$this->session->set_flashdata('error', 'ID Sudah Ada ! Gagal Tambah Data');
        	
     	}else{
     		// Insert Data USER pada Tabel USER
     		// Hal ini dilakukan agar setiap personel mempunyai username dan password untuk login
     		// username dan password diisi dengan id personel 
	     	$user = array (
	        		'username' 	=> $data['id'],
	        		'password'	=> $data['id'],
	        		'nama'		=> $data['nama'],
	        		'level'		=> $data['keterangan'],
	        );
	     	
	     	$this->m_users->insert($user);
     		$this->m_personel->insert($data);
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
     	}

        redirect($this->url.'/form');
    }

    public function update($id){
    	// Data dari FORM UPDATE
     	$data = array (
        		'nama'	=> $this->input->post('nama',true),
        		'pangkat'	=> $this->input->post('pangkat',true),
        		'keterangan'	=> $this->input->post('keterangan',true),
        );
     	// Update Data pada Tabel Personel By ID
     	$this->m_personel->update($data,array('id'=>$id));
     	$this->session->set_flashdata('success', 'Data Berhasil Di Edit');
        
        redirect($this->url);
    }

	public function delete($id){
		// delete data PERSONEL By ID
		$this->m_personel->delete($id);
		$this->m_users->delete_by(array('username' => $id));
		$this->m_penilaian->delete_by(array('personel_id' => $id));
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		
		redirect($this->url);
	}


	public function profil($id){
		$data['title'] = 'Profi';
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

	    redirect('komandan/personel/profil/'.$id,'refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
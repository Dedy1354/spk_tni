<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		// load model
		$this->load->model('m_berita');
		$this->load->model('m_users');
		// directori
		$this->side = 'admin';
		$this->site = 'berita';

		$this->url = $this->side.'/'.$this->site;
		if($this->session->userdata('level')!='Admin'){
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'List Berita';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		// Ambil Semua Data Personel Di Database
		$data['data'] = $this->m_berita->get();
		// Url Action pada Create, Update dan Delete
		$data['url_add'] = site_url($this->url.'/form');
		$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');
		$data['url_detail'] = site_url($this->url.'/detail/');
		// Load Template dan Kirim Data
		$this->template('v_list_berita',$data);
	}

	public function form($id=NULL){
		// Kriteria Create dan Update
		// Jika id = null maka akan mengarah ke FORM INSERT
		// Jika id = id personel maka akan mengarah ke FORM UPDATE
		if($id==NULL){	// Insert Berita
			$data['title'] = 'Tambah Berita';
			$data['action'] = site_url($this->url.'/insert');
		}else{	// Update Beita By ID	
			$row = $this->m_berita->get($id);	// Ambil Data Berita Di Database By ID
			if($row){	// Jika Ada Data Personel Buka FORM UPDATE
				$data['row'] = $row;
				$data['title'] = 'Update Berita';
				$data['action'] = site_url($this->url.'/update/'.$id);
			}else{		// Jika Tidak Ada Data Beita Buka FORM INSERT (Jaga-Jaga Ada Orang Iseng Masukan ID ngawur pada URL
				$data['title'] = 'Tambah Berita';
				$data['action'] = site_url($this->url.'/insert');
			}
			
		}

		$data['title_tab'] = $this->side.'-'.$data['title'];
		$data['url_back'] = site_url($this->url);
		// Load Template
		if($id==NULL){
			$this->template('v_form_berita', $data);
		}else{
			$this->template('v_edit_berita', $data);
		}
			
	}
	public function detail($id){
		$data['title'] = 'List Berita';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_berita->get_by(array('id'=>$id));
		$this->template('v_detail_berita',$data);
	}

	public function insert(){
		// Data Dari FORM INSERT
		$config['upload_path']          = './uploads/gambar_berita/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2028;
        $config['max_width']            = 2028;
        $config['max_height']           = 1024;
        $this->load->library('upload', $config);
        
        $nama_file = $_FILES['gambar']["name"];
        
        if ( ! $this->upload->do_upload('gambar')){
        	//echo $this->upload->do_upload('gambar');
            $error = array('error' => $this->upload->display_errors());
        }else{
        	//echo "berhasil";
        	$this->upload->data();
        	
			$data = array (
	        		'judul'	=> $this->input->post('judul',true),
	        		'gambar'	=> $nama_file,
	        		'isi'	=> $this->input->post('editor-full',true),
	        );

     		// Insert Data USER pada Tabel USER
     		$this->m_berita->insert($data);
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
     	
     	} 	

        redirect($this->url.'/form');
        
    }

    public function update($id){
    	// Data dari FORM UPDATE
     	$config['upload_path']          = './uploads/gambar_berita/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2028;
        $config['max_width']            = 2028;
        $config['max_height']           = 1024;
        $this->load->library('upload', $config);
        
        $nama_file = $_FILES['gambar']["name"];
        if($nama_file != NULL){
        	//echo "No";
        	if ( ! $this->upload->do_upload('gambar')){
        	//echo $this->upload->do_upload('gambar');
            $error = array('error' => $this->upload->display_errors());
	        }else{
	        	//echo "berhasil";
	        	$this->upload->data();
	        	$this->delete_file($id);
				$data = array (
		        		'judul'	=> $this->input->post('judul',true),
		        		'gambar'	=> $nama_file,
		        		'isi'	=> $this->input->post('editor-full',true),
		        );
		     	$this->m_berita->update($data,array('id'=>$id));
     			$this->session->set_flashdata('success', 'Data Berhasil Di Edit');
	        }
	    }else{
	    		//echo "YES";
	        	
	        	
				$data = array (
		        		'judul'	=> $this->input->post('judul',true),
		        		'isi'	=> $this->input->post('editor-full',true),
		        );
		     	$this->m_berita->update($data,array('id'=>$id));
     			$this->session->set_flashdata('success', 'Data Berhasil Di Edit');
	    }
        
        
        redirect($this->url);
    }


    private function delete_file($id)
    {
    	// delete data PERSONEL By ID
		$nama_gambar = $this->m_berita->get_by(array('id' => $id));
		$path = "./uploads/gambar_berita/".$nama_gambar[0]->gambar;
		unlink($path);
    }
	public function delete($id){
		$this->delete_file($id);
		$this->m_berita->delete($id);
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		
		redirect($this->url);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
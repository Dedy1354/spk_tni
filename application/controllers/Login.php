<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Frontend_Controller {
	public function __construct(){
		parent::__construct();
		$this->site = 'login';
		$this->load->model('m_users');

	}
	public function index()
	{
		$data['action'] = site_url('login/action_login');

		$this->load->view('login',$data);
		
	}

	public function action_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$row = $this->m_users->check_user($username,$password);
		
		if($row){
			$this->session->set_userdata('nama',$row->nama);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('level',$row->level);

			$this->session->set_userdata('personel_id',$row->username);
			if($row->level == 'Admin'){
				$this->session->set_flashdata('success', 'Berhasil');
				redirect('admin/berita');
			}else if($row->level == 'Komandan'){
				$this->session->set_flashdata('success', 'Berhasil');
				redirect('komandan/berita');
			}else if($row->level == 'Anggota'){
				$this->session->set_flashdata('success', 'Berhasil');
				redirect('anggota/berita');
			}

			
			
		}else{
			$this->session->set_flashdata('error', 'Username dan Password tidak Cocok');
			redirect('login');
		}
	}

	public function action_logout(){
		$this->session->sess_destroy();
		redirect('login');	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
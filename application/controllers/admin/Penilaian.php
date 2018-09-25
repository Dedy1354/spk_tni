<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends Backend_Controller {
	private $url;
	public function __construct(){
		parent::__construct();
		// load model
		$this->load->model('m_kriteria');
		$this->load->model('m_kriteria_sub');
		$this->load->model('m_penilaian');
		$this->load->model('m_personel');
		$this->load->model('m_users');
		$this->load->library('hitung');
		// directori
		$this->side = 'admin';
		$this->site = 'penilaian';

		$this->url = $this->side.'/'.$this->site;
		if($this->session->userdata('level')!='Admin'){
			redirect('login');
		}
	}


	public function index()
	{

		$data['title'] = 'List Penilaian';
		$data['title_tab'] = $this->side.'-'.$data['title'];
		
		$data['data'] = $this->m_penilaian->join_personel();
		// url Create, Update and Delete
		$data['url_add'] = site_url($this->url.'/form');
		$data['url_delete'] = site_url($this->url.'/delete/');
		$data['url_update'] = site_url($this->url.'/form/');
		$data['url_detail'] = site_url($this->url.'/detail/');
		//print_r($data['data']);
		$this->template('v_list_penilaian',$data);
	}

	public function detail($id){
		$data['title'] = 'Detail Penilaian';
		$data['data'] = $this->m_penilaian->detail_penilaian($id);

		$kriteria = json_decode($data['data']->kriteria,true);
		$kriteria_sub = json_decode($data['data']->kriteria_sub,true);

		$kriteria_kv = json_decode($data['data']->kriteria_kv,true);
		$kriteria_sub_kv = json_decode($data['data']->kriteria_sub_kv,true);

		$k = array();
		for ($i = 1; $i < sizeof($kriteria)+1; $i++) {
			$k[$i] = $this->hitung->nilai_kriteria_kv($kriteria[$i])." / ".$kriteria_kv[$i];
		}
		$data['kriteria'] = $k;

		$ks = array();
		for ($i = 1; $i <= 8; $i++) {
			$ks[$i] = $kriteria_sub[$i]." / ".$kriteria_sub_kv[$i];
		}
		for ($i = 9; $i < sizeof($kriteria_sub)+1; $i++) {
			$ks[$i] = $this->hitung->nilai_kesehaan_luar_kv($kriteria_sub[$i])." / ".$kriteria_sub_kv[$i];
		}
		$data['kriteria_sub'] = $ks;

		$this->template('v_detail_penilaian',$data);	
	}

	public function form($id=NULL){
		// Kriteria Create dan Update
		if($id==NULL){
			$data['title'] = 'Tambah Penilaian';

			// Anggota yang akan di nilai
			$data['personel'] = "";
			$personel = $this->m_penilaian->get_personel();
			foreach ($personel as $personel) {
				$data['personel'] .= "<option value=".$personel->id.">".$personel->nama."</option>";
			}

			$data['action'] = site_url($this->url.'/insert');

		}else{
			$row = $this->m_penilaian->get_by(array('personel_id' => $id));
			$personel = $this->m_personel->get();
			if($row){
				$data['kriteria'] = json_decode($row[0]->kriteria,true);
				$data['kriteria_sub'] = json_decode($row[0]->kriteria_sub,true);
				$data['personel'] = $this->m_personel->get($row[0]->personel_id);
				$data['row'] = $row;
				$data['title'] = 'Update Penilaian';
				$data['action'] = site_url($this->url.'/update/'.$id);
			}else{
				$data['title'] = 'Tambah Penilaian';
				$data['action'] = site_url($this->url.'/insert');	
			}
			
		}
		$data['title_tab'] = $this->side.'-'.$data['title'];
		$data['url_back'] = site_url($this->url);
		if($id==NULL){
			$this->template('v_form_penilaian', $data);	
		}else{
			$this->template('v_edit_penilaian', $data);	
		}
		
	}
	
	public function insert(){
		
		/*
     	$kriteria = array (
    		'moral' 					=> $this->input->post('moral',true)),
    		'perilaku_disiplin'			=> $this->input->post('perilaku_disiplin',true)),
    		'sikap_militer'				=> $this->input->post('sikap_militer',true)),
    		'loyalitas'					=> $this->input->post('loyalitas',true)),
    		'prakarsa'					=> $this->input->post('prakarsa',true)),
    		'kemauan_bekerja'			=> $this->input->post('kemauan_bekerja',true)),
    		'kerja_sama'				=> $this->input->post('kerja_sama',true)),
    		'ketabahan'					=> $this->input->post('ketabahan',true)),
    		'prestasi_kerja'			=> $this->input->post('prestasi_kerja',true)),
    		'kemauan_melakukan_tugas'	=> $this->input->post('kemauan_melakukan_tugas',true)),
    		'kemauan_untuk_maju'		=> $this->input->post('kemauan_untuk_maju',true)),
    		'kewibawaan'				=> $this->input->post('kewibawaan',true)),
    		'daya_tangkap'				=> $this->input->post('daya_tangkap',true)),
    		'kemauan_sosialisasi'		=> $this->input->post('kemauan_sosialisasi',true)),
    		'tanggung_jawab'			=> $this->input->post('tanggung_jawab',true)),
        );

        $postur_jasmani = array(
			'lari'			=> $this->hitung->nilai_lari($this->input->post('lari',true)),
			'pull_up'		=> $this->hitung->nilai_pull_up($this->input->post('pull_up',true)),
			'sit_up'		=> $this->hitung->nilai_sit_up($this->input->post('sit_up',true)),
			'push_up'		=> $this->hitung->nilai_push_up($this->input->post('push_up',true)),
			'shuttle_run'	=> $this->hitung->nilai_shuttle_run($this->input->post('shuttle_run',true)),
			'renang'		=> $this->hitung->nilai_renang($this->input->post('renang',true)),
			'tinggi'		=> $this->hitung->nilai_tinggi($this->input->post('tinggi',true)),
			'berat'			=> $this->hitung->nilai_berat($this->input->post('berat',true)),
		);

		$kesehatan_luar = array(
			'kepala'			=> $this->input->post('kepala',true)),
			'hidung'			=> $this->input->post('hidung',true)),
			'sinus'				=> $this->input->post('sinus',true)),
			'mulut'				=> $this->input->post('mulut',true)),
			'telinga'			=> $this->input->post('telinga',true)),
			'membrana'			=> $this->input->post('membrana',true)),
			'mata'				=> $this->input->post('mata',true)),
			'optalmoscopi'		=> $this->input->post('optalmoscopi',true)),
			'pupil'				=> $this->input->post('pupil',true)),
			'gerakan_mata'		=> $this->input->post('gerakan_mata',true)),
			'dada_paru'			=> $this->input->post('dadi_paru',true)),
			'jantung'			=> $this->input->post('jantung',true)),
			'abdomen'			=> $this->input->post('abdomen',true)),
			'anus'				=> $this->input->post('anus',true)),
			'endokrin'			=> $this->input->post('endokrin',true)),
			'genito_urinaria'	=> $this->input->post('genito_urinaria',true)),
			'extremitas_atas'	=> $this->input->post('extremitas_atas',true)),
			'extremitas_bawah'	=> $this->input->post('extremitas_bawah',true)),
			'kaki'				=> $this->input->post('kaki',true)),
			'kulit'				=> $this->input->post('kulit',true)),
			'verteblaris_pelvis'=> $this->input->post('verteblaris_pelvis',true)),
			'neurologi'			=> $this->input->post('neurologi',true)),
		);
        */
		$kriteria = array();
		$kriteria[1]	= $this->input->post('moral',true);
		$kriteria[2]	= $this->input->post('perilaku_disiplin',true);
		$kriteria[3]	= $this->input->post('sikap_militer',true);
		$kriteria[4]	= $this->input->post('loyalitas',true);
		$kriteria[5]	= $this->input->post('prakarsa',true);
		$kriteria[6]	= $this->input->post('kemauan_bekerja',true);
		$kriteria[7]	= $this->input->post('kerja_sama',true);
		$kriteria[8]	= $this->input->post('ketabahan',true);
		$kriteria[9]	= $this->input->post('prestasi_kerja',true);
		$kriteria[10]	= $this->input->post('kemauan_melakukan_tugas',true);
		$kriteria[11]	= $this->input->post('kemauan_untuk_maju',true);
		$kriteria[12]	= $this->input->post('kewibawaan',true);
		$kriteria[13]	= $this->input->post('daya_tangkap',true);
		$kriteria[14]	= $this->input->post('kemauan_sosialisasi',true);
		$kriteria[15]	= $this->input->post('tanggung_jawab',true);
			
		$kriteria_kv = array();
		$i = 1;
		foreach ($kriteria as $k) {
			$kriteria_kv[$i++] = $this->hitung->nilai_kriteria($k); 
		}

		$kriteria_sub = array();
		// postur jasmani
		$kriteria_sub[1] = $this->input->post('lari',true);
		$kriteria_sub[2] = $this->input->post('pull_up',true);
		$kriteria_sub[3] = $this->input->post('sit_up',true);
		$kriteria_sub[4] = $this->input->post('push_up',true);
		$kriteria_sub[5] = $this->input->post('shuttle_run',true);
		$kriteria_sub[6] = $this->input->post('renang',true);
		$kriteria_sub[7] = $this->input->post('tinggi',true);
		$kriteria_sub[8] = $this->input->post('berat',true);
		// kesehatan
		$kriteria_sub[9]  = $this->input->post('kepala',true);
		$kriteria_sub[10] = $this->input->post('hidung',true);
		$kriteria_sub[11] = $this->input->post('sinus',true);
		$kriteria_sub[12] = $this->input->post('mulut',true);
		$kriteria_sub[13] = $this->input->post('telinga',true);
		$kriteria_sub[14] = $this->input->post('membrana',true);
		$kriteria_sub[15] = $this->input->post('mata',true);
		$kriteria_sub[16] = $this->input->post('optalmoscopi',true);
		$kriteria_sub[17] = $this->input->post('pupil',true);
		$kriteria_sub[18] = $this->input->post('gerakan_mata',true);
		$kriteria_sub[19] = $this->input->post('dada_paru',true);
		$kriteria_sub[20] = $this->input->post('jantung',true);
		$kriteria_sub[21] = $this->input->post('abdomen',true);
		$kriteria_sub[22] = $this->input->post('anus',true);
		$kriteria_sub[23] = $this->input->post('endokrin',true);
		$kriteria_sub[24] = $this->input->post('genito_urinaria',true);
		$kriteria_sub[25] = $this->input->post('extremitas_atas',true);
		$kriteria_sub[26] = $this->input->post('extremitas_bawah',true);
		$kriteria_sub[27] = $this->input->post('kaki',true);
		$kriteria_sub[28] = $this->input->post('kulit',true);
		$kriteria_sub[29] = $this->input->post('verteblaris_pelvis',true);
		$kriteria_sub[30] = $this->input->post('neurologi',true);
		$kriteria_sub[31] = $this->input->post('gigi',true);
		$kriteria_sub[32] = $this->input->post('tensi',true);
		$kriteria_sub[33] = $this->input->post('nadi',true);
		$kriteria_sub[34] = $this->input->post('lingkar_dada',true);
		$kriteria_sub[35] = $this->input->post('lingkar_perut',true);
		$kriteria_sub[36] = $this->input->post('warna_kulit',true);
		$kriteria_sub[37] = $this->input->post('warna_mata',true);
		$kriteria_sub[38] = $this->input->post('urine',true);
		$kriteria_sub[39] = $this->input->post('faeces',true);
		$kriteria_sub[40] = $this->input->post('darah',true);
		$kriteria_sub[41] = $this->input->post('serologis',true);

		
		$kriteria_sub_kv = array();
		$kriteria_sub_kv[1] = $this->hitung->nilai_lari($kriteria_sub[1]);
		$kriteria_sub_kv[2] = $this->hitung->nilai_pull_up($kriteria_sub[2]);
		$kriteria_sub_kv[3] = $this->hitung->nilai_sit_up($kriteria_sub[3]);
		$kriteria_sub_kv[4] = $this->hitung->nilai_push_up($kriteria_sub[4]);
		$kriteria_sub_kv[5] = $this->hitung->nilai_shuttle_run($kriteria_sub[5]);
		$kriteria_sub_kv[6] = $this->hitung->nilai_renang($kriteria_sub[6]);
		$kriteria_sub_kv[7] = $this->hitung->nilai_tinggi($kriteria_sub[7]);
		$kriteria_sub_kv[8] = $this->hitung->nilai_berat($kriteria_sub[8]);
		
		for ($j = 9; $j <=41; $j++) {
			$kriteria_sub_kv[$j] = $this->hitung->nilai_kesehatan_luar($kriteria_sub[$j]);
		}
		

		$data = array(
			'personel_id'	=> $this->input->post('personel_id',true),
			'kriteria'		=> json_encode($kriteria),
			'kriteria_sub'	=> json_encode($kriteria_sub),
			'kriteria_kv'		=> json_encode($kriteria_kv),
			'kriteria_sub_kv'	=> json_encode($kriteria_sub_kv),
		);
     	

     	$this->m_penilaian->insert($data);
     	$this->smart($data['personel_id']);
     	$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        redirect($this->url.'/form');
    }


     public function update($id){
     	
		$kriteria = array();
		$kriteria[1]	= $this->input->post('moral',true);
		$kriteria[2]	= $this->input->post('perilaku_disiplin',true);
		$kriteria[3]	= $this->input->post('sikap_militer',true);
		$kriteria[4]	= $this->input->post('loyalitas',true);
		$kriteria[5]	= $this->input->post('prakarsa',true);
		$kriteria[6]	= $this->input->post('kemauan_bekerja',true);
		$kriteria[7]	= $this->input->post('kerja_sama',true);
		$kriteria[8]	= $this->input->post('ketabahan',true);
		$kriteria[9]	= $this->input->post('prestasi_kerja',true);
		$kriteria[10]	= $this->input->post('kemauan_melakukan_tugas',true);
		$kriteria[11]	= $this->input->post('kemauan_untuk_maju',true);
		$kriteria[12]	= $this->input->post('kewibawaan',true);
		$kriteria[13]	= $this->input->post('daya_tangkap',true);
		$kriteria[14]	= $this->input->post('kemauan_sosialisasi',true);
		$kriteria[15]	= $this->input->post('tanggung_jawab',true);
			
		$kriteria_kv = array();
		$i = 1;
		foreach ($kriteria as $k) {
			$kriteria_kv[$i++] = $this->hitung->nilai_kriteria($k); 
		}

		$kriteria_sub = array();
		// postur jasmani
		$kriteria_sub[1] = $this->input->post('lari',true);
		$kriteria_sub[2] = $this->input->post('pull_up',true);
		$kriteria_sub[3] = $this->input->post('sit_up',true);
		$kriteria_sub[4] = $this->input->post('push_up',true);
		$kriteria_sub[5] = $this->input->post('shuttle_run',true);
		$kriteria_sub[6] = $this->input->post('renang',true);
		$kriteria_sub[7] = $this->input->post('tinggi',true);
		$kriteria_sub[8] = $this->input->post('berat',true);
		// kesehatan
		$kriteria_sub[9]  = $this->input->post('kepala',true);
		$kriteria_sub[10] = $this->input->post('hidung',true);
		$kriteria_sub[11] = $this->input->post('sinus',true);
		$kriteria_sub[12] = $this->input->post('mulut',true);
		$kriteria_sub[13] = $this->input->post('telinga',true);
		$kriteria_sub[14] = $this->input->post('membrana',true);
		$kriteria_sub[15] = $this->input->post('mata',true);
		$kriteria_sub[16] = $this->input->post('optalmoscopi',true);
		$kriteria_sub[17] = $this->input->post('pupil',true);
		$kriteria_sub[18] = $this->input->post('gerakan_mata',true);
		$kriteria_sub[19] = $this->input->post('dada_paru',true);
		$kriteria_sub[20] = $this->input->post('jantung',true);
		$kriteria_sub[21] = $this->input->post('abdomen',true);
		$kriteria_sub[22] = $this->input->post('anus',true);
		$kriteria_sub[23] = $this->input->post('endokrin',true);
		$kriteria_sub[24] = $this->input->post('genito_urinaria',true);
		$kriteria_sub[25] = $this->input->post('extremitas_atas',true);
		$kriteria_sub[26] = $this->input->post('extremitas_bawah',true);
		$kriteria_sub[27] = $this->input->post('kaki',true);
		$kriteria_sub[28] = $this->input->post('kulit',true);
		$kriteria_sub[29] = $this->input->post('verteblaris_pelvis',true);
		$kriteria_sub[30] = $this->input->post('neurologi',true);
		$kriteria_sub[31] = $this->input->post('gigi',true);
		$kriteria_sub[32] = $this->input->post('tensi',true);
		$kriteria_sub[33] = $this->input->post('nadi',true);
		$kriteria_sub[34] = $this->input->post('lingkar_dada',true);
		$kriteria_sub[35] = $this->input->post('lingkar_perut',true);
		$kriteria_sub[36] = $this->input->post('warna_kulit',true);
		$kriteria_sub[37] = $this->input->post('warna_mata',true);
		$kriteria_sub[38] = $this->input->post('urine',true);
		$kriteria_sub[39] = $this->input->post('faeces',true);
		$kriteria_sub[40] = $this->input->post('darah',true);
		$kriteria_sub[41] = $this->input->post('serologis',true);

		
		$kriteria_sub_kv = array();
		$kriteria_sub_kv[1] = $this->hitung->nilai_lari($kriteria_sub[1]);
		$kriteria_sub_kv[2] = $this->hitung->nilai_pull_up($kriteria_sub[2]);
		$kriteria_sub_kv[3] = $this->hitung->nilai_sit_up($kriteria_sub[3]);
		$kriteria_sub_kv[4] = $this->hitung->nilai_push_up($kriteria_sub[4]);
		$kriteria_sub_kv[5] = $this->hitung->nilai_shuttle_run($kriteria_sub[5]);
		$kriteria_sub_kv[6] = $this->hitung->nilai_renang($kriteria_sub[6]);
		$kriteria_sub_kv[7] = $this->hitung->nilai_tinggi($kriteria_sub[7]);
		$kriteria_sub_kv[8] = $this->hitung->nilai_berat($kriteria_sub[8]);
		
		for ($j = 9; $j <=41; $j++) {
			$kriteria_sub_kv[$j] = $this->hitung->nilai_kesehatan_luar($kriteria_sub[$j]);
		}
		

		$data = array(
			'kriteria'		=> json_encode($kriteria),
			'kriteria_sub'	=> json_encode($kriteria_sub),
			'kriteria_kv'		=> json_encode($kriteria_kv),
			'kriteria_sub_kv'	=> json_encode($kriteria_sub_kv),
		);
     	
     	// update data
     	$this->m_penilaian->update($data,array('personel_id'=>$id));
     	$this->smart($id);
     	$this->session->set_flashdata('success', 'Data Berhasil Diperbaharui');
        redirect($this->url);
    }

	public function delete($id){
		// delete data
		$this->m_penilaian->delete($id);
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		// echo $id;
		redirect($this->url);
	}

    public function smart($personel_id){

    	$nilai_kriteria = 0;
    	$nilai_postur_jasmani = 0;
    	$nilai_kesehatan = 0;

    	$kb = $this->m_kriteria->get_bobot_ternomalisasi();	// Ambil Data BOBOT pada KRITERIA yang sudah Ternormalisasi
    	$ksb = $this->m_kriteria_sub->get_bobot_ternomalisasi(); // Ambil Data BOBOT pada KRITERIA SUB yang sudah Ternormalisasi
    	
    	$data_utility = $this->m_penilaian->get_by(array('personel_id'=>$personel_id)); // Ambil Nilai Dari Personel

    	$i = 1;
    	$j = 1;
    	foreach ($data_utility as $data) {
    		$kriteria = json_decode($data->kriteria_kv);
    		// Hitung Total Nilai Kriteria yang tidak mempunyai Kriteria Sub
    		foreach ($kriteria as $k) {
    			$nilai_kriteria += $kb[$i++]*$k;
    		}

    		$kriteria_sub = json_decode($data->kriteria_sub_kv);
    		// Hitung Sub Kriteria
    		// 1-8 Sub Kriteria Postur Jasmani
    		// 9-n Sub Kriteria Kesehatan
    		foreach ($kriteria_sub as $ks) {
    			if($j<=8){
    				$nilai_postur_jasmani += $ksb[$j++]*$ks;
    			}else{
    				$nilai_kesehatan += $ksb[$j++]*$ks;
    			}
    		}
    		$nilai_postur_jasmani *=$kb[$i++];
    		$nilai_kesehatan *=$kb[$i++];
    	}
    	$skor = $nilai_kriteria + $nilai_postur_jasmani + $nilai_kesehatan;
    	$this->update_skor($personel_id,$skor);

    }

    private function update_skor($personel_id,$skor){
    	$data = array (
        		'skor'	=> $skor,
        );
     	// update data
     	$this->m_penilaian->update($data,array('personel_id'=>$personel_id));
    }

   

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
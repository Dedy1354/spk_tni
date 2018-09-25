<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	protected $data = array();
	protected $side;
	protected $site;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set('Asia/jakarta');
	}

	public function template($view_file,$local_data = NULL)
    {
        if ($local_data != NULL) {
            $this->data = array_merge($this->data, $local_data);
        }
    	$this->data['head'] = $this->load->view($this->side.'/template/head',$this->data,TRUE);
    	$this->data['navbar'] = $this->load->view($this->side.'/template/navbar',$this->data,TRUE);
        $this->data['sidebar'] = $this->load->view($this->side.'/template/sidebar',$this->data,TRUE);
        if($this->site){
            $this->data['content'] = $this->load->view($this->side.'/'.$this->site.'/'.$view_file,$this->data,TRUE);    
        }else{
            $this->data['content'] = $this->load->view($this->side.'/'.$view_file,$this->data,TRUE);
        }
        
		$this->load->view( $this->side.'/home',$this->data);
    }

    
}
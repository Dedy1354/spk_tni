<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->_table_name = 'berita';
		$this->_primary_key = 'id';
	}
	

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
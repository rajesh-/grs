<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Templates extends MX_Controller
{

function __construct() {
parent::__construct();

}

public function test(){
	$data="";

	// $this->load->view('public_jqm', $data);
	$this->admin($data);
	// $this->public_bootstrap($data);
	// $this->public_jqm($data);
}

public function public_bootstrap($data){
	$this->load->view('public_bootstrap', $data);
}

public function public_jqm($data){
	$this->load->view('public_jqm', $data);
}

public function admin($data){

	if($this->session->userdata('user_id')) {

		$user_id = $this->session->userdata('user_id');
		$query = $this->db->get_where('users', array('id' => $user_id));

		foreach ($query->result() as $row) {
    	$data['username'] = $row->username;
		}
	}

	$this->load->view('admin', $data);
}
}
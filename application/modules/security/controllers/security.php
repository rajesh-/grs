<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Security extends MX_Controller
{

function __construct() {
parent::__construct();
}

function make_hash($password){
	$safe_pass = $this->awesome_unbreakable_super_mega_hash($password);
	return $safe_pass;

}

function awesome_unbreakable_super_mega_hash($password){
	
	$new_pass = $password.="blabla" ;
	return $new_pass;

}

function _make_sure_is_admin(){
	// $this->load->library('session');
	$user_id = $this->session->userdata('user_id');
		if(!is_numeric($user_id)){
		return redirect(base_url());
	}

	return $user_id;

}

}
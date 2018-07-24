<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users extends MX_Controller
{

function __construct() {
parent::__construct();
}



function logout(){
	$this->session->unset_userdata('user_id');
	return redirect('orders');
}


function _in_you_go($username) {

	$query = $this->db->get_where('users', array('username' => $username));

	foreach ($query->result() as $row) {
		$user_id = $row->id;
		}

	$this->session->set_userdata('user_id', $user_id);
	// redirect('dashboard/home');
	return redirect('orders');

	
	 


}



function login(){

	$this->load->helper('form');
	$data['view_module'] = "Welcome";
	$data['view_file'] = "login";
	$this->load->module('templates');
	$this->templates->admin($data);

}

function submit(){

                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
                $this->form_validation->set_rules('password', 'Password', 'required|callback_password_check',
                        array('required' => 'You must provide a %s.')
                );

                if ($this->form_validation->run($this) == FALSE)  // $this need to be added as parammeter only in case of hmvc

                {
                    
                	$this->login();
                }
                else
                {

				$username = $this->input->post('username', TRUE);
                $this->_in_you_go($username);
                }
}

function password_check($password){
	$username = $this->input->post('username', TRUE);
	$password = Modules::run('security/make_hash', $password);
	$this->load->model('mdl_users');
	$result = $this->mdl_users->password_check($username, $password);
	if($result == FALSE){
		$this->form_validation->set_message('password_check','You did not enter a correct username and/or password');
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}


function username_check($str){
	if($str == 'test'){
		$this->form_validation->set_message('username_check','The %s field cannot be test');
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}


}
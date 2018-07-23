<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orders extends MX_Controller {
function __construct(){
parent::__construct();
Modules::run("security/_make_sure_is_admin");
$this->load->library('pagination');
//https://code.tutsplus.com/tutorials/pagination-in-codeigniter-the-complete-guide--cms-29030
}
public function index()
{	
// $this->load->library('pagination');
$this->load->library('table');
$data['base_url'] = '/grs/orders/index';
$data['total_rows'] = $this->db->get('orders')->num_rows();




if($data['total_rows']>0){







$data['per_page'] = 5;
$data['num_links'] = 10;
/*
Check if searching for the GRS Order 
*/
if (isset($_POST['searchbtn'])){
$data['search_img'] = base_url()."assets/images/animated-gif-search-1.gif";
$grs_order = $this->input->post('grs_o_search');
$data['query'] = $this->db
//->select('grs_order, item_desc, firstname, lastname, city, order_date')
->select('id, img_url, grs_order, item_desc, firstname, lastname, city, order_date')
->order_by('id', 'DESC')
// ->limit(50)
->get_where('orders', array('grs_order' => $grs_order), $data['per_page'], $this->uri->segment(3));
}else{	
$data['search_img']= base_url()."assets/images/amimated_listing.gif";
$data['query'] = $this->db
//->select('grs_order, item_desc, firstname, lastname, city, order_date')
->select('id, img_url, grs_order, item_desc, firstname, lastname, city, order_date')
->order_by('id', 'DESC')
// ->limit(50)
->get('orders', $data['per_page'], $this->uri->segment(3));
$this->pagination->initialize($data);
}
// $this->pagination->initialize($data);
if($this->session->userdata('user_id')) {
$data['user_id'] = $this->session->userdata('user_id');
$query = $this->db->get_where('users', array('id' => $data['user_id']));
foreach ($query->result() as $row) {
$data['username']=$row->username;
}	
}else{
$data['username']='';
}
$data['total_sales']  = $this->get_total_sales();						
$data['view_module'] = "orders";
$data['view_file'] = "orders";				
$this->load->module('templates');
$this->templates->admin($data);
}else{
	// echo "No data found!!"; die();
	$data['view_module'] = "orders";
	$data['view_file'] = "invoice_nodata";				
	$this->load->module('templates');
	$this->templates->admin($data);
	}
}


function get_total_sales(){
$data['query'] = $this->db
->select_sum('total_amt')
->get('orders');
$total_amt = $data['total_amt']=$data['query']->row()->total_amt;
return $total_amt;
}
function print_order()	{
$print_id = $this->uri->segment(3);
$query = $this->db->query("SELECT * FROM orders WHERE id=$print_id");
if ($query->num_rows() > 0){
foreach ($query->result() as $row) {
$data['grs_order']=$row->grs_order;
$data['user_id']=$row->user_id;
$data['firstname']=$row->firstname;
$data['lastname']=$row->lastname;
$data['order_date']=$row->order_date;	
$data['address1']=$row->address1;
$data['address2']=$row->address2;
$data['city']=$row->city;
$data['state']=$row->state;
$data['country']=$row->country;
$data['zip']=$row->zip;
$data['phone']=$row->phone;
$data['item_no']=$row->item_no;
$data['item_desc']=$row->item_desc;
$data['item_option']=$row->item_option;
$data['qty']=$row->qty;
$data['email']=$row->email;
$data['cost']=$row->cost;
$data['catalog_code']=$row->catalog_code;
$data['catalog_name']=$row->catalog_name;
$data['date_processed']=$row->date_processed;
$data['status']=$row->status;
$data['qty_shipped']=$row->qty_shipped;
$data['tracking_no']=$row->tracking_no;
$data['courier_name']=$row->courier_name;
$data['memo']=$row->memo;
$data['partner_order']=$row->partner_order;
}}else{
return redirect ('orders/nodata');
}
$data['view_module'] = "orders";
$data['view_file'] = "invoice";
$this->load->module('templates');
$this->templates->admin($data);
}
function submit(){
$update_id = $this->uri->segment(3);
$this->load->library('form_validation');
$this->form_validation->set_rules('phone', 'Contact Number', 'required');
$this->form_validation->set_rules('qty_shipped', 'Quantity Shipped', 'required|numeric');
if ($this->form_validation->run($this) == FALSE)  // $this need to be added as parammeter only in case of hmvc
{
$this->view_order();
}
else
{
$data = $this->get_data_from_post($update_id); 
if(is_numeric($update_id)){
$this->load->model('mdl_orders');
$this->mdl_orders->_update($update_id, $data);

}else{ 
$this->load->model('mdl_webpages'); 
$this->mdl_webpages->_insert($data);
}

$this->session->set_flashdata('msg', 'Data has been updated!');
$this->view_order();
}
}
function get_data_from_post(){
$data['firstname']=$this->input->post('firstname', TRUE);
$data['lastname']=$this->input->post('lastname', TRUE);
$data['address1']=$this->input->post('address1', TRUE);
$data['address2']=$this->input->post('address2', TRUE);
$data['city']=$this->input->post('city', TRUE);
$data['state']=$this->input->post('state', TRUE);
$data['country']=$this->input->post('country', TRUE);
$data['zip']=$this->input->post('zip', TRUE);
$data['email']=$this->input->post('email', TRUE);
$data['phone']=$this->input->post('phone', TRUE);	
$data['grs_order']=$this->input->post('grs_order', TRUE);
$data['user_id']=$this->input->post('user_id', TRUE);
$data['phone']=$this->input->post('phone', TRUE);
$data['item_no']=$this->input->post('item_no', TRUE);
$data['item_desc']=$this->input->post('item_desc', TRUE);
$data['item_option']=$this->input->post('item_option', TRUE);
$data['qty']=$this->input->post('qty', TRUE);
$data['email']=$this->input->post('email', TRUE);
$data['cost']=$this->input->post('cost', TRUE);
$data['catalog_code']=$this->input->post('catalog_code', TRUE);
$data['catalog_name']=$this->input->post('catalog_name', TRUE);
$data['date_processed']=$this->input->post('date_processed', TRUE);
$data['status']=$this->input->post('status', TRUE);
$data['qty_shipped']=$this->input->post('qty_shipped', TRUE);
$data['order_date']=$this->input->post('order_date', TRUE);
$data['tracking_no']=$this->input->post('tracking_no', TRUE);
$data['courier_name']=$this->input->post('courier_name', TRUE);
$data['memo']=$this->input->post('memo', TRUE);
$data['partner_order']=$this->input->post('partner_order', TRUE);	
return $data;
}
function get_data_from_db($update_id){
$query = $this->db->query("SELECT * FROM orders WHERE id=$update_id");
foreach ($query->result() as $row) {
$data['grs_order']=$row->grs_order;
$data['user_id']=$row->user_id;
$data['firstname']=$row->firstname;
$data['lastname']=$row->lastname;
$data['order_date']=$row->order_date;	
$data['address1']=$row->address1;
$data['address2']=$row->address2;
$data['city']=$row->city;
$data['state']=$row->state;
$data['country']=$row->country;
$data['zip']=$row->zip;
$data['phone']=$row->phone;
$data['item_no']=$row->item_no;
$data['item_desc']=$row->item_desc;
$data['item_option']=$row->item_option;
$data['qty']=$row->qty;
$data['email']=$row->email;
$data['cost']=$row->cost;
$data['catalog_code']=$row->catalog_code;
$data['catalog_name']=$row->catalog_name;
$data['date_processed']=$row->date_processed;
$data['status']=$row->status;
$data['qty_shipped']=$row->qty_shipped;
$data['tracking_no']=$row->tracking_no;
$data['courier_name']=$row->courier_name;
$data['memo']=$row->memo;
$data['partner_order']=$row->partner_order;
$data['img_url']=$row->img_url;
}
return $data;
}
public function view_order()
{
$update_id = $this->uri->segment(3);
$submit = $this->input->post('submitinv', TRUE); 
if($submit == "Submitinv"){
$data = $this->get_data_from_post();
}else{
if(is_numeric($update_id)){
$data = $this->get_data_from_db($update_id);
}
}
if(!isset($data)){
$data = $this->get_data_from_post();	
}
$data['update_id'] = $update_id;
$this->load->helper('form');
$this->load->module('security');
$this->security->_make_sure_is_admin();
$data['view_module'] = "orders";
$data['view_file'] = "view_order";
$this->load->module('templates');
$this->templates->admin($data);
}
function nodata(){
$data['view_module'] = "orders";
$data['view_file'] = "invoice_nodata";
$this->load->module('templates');
$this->templates->admin($data);
}
}
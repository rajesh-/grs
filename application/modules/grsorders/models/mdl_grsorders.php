<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Import Model
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mdl_grsorders extends CI_Model {

    private $_batchImport;

    public function setBatchImport($batchImport) {
        $this->_batchImport = $batchImport;
    }

    // save data
    public function importData() {
        $data = $this->_batchImport;
        $this->db->insert_batch('grs_orders', $data);
    }
    // get employee list
    public function employeeList() {

      

        /**

id  grs_order   partner_order   user_id firstname   lastname    order_date  address1    address2    city    state   country zip phone   item_no item_desc   item_option qty email   cost    catalog_code    catalog_name    date_processed  status  qty_shipped tracking_no courier_name    memo    img_url cost_i  ship_cost   tax_amt base_price  total_amt

        **/

        $this->db->select(array('e.id', 'e.grs_order', 'e.partner_order', 'e.user_id', 'e.firstname', 'e.lastname', 'e.order_date', 'e.address1'
, 'e.address2', 'e.city', 'e.state', 'e.country', 'e.zip', 'e.phone', 'e.item_no', 'e.item_desc', 'e.item_option', 'e.qty', 'e.email', 'e.cost'
, 'e.catalog_code', 'e.catalog_name', 'e.date_processed', 'e.status', 'e.qty_shipped', 'e.tracking_no', 'e.courier_name', 'e.memo', 'e.img_url'
, 'e.cost_i', 'e.ship_cost', 'e.tax_amt', 'e.base_price', 'e.total_amt' ));
        $this->db->from('grs_orders as e');
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>
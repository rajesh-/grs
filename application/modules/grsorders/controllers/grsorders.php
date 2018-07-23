<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
/**
 * Description of Import Controller
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Grsorders extends MX_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mdl_grsorders', 'import');
        $this->load->library('upload');
    }
 
    // upload xlsx|xls file
    public function index() {
        $data['page'] = 'import';
        $data['title'] = 'Import XLSX | TechArise';
        $this->load->view('import/index', $data);
    }
    // import excel data
    public function save() {
        $this->load->library('excel');
        
        if ($this->input->post('importfile')) {
            $path = './uploads/';
 
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls|jpg|png';
            $config['remove_spaces'] = TRUE;
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
            
            if (!empty($data['upload_data']['file_name'])) {
                $import_xls_file = $data['upload_data']['file_name'];
            } else {
                $import_xls_file = 0;
            }
            $inputFileName = $path . $import_xls_file;
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                        . '": ' . $e->getMessage());
            }
            $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
            
            $arrayCount = count($allDataInSheet);
            $flag = 0;
            $createArray = array(
                          'GRS_Order_No'                
                        , 'Partner_System_Order'
                        , 'User_Id' 
                        , 'First_Name'             
                        , 'Last_Name'             
                        , 'Order_Date'             
                        , 'Address_1'             
                        , 'Address_2'             
                        , 'City'         
                        , 'State_Province'                 
                        , 'Country'         
                        , 'Zip'     
                        , 'Phone_Number'                 
                        , 'Item_Number'             
                        , 'Item_Description'
                        , 'Item_Option Quantity'
                        , 'Email'   
                        , 'Product_Cost'                
                        , 'Catalog_Code'                 
                        , 'Catalog_Name'                 
                        , 'Date_Processed'                 
                        , 'Status'         
                        , 'Quantity_Shipped'                     
                        , 'Tracking_Number'                 
                        , 'Courier_Name'                 
                        , 'Memo'         
                        , 'Image_Url'             
                        , 'Product_Cost_ICMI'
                        , 'Shipping_Cost'                 
                        , 'Tax_Amount'             
                        , 'Base_Price'             
                        , 'Total_Amount_Receivable');

          



            $makeArray = array(
                  
                'GRS_Order_No'          =>  'GRS_Order_No'                
                , 'Partner_System_Order'=>  'Partner_System_Order'
                , 'User_Id'             =>  'User_Id' 
                , 'First_Name'          =>  'First_Name'             
                , 'Last_Name'           =>  'Last_Name'             
                , 'Order_Date'          =>  'Order_Date'             
                , 'Address_1'           =>  'Address_1'             
                , 'Address_2'           =>  'Address_2'             
                ,  'City'               =>  'City'         
                , 'State_Province'      =>'State_Province'                 
                , 'Country'             =>  'Country'         
                , 'Zip'                 =>  'Zip'     
                , 'Phone_Number'        =>  'Phone_Number'                 
                , 'Item_Number'         =>  'Item_Number'             
                , 'Item_Description'    =>  'Item_Description'
                , 'Item_Option Quantity'=>  'Item_Option Quantity'
                , 'Email'               =>  'Email'   
                , 'Product_Cost'        =>  'Product_Cost'                
                , 'Catalog_Code'        =>  'Catalog_Code'                 
                , 'Catalog_Name'        =>  'Catalog_Name'                 
                , 'Date_Processed'      => 'Date_Processed'                 
                , 'Status'              =>  'Status'         
                , 'Quantity_Shipped'    =>  'Quantity_Shipped'                     
                , 'Tracking_Number'     =>  'Tracking_Number'                 
                , 'Courier_Name'        =>  'Courier_Name'       
                , 'Memo'                =>  'Memo'         
                , 'Image_Url'   =>  'Image_Url'             
                , 'Product_Cost_ICMI'  =>  'Product_Cost_ICMI'
                ,  'Shipping_Cost'  =>  'Shipping_Cost'                 
                , 'Tax_Amount'   =>  'Tax_Amount'             
                , 'Base_Price'  =>  'Base_Price'             
                , 'Total_Amount_Receivable'  =>  'Total_Amount_Receivable' );
            
            $SheetDataKey = array();
            foreach ($allDataInSheet as $dataInSheet) {
                foreach ($dataInSheet as $key => $value) {
                    if (in_array(trim($value), $createArray)) {
                        $value = preg_replace('/\s+/', '', $value);
                        $SheetDataKey[trim($value)] = $key;
                    } else {
                        
                    }
                }
            }
            $data = array_diff_key($makeArray, $SheetDataKey);
           
            if (empty($data)) {
                $flag = 1;
            }
            if ($flag == 1) {
                for ($i = 2; $i <= $arrayCount; $i++) {
                    $addresses = array();        


  /**


    








































           $grs_order = $SheetDataKey['GRS_Order_No'];    
           $partner_order = $SheetDataKey['Partner_System_Order'];    
           $user_id = $SheetDataKey['User_Id'];
           $firstname = $SheetDataKey['First_Name'];  
           $lastname = $SheetDataKey['Last_Name'];   
           $order_date = $SheetDataKey['Order_Date'];  
           $address1 = $SheetDataKey['Address_1'];   
           $address2 = $SheetDataKey['Address_2'];   
           $city = $SheetDataKey['City'];    
           $state = $SheetDataKey['State_Province'];  
           $country = $SheetDataKey['Country']; 
           $zip = $SheetDataKey['Zip']; 
           $phone = $SheetDataKey['Phone_Number'];    
           $item_no = $SheetDataKey['Item_Number']; 
           $item_desc = $SheetDataKey['Item_Description'];    
           $item_option = $SheetDataKey['Item_Option'];
           $qty    =  $SheetDataKey['Quantity'];    
           $email = $SheetDataKey['Email'];   
           $cost = $SheetDataKey['Product_Cost'];    
           $catalog_code = $SheetDataKey['Catalog_Code'];    
           $catalog_name = $SheetDataKey['Catalog_Name'];    
           $date_processed = $SheetDataKey['Date_Processed'];  
           $status = $SheetDataKey['Status'];  
           $qty_shipped = $SheetDataKey['Quantity_Shipped'];    
           $tracking_no = $SheetDataKey['Tracking_Number']; 
           $courier_name = $SheetDataKey['Courier_Name'];    
           $memo = $SheetDataKey['Memo'];    
           $img_url = $SheetDataKey['Image_Url'];   
           $cost_i = $SheetDataKey['Product_Cost_ICMI'];   
           $ship_cost = $SheetDataKey['Shipping_Cost'];   
           $tax_amt = $SheetDataKey['Tax_Amount'];  
           $base_price = $SheetDataKey['Base_Price'];  
           $total_amt = $SheetDataKey['Total_Amount_Receivable'];

            **/
           $grs_order = $SheetDataKey['GRS_Order_No'];    
           $partner_order = $SheetDataKey['Partner_System_Order'];    
           $user_id = $SheetDataKey['User_Id'];
           $firstname = $SheetDataKey['First_Name'];  
           $lastname = $SheetDataKey['Last_Name'];   
           $order_date = $SheetDataKey['Order_Date'];  
           $address1 = $SheetDataKey['Address_1'];   
           $address2 = $SheetDataKey['Address_2'];   
           $city = $SheetDataKey['City'];    
           $state = $SheetDataKey['State_Province'];  
           $country = $SheetDataKey['Country']; 
           $zip = $SheetDataKey['Zip']; 
           $phone = $SheetDataKey['Phone_Number'];    
           $item_no = $SheetDataKey['Item_Number']; 
           $item_desc = $SheetDataKey['Item_Description'];    
           $item_option = $SheetDataKey['Item_Option'];
           $qty    =  $SheetDataKey['Quantity'];    
           $email = $SheetDataKey['Email'];   
           $cost = $SheetDataKey['Product_Cost'];    
           $catalog_code = $SheetDataKey['Catalog_Code'];    
           $catalog_name = $SheetDataKey['Catalog_Name'];    
           $date_processed = $SheetDataKey['Date_Processed'];  
           $status = $SheetDataKey['Status'];  
           $qty_shipped = $SheetDataKey['Quantity_Shipped'];    
           $tracking_no = $SheetDataKey['Tracking_Number']; 
           $courier_name = $SheetDataKey['Courier_Name'];    
           $memo = $SheetDataKey['Memo'];    
           $img_url = $SheetDataKey['Image_Url'];   
           $cost_i = $SheetDataKey['Product_Cost_ICMI'];   
           $ship_cost = $SheetDataKey['Shipping_Cost'];   
           $tax_amt = $SheetDataKey['Tax_Amount'];  
           $base_price = $SheetDataKey['Base_Price'];  
           $total_amt = $SheetDataKey['Total_Amount_Receivable'];


                    $grs_order = filter_var(trim($allDataInSheet[$i][$grs_order]), FILTER_SANITIZE_STRING);
                    $partner_order  = filter_var(trim($allDataInSheet[$i][$partner_order]), FILTER_SANITIZE_STRING);
                    $user_id = filter_var(trim($allDataInSheet[$i][$user_id]), FILTER_SANITIZE_STRING);
                    $firstname = filter_var(trim($allDataInSheet[$i][$firstname]), FILTER_SANITIZE_STRING);
                    $lastname = filter_var(trim($allDataInSheet[$i][$lastname]), FILTER_SANITIZE_STRING);
                    $order_date = filter_var(trim($allDataInSheet[$i][$order_date]), FILTER_SANITIZE_STRING); 
                    $address1 = filter_var(trim($allDataInSheet[$i][$address1]), FILTER_SANITIZE_STRING);
                    $address2 = filter_var(trim($allDataInSheet[$i][$address2]), FILTER_SANITIZE_STRING);
                    $city = filter_var(trim($allDataInSheet[$i][$city]), FILTER_SANITIZE_STRING);
                    $state = filter_var(trim($allDataInSheet[$i][$state]), FILTER_SANITIZE_STRING);
                    $country = filter_var(trim($allDataInSheet[$i][$country]), FILTER_SANITIZE_STRING);                   
                    $zip = filter_var(trim($allDataInSheet[$i][$zip]), FILTER_SANITIZE_STRING);                   
                    $phone = filter_var(trim($allDataInSheet[$i][$phone]), FILTER_SANITIZE_STRING);                  
                    $item_no = filter_var(trim($allDataInSheet[$i][$item_no]), FILTER_SANITIZE_STRING);                   
                    $item_desc = filter_var(trim($allDataInSheet[$i][$item_desc]), FILTER_SANITIZE_STRING);                 
                    $item_option = filter_var(trim($allDataInSheet[$i][$item_option]), FILTER_SANITIZE_STRING);              
                    $qty = filter_var(trim($allDataInSheet[$i][$qty]), FILTER_SANITIZE_STRING);                    
                    $email = filter_var(trim($allDataInSheet[$i][$email]), FILTER_SANITIZE_STRING);
                    $cost = filter_var(trim($allDataInSheet[$i][$cost]), FILTER_SANITIZE_STRING);                
                    $catalog_code   = filter_var(trim($allDataInSheet[$i][$catalog_code]), FILTER_SANITIZE_STRING);
                    $catalog_name   = filter_var(trim($allDataInSheet[$i][$catalog_name]), FILTER_SANITIZE_STRING);
                    $date_processed = filter_var(trim($allDataInSheet[$i][$date_processed]), FILTER_SANITIZE_STRING);
                    $status = filter_var(trim($allDataInSheet[$i][$status]), FILTER_SANITIZE_STRING);                  
                    $qty_shipped = filter_var(trim($allDataInSheet[$i][$qty_shipped]), FILTER_SANITIZE_STRING);              
                    $tracking_no = filter_var(trim($allDataInSheet[$i][$tracking_no]), FILTER_SANITIZE_STRING);
                    $courier_name   = filter_var(trim($allDataInSheet[$i][$courier_name]), FILTER_SANITIZE_STRING);
                    $memo = filter_var(trim($allDataInSheet[$i][$memo]), FILTER_SANITIZE_STRING);                
                    $img_url = filter_var(trim($allDataInSheet[$i][$img_url]), FILTER_SANITIZE_STRING);                   
                    $cost_i = filter_var(trim($allDataInSheet[$i][$cost_i]), FILTER_SANITIZE_STRING);                  
                    $ship_cost = filter_var(trim($allDataInSheet[$i][$ship_cost]), FILTER_SANITIZE_STRING);                  
                    $tax_amt = filter_var(trim($allDataInSheet[$i][$tax_amt]), FILTER_SANITIZE_STRING);                   
                    $base_price = filter_var(trim($allDataInSheet[$i][$base_price]), FILTER_SANITIZE_STRING);
                    $total_amt = filter_var(trim($allDataInSheet[$i][$total_amt]), FILTER_SANITIZE_STRING);



                    $fetchData[] = array(
                    'grs_order' => $grs_order
                     , 'partner_order '  =>  $partner_order   
                     , 'user_id '  =>  $user_id 
                     , 'firstname'   =>  $firstname 
                     , 'lastname'  =>  $lastname    
                     , 'order_date'  =>  $order_date  
                     , 'address1'  =>  $address1    
                     , 'address2'  =>  $address2    
                     , 'city'  =>  $city    
                     , 'state'  =>  $state   
                     , 'country'  =>  $country 
                     , 'zip'  =>  $zip 
                     , 'phone'  =>  $phone   
                     , 'item_no'  =>  $item_no 
                     , 'item_desc'  =>  $item_desc   
                     , 'item_option'  =>  $item_option 
                     , 'qty'  =>  $qty
                     , 'email'     => $email
                     , 'cost'  =>  $cost    
                     , 'catalog_code'  =>  $catalog_code    
                     , 'catalog_name'  =>  $catalog_name    
                     , 'date_processed'  =>  $date_processed  
                     , 'status'  =>  $status  
                     , 'qty_shipped'  =>  $qty_shipped 
                     , 'tracking_no'  =>  $tracking_no 
                     , 'courier_name'  =>  $courier_name    
                     , 'memo'  =>  $memo    
                     , 'img_url'  =>  $img_url 
                     , 'cost_i'  =>  $cost_i  
                     , 'ship_cost'  =>  $ship_cost   
                     , 'tax_amt'  =>  $tax_amt 
                     , 'base_price'  =>  $base_price  
                     , 'total_amt'  =>  $total_amt

                    );









                }              
                $data['employeeInfo'] = $fetchData;
                $this->import->setBatchImport($fetchData);
                $this->import->importData();
            } else {
                echo "Please import correct file";
            }
        }
        $this->load->view('import/display', $data);
        
    }
}
?>





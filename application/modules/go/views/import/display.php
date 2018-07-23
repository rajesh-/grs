<div class="table-responsive">
    <table class="table table-hover tablesorter" border="1">
        <thead>
            <tr>
                <th class="header">GRS_Order_No</th>
                <th class="header">Partner_System_Order</th>                           
                <th class="header">User_Id</th>                      
                <th class="header">First_Name</th>
                <th class="header">Last_Name</th>


                <th class="header"> Order Date</th>
                <th class="header">Address 1</th>                           
                <th class="header">Address 2</th>                      
                <th class="header">City</th>
                <th class="header">State/Province</th>
                <th class="header">GRS_Order_No</th>
                <th class="header">Partner_System_Order</th>                           
                <th class="header">User_Id</th>                      
                <th class="header">First_Name</th>
                <th class="header">Last_Name</th>


                <th class="header"> Order Date</th>
                <th class="header">Address 1</th>                           
                <th class="header">Address 2</th>                      
                <th class="header">City</th>
                <th class="header">State/Province</th>
                <th class="header">GRS_Order_No</th>
                <th class="header">Partner_System_Order</th>                           
                <th class="header">User_Id</th>                      
                <th class="header">First_Name</th>
                <th class="header">Last_Name</th>


                <th class="header"> Order Date</th>
                <th class="header">Address 1</th>                           
                <th class="header">Address 2</th>                      
                <th class="header">City</th>
                <th class="header">State/Province</th>
                <th class="header">Address 2</th>                      
                <th class="header">City</th>
                <th class="header">State/Province</th>

<!-- 


               
id  
grs_order   
partner_order   
user_id 
firstname   
lastname 

order_date  
address1    
address2    
city    
state   



country zip phone   item_no item_desc   item_option qty email   cost    catalog_code    catalog_name    date_processed  status  qty_shipped tracking_no courier_name    memo    img_url cost_i  ship_cost   tax_amt base_price  total_amt






                -->







            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($employeeInfo) && !empty($employeeInfo)) {
                foreach ($employeeInfo as $key => $element) {
                    ?>
                    <tr>
                        <td><?php echo $element['grs_order']; ?></td>   
                        <td><?php echo $element['partner_order']; ?></td> 
                        <td><?php echo $element['user_id']; ?></td>                       
                        <td><?php echo $element['firstname']; ?></td>
                        <td><?php echo $element['lastname']; ?></td>

                        <td><?php echo $element['order_date']; ?></td>   
                        <td><?php echo $element['address1']; ?></td> 
                        <td><?php echo $element['address1']; ?></td>                       
                        <td><?php echo $element['city']; ?></td>
                        <td><?php echo $element['state']; ?></td>
                        <td><?php echo $element['grs_order']; ?></td>   
                        <td><?php echo $element['partner_order']; ?></td> 
                        <td><?php echo $element['user_id']; ?></td>                       
                        <td><?php echo $element['firstname']; ?></td>
                        <td><?php echo $element['lastname']; ?></td>

                        <td><?php echo $element['order_date']; ?></td>   
                        <td><?php echo $element['address1']; ?></td> 
                        <td><?php echo $element['address1']; ?></td>                       
                        <td><?php echo $element['city']; ?></td>
                        <td><?php echo $element['state']; ?></td>
                        <td><?php echo $element['grs_order']; ?></td>   
                        <td><?php echo $element['partner_order']; ?></td> 
                        <td><?php echo $element['user_id']; ?></td>                       
                        <td><?php echo $element['firstname']; ?></td>
                        <td><?php echo $element['lastname']; ?></td>

                        <td><?php echo $element['order_date']; ?></td>   
                        <td><?php echo $element['address1']; ?></td> 
                        <td><?php echo $element['address1']; ?></td>                       
                        <td><?php echo $element['city']; ?></td>
                        <td><?php echo $element['state']; ?></td>
                         <td><?php echo $element['address1']; ?></td>                       
                        <td><?php echo $element['city']; ?></td>
                        <td><?php echo $element['state']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">There is no employee.</td>    
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>
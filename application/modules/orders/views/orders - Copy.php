<div id="container">
  <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Orders</strong> 
</div>
  <table class="table table-hover">
  <thead>
    <tr>
      <th style="width:  7.7%">GRS Order</th>
      <th style="width:  45.50%">Description</th>
      <th style="width:  13.50%">Name</th>
      <!-- <th scope="col">Last Name</th> -->
      <th style="width:  10.50%">City</th> 
      <th>Order Date</th>  
      <th style="width:  8.7%">Action</th>     
    </tr>
  </thead>
  <tbody>
  <?php foreach ($query->result() as $row) {
    $grs_order = $row->grs_order;
    $user_id = $row->user_id;
    $firstname = $row->firstname;
    $lastname = $row->lastname;
    $city = $row->city;
    $order_date = $row->order_date;
    $id = $row->id;
    $item_desc = $row->item_desc;
    $edit_url = base_url()."orders/view_order/".$row->id;
    $print_url = base_url()."orders/print_order/".$row->id;
    ?>  
    <tr class="table-info">
      <td ><?php echo $grs_order; ?></td>
      <td><?php echo $item_desc; ?></td>
      <td><?php echo $firstname.' '.$lastname; ?></td>
     <!--  <td  scope="row"><?php echo $lastname; ?></td> -->
      <td><?php echo $city; ?></td>
      <td><?php echo $order_date; ?></td>
      <td>
        <a href="<?php echo $edit_url ; ?>"><button type="button" class="btn btn-primary"><i class="icon-edit"></i></button></a>
        <a href="<?php echo $print_url ; ?>"><button type="button" class="btn btn-primary"><i class="icon-print"></i></button></a>
      </td>
    </tr> 
<?php } ?>    
  </tbody>
</table>	
</div>
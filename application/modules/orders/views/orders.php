<div id="container">
  <p><img src="<?php echo $search_img ?>" width="65"></p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th style="width:  8.7%">GRS Order</th>
      <th style="width:  0.7%"></th>
      <th style="width:  40.50%">Description</th>
      <th style="width:  13.50%">Name</th>
      <!-- <th scope="col">Last Name</th> -->
      <th style="width:  10.50%">City</th> 
      <th>Order Date</th>  
      <th style="width:  8.9%">Action</th>     
    </tr>
  </thead>
  <tbody>
    <!-- $total_sales=0; -->
  <?php foreach ($query->result() as $row) {
    // $total_sales+=$row['total_amt'];
    $grs_order = $row->grs_order;
    // $user_id = $row->user_id;
    $firstname = $row->firstname;
    $lastname = $row->lastname;
    $city = $row->city;
    $order_date = $row->order_date;
    $img_url = $row->img_url;
    // $id = $row->id;
    $item_desc = $row->item_desc;
    $edit_url = base_url()."orders/view_order/".$row->id;
    $print_url = base_url()."orders/print_order/".$row->id;
    ?>  
    <tr class="table-info">
      <td ><?php echo $grs_order; ?></td>
      <!-- <td ><img onmouseover="this.width=150; this.height=150;" onmouseout="this.width=32; this.height=32;" src="<?php echo $img_url; ?>"  width="32">  </td> -->

      <td ><img src="<?php echo $img_url; ?>"  width="32" height="32">  </td>

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
<?php echo '<div style="display: inline;  border: solid; border-radius: 0.25rem; border-color: #e0ebeb;padding: 5px;"  id="pagination">'. $this->pagination->create_links(). '</div>'; ?>
</div>
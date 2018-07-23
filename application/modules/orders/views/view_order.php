<?php if($this->session->flashdata('msg')){ ?> 
<div class="alert alert-dismissible alert-info">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <img src="<?php echo base_url(); ?>assets/images/checkmarkLoader.gif" height="52" width="52">
   <strong style="color: green; "><?php echo $this->session->flashdata('msg'); ?></strong> 
</div>
<?php }else{ ?>

<div class="alert alert-dismissible alert-info">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>View Order: <?php echo $this->uri->segment(3);?></strong> 
</div>

<?php } ?>
<!-- <h2 class="display-3">View Order: <?php echo $this->input->get('order_id');?></h2> -->
<?php echo validation_errors('<div class="text-danger">', '</div>'); ?>
<form action="<?php echo base_url(); ?>orders/submit/<?php echo $this->uri->segment(3);?>" method="post">
   <div class="row">
      <div class="col-sm-6" style="background-color:#b8c8d8;">
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">First Name</label>
            <input type="text" name="firstname" value="<?php echo $firstname ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Last Name</label>
            <input type="text" name="lastname" value="<?php echo $lastname ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Address 1</label>
            <input type="text" name="address1" value="<?php echo $address1 ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Address 2</label>
            <input type="text" name="address2" value="<?php echo $address2 ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">City</label>
            <input type="text" name="city" value="<?php echo $city ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">State/Province</label>
            <input type="text" name="state" value="<?php echo $state ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Country</label>
            <input type="text" name="country" value="<?php echo $country ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Zip/Postal Code</label>
            <input type="text" name="zip" value="<?php echo $zip ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Email</label>
            <input type="text" name="email" value="<?php echo $email ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Phone Number</label>
            <input type="text" name="phone" value="<?php echo $phone ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
      </div>
      <div class="col-sm-6" style="background-color:#b8c8d8;">
         <div style="margin: 10px;" class="float-right form-group">
            <button type="submit" name="submitinv" value="Submitinv" class="btn btn-primary">Save</button>  
            <a href="<?php echo base_url(); ?>orders/print_order/<?php echo $this->uri->segment(3);?>" class="btn btn-primary">Print</a>
         </div>
         <div class="form-group"></div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">GRS Order No</label>
            <input type="text" name="grs_order" value="<?php echo $grs_order ; ?>" class="form-control is-valid" id="inputValid" readonly>
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Product Cost</label>
            <input type="text" name="cost" value="<?php echo $cost ; ?>" class="form-control is-valid" id="inputValid" >
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">User Id</label>
            <input type="text" name="user_id" value="<?php echo $user_id ; ?>" class="form-control is-valid" id="inputValid" readonly>
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Partner System Order No</label>
            <input type="text" name="partner_order" value="<?php echo $partner_order ; ?>" class="form-control is-valid" id="inputValid" readonly>
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Order Date</label>
            <input type="text" name="order_date" value="<?php echo $order_date ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Date Processed</label>
            <input type="text" name="date_processed" value="<?php echo $date_processed ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Item Number</label>
            <input type="text" name="item_no" value="<?php echo $item_no ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Catalog Name</label>
            <input type="text" name="catalog_name" value="<?php echo $catalog_name ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Catalog Code</label>
            <input type="text" name="catalog_code" value="<?php echo $catalog_code ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Quantity</label>
            <input type="text" name="qty" value="<?php echo $qty ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Item Option</label>
            <input type="text" name="item_option" value="<?php echo $item_option ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Quantity Shipped</label>
            <input type="text" name="qty_shipped" value="<?php echo $qty_shipped ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Status</label>
            <input type="text" name="status" value="<?php echo $status ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Courier Name</label>
            <input type="text" name="courier_name" value="<?php echo $courier_name ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Memo</label>
            <input type="text" name="memo" value="<?php echo $memo ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Tracking Number</label>
            <input type="text" name="tracking_no" value="<?php echo $tracking_no ; ?>" class="form-control is-valid" id="inputValid">
            <!-- <div class="valid-feedback">Success! You've done it.</div> -->
         </div>
         <div class="form-group">
            <label for="exampleTextarea">Item Description</label>
            <textarea class="form-control" name="item_desc" id="exampleTextarea" rows="3"><?php echo $item_desc ; ?></textarea>
         </div>
      </div>
   </div>
</form>
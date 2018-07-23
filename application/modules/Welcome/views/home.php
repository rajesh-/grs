

<div class="container h-100 d-flex justify-content-center">
  <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
  <div class="card-header">Login</div>
  <div class="card-body">

    <?php  echo validation_errors('<div class="alert alert-dismissible alert-danger">', '</div>'); ?> 

<?php echo form_open('users/submit') ;?>
<!-- <form action="<?php echo base_url(); ?>orders" method="post"> -->
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" name="username"> -->
      <?php echo form_input('username','') ; ?>
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <!-- <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->

      <?php echo form_password('password','') ; ?>
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

    <?php echo form_submit('submit', 'Submit') ?>
  </fieldset>
</form>
  </div>
</div>
</div>
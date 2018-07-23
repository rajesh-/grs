<?php 
$attributes = array('class' => 'form-signin', 'id' => 'myform');
echo form_open('users/submit', $attributes);
?>

    <!-- <form class="form-signin"> -->
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <?php echo validation_errors("<p class='text-danger'>", "</p>"); ?>
      <label for="inputEmail" class="sr-only">Email address</label>
      
      <?php 

      $data = array(
        'name'          => 'username',
        'class'         => 'form-control',
        'placeholder'   => 'username'
      );
      echo form_input($data); ?>
      

      <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
      <label for="inputPassword" class="sr-only">Password</label>

      <?php 

      $data = array(
        'name'          => 'password',
        'class'         => 'form-control',
        'placeholder'   => 'password'
      );
      echo form_password($data); ?>

      <?php 
      $data = array(
        'name'          => 'submit',
        'value'         => 'Sign in'
      );
      echo form_submit($data); 
      ?>


      <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->


      <?php echo form_close();  ?>
    <!-- </form> -->

    <style type="text/css">
      .form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


    </style>
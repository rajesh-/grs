<!DOCTYPE html>
<html lang="en">
<head>	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>GRS: Truelytics eComm Pvt Ltd</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();  ?>assets/css/grid.css" rel="stylesheet">
	<link id="bootstrap-style" href="<?php echo base_url(); ?>assets/janux/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo base_url(); ?>assets/janux/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url(); ?>assets/janux/css/ie9.css" rel="stylesheet">
	<![endif]-->		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->	
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/images/logo-loading.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Orders <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>go">Import Orders</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url(); ?>orders">
      <input name="grs_o_search" class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="searchbtn">Search</button>
    </form>



	<?php  if($this->session->userdata('user_id')) { ?>
    <span style="color: #2FA4E7; margin-left: 85px;">Welcome <?php echo $username; ?>!</span>
    <span style="color: #fffc; margin-left: 5px;"><a href="<?php echo base_url(); ?>users/logout">Logout</a></span>
	<?php } ?>

	
  </div>
</nav>
	<div style="min-height: 560px; " class="jumbotron">

		<!-- Load invividual page child template here   -->
		<?php
				if(isset($view_file)){
					$this->load->view($view_module.'/'.$view_file);
				}else{

					echo "The view file is missing!";
				}
		?>
		<!-- Load invividual page child template here   -->


	</div>

	<div style="color: #fff; background-color: #000;" class="row">
	<div class="footer col-md-10"><p>© 2018 Truelytics eComm Pvt. Ltd.
      </p></div><div class="footer col-md-2"><a href="https://www.icustommadeit.com/" target="_blank">ICUSTOMMADEIT.COM</a></div>
	</div>







<!-- start: JavaScript-->

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/janux/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>assets/janux/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>assets/janux/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>assets/janux/js/excanvas.js"></script>
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.flot.stack.js"></script>
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/janux/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>assets/janux/js/custom.js"></script>
	<!-- end: JavaScript-->




</body>
</html>

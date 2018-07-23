
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
	<link id="bootstrap-style" href="https://www.icustommadeit.com/grs/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://www.icustommadeit.com/grs/assets/css/grid.css" rel="stylesheet">
	<link id="bootstrap-style" href="https://www.icustommadeit.com/grs/assets/janux/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="https://www.icustommadeit.com/grs/assets/janux/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="https://www.icustommadeit.com/grs/assets/janux/css/ie9.css" rel="stylesheet">
	<![endif]-->		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->	

	<style type="text/css">
		p{
			font-weight: 800 !important;
		}
	</style>
</head>

<body style="font-family: all; color: #000;">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="https://www.icustommadeit.com/grs/"><img src="https://www.icustommadeit.com/grs/assets/images/logo-loading.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div  class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Orders <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="https://www.icustommadeit.com/grs/orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Import CSV</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0" method="post"> action="https://www.icustommadeit.com/grs/orders">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
        <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url(); ?>orders">
      <input name="grs_o_search" class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="searchbtn">Search</button>
    </form>

    <span style="color: #fffc; margin-left: 85px; "><a href="https://www.icustommadeit.com/grs/users/logout">Logout</a></span>
  </div>
</nav>
	<div style="min-height: 560px; ">

		<!-- Load invividual page child template here   -->
		
    <div style="padding-right: 1px !important; padding-left: 1px !important; " class="container">
    <p align="center"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="printDiv('printableArea')" src="<?php echo base_url(); ?>/assets/images/printing.gif" width="55"></p>
    <!-- <div><input type="button" onclick="printDiv('printableArea')" value="Print" /></div> -->	










  





      <div style="color: #000 !important; max-width: 70%; margin: 0 auto;" id="printableArea" class="col-md-9  vertical-center">



      	<table class="table table-responsive border-dark" border="2">
      		<tr class="border-dark">
      			<td class="border-dark" colspan="7" style="text-align: center; ">INVOICE</td>
      		</tr>
      		<tr>
      			<td class="border-dark" colspan="7" style="text-align: center; ">
      				<strong>TRUELYTICS ECOMM PVT LTD</strong><br>
Golden Empire Lane, Opp. Amar Paradigm<br>
Baner,Pune<br>
<strong>GSTIN No 27AAECT6867F1ZY<strong><br>
      			</td>
      		</tr>
      		<tr>
      			<td class="border-dark" colspan="2" style="text-align: center; min-width: 114px;">
      				Bill to<br>
<h5 style="color: #000;">GRS</h5><br>
ON L4B 4N8<br>
      			</td>
      			<td  colspan="2" style="text-align: center; ">

      				<?php 
      				//Check if string has + character
      				//Extract only phone number from whole string.
      				if (strpos($item_option, '+') !== false) {
					    $ph_addl = '+'.preg_replace('/[^0-9]/', '', $item_option);
					}else{
						$ph_addl = preg_replace('/[^0-9]/', '', $item_option);
					}


      				// $ph_addl = preg_replace('/[^0-9]/', '', $item_option); ?>


      			Place of Shipping<br>
      			<h5 style="color: #000;"><?php echo $firstname.' '.$lastname;?></h5>
            <?php echo $address1.' '.$address2.', '.$city.', '.$state.', Pin Code: '.$zip.'<br> Phone: '.$phone;?><br>
      		</td>
      			<td class="border-dark" colspan="3" style="text-align: left; ">
      				<table style="width: 100%;padding: -7px;margin-top: -12px;margin-bottom: -12px;margin-left: -13px;margin-right: -11px;width: 245px;height: 177px;">

      					<tr style="min-width: 115px;"> <td style="border-bottom: 1px solid black; ">Invoice No:</td> <td style="border-left: 1px solid black; border-bottom: 1px solid black; ">Dated:</td></tr>
      					<tr> <td height="120">TEPL/18-19/<?php echo $this->uri->segment(3); ?></td> <td style="border-left: 1px solid black;"><?php echo substr($order_date, 0, 10); ?> </td></tr>	
      				</table>
      			</td>
      		</tr>

      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="2" style="text-align: left; ">Description of Goods</td>
	      				<!-- <td style="text-align: center; ">--</td> -->
	      				<td id="1111"   style="text-align: center; "></td>
	      				<td colspan="1"  style="text-align: center; ">Qty</td>
	      				<td colspan="1"  style="text-align: center; ">Units</td>
	      				<td colspan="1" style="text-align: center; ">Rate</td>
	      				<td colspan="1" style="text-align: center; ">Amount</td>
      				</tr>
      			</tr>
      		</tr>

      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="2" style="text-align: left; "><?php echo $item_desc; ?></td>
	      				<td id="2222" style="text-align: center; "></td>
	      				<td style="text-align: center; "><?php echo $qty ;?></td>
	      				<td style="text-align: center; ">pcs</td>
	      				<td style="text-align: center; "></td>
	      				<td id="3333" style="text-align: center; ">₹ 0.00</td>
      				</tr>
      			</tr>
      		</tr>

      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="2" style="text-align: left; ">Taxable Value</td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; ">₹ 0.00</td>
      				</tr>
      			</tr>
      		</tr>

      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="2" style="text-align: left; ">Round Off</td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; "></td>
	      				<td style="text-align: center; ">₹ 0.00</td>
      				</tr>
      			</tr>
      		</tr>

      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="6" style="text-align: left; ">Total</td>
	      				
	      				<td colspan="1" style="text-align: center; ">₹ 0.00</td>
      				</tr>
      			</tr>
      		</tr>


      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="7" style="text-align: center; ">**The Product Was Redeemed Against The Reward Points.</td>
	      				
	      				<!-- <td colspan="2" style="text-align: center; ">--</td> -->
      				</tr>
      			</tr>
      		</tr>

      		<tr>
      			<tr>
      				<tr>
	      				<td colspan="4" style="text-align: left; height: 140px;"> <strong> Amount Chargeable (in words):</strong><br>
	      				Zero Rupees<br><br>
	      				<strong>Company's PAN: AAECT6867F</strong><br>
	      			</td>
	      				
	      				<td id="4444" colspan="2" style="text-align: center; "></td>
	      				<td colspan="3" style="text-align: center; ">Authorised Signatory</td>
      				</tr>
      			</tr>
      		</tr>
      		
      	</table>

    </div> 

     
    
    

    










</div><!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://www.icustommadeit.com/grs/assets/dist/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
    </script>

		<!-- Load invividual page child template here   -->


	</div>

<!-- 	<div style="color: #fff; background-color: #000;" class="row">
	<div class="footer col-md-10"><p>© 2018 Truelytics eComm Pvt. Ltd.
      </p></div><div class="footer col-md-2"><a href="https://www.icustommadeit.com/" target="_blank">ICUSTOMMADEIT.COM</a></div>
	</div> -->







<!-- start: JavaScript-->

		<script type="text/javascript" src="https://www.icustommadeit.com/grs/assets/janux/js/jquery-3.3.1.min.js"></script>
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.ui.touch-punch.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/modernizr.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/bootstrap.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.cookie.js"></script>
	
		<script src='https://www.icustommadeit.com/grs/assets/janux/js/fullcalendar.min.js'></script>
	
		<script src='https://www.icustommadeit.com/grs/assets/janux/js/jquery.dataTables.min.js'></script>

		<script src="https://www.icustommadeit.com/grs/assets/janux/js/excanvas.js"></script>
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.flot.js"></script>
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.flot.pie.js"></script>
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.flot.stack.js"></script>
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.flot.resize.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.chosen.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.uniform.min.js"></script>
		
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.cleditor.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.noty.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.elfinder.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.raty.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.iphone.toggle.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.gritter.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.imagesloaded.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.masonry.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.knob.modified.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/jquery.sparkline.min.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/counter.js"></script>
	
		<script src="https://www.icustommadeit.com/grs/assets/janux/js/retina.js"></script>

		<script src="https://www.icustommadeit.com/grs/assets/janux/js/custom.js"></script>


		<script>
function bigImg(x) {
    // x.style.height = "64px";
    x.style.width = "77px";
}

function normalImg(x) {
    // x.style.height = "32px";
    x.style.width = "55px";
}
</script>
	<!-- end: JavaScript-->




</body>
</html>

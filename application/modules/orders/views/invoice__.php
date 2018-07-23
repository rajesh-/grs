
    <div style="padding-right: 1px !important; padding-left: 100px !important;     min-width: 1200px;" class="container dark">
      <div style="color: #000 !important; max-width: 100%; margin: 0 auto !important;" id="printableArea" class="row">
        <div style="border: 1px solid black;"  class="col-md-9 text-center">
          <span>INVOICE</span>         
        </div>

        <div style="border: 1px solid black;"  class="col-md-9 text-center">
          <h4 style="color: #000; ">TRUELYTICS ECOMM PVT LTD</h4>
          <span>Golden Empire Lane, opp.Amar Paradigm</span><br>
          	Baner,Pune<br>
          	<strong>GSTIN No  27AAECT6867F1ZY</strong>
          </p>         
        </div>
        <div style="border: 1px solid black;" class="col-md-9">          
          <div style="border: 1px solid black;" class="row">
            <div style="border: 1px solid black;"  class="col-md-4">Bill to
            	<h4 style="color: #000; ">GRS</h4>
            	ON L4B 4N8
            </div>
            <div style="border: 1px solid black;"  class="col-md-4">Place of Shipping
            	<h4 style="color: #000; " ><?php echo $firstname.' '.$lastname;?></h4>
            	<p><?php echo $address1.' '.$address2.', '.$city.', '.$state.', Pin Code: '.$zip.

'<br> Phone: '.$phone

              ;?></p>
            </div>











            <div class="col-md-4">
            	<div style="border: 1px solid black;"  class="row">
            		<div style="border: 1px solid black;" class="col-md-7">INVOICE No</div>
            		<div style="border: 1px solid black;" class="col-md-5">Dated</div>
            		<div style="border: 1px solid black;" style="padding-left: 2px;" class="col-md-7">TEPL/18-19/<?php echo $this->uri->segment(3); ?></div>
            		<div style="padding-left: 2px; border: 1px solid black;" class="col-md-5"><?php echo substr($order_date, 0, -5); ?> 
                </div>
            	</div>
            </div>


          </div>
          

          <div style="border: 6px solid black;"  class="row">
            <div style="border: 1px solid black;"  class="col-md-4">
            	<div style="border: 1px solid black;" class="row">
            	<div class="col-md-12">Description of Goods</div>
            	<div class="col-md-12" style="min-height: 140px;"><?php echo $item_desc; ?></div>
            	<div class="col-md-12">Taxable Value</div>
            	<div class="col-md-12">Round Off</div>
            </div>
            </div>          

            <div style="border: 1px solid black;"  class="col-md-4">
            	<div class="row">
            		<div class="col-md-4">--</div>
            		<div class="col-md-4">Qty</div>
            		<div class="col-md-4">Units</div>
            		<div class="col-md-4"  style="min-height: 140px;">--</div>
            		<div class="col-md-4"><?php echo $qty; ?></div>
            		<div class="col-md-4">pcs</div>
            		<div class="col-md-4">--</div>
            		<div class="col-md-4">--</div>
            		<div class="col-md-4">--</div>
            		<div class="col-md-4">--</div>
            		<div class="col-md-4">--</div>
            		<div class="col-md-4">--</div>            		
            	</div>
            </div>
            <div style="border: 1px solid black;"  class="col-md-4">
            	<div style="border: 1px solid black;" class="row">
            		<div class="col-md-6">Rate</div>
            		<div class="col-md-6">Amount</div>
            		<div class="col-md-6"  style="min-height: 140px;">--</div>
            		<!-- <div class="col-md-6">₹ <?php echo $cost; ?></div> -->
                <div class="col-md-6">₹ 0.00</div>
            		<div class="col-md-6">--</div>
            		<div class="col-md-6">₹ 0.00</div>
            		<div class="col-md-6">--</div>
            		<div class="col-md-6">--</div>
            	</div>
            </div>
          </div>













          <div style="border: 1px solid black;"  class="row">
            <div class="col-md-10"><strong>Total</strong></div>
            <div class="col-md-2">₹ 0.00</div>
          </div>
          <div style="border: 1px solid black;"  class="row">
          	<div class="col-md-12 text-center"><strong>**The Product Was Redeemed Against The Reward Points.</strong></div>
          	<!-- <div class="col-md-2">--</div> -->
          </div>     
          <div style="border: 1px solid black;"  class="row">
          	<div class="col-md-7"><strong>Amount Chargeable (in words):</strong><br>
          		Zero Rupees<br><br>
          		<strong>Company's PAN: AAECT6867F</strong><br>
          	</div>
          	<div class="col-md-2">--</div>
            <div class="col-md-3">Authorised Signatory</div>
          </div>
      </div> 
    </div> 
    <div><input type="button" onclick="printDiv('printableArea')" value="Print" /></div>

</div><!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();  ?>assets/dist/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}



document.getElementsByTagName('body')[0].style = "font-family: all; color: #000";
    </script>


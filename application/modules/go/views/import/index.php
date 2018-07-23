    <div id="container">


    <div class="row">
    <div class="col-lg-12" id="loading">
        <h1>Import <small>orders</small></h1>
        <!-- <ol class="breadcrumb">
            <li class="active"><i class="fa fa-list"></i> Import Members</li>
        </ol> -->            
    </div>

    





</div><!-- /.row -->
<?php
$output = '';
$output .= form_open_multipart('go/save');
$output .= '<div class="row">';
$output .= '<div class="col-lg-12 col-sm-12"><div class="form-group">';
$output .= form_label('Import Lawyers', 'image');
$data = array(
    'name' => 'userfile',
    'id' => 'userfile',
    'class' => 'form-control filestyle',
    'value' => '',
    'data-icon' => 'false'
);
$output .= form_upload($data);
$output .= '</div> <span style="color:red;">*Please choose an Excel file(.xls or .xlxs) as Input</span></div>';
$output .= '<div class="col-lg-12 col-sm-12"><div class="form-group text-right">';
$data = array(
    'name' => 'importfile',
    'id' => 'importfile-id',
    'class' => 'btn btn-primary',
    'value' => 'Import',
    'onclick' => 'test();',
);
$output .= form_submit($data, 'Import Data');
$output .= '</div>
                        </div></div>';
$output .= form_close();
echo $output;
?>
</div>





<script>
    function test(){
    var img = document.createElement('img');
    img.src = "<?php echo base_url();?>assets/images/lg.colorful-progress-loader.gif";
    // document.body.appendChild(img);
    document.getElementById("loading").appendChild(img);
    }
</script>
<?php global $qode_options_proya;
$page_id = $wp_query->get_queried_object_id();
 ?>
<?php 
$content_bottom_area = "yes";
if(get_post_meta($page_id, "qode_enable_content_bottom_area", true) != ""){
  $content_bottom_area = get_post_meta($page_id, "qode_enable_content_bottom_area", true);
} else{
  if (isset($qode_options_proya['enable_content_bottom_area'])) {
    $content_bottom_area = $qode_options_proya['enable_content_bottom_area'];
  }
}
$content_bottom_area_sidebar = "";
if(get_post_meta($page_id, 'qode_choose_content_bottom_sidebar', true) != ""){
  $content_bottom_area_sidebar = get_post_meta($page_id, 'qode_choose_content_bottom_sidebar', true);
} else {
  if(isset($qode_options_proya['content_bottom_sidebar_custom_display'])) {
    $content_bottom_area_sidebar = $qode_options_proya['content_bottom_sidebar_custom_display'];
  }
}
$content_bottom_area_in_grid = true;
if(get_post_meta($page_id, 'qode_content_bottom_sidebar_in_grid', true) != ""){
  if(get_post_meta($page_id, 'qode_content_bottom_sidebar_in_grid', true) == "yes") {
    $content_bottom_area_in_grid = true;
  } else {
    $content_bottom_area_in_grid = false;
  } 
}
else {
  if(isset($qode_options_proya['content_bottom_in_grid'])){if ($qode_options_proya['content_bottom_in_grid'] == "no") $content_bottom_area_in_grid = false;}
}
$content_bottom_background_color = '';
if(get_post_meta($page_id, "qode_content_bottom_background_color", true) != ""){
  $content_bottom_background_color = get_post_meta($page_id, "qode_content_bottom_background_color", true);
}
?>
  <?php if($content_bottom_area == "yes") { ?>
  <?php if($content_bottom_area_in_grid){ ?>
    <div class="container">
      <div class="container_inner clearfix">
  <?php } ?>
    <div class="content_bottom" <?php if($content_bottom_background_color != ''){ echo 'style="background-color:'.$content_bottom_background_color.';"'; } ?>>
      <?php dynamic_sidebar($content_bottom_area_sidebar); ?>
    </div>
    <?php if($content_bottom_area_in_grid){ ?>
          </div>
        </div>
      <?php } ?>
  <?php } ?>
  
  </div>
</div>

<?php
if(isset($qode_options_proya['paspartu']) && $qode_options_proya['paspartu'] == 'yes'){?>
    </div> <!-- paspartu_inner close div -->
    </div> <!-- paspartu_outer close div -->
<?php
}
?>

<?php

$paspartu = false;
if(isset($qode_options_proya['paspartu']) && $qode_options_proya['paspartu'] == 'yes'){
  $paspartu = true;
}

$uncovering_footer = false;
if(isset($qode_options_proya['uncovering_footer']) && $qode_options_proya['uncovering_footer'] == "yes" && $paspartu == false){
        $uncovering_footer = true;
}
?>
  <footer <?php if($uncovering_footer){echo 'class="uncover"';} ?>>
    <div class="footer_inner clearfix">
    <?php
    $footer_in_grid = true;
    if(isset($qode_options_proya['footer_in_grid'])){
      if ($qode_options_proya['footer_in_grid'] != "yes") {
        $footer_in_grid = false;
      }
    }
    $display_footer_top = true;
    if (isset($qode_options_proya['show_footer_top'])) {
      if ($qode_options_proya['show_footer_top'] == "no") $display_footer_top = false;
    }
    
    $footer_top_columns = 4;
    if (isset($qode_options_proya['footer_top_columns'])) {
      $footer_top_columns = $qode_options_proya['footer_top_columns'];
    }
    
    if($display_footer_top) { ?>
    <div class="footer_top_holder">
      <div class="footer_top<?php if(!$footer_in_grid) {echo " footer_top_full";} ?>">
        <?php if($footer_in_grid){ ?>
        <div class="container">
          <div class="container_inner">
        <?php } ?>
            <?php switch ($footer_top_columns) { 
              case 6:
            ?>
              <div class="two_columns_50_50 clearfix">
                <div class="column1">
                    <div class="column_inner">
                      <?php dynamic_sidebar( 'footer_column_1' ); ?>
                    </div>
                </div>
                <div class="column2">
                  <div class="column_inner">
                    <div class="two_columns_50_50 clearfix">
                      <div class="column1">
                        <div class="column_inner">
                          <?php dynamic_sidebar( 'footer_column_2' ); ?>
                        </div>
                      </div>
                      <div class="column2">
                        <div class="column_inner">
                          <?php dynamic_sidebar( 'footer_column_3' ); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
            <?php 
              break;
              case 5:
            ?>
              <div class="two_columns_50_50 clearfix">
                <div class="column1">
                  <div class="column_inner">
                    <div class="two_columns_50_50 clearfix">
                      <div class="column1">
                        <div class="column_inner">
                          <?php dynamic_sidebar( 'footer_column_1' ); ?>
                        </div>
                      </div>
                      <div class="column2">
                        <div class="column_inner">
                          <?php dynamic_sidebar( 'footer_column_2' ); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column2">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                  </div>
                </div>
              </div>              
            <?php 
              break;
              case 4:
            ?>
              <div class="four_columns clearfix">
                <div class="column1">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_1' ); ?>
                  </div>
                </div>
                <div class="column2">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_2' ); ?>
                  </div>
                </div>
                <div class="column3">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                  </div>
                </div>
                <div class="column4">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_4' ); ?>
                  </div>
                </div>
              </div>
            <?php
              break;
              case 3:
            ?>
              <div class="three_columns clearfix">
                <div class="column1">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_1' ); ?>
                  </div>
                </div>
                <div class="column2">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_2' ); ?>
                  </div>
                </div>
                <div class="column3">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                  </div>
                </div>
              </div>
            <?php
              break;
              case 2:
            ?>
              <div class="two_columns_50_50 clearfix">
                <div class="column1">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_1' ); ?>
                  </div>
                </div>
                <div class="column2">
                  <div class="column_inner">
                    <?php dynamic_sidebar( 'footer_column_2' ); ?>
                  </div>
                </div>
              </div>
            <?php
              break;
              case 1:
                dynamic_sidebar( 'footer_column_1' );
              break;
            }
            ?>
        <?php if($footer_in_grid){ ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
    <?php
    $display_footer_text = false;
    if (isset($qode_options_proya['footer_text'])) {
      if ($qode_options_proya['footer_text'] == "yes") $display_footer_text = true;
    }
    if($display_footer_text): ?>
    <div class="footer_bottom_holder">
      <div class="footer_bottom">
        <?php dynamic_sidebar( 'footer_text' ); ?>
      </div>
    </div>
    <?php endif; ?>
    </div>

    
  </footer>
</div>
</div>

<!--Himanshu   -->

<style>
.pop-form-main label {
  width: 35%;
  vertical-align: middle;
}
.pop-form-main input, .pop-form-main textarea, .pop-form-main select {
  display: inline-block;
  width: 64%;
}
.pop-form-main {
  width: 500px;
}
.btn-main{
  margin-top:20px;
}
.btn-popup {
  background: #491919 none repeat scroll 0 0;
  border-color: #6e2626;
}
.btn-popup:hover, .btn-popup:focus, .active {
  background-color: #390606;
  border-color: #6e2626;
  color: #fff;
}
.btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary.focus:active, .btn-primary:active:focus, .btn-primary:active:hover, .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
  background-color: #390606;
  border-color: #6e2626;
  color: #fff;
}
.modal-header {
  background: #491919 none repeat scroll 0 0;
  border-radius: 5px 5px 0 0;
  color: #fff;
  text-align: center;
}
@media only screen and (min-width:320px) and (max-width:767px) {

.pop-form-main {
  width: 100%;
}
.pop-form-main label, .pop-form-main input, .pop-form-main textarea, .pop-form-main select {
  width: 100%;
}
  }
</style>

<!-- Modal -->
<div class="modal fade first_form_toggle" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Get A Quote</h4>
      </div>
      <div class="modal-body">
       <form role="form" class="pop-form-main" method="post" action="#" onsubmit="return false;" id="newsletterform">
  <div class="form-group">
    <label>First Name *</label>
    <input class="form-control" placeholder="First Name" name="firstname" id="firstname" type="text">
  </div>
  <div class="form-group">
    <label>Middle Name</label>
    <input class="form-control" placeholder="Middle Name" name="middlename" id="middlename" type="text">
  </div>
  <div class="form-group">
    <label>Last Name *</label>
    <input class="form-control" placeholder="Last Name" name="lastname" id="lastname" type="text">
  </div>
  <div class="form-group">
    <label>Office Number </label>
    <input class="form-control" placeholder="Office Number" name="offfice_number" id="offfice_number" type="text">
  </div>
  <div class="form-group">
    <label>Mobile *</label>
    <input class="form-control" placeholder="Mobile" name="moblie" id="mobile" type="text">
  </div>
  <div class="form-group">
    <label>DOB *</label>
    <input class="form-control" placeholder="DOB" id="datepicker" name="dob"  type="text">
  </div>
  <div class="form-group">
    <label>Email *</label>
    <input class="form-control" placeholder="Email" name="email" id="email" type="text">
  </div>
  <div class="form-group">
    <label>Choose what coverage *</label>
    <select class="form-control" name="level" onChange="changeTest(this)">
      <option value="Voluntary Group Death Natural Causes-12 month policy" selected >Voluntary Group Death Natural Causes-12 month policy</option>
      <option value="Voluntary Accidental Death,Accidental Permanent Total Disablement & Accident/illness Medical Evac/Repat">Voluntary Accidental Death,Accidental Permanent Total Disablement & Accident/illness Medical Evac/Repat </option>
    </select>
  </div>
 <!--<button type="submit" id="tigger">submit</button> -->
 <!--  <input type="submit" name="submit" value="submit"> -->
   </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default first_buttons_hide" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-popup first_buttons_hide" id="tigger">Get quotation </button>
        <button type="button" class="btn btn-primary btn-popup first_buttons_show" data-toggle="modal" data-target="#myModal2" style="display:none">
        <a href="http://webdesigndemo1.com/blissmarc/sec-from/" style="color:#fff;">Click to proceed</a>
</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form 2</h4>
      </div>
      <div class="modal-body">
       <form role="form" class="pop-form-main" method="post" action="#" name="form_message" id="form_message">
  <div class="form-group">
    <label>First Name *</label>
    <input class="form-control" placeholder="First Name" type="text" name="fname" id="fname">
  </div>
  <div class="form-group">
    <label>Middle Name </label>
    <input class="form-control" placeholder="Middle Name" type="text" name="mname" id="mname">
  </div>
  <div class="form-group">
    <label>Last Name *</label>
    <input class="form-control" placeholder="Last Name" type="text" name="lname" id="lname">
  </div>
  <div class="form-group">
    <label>Age *</label>
    <input class="form-control" placeholder="Age" type="text" name="age" id="age">
  </div>
  <div class="form-group">
    <label>Gender</label>
     <select class="form-control" name="gender" id="gender"> 
      <option value="M" >Male</option>
      <option value="F" class="">Female</option>
    </select>
  </div>
  <div class="form-group">
    <label>Length of coverage *</label>
    <input class="form-control" placeholder="Length of coverage" type="text" name="coverage" id="coverage">
  </div>
  <div class="form-group">
    <label>Employers name *</label>
    <input class="form-control" placeholder="Employers name" type="text" name="ename" id="ename">
  </div>
  <div class="form-group">
    <label>Permanent address in the Philippines *</label>
    <input class="form-control" placeholder="Permanent address in the Philippines" type="text" name="paddress" id="paddress">
  </div>
  <div class="form-group">
    <label>Work Contact phone number (if any)</label>
    <input class="form-control" placeholder="Work Contact phone number" type="text" name="work" id="work">
  </div>
  <div class="form-group">
    <label>Current address where they work </label>
    <input class="form-control" placeholder="Current address where they work" type="text" name="caddress" id="caddress">
  </div>
  <div class="form-group">
    <label>Contact number *</label>
    <input class="form-control" placeholder="Contact number" type="text" name="cnumber" id="cnumber">
  </div>
  <div class="form-group">
    <label>Email address *</label>
    <input class="form-control" placeholder="Email address"  type="text" name="e_mail" id="e_mail">
  </div>
  <div class="form-group">
    <label>Emergency contact </label>
    <input class="form-control" placeholder="Emergency contact" type="text" name="econtact" id="econtact">
  </div>
</form>
      </div>
      <div class="modal-footer">
<div id="success1" style="">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="sub" class="btn btn-primary btn-popup">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri();   ?>/js/bootstrap.min.js"></script> 
 <script src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<link href="<?php echo get_template_directory_uri();   ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();   ?>/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri();   ?>/jquery-ui.css">-->
<script>
     $('#datepicker').datepicker({
    });
 </script>
<!-- Himanshu   -->
<?php wp_footer(); ?>



  <script type="text/javascript">

    $(document).ready(function(){
    

      $('.first_buttons_show').click( function(){
            
           $('.modal-backdrop').hide();
           $('#myModal').hide();
           $('body').css('padding-right' , '0');

      });

      $(document).on("click","#tigger",function(){

        $('#myModal .modal-body .alert').remove();
        $('#myModal .modal-body').append('<div class="alert alert-warning"><i> Loading... </i></div>');

        var firstname=$("#firstname").val();
        var middlename=$("#middlename").val();
        var lastname=$("#lastname").val();
        var offfice_number=$("#offfice_number").val();
        var mobile=$("#mobile").val();
        var birthDate=$("#datepicker").val();
        var email =$("#email").val();
        var ser1 = $('select[name=level]').val();

        if( firstname != '' && lastname != '' && mobile != '' && birthDate != '' && email != '' && ser1 != '' ){


          $.ajax({
                  type:"POST",
                  url:"<?php echo get_option('siteurl'); ?>/form-service/",
                  dataType : "JSON",
                  data:{demo:1234, firstname:firstname, middlename:middlename, lastname:lastname, offfice_number:offfice_number, mobile:mobile, birthDate:birthDate, email:email , ser1:ser1},
                  success:function(data)
                  {
                    if( data.rates != false ){
                                              
                                               $('#myModal .modal-body .alert').remove();
                                               $('#myModal .modal-body').append('<div class="alert alert-warning price_alert"> Policy Rate : $'+ data.rates + '</div>');
                                               $('.first_buttons_show').show();
                                               $('.first_buttons_hide').hide();
                                               $('.first_buttons_hide').hide();
                                $( '#newsletterform' ).each(function(){
                              this.reset();
                              });

                    } else{

                        $('#myModal .modal-body .alert').remove();
                                              $('#myModal .modal-body').append('<div class="alert alert-warning">  Sorry! We do not have any services for you.</div>');
                    }
                  },
                  error:function()
                  {
                          $('#myModal .modal-body .alert').remove();
                                              $('#myModal .modal-body').append('<div class="alert alert-danger">  Something went wrong! </div>');
                  }
            });


        }else{

          

                                              $('#myModal .modal-body .alert').remove();
                                              $('#myModal .modal-body').append('<div class="alert alert-danger"> All the fields with (*) are mandatory.</div>');

        }

            
      
       });


/*Second form*/

$(document).on("click","#sub",function(){


  $('#myModal2 .modal-body .alert').remove();
  $('#myModal2 .modal-body').append('<div class="alert alert-warning"><i> Loading... </i></div>');

    var values = $('#form_message').serialize();

    
    if( $('#fname').val() != '' &&  $('#lname').val() != '' && $('#age').val() != '' && $('#gender').val() != '' && $('#coverage').val() != '' && $('#ename').val() != '' && $('#paddress').val() != '' &&  $('#cnumber').val() != '' && $('#e_mail').val() != '' ) {

       $.ajax({
                url: "<?php echo get_option('siteurl'); ?>/second-form/",
                type: "post",
                dataType: "JSON",
                data:values,
                success: function(data){
 
                    if( data.mail_status != false ){

                                               $('#myModal2 .modal-body .alert').remove();
                                               $('#myModal2 .modal-body').append('<div class="alert alert-warning price_alert"> Your request has been sent, we will reach you shortly. </div>');
                                             
                                                $( '#form_message' ).each(function(){
                                                   this.reset();
                                                });

                    } else{


                        $('#myModal2 .modal-body .alert').remove();
                        $('#myModal2 .modal-body').append('<div class="alert alert-warning">  We are not able to send this mail, It can be temporary issue so please try after sometime.</div>');
                    }
                }
       });


    }else{

      
           $('#myModal2 .modal-body .alert').remove();
           $('#myModal2 .modal-body').append('<div class="alert alert-danger"> All the fields with (*) are mandatory.</div>');
    

    }
    });

  });


    
  </script>
</body>

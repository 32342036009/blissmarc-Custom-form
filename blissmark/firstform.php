<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/1480487143.ico">
<title>Forms</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui.css">
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
</head>

<body>
<div class=" text-center btn-main"><button type="button" class="btn btn-primary btn-popup" data-toggle="modal" data-target="#myModal">
  Launch First Form
</button>
<button type="button" class="btn btn-primary btn-popup" data-toggle="modal" data-target="#myModal2">
  Launch Second Form
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form 1</h4>
      </div>
      <div class="modal-body">
       <form role="form" class="pop-form-main" action="ser_first.php" method="post">
  <div class="form-group">
    <label>First Name</label>
    <input class="form-control" placeholder="First Name">
  </div>
  <div class="form-group">
    <label>Middle Name</label>
    <input class="form-control" placeholder="Middle Name">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input class="form-control" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label>Office Number</label>
    <input class="form-control" placeholder="Office Number">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input class="form-control" placeholder="Mobile">
  </div>
  <div class="form-group">
    <label>DOB</label>
    <input class="form-control" placeholder="DOB" id="datepicker">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Choose what coverage</label>
    <select class="form-control">
      <option value="">Services</option>
      <option value="green" class="">Age</option>
    </select>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-popup">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form 2</h4>
      </div>
      <div class="modal-body">
       <form name="form_message" id="form_message" role="form" class="pop-form-main" method="post" >
  <div class="form-group">
    <label>First Name</label>
    <input class="form-control" placeholder="First Name" name="fname" id="fname" type="text">
  </div>
  <div class="form-group">
    <label>Middle Name</label>
    <input class="form-control" placeholder="Middle Name" name="mname" id="maname" type="text">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input class="form-control" placeholder="Last Name" name="lname" id="lname" type="text">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input class="form-control" placeholder="Age" name="age" type="text">
  </div>
  <div class="form-group">
    <label>Gender</label>
     <select name="gender" class="form-control">
      <option value="Male">Male</option>
      <option value="Female" class="">Female</option>
    </select>
  </div>
  <div class="form-group">
    <label>Length of coverage</label>
    <input class="form-control" placeholder="Length of coverage" type="text" id="coverage" name="coverage">
  </div>
  <div class="form-group">
    <label>Employers name</label>
    <input class="form-control" placeholder="Employers name" name="empname" type="text">
  </div>
  <div class="form-group">
    <label>Permanent address in the Philippines</label>
    <input class="form-control" placeholder="Permanent address in the Philippines" name="paddress" id="paddress" type="text">
  </div>
  <div class="form-group">
    <label>Work Contact phone number (if any)</label>
    <input class="form-control" placeholder="Work Contact phone number" name="wcontact" id="wcontact" type="text">
  </div>
  <div class="form-group">
    <label>Current address where they work</label>
    <input class="form-control" placeholder="Current address where they work" name="ccontact" id="ccontact" type="text">
  </div>
  <div class="form-group">
    <label>Contact number</label>
    <input class="form-control" placeholder="Contact number" name="contactn" id="contactn" type="text">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input class="form-control" placeholder="Email address" name="e_mail" id="e_mail" type="text">
  </div>
  <div class="form-group">
    <label>Emergency contact</label>
    <input class="form-control" placeholder="Emergency contact" name="econtact" id="econtact" type="text">
  </div>
  <!-- <button type="submit" id="sub">submit</button> -->
  <!-- <input type="submit" name="submit" value="submit"> -->
  <div id="success" class="alert alert-success" style="display:none;"></div>

  <button type="submit" id="sub" class="btn btn-primary btn-popup">Save changes</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-popup">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="jquery-ui.js"></script> 
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
</body>
</html>

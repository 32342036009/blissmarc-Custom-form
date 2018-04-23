<?php 
error_reporting(0);
define('HOSTNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','loginsystem');
$conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DBNAME);
// echo "<pre>";
// print_R($conn);
if(isset($_POST['submit'])){
    echo $Query = "INSERT INTO register(username,email,password,contact, address,sign)VALUES
                                                ('".$_POST['username']."',
                                                '".$_POST['email']."',
                                                '".$_POST['password']."',
                                                '".$_POST['contact']."' ,
                                                '".$_POST['address']."' ,
                                                '".$_POST['sign']."' )"; 
             $Result = mysqli_query($conn, $Query); 
            if($Result->num_rows > 0)
                {
                    $resultData=mysqli_fetch_assoc($Result);
                    //print_r($resultData);
                }
        }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/print-style.css" media="print" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/label_text.js"></script>
	<script src="js/ink_signatures.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div class="container">
<div id="msg"></div>
<h3>User Registration Form</h3>
	<div class="col-sm-4">
	<form action="view.php" name="myform" method="POST">
			<div class="form-group has-success">
				<label class="form-control-label" for="inputSuccess1">User Name</label>
				<input value="" class="form-control is-valid" id="username" name="username" type="text">
			</div>

			<div class="form-group has-success">
				<label class="form-control-label" for="inputSuccess1">Email-id</label>
				<input value="" class="form-control is-valid" id="email" name="email" type="text">
			</div>

			<div class="form-group has-success">
				<label class="form-control-label" for="inputSuccess1">Password</label>
				<input value="" class="form-control is-valid" name="password" id="password" type="password">
			</div>

			<div class="form-group has-success">
				<label class="form-control-label" for="inputSuccess1">Contact</label>
				<input value="" class="form-control is-valid" name="contact" id="contact" type="text">
			</div>

			<div class="form-group has-success">
				<label class="form-control-label" for="inputSuccess1">Address</label>
				<input value="" class="form-control is-valid" name="address" id="address" type="text">
			</div>

			
		

 <div class="row">
           <div class="col-sm-4">Signature</div>
           <div class="col-sm-8">
            <div class="signature" style="margin-top: 10px;">
              <input type="hidden" name="sign" id="ims" value="" > 
              <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature1_canvas",
                    form_name: "myform",
                    field_name: "signature1_canvas",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
        </script> -->
        <img src="<?= $resultData['sign'];?>" width="420" height="90"/>
        
        </div></div>
		<input type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-outline primary">
		</form>
  </div>


</div>

	
</div>
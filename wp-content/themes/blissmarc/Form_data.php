<?php 
/* Template Name: Form Data
 */

ini_set('max_execution_time', '18000');
ini_set('memory_limit', '201M');
ini_set('post_max_size', '201M');
ini_set('upload_max_filesize', '200M');

?>


<?php
if(isset($_POST['demo']))
{
  //print_r($_POST);

  $cfdb['firstname']  = $firstname = addslashes($_POST['firstname']); 
  $cfdb['middlename']  = $middlename = addslashes($_POST['middlename']);
  $cfdb['lastname']  = $lastname = addslashes($_POST['lastname']);
  $cfdb['office_number']  =  $office_number = addslashes($_POST['offfice_number']);
  $cfdb['mobile']  = $mobile = addslashes($_POST['mobile']);
  $cfdb['email']  = $email = addslashes($_POST['email']);
  $cfdb['ser1']  = $ser1 = addslashes($_POST['ser1']);
  $urls = 'http://webdesigndemo1.com/blissmarc/sec-from/';


  //explode the date to get month, day and year
  $birthDate = $_POST['birthDate']; 
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
   //"Age is:" . $age;

    $service1=array(
                "00-30"=>"15.19",
                "31-35"=>"17.89",
                "36-40"=>"23.46",
                "41-45"=>"34.59",
                "46-50"=>"56.19",
                "51-55"=>"97.20",
                "56-60"=>"214.31",
                "61-65"=>"246.21",
                );

     $service2=array(
                "00-30"=>"68.66",
                "31-35"=>"89.11",
                "36-40"=>"89.98",
                "41-45"=>"117.96",
                "46-50"=>"174.27",
                "51-55"=>"279.94",
                "56-60"=>"581.62",
                "61-65"=>"663.81",

                );
 function cal($age,$service){
    $Final_Value="";
    foreach($service as $AgeKey=>$Value){
      $AgeArray=explode("-",$AgeKey);
      if($age >= $AgeArray[0]  &&  $age <= $AgeArray[1]){
          $Final_Value=$Value;
          break;
      }
    }
   if( $Final_Value != '' ) 
    return $Final_Value;
  else
    return false;
 }
  //echo cal(25,$service1); 
 if($ser1=='ser1'){

   $cfdb['services'] = 'Voluntary Group Death Natural Causes-12 month policy';
   $rate = cal($age,$service1); 

 }else{

   $cfdb['services'] = 'Voluntary Accidental Death,Accidental Permanent Total Disablement & Accident/illness Medical Evac/Repat';
   $rate = cal($age,$service2); 
 }

 /* Insert in contact form db for backend  */

      global $wpdb;
      $submit_time = time().'.'.rand(1001,9999);
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_st` ( `submit_time` ) VALUES ( '".$submit_time."' );");


      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote' , 'firstname' , '".$cfdb['firstname']."' );");
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote'  , 'middlename' , '".$cfdb['middlename']."' );");
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote' , 'lastname' , '".$cfdb['lastname']."' );");
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote' , 'office_number' , '".$cfdb['office_number']."' );");
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name`  , `field_value`) VALUES ('".$submit_time."' , 'Get a quote' , 'mobile' , '".$cfdb['mobile']."' );");
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote' , 'email' , '".$cfdb['email']."' );");
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote' , 'services' , '".$cfdb['services']."' );");
        $wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Get a quote' , 'age' , '". $age."' );");

 /* Insert in contact form db for backend  */
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'From: Admin <info@webdesigndemo1.com>' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          $message = 'Hello Admin<br>';
          $message .= 'A user submited "Form"<br>';
          $message .= 'Please find the the details below:<br>';
          

          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>First name:</strong></div>'.stripslashes($firstname).'<br>';
          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Middle name:</strong></div>'.stripslashes($middlename).'<br>';

          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Last name:</strong></div>'.stripslashes($lastname).'<br>';
          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Office number:</strong></div>'.stripslashes($office_number).'<br>';
          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Mobile:</strong></div>'.stripslashes($mobile).'<br>';

       $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Email:</strong></div>'.stripslashes($email).'<br>';
        
          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Service:</strong></div>'.stripslashes($ser1).'<br>';

          $message .= '<div style="width:200px;padding-right:20px;text-align:right;display: inline-block;"><strong>Second Form:</strong></div>'.stripslashes($urls).'<br>';
          

          $to = 'manishchy84@gmail.com';
          
          $subject = 'Qutation request from blissmarc';

         

  $html_mailer = '<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Adventurous</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </head>
 <body>

<table class="table table-condensed" cellspacing="3" cellpadding="3">

 <tr>
  <td class="active" style="text-align:center;"><img src="http://webdesigndemo1.com/blissmarc/blissmarc-form/images/BM-logo.png"/></td>
 </tr>
 
 <tr><td height="1" bgcolor="#CCCCCC"></td></tr>
 <tr><td style="font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#595959; line-height:18px; background-color: #eee;  line-height: 33px;padding: 20px;">
 <p>'.$message.'</p></td></tr>
  <tr>
  <td class="active" style="text-align:center;">© 2016 DBA Bliss Marc Corporation Insurance Agency | CA License #0H92044</td>
  </tr>
 

</table></body>';


         
          if(mail( $to, $subject, $html_mailer, $headers ) ){         
             $status = true;
          }else{
             $status = false;
          }
if($status==true){
          
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'From: User <info@webdesigndemo1.com>' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          $message = '<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Adventurous</title>
  </head>
 <body>
<table class="table table-condensed" cellspacing="3" cellpadding="3">Hello User<br>';
          $message .= 'A user submited "Form"<br>';
          $message .= 'Please find the the details:<br>';
          $message .= '<table>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>First name:</strong></td> <td>'.$firstname.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Middle name:</strong></td> <td>'.$middlename.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Last name:</strong></td> <td>'.$lastname.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Office number:</strong></td> <td>'.$office_number.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Mobile:</strong></td> <td>'.$mobile.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Email Address:</strong></td> <td>'.$email.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Service:</strong></td> <td>'.$ser1.'</td></tr>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="50%" style="text-align:right; padding-right:20px;"><strong>Second Form:</strong></td> <td>'.$urls.'</td></tr>';
          $message .= '<table>';
          
          $to = $email;
          
          $subject = 'Qutation request from blissmarc';

           $html_mailer = '<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Adventurous</title>
  </head>
 <body>
<table>

 <tr>
  <td style="text-align:center"><img src="http://webdesigndemo1.com/blissmarc/blissmarc-form/images/BM-logo.png"/></td>
 </tr>

 <tr><td height="1" bgcolor="#ccc" style="text-align:center;"></td></tr><tr><td style="font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#595959; line-height:18px;  background-color: #eee;  line-height: 33px;padding: 20px;">'.$message.'</td></tr>
  <tr>

  <td class="active" style="text-align:center;">© 2016 DBA Bliss Marc Corporation Insurance Agency | CA License #0H92044</td>
  </tr>
</table></body>';
         
          if(mail( $to, $subject, $html_mailer, $headers ) ){         
             $status = true;
          }else{
             $status = false;
          }
        }

echo json_encode( array(
        'mail_status' => $status,
        'rates' =>  $rate
  ));




}

?>
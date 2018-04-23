<?php 
/* Template Name: Data form
 */

/*ini_set('max_execution_time', '18000');
ini_set('memory_limit', '201M');
ini_set('post_max_size', '201M');
ini_set('upload_max_filesize', '200M');
*/
?>


<?php


  //print_r($_POST);

 /* $cfdb['fname']  = $fname = addslashes($_POST['fname']); 
  $cfdb['mname']  = $mname = addslashes($_POST['mname']);
  $cfdb['lname']  = $lname = addslashes($_POST['lname']);
  $cfdb['age']  =  $age = addslashes($_POST['age']);
   $cfdb['gender']  =  $gender = addslashes($_POST['gender']);
  $cfdb['coverage']  = $coverage = addslashes($_POST['coverage']);
  $cfdb['ename']  = $ename = addslashes($_POST['ename']);
  $cfdb['paddress']  = $paddress = addslashes($_POST['paddress']);
    $cfdb['work']  = $work = addslashes($_POST['work']);
      $cfdb['caddress']  = $caddress = addslashes($_POST['caddress']);
        $cfdb['cnumber']  = $cnumber = addslashes($_POST['cnumber']);
          $cfdb['e_mail']  = $e_mail = addslashes($_POST['e_mail']);
            $cfdb['econtact']  = $econtact = addslashes($_POST['econtact']);

  */

 

 /* Insert in contact form db for backend  */

     /*global $wpdb;
      $submit_time = time().'.'.rand(1001,9999);
      $wpdb->query("INSERT INTO `bm_cf7dbplugin_st` ( `submit_time` ) VALUES ( '".$submit_time."' );");


$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'fname' , '".$cfdb['fname']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form'  , 'mname' , '".$cfdb['mname']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'lname' , '".$cfdb['lname']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'age' , '".$cfdb['age']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'gender' , '".$cfdb['gender']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'coverage' , '".$cfdb['coverage']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name`  , `field_value`) VALUES ('".$submit_time."' , 'Second Form' , 'ename' , '".$cfdb['ename']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'paddress' , '".$cfdb['paddress']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'work' , '".$cfdb['work']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'caddress' , '".$cfdb['caddress']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'cnumber' , '".$cfdb['cnumber']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'e_mail' , '".$cfdb['e_mail']."' );");

$wpdb->query("INSERT INTO `bm_cf7dbplugin_submits` (`submit_time`, `form_name`,  `field_name` , `field_value` ) VALUES ('".$submit_time."' , 'Second Form' , 'econtact' , '".$cfdb['econtact']."' );");
*/


 /* Insert in contact form db for backend  */
 



         /* $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'From: Admin <info@webdesigndemo1.com>' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          $message = 'Hello Admin<br>';
          $message .= 'A user submited "Form"<br>';
          $message .= 'Please find the the details below:<br>';
          
          $message .= '<b>First Name:</b>'.stripslashes($fname).'<br>';
          $message .= '<b>Middle Name:</b>'.stripslashes($mname).'<br>';
          $message .= '<b>Last Name:</b>'.stripslashes($lname).'<br>';
          $message .= '<b>Age:</b>'.stripslashes($age).'<br>';
          $message .= '<b>Gender:</b>'.stripslashes($gender).'<br>'; 
          $message .= '<b>Coverage:</b>'.stripslashes($coverage).'<br>';
          $message .= '<b>Employers name:</b>'.stripslashes($ename).'<br>';
          $message .= '<b>Permanent address:</b>'.stripslashes($paddress).'<br>';
          $message .= '<b>Work Contact:</b>'.stripslashes($work).'<br>';
          $message .= '<b>Current address:</b>'.stripslashes($caddress).'<br>';
          $message .= '<b>Contact number:</b>'.stripslashes($cnumber).'<br>'; 
          $message .= '<b>Email address:</b>'.stripslashes($e_mail).'<br>';
          $message .= '<b>Emergency contact:</b>'.stripslashes($econtact).'<br>';
          

          $to = '8393yogeshkumar@gmail.com';
          
          $subject = 'Qutation Form2 from blissmarc';

           $html_mailer = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
          <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Adventurous</title>
          </head><body style="background-image: url(http://webdesigndemo1.com/blissmarc/blissmarc-form/images/front-pic.jpg);"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td><table width="700" border="0" cellspacing="0" cellpadding="0"><tr><td height="120" align="center"><img src="http://webdesigndemo1.com/blissmarc/blissmarc-form/images/BM-logo.png"  /></td></tr><tr><td height="1" bgcolor="#CCCCCC"></td></tr><tr><td style="font-size:18px; font-family:Arial, Helvetica, sans-serif; color:#000; line-height:18px;    background-color: #e0e6e8;
            opacity: 0.8;
            line-height: 33px;padding: 20px;"><p>'.$message.'</p></td></tr><tr><td height="45" align="center" bgcolor="#e5e5e5" style="font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#666; line-height:18px;">© 2016 DBA Bliss Marc Corporation Insurance Agency | CA License #0H92044</td></tr></table></body>';*/
         
          /*if(mail( $to, $subject, $html_mailer, $headers ) ){         
             $status = true;
          }else{
             $status = false;
          }


echo json_encode( array(
        'mail_status' => $status,
    
  ));*/



?>
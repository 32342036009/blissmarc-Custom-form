<?php
session_start();
//$_POST['imageData'];
error_reporting(0);
include("connection.php");
echo $signs = $_POST['p_signature'];
if(!empty($_POST))
          {
$_SESSION['Post_data']=$_POST;
        $target_dir = "upload/";
                //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        // Check if image file is a actual image or fake image
           $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) 
            {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
             {
    $sql = "INSERT INTO application(surname,forename,state_name,
    title,  marital_status,  dob, plb, r_address, postcode,country, p_address,p_code, home_tel, mobile, email,occ, occupation, nationality, 
    passport_number, uk_text_ref_no, uk_nal_ins_no, date_uk, source_width, politically_expo, p_description, countries_of_tax_residency, countries_of_tax_residency1,countries_of_tax_residency2,countries_of_tax_residency3,tax_identification_number,tax_identification_number1, tax_identification_number2,tax_identification_number3, pls_check, print_name, p_signature, p_date, investment_platform, advise_selected,investe_strategy,
    management_investment , transferred_benefits ,amount ,amount_per ,  pension_fund ,amounts,amounts_per, arg_signature, Member_full_name ,m_date,sanme,fname,nominee_address,n_postcode,n_relationship,n_beneficiary, nominee2_surname, nominee2_fname, nominee2_address, nominee2_postcode, nominee2_rel, nominee2_beneficiary, nominee3_surname, nominee3_fname, nominee3_address, nominee3_postcode, nominee3_rel, nominee3_beneficiary, nominee3_sig, nominee3_date, sig_member, member_fname, member_date,witness_sig, witness_name, witness_date,  witness_address,  witness_postcode, witness_ocp, vantage_sig, vantage2_sig, scheme, scheme_ref_no, scheme_name, scheme_trns, scheme_add, scheme_postcode, schemes_ref_no, scheme_value, scheme_signature, scheme_m_name, scheme_dates, investment_selection,  signed_arg, benefit_nominee, signed_pre_arg,  trns_req_form, certfire_cl_pass, client_address, identification_purposes, financial_adv_name, financial_sig, agency_stamp, financial_date)
           values ('".$_POST['surname']."' ,
                   '".$_POST['forename']."' ,
                   '".$_POST['state_name']."' ,
                   '".$_POST['title']."' ,
                   '".$_POST['marital_status']."' ,
                   '".$_POST['dob']."' ,
                   '".$_POST['plb']."' ,
                   '".$_POST['r_address']."' ,
                   '".$_POST['postcode']."' ,
                   '".$_POST['country']."' ,
                   '".$_POST['p_address']."' ,
                   '".$_POST['p_code']."' ,
                   '".$_POST['home_tel']."' ,
                   '".$_POST['mobile']."' ,
                   '".$_POST['email']."' ,
                   '".$_POST['occ']."' ,
                   '".$_POST['occupation']."' ,
                   '".$_POST['nationality']."' ,
                   '".$_POST['passport_number']."' ,
                   '".$_POST['uk_text_ref_no']."' ,
                   '".$_POST['uk_nal_ins_no']."' ,
                   '".$_POST['date_uk']."' ,
                   '".$_POST['source_width']."' ,
                   '".$_POST['politically_expo']."' ,
                   '".$_POST['p_description']."' ,
                   '".$_POST['countries_of_tax_residency']."' ,
                   '".$_POST['countries_of_tax_residency1']."' ,
                   '".$_POST['countries_of_tax_residency2']."' ,
                   '".$_POST['countries_of_tax_residency3']."' ,
                   '".$_POST['tax_identification_number']."' ,
                   '".$_POST['tax_identification_number1']."' ,
                   '".$_POST['tax_identification_number2']."' ,
                   '".$_POST['tax_identification_number3']."' ,
                   '".$_POST['pls_check']."' ,
                   '".$_POST['print_name']."' ,
                   '".$_POST['p_signature']."' ,
                   '".$_POST['p_date']."' ,
                   '".$_POST['investment_platform']."' ,
                   '".$_POST['advise_selected']."' ,
                   '".$_POST['investe_strategy']."' ,
                   '".$_POST['management_investment']."' ,
                   '".$_POST['transferred_benefits']."' ,
                   '".$_POST['amount']."' ,
                   '".$_POST['amount_per']."' ,
                   '".$_POST['pension_fund']."' ,
                   '".$_POST['amounts']."' ,
                   '".$_POST['amounts_per']."' ,               
                   '".$_POST['arg_signature']."' ,
                   '".$_POST['Member_full_name']."' ,
                   '".$_POST['m_date']."' ,
                   '".$_POST['sanme']."' ,
                   '".$_POST['fname']."' ,
                   '".$_POST['nominee_address']."' ,
                   '".$_POST['n_postcode']."' ,
                   '".$_POST['n_relationship']."' ,
                   '".$_POST['n_beneficiary']."' ,
                   '".$_POST['nominee2_surname']."' ,
                   '".$_POST['nominee2_fname']."' ,
                   '".$_POST['nominee2_address']."' ,
                   '".$_POST['nominee2_postcode']."' ,
                   '".$_POST['nominee2_rel']."' ,
                   '".$_POST['nominee2_beneficiary']."' ,
                   '".$_POST['nominee3_surname']."' ,
                   '".$_POST['nominee3_fname']."' ,
                   '".$_POST['nominee3_address']."' ,
                   '".$_POST['nominee3_postcode']."' ,
                   '".$_POST['nominee3_rel']."' ,
                   '".$_POST['nominee3_beneficiary']."' ,
                   '".$_POST['nominee3_sig']."' ,
                   '".$_POST['nominee3_date']."' ,
                   '".$_POST['sig_member']."' ,
                   '".$_POST['member_fname']."' ,
                   '".$_POST['member_date']."' ,
                   '".$_POST['witness_sig']."' ,
                   '".$_POST['witness_name']."' ,
                   '".$_POST['witness_date']."' ,
                   '".$_POST['witness_address']."' ,
                   '".$_POST['witness_postcode']."' ,
                   '".$_POST['witness_ocp']."' ,
                   '".$_POST['vantage_sig']."' ,
                   '".$_POST['vantage2_sig']."' ,
                   '".$_POST['scheme']."' ,
                   '".$_POST['scheme_ref_no']."' ,
                   '".$_POST['scheme_name']."' ,
                   '".$_POST['scheme_trns']."' ,
                   '".$_POST['scheme_add']."' ,
                   '".$_POST['scheme_postcode']."' ,
                   '".$_POST['schemes_ref_no']."' ,
                   '".$_POST['scheme_value']."' ,
                   '".$_POST['scheme_signature']."' ,
                   '".$_POST['scheme_m_name']."' ,
                   '".$_POST['scheme_dates']."' ,
                   '".$_POST['investment_selection']."' ,
                   '".$_POST['signed_arg']."' ,
                   '".$_POST['benefit_nominee']."' ,
                   '".$_POST['signed_pre_arg']."' ,
                   '".$_POST['trns_req_form']."' ,
                   '".$_POST['certfire_cl_pass']."' ,
                   '".$_POST['client_address']."' ,
                   '".$_POST['identification_purposes']."' ,
                   '".$_POST['financial_adv_name']."' ,
                   '".$_POST['imageData']."' ,
                   '".$target_file."' ,
                   '".$_POST['financial_date']."'
)";
                            
                            if($conn->query($sql))
                            {               
                                    //echo "Item Successfully Inserteted ";
                                    $lastinsertid= $conn->insert_id;
$url = "http://webdesigndemo1.com/blissmarc/blissmarc-form/getvalue.php?id=".$lastinsertid."";

ini_set('max_execution_time', '18000');
ini_set('memory_limit', '201M');
ini_set('post_max_size', '201M');
ini_set('upload_max_filesize', '200M');


            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: Admin <info@webdesigndemo1.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    

  $message .= 'A user submited "Request Form"<br>';
  $message .= 'Please find the the details below:<br>';
  $message .= '<table>';
          $message .= '<tr style="border-bottom:1px solid #ccc;"><td width="10%" style="text-align:right; padding-right:20px;"><strong>Url:</strong></td> <td>'.$url.'</td></tr>';
          
          $message .= '<table>';

 



  $to = 'manishchy84@gmail.com';
  
  $subject = 'QROPS Pension Application form';

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

 <tr><td height="1" bgcolor="#ccc" style="text-align:center;"></td></tr><tr><td style="font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#595959; line-height:18px;  background-color: #eee;  line-height: normal;padding: 20px;">'.$message.'</td></tr>
  <tr>

  <td class="active" style="text-align:center;">© 2016 DBA Bliss Marc Corporation Insurance Agency | CA License #0H92044</td>
  </tr>
</table></body>';
  //$from = 'Adventurous Excursions Travel';
  

 $sent = mail( $to, $subject, $html_mailer,$headers); 
  if($sent){
$send_mail= "insert into application(send_mail) values('yes')";
$rs=$conn->query($send_mail);
//echo "Request Send Successfully!";

  header('Location:http://webdesigndemo1.com/blissmarc/blissmarc-form/application-form.php?message=Request Send Successfully!');
//echo "success";
    
  }else{
  header('Location:http://webdesigndemo1.com/blissmarc/blissmarc-form/application-form.php?message=Request Fail!');

}



//header("Location: ".$url." ");
//exit();
                            
                            }
                }
                else
                {
                  echo "Not Upload";
                }
            } 
            else 
            {
                echo "File is not an image.";
                $uploadOk = 0;
            }

        } 


?>



<?php

//echo $_GET['id'];
//include("connection.php");
/*if(empty($_GET['g_id'])){
  //header('Location: ');

}

//echo $_GET['id'];
//print_r($conn);
 $sql="select * from `application` where id='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);

if($result->num_rows > 0)
{
    $resultData=mysqli_fetch_assoc($result);
    //print_r( $resultData['id']);
}
*/

if(empty($_GET['id'])){
 header('Location:http://webdesigndemo1.com/blissmarc/blissmarc-form/application-form.php');
}
include("connection.php");

$sql="select * from `application` where id='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);

if($result->num_rows > 0)
{
    $resultData=mysqli_fetch_assoc($result);
    //print_r( $resultData);

}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Application form</title>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/print-style.css" media="print" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="js/bootstrap.min.js"></script>
<script src="js/label_text.js"></script>
<script src="js/ink_signatures.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/print-style.css"> -->
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
    $( "#datepicker3" ).datepicker();
    $( "#datepicker4" ).datepicker();
    $( "#datepicker5" ).datepicker();
    $( "#datepicker6" ).datepicker();
    $( "#datepicker7" ).datepicker();
    $( "#datepicker8" ).datepicker();
    $( "#datepicker9" ).datepicker();
  } );
  </script>
<!-- <script type="text/javascript" src="https://formsroostergrin.com/phamily/js/label_text.js"></script> --> 
<!-- <link rel="stylesheet" href="https://formsroostergrin.com/phamily/css/jquery-ui.css" />
<script type="text/javascript" src="https://formsroostergrin.com/phamily/js/jaquery-1.9.0.min.js"></script> -->        
<!--<script src="https://formsroostergrin.com/phamily/js/jquery-ui.js"></script>
<script type="text/javascript" src="https://formsroostergrin.com/phamily/js/ink_signatures.js"></script>-->
</head>

<body>
<form action="app.php" name="myform" method="POST" enctype="multipart/form-data">
<div class="paper" id="page1">
<img src="images/front-pic.jpg" width="100%" height="1560" />
</div>
<div class="paper" id="page2">
<div class="container1">
<div class="inner-wraper">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading">Applicant’s Details</h1>
 <img src="images/line.jpg" width="100%" height="8" /> </div>
 </div>
  <div class="row">
           <div class="col-sm-4">Surname</div>
           <div class="col-sm-8">
           
           <input  type="text" name="surname" id="surname" value="<?php echo $resultData['surname'];?>" /></div>
  </div>
    <div class="row">
           <div class="col-sm-4">Forename(s)</div>
           <div class="col-sm-8"><input  type="text" name="forename" id="forename" value="<?php echo $resultData['forename'];?>" /></div>
  </div>
  <div class="row">
           <div class="col-sm-4">Please state any former name(s) (including maiden name, if applicable) or any other names used </div>
           <div class="col-sm-8"><input name="state_name" type="text" value="<?php echo $resultData['state_name'];?>" /></div>
  </div>
  <div class="row">
           <div class="col-sm-4">Title (i.e.; Mr/Mrs/Miss/Other)</div>
           <div class="col-sm-8"><input name="title" type="text" value="<?php echo $resultData['title'];?>"/></div>
  </div>
  <div class="row">
           <div class="col-sm-4">Marital status</div>
           <div class="col-sm-8"><input name="marital_status" type="text" value="<?php echo $resultData['marital_status'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Date of birth</div>
           <div class="col-sm-8"><input name="dob" type="text" id="datepicker" value="<?php echo $resultData['dob'];?>"/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Place of birth</div>
           <div class="col-sm-8"><input name="plb" type="text" value="<?php echo $resultData['plb'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Principal residential address</div>
           <div class="col-sm-8"><textarea name="r_address" cols="" rows=""><?php echo $resultData['r_address'];?></textarea></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Postcode</div>
           <div class="col-sm-8"><input name="postcode" type="text" value="<?php echo $resultData['postcode'];?>"/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Country</div>
           <div class="col-sm-8"><input name="country" type="text" value="<?php echo $resultData['country'];?>"/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">If less than 5 years at this address, please        
advise previous address</div>
           <div class="col-sm-8"><textarea name="p_address" cols="" rows=""><?php echo $resultData['p_address'];?> </textarea></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Postcode</div>
           <div class="col-sm-8"><input name="p_code" type="text" value="<?php echo $resultData['p_code'];?>"/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Home telephone</div>
           <div class="col-sm-8"><input name="home_tel" type="text" value="<?php echo $resultData['home_tel'];?>"/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Mobile</div>
           <div class="col-sm-8"><input name="mobile" type="text" value="<?php echo $resultData['mobile'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Email address </div>
           <div class="col-sm-8"><input name="email" type="text" value="<?php echo $resultData['email'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-10">Please tick this box if you do not wish to receive correspondence/pension statements by email: </div>
           <div class="col-sm-2 right-check"><input name="occ" value="601" type="checkbox" <?php if($resultData['occ']==601){ echo "checked"; } ?>/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Occupation</div>
           <div class="col-sm-8"><input name="occupation" type="text" value="<?php echo $resultData['occupation'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Nationality </div>
           <div class="col-sm-8"><input name="nationality" type="text" value="<?php echo $resultData['nationality'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Passport number</div>
           <div class="col-sm-8"><input name="passport_number" type="text" value="<?php echo $resultData['passport_number'];?>"/></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">UK tax reference number (if applicable)</div>
           <div class="col-sm-8"><input name="uk_text_ref_no" type="text" value="<?php echo $resultData['uk_text_ref_no'];?>" /></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">UK national insurance number</div>
           <div class="col-sm-8"><input name="uk_nal_ins_no" type="text" value="<?php echo $resultData['uk_nal_ins_no'];?>" /></div>
  </div>
  
   <div class="row">
           <div class="col-sm-8">Date left/leaving the UK</div>
           <div class="col-sm-4"><input name="date_uk" type="text" id="datepicker1" value="<?php echo $resultData['date_uk'];?>" /></div>
  </div>
         
     </div>      
     </div>
</div>
<div class="paper" id="page3">
<div class="container1">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading"></h1>
 <img src="images/line2.jpg" width="100%" height="8" /> </div>
 </div>
<div class="row">
<div class="col-sm-12">
<h3>Source of wealth</h3>
<p>Source of funding for your existing pension(s)*</p>
</div>
</div>
<div class="row">
<div class="col-sm-12"><textarea name="source_width" cols="" rows="12"> <?php echo $resultData['source_width'];?> </textarea></div>
</div>
<div class="row">
<div class="col-sm-12"><br />
<p>*If funding is from current employer please state current employer. Should funding have come from a previous 
employer please give details of previous employer. Should funding have come from another source i.e. inheritance 
please give details. </p>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<h3>Politically Exposed Persons</h3>
</div>
</div>
<div class="row">
<div class="col-sm-8">Please advise if you or any family member(s) or close associate(s) are Politically Exposed Person?</div>
<div class="col-md-4  col-sm-3 col-xs-12 text">
  <div class="radio_wrapper">
  <input name="politically_expo" id="14" value="Yes" type="radio" <?php echo ($resultData['politically_expo'] == 'Yes') ?  "checked" : "" ;  ?>/>
      <label for="y2a1">Yes</label>
  <input name="politically_expo" id="15" value="No" type="radio" <?php echo ($resultData['politically_expo']== 'No') ?  "checked" : "" ;  ?>/>
      <label for="y2a2">No</label>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-12"><p>“Politically Exposed Persons” (PEPs) are individuals who are or have been entrusted with prominent public 
functions in a foreign country, for example Heads of State or of government, senior politicians, senior government, 
judicial or military officials, senior executives of state owned corporations, important political party officials. 
Business relationships with family members or close associates of PEPs involve reputational risks similar to those 
with PEPs themselves. The definition is not intended to cover middle ranking or more junior individuals in the 
foregoing categories.”</p><br />
<p>Please provide a description of the political governmental office held:</p>
</div>
</div>
<div class="row">
<div class="col-sm-12"><textarea name="p_description" cols="" rows="4"><?php echo $resultData['p_description'];?></textarea></div>
</div>
<div class="row">
<div class="col-sm-12">
<h3>Change of circumstances</h3>
<p>Furthermore, the member confirms to notify the trustees if their personal circumstances, as provided within this 
application, change in any way. For example, a change of residential address, a change in marital status or a 
change of employer. </p>
</div>
</div>
</div>
</div>
<div class="paper" id="page4">
<div class="container1">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading">Tax Residency</h1>
 <img src="images/line.jpg" width="100%" height="8" /> </div>
 </div>
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
<p>Tax regulations<span class="super">1</span> require us to collect information about each pension investor’s tax residency. In certain circumstances (including if we do not receive a valid self-certification from you) we will be obliged to share 
information about your account/s with the relevant local tax authority<span class="super">2</span>. If you have any questions about your tax residency, please contact your tax advisor.</p></div></div>

<div class="row tax-form">
 <div class="left-side">
<div class="heads"><strong>Country/countries of tax residency</strong></div>
 <div><input name="countries_of_tax_residency" type="text" value="<?php echo $resultData['countries_of_tax_residency'];?>" /></div>
 <div><input name="countries_of_tax_residency1" type="text" value="<?php echo $resultData['countries_of_tax_residency1'];?>"/></div>
  <div><input name="countries_of_tax_residency2" type="text" value="<?php echo $resultData['countries_of_tax_residency2'];?>"/></div>
   <div><input name="countries_of_tax_residency3" type="text" value="<?php echo $resultData['countries_of_tax_residency3'];?>"/></div>
</div>
  <div class="left-side"><div class="heads"><strong>Tax identification number</strong><br />
(e.g. national insurance no., social security number etc.)</div>
<div><input name="tax_identification_number" type="text" value="<?php echo $resultData['tax_identification_number'];?>"/></div>
 <div><input name="tax_identification_number1" type="text" value="<?php echo $resultData['tax_identification_number1'];?>"/></div>
  <div><input name="tax_identification_number2" type="text" value="<?php echo $resultData['tax_identification_number2'];?>"/></div>
   <div><input name="tax_identification_number3" type="text" value="<?php echo $resultData['tax_identification_number3'];?>"/></div>
</div> 
 </div>  
  
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
<p>Please note, if you are a US citizen you are treated as tax resident in the US even if you are resident in another 
country. If you are a US citizen we are obliged to collect your Tax Identification Number (“Tin”).</p>
</div>
</div>
<div class="row">
           <div class="col-sm-10">If you are not resident in any country for tax purposes, please tick this box:</div>
           <div class="col-sm-2 right-check"><input <?php if($resultData['pls_check']==301){ echo "checked"; } ?> name="pls_check" value="301" type="checkbox"></div>
  </div>
  <div class="row">
<div class="col-sm-12">
<br /><p><span class="super">1</span>Tax regulations - The term “tax regulations” refers to regulations created to enable automatic exchange of information and include FATCA<span class="super">3</span> and various agreements to improve international tax compliance entered into between the UK, the crown dependencies and overseas territories, the US and OECD country’s.</p>
<p><span class="super">2</span>Relevant local tax authority - Refers to HMRC in the U.K. or the Jersey Income Tax Treasury and Resources Department as appropriate. </p>
<p><span class="super">3</span>FATCA - The foreign account tax compliance provisions (commonly known as FATCA) contained in the US Hire Act 2010.</p><br /><br />
<h3>Declaration</h3>
<p>I declare that the information provided on this form is, to the best of my knowledge and belief, accurate and complete. I confirm that my tax affairs are up to date in all jurisdictions I have an obligation to report to. I agree to notify the manager/administrator immediately if any of this information changes in the future.</p>
</div>
</div>
<div class="inner-wraper">
<div class="row">
           <div class="col-sm-4">Print name</div>
           <div class="col-sm-8"><input name="print_name" type="text" value="<?php echo $resultData['print_name'];?>"></div>
  </div>
  <div class="row">
           <div class="col-sm-4">Signature</div>
           <div class="col-sm-8">
            <div class="signature" style="margin-top: 10px;">
        <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature1",
                    form_name: "myform",
                    field_name: "Signature1",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
                </script> -->
                <img src="<?php echo $resultData['p_signature'];?>" width="420" height="90"/>
        
        </div></div>
  </div>
  <div class="row">
           <div class="col-sm-8">Date</div>
<div class="col-sm-4"><input type="text" name="p_date" id="datepicker3" class="datepicker" maxlength="82" value="<?php echo $resultData['p_date'];?>" /></div>
  </div>
</div>
</div>
</div>
<div class="paper" id="page5">
<div class="container1 inner-wraper">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading">Investment Selection</h1>
 <img src="images/line2.jpg" width="100%" height="8" /> </div>
 </div>
<div class="row">
<div class="col-sm-12"><p>Please invest into the Personal Pension Plan as follows (please tick appropriate selection):</p></div>
</div>
<div class="row">
<div class="col-sm-12"><input name="investment_platform" <?php if($resultData['investment_platform']==302){ echo "checked"; } ?> type="checkbox" value="302" /> <label><strong>Option A –</strong> Investment via internet based investment platform</label></div>
</div>
<div class="row">
<div class="col-sm-5"><p>Please advise selected platform</p></div>
<div class="col-sm-7"><input name="advise_selected" type="text" value="<?php echo $resultData['advise_selected'];?>" /></div>
</div>
<div class="row">
<div class="col-sm-12"><p>Please complete and attach a copy of the platform’s investment advisory form showing the selected investment 
strategy.</p></div>
</div>
<div class="row">
<div class="col-sm-12"><input name="investe_strategy" type="checkbox" value="303" <?php if($resultData['investe_strategy']==303){ echo "checked"; } ?>/> <label><strong>Option B –</strong> Invested strategy – preferred investments/discretionary management investment</label></div>
</div>
<div class="row">
<div class="col-sm-12">
<textarea name="management_investment" cols="" rows="7"><?php echo $resultData['management_investment'];?></textarea>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<h3>Fee agreement</h3>
<p>If the applicant/member (as the client) receives financial and/or investment and/or taxation advice from their intermediary in connection with the establishment and/or investment of their pension fund <span class="red-text">and they agree for any related advisory fees to be paid from their pension fund</span>, please arrange to complete this <span class="red-text">fee agreement</span>.</p>
<p>It is the responsibility of the client to understand and agree to the advisory charges levied by their financial advisor for the advice provided. Any such advisory fees are in addition to the annual administration fees levied by Vantage for the QROPS.</p>
<p>The level and frequency of advisory fees to be paid to the member’s financial advisor are as follows:-</p>
</div></div>
<div class="row">
<div class="col-sm-12">
<h3>Initial fees</h3>
</div></div>
<div class="row">
<div class="col-sm-8">
<p>Are initial fees to be deducted from transferred benefits?</p>
</div>
<div class="col-sm-4"> <div class="radio_wrapper">
<input name="transferred_benefits" id="14" value="201" type="radio" <?php echo ($resultData['transferred_benefits'] == '201') ?  "checked" : "" ;  ?>>
<label for="y2a1">Yes</label>
<input name="transferred_benefits" id="15" value="202" type="radio" <?php echo ($resultData['transferred_benefits'] == '202') ?  "checked" : "" ;  ?>>
  <label for="y2a2">No</label>
</div></div>
</div>
<div class="row amount-feed">
<div class="col-sm-2">Amount</div>
<div class="col-sm-3">£ <input name="amount" type="text" value="<?php echo $resultData['amount'];?>"/></div>
<div class="col-sm-2"> or </div>
<div class="col-sm-3"><input name="amount_per" type="text" placeholder="%" value="<?php echo $resultData['amount_per'];?>"/></div>
</div>
<div class="row">
<div class="col-sm-12">
<h3>Advisory fees</h3>
</div></div>
<div class="row">
<div class="col-sm-8">
<p>Are annual advisory fees to be deducted from the pension fund(s)?</p>
</div>
<div class="col-sm-4"> <div class="radio_wrapper">
    <input name="pension_fund" id="14" value="101" type="radio" <?php echo ($resultData['pension_fund'] == '101') ?  "checked" : "" ;  ?>/>
    <label for="y2a1">Yes</label>
    <input name="pension_fund" id="15" value="102" type="radio" <?php echo ($resultData['pension_fund'] == '102') ?  "checked" : "" ;  ?>/>
    <label for="y2a2">No</label>
</div></div>
</div>
<div class="row amount-feed">
<div class="col-sm-2">Amount</div>
<div class="col-sm-3">£ <input name="amounts" type="text" value="<?php echo $resultData['amounts'];?>" /></div>
<div class="col-sm-2"> or </div>
<div class="col-sm-3"><input name="amounts_per" type="text" placeholder="%" value="<?php echo $resultData['amounts_per'];?>"/></div>
</div>
<div class="row">
<div class="col-sm-12">
<h3>Fee agreement declaration</h3>
<p>I hereby confirm that my financial adviser (as detailed on page 14 of this application) has fully explained the 
details of, and the level of, all fees that will be deducted from my QROPS, the effect these fees may have on my 
underlying pension fund and that these fees will continue to be deducted until further notice. (All instructions to 
either amend or cancel this fee agreement must be submitted in writing to the administrators.)</p>
</div>
</div>
<div class="row">
           <div class="col-sm-4">Signature</div>
           <div class="col-sm-8">
             <div class="signature" style="margin-top: 10px;">
                        <img src="<?php echo $resultData['arg_signature'];?>" alt="" height="90" width="420"/>
                
        </div>
           </div>
  </div>
  <div class="row">
           <div class="col-sm-4">Member’s full name</div>
           <div class="col-sm-8"><input name="Member_full_name" type="text" value="<?php echo $resultData['Member_full_name'];?>"></div>
  </div>
  <div class="row">
           <div class="col-sm-8">Date</div>
           <div class="col-sm-4"><input name="m_date" type="text" id="datepicker4" value="<?php echo $resultData['m_date'];?>" ></div>
  </div>
  
</div>
</div>
<div class="paper" id="page6">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading"></h1>
 <img src="images/line.jpg" width="100%" height="8" /> </div>
 </div>
 <div class="row">
<div class="col-sm-12">
<p>This page has been left blank on purpose.</p>
</div>
</div>
</div>
<div class="paper " id="page7">
<div class="container1 inner-wraper">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading">Death Benefit Nomination</h1>
 <img src="images/line2.jpg" width="100%" height="8" /> </div>
 </div>
 <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <p>To: The trustees of the Vantage Pension Scheme, in the event of my death I would ask that any lump sum death benefit payable under the provisions of my QROPS be applied for the benefit of the following person(s) in the proportion(s) shown. </p>
 <h3>Nominee number 1</h3>
 </div>
 </div>
 <div class="row">
 <div class="col-sm-4">Surname</div>
  <div class="col-sm-8"><input name="sanme" type="text" value="<?php echo $resultData['sanme'];?>"/></div>
</div>
<div class="row">
 <div class="col-sm-4">Forename(s)</div>
  <div class="col-sm-8"><input name="fname" type="text" value="<?php echo $resultData['fname'];?>"/></div>
</div>
<div class="row">
 <div class="col-sm-4">Address</div>
  <div class="col-sm-8"><textarea name="nominee_address" cols="" rows=""><?php echo $resultData['nominee_address'];?></textarea></div>
</div>
<div class="row">
 <div class="col-sm-4">Postcode</div>
  <div class="col-sm-8"><input name="n_postcode" type="text" value="<?php echo $resultData['n_postcode'];?>"/></div>
</div>
<div class="row">
 <div class="col-sm-4">Relationship</div>
  <div class="col-sm-8"><input name="n_relationship" type="text" value="<?php echo $resultData['n_relationship'];?>" /></div>
</div>
<div class="row">
 <div class="col-sm-8">Proportion of benefits(s) to be paid to this beneficiary</div>
  <div class="col-sm-4"><input name="n_beneficiary" type="text" value="<?php echo $resultData['n_beneficiary'];?>" /></div>
</div>
<div class="row">
<h3>Nominee number 2</h3>
 <div class="col-sm-4">Surname</div>
  <div class="col-sm-8"><input name="nominee2_surname" type="text" value="<?php echo $resultData['nominee2_surname'];?>"/></div>
</div>
<div class="row">
 <div class="col-sm-4">Forename(s)</div>
  <div class="col-sm-8"><input name="nominee2_fname" type="text" value="<?php echo $resultData['nominee2_fname'];?>" /></div>
</div>
<div class="row">
 <div class="col-sm-4">Address</div>
  <div class="col-sm-8"><textarea name="nominee2_address" cols="" rows=""><?php echo $resultData['nominee2_address'];?></textarea></div>
</div>
<div class="row">
 <div class="col-sm-4">Postcode</div>
  <div class="col-sm-8"><input name="nominee2_postcode" type="text" value="<?php echo $resultData['nominee2_postcode'];?>"/></div>
</div>
<div class="row">
 <div class="col-sm-4">Relationship</div>
  <div class="col-sm-8"><input name="nominee2_rel" type="text" value="<?php echo $resultData['nominee2_rel'];?>" /></div>
</div>
<div class="row">
 <div class="col-sm-8">Proportion of benefits(s) to be paid to this beneficiary</div>
  <div class="col-sm-4"><input name="nominee2_beneficiary" type="text" value="<?php echo $resultData['nominee2_beneficiary']; ?>" /></div>
</div>
<div class="row">
<h3>Nominee number 3</h3>
 <div class="col-sm-4">Surname</div>
  <div class="col-sm-8"><input name="nominee3_surname" type="text" value="<?php echo $resultData['nominee3_surname']; ?>" /></div>
</div>
<div class="row">
 <div class="col-sm-4">Forename(s)</div>
  <div class="col-sm-8"><input name="nominee3_fname" type="text" value="<?php echo $resultData['nominee3_fname']; ?>" /></div>
</div>
<div class="row">
 <div class="col-sm-4">Address</div>
  <div class="col-sm-8"><textarea name="nominee3_address" cols="" rows=""><?php echo $resultData['nominee3_address']; ?></textarea></div>
</div>
<div class="row">
 <div class="col-sm-4">Postcode</div>
  <div class="col-sm-8"><input name="nominee3_postcode" type="text" value="<?php echo $resultData['nominee3_postcode']; ?>"/></div>
</div>
<div class="row">
 <div class="col-sm-4">Relationship</div>
  <div class="col-sm-8"><input name="nominee3_rel" type="text" value="<?php echo $resultData['nominee3_rel']; ?>"/></div>
</div>
<div class="row">
 <div class="col-sm-8">Proportion of benefits(s) to be paid to this beneficiary</div>
  <div class="col-sm-4"><input name="nominee3_beneficiary" type="text" value="<?php echo $resultData['nominee3_beneficiary']; ?>" /></div>
</div>
<div class="row">
 <div class="col-sm-4"><strong>Signed</strong></div>
  <div class="col-sm-8">
     <div class="signature" style="margin-top: 10px;">

        <img src="<?php echo  $resultData['nominee3_sig'];?>" alt="" width="420" height="90"> 
        
        </div>
  </div>
</div>
<div class="row">
 <div class="col-sm-8">Date</div>
  <div class="col-sm-4"><input name="nominee3_date" type="text" id="datepicker5" value="<?php echo $resultData['nominee3_date'];?>" /></div>
</div>
<div class="row">
 <div class="col-sm-12"><p><strong>This document forms the participation agreement between the above named member and Vantage  
Pension Scheme.</strong></p></div>
</div>
</div>
</div>
<div class="paper" id="page8">
<div class="container1">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading"></h1>
 <img src="images/line.jpg" width="100%" height="8" /> </div>
 </div>
<div class="row">
<div class="col-sm-12">
<p>This page has been left blank on purpose.</p>
</div>
</div>
</div>
</div>
<div class="paper" id="page9">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading">Participation Agreement</h1>
 <img src="images/line2.jpg" width="100%" height="8" /> </div>
 </div>
 <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <p>THIS PARTICIPATION AGREEMENT is made on the day and year of the signing of this agreement, between the above named 
Member, (“the Member”), and Vantage Pension Trustees Limited a private company limited by shares organised and existing 
under the laws of the Island of Jersey and whose registered office is at No.4 The Forum, Grenville Street, St Helier, Jersey, 
Channel Islands, JE2 4UF (the “Trustee”).</p>
<p>SUPPLEMENTAL TO a declaration of trust dated 24th November 2014 made by the Trustee (the “Trust”), with rules scheduled 
thereto (the “Rules”), and known as the “Vantage Pension Scheme” wherein the Trustee established a retirement annuity trust 
scheme for the purpose of providing retirement benefits for members and subsidiary benefits for their respective surviving 
spouses or estates (together the Trust and the Rules shall be referred to hereinafter as the ‘Scheme’).</p>
<p><strong>Whereas:-</strong><br />
<ol type="a">
<li>The Scheme was established and is administered with approval from the Comptroller of Income Tax in Jersey under Article 131CA 
of the Income Tax (Jersey) Law 1961 (as amended).</li>
<li>The Trustee is the present sole trustee of the Scheme.</li>
<li>By clause 1.1.15 of the Trust any person may apply for membership of the Scheme by submitting to the  Trustee an application (in 
a form approved by the Trustee) for membership to the Scheme and admission of membership thereto shall operate as from the date agreed by the Trustee whereupon such person shall be a member of the Scheme and the Trust and Rules shall be read and construed in respect of such person as referring to him as a Member (as defined in the Trust) of the Scheme.</li>
<li>The Trustee hereby acknowledges that this Agreement is in a form approved by the Trustee as being an  application for membership 
to the Scheme.</li>
<li>The Member wishes to become a member of the Scheme and make Contributions (as defined in the Trust) to a Sub-Fund (as 
defined in the Trust) of the Scheme which will be specifically established by the Trustee for the Member.</li>
<li>The Member is desirous of submitting to the terms and conditions of the Trust and the Rules.</li>
<li>By clause 4.5 of the Trust the Trustee may when investing the Fund (as defined in the Trust) take into account any instructions as 
to investments given to it in writing by the Member whereby the Member indicates his preference for one or more investments contained in a portfolio of investments selected from time to time by the Trustee (or any duly appointed investment manager) (“Suggested Investment”) and in doing so the Trustee may require the Member to provide the Trustee with such reasonable security as to any liability arising from the loss of any depreciation of or default upon the Suggested Investment as the Trustee may reasonable require.</li>
<li>If the Member elects to provide written instructions as to the Suggested Investment to the Trustee (either upon the date of 
participation in the Scheme or at any time thereafter) the Member is desirous of and is deemed to have provided the Trustee with 
the indemnity hereinafter contained in respect of any Suggested Investment.</li>
</ol>
<strong>Now This Agreement Witnesseth:-</strong>
<ol type="1">
<li>Save where the context otherwise admits or requires words and expressions used herein shall bear the same meanings and have the same interpretation as in the Scheme.</li>
<li>It is hereby agreed between the Trustee and the Member that the Member shall be entitled to participate in and become a member of the Scheme.</li>
<li>The Member hereby covenants with the Trustee that his participation shall be governed by the terms and  conditions of the Scheme (or any amendments thereto) and that the Member will at all times observe and be bound by all the terms and conditions of the Scheme (and any amendments thereto).</li> 
<li>In respect of clause 4.5 of the Trust the Member for himself, his heirs personal representatives and estate  hereby covenants with (a) the Trustee and (b) the successors officers employees servants agents of the Trustee and their respective successors personal representatives and estates (hereinafter together called the “Indemnified Persons”) at all times fully and effectually (but subject as provided below) to indemnify keep indemnified and hold harmless the Indemnified Persons from and against and in respect of all liabilities actions proceedings claims demands costs and expenses whatsoever and wheresoever arising for or in respect of which the Indemnified Persons may be or become liable as trustee or former trustee of the Scheme in connection with or arising out of the Scheme or the Suggested Investment comprised therein from time to time whether the same be enforceable in law or not and including in particular (but without prejudice to the generality of the foregoing) all taxes duties and fiscal impositions (including all interest penalties costs charges and expenses or other sums in connection therewith) by the revenue or other authorities of any government in any part of the world PROVIDED THAT the liabilities of the Trustee under the above covenant shall be limited in the following manner: Any liability action proceeding account cost claim or demand in respect of which the Trustee would not have been lawfully entitled to indemnification according to the Proper Law thereof.</li>
<li>The participation of the Member in the Scheme shall be deemed to have commenced on the date of this Agreement.</li>
<li>The Member hereby agrees to pay any charges of the Trustee together with any administration or transaction fee due in accordance with the Trustee’s method of charging for trust business in force from time to time.</li>
<li>This Agreement may be executed in any number of counterparts all of which shall be an original but when taken together (including facsimile or scanned exchanged signed counterparts) shall constitute one and the same Agreement as if the signatures on each counterpart were on a single copy of this Agreement and any party may enter into this Agreement by executing a counterpart.</li>
<li>This Agreement shall be governed by and construed in accordance with the laws of the Island of Jersey and the parties hereby submit to the non-exclusive jurisdiction of the Courts of the Island of Jersey in connection therewith.</li>
</ol>
</p>
 </div>
 </div>
</div>
<div class="paper" id="page10">
<div class="container1 inner-wraper">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading"></h1>
 <img src="images/line.jpg" width="100%" height="8" /> 
 <p><strong>In witness where of</strong> the parties have executed this agreement on the day and year of the signing of this agreement. <br /><br /><strong>SIGNED BY</strong> the said <strong>MEMBER</strong></p> 
 </div>
 </div>
 <div class="row">
<div class="col-sm-4">Signature</div>
<div class="col-sm-8">
   <div class="signature" style="margin-top: 10px;">
      
                <img src="<?php echo $resultData['financial_sig'];?>" alt="" width="420" height="90">
        
        </div>
</div>
</div>
<div class="row">
<div class="col-sm-4">Member’s full name</div>
<div class="col-sm-8"><input name="member_fname" type="text" value="<?php echo $resultData['member_fname'];?>" /></div>
</div>

<div class="row">
<div class="col-sm-8">Date</div>
<div class="col-sm-4"><input name="member_date" type="text" id="datepicker9" value="<?php echo $resultData['member_date'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-12"><h3>In the presence of</h3></div>
<div class="col-sm-4">Witness signature </div>
<div class="col-sm-8">
<div class="signature" style="margin-top: 10px;">
        <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature5",
                    form_name: "myform",
                    field_name: "Signature5",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
                </script> -->

                <img src="<?php echo $resultData['witness_sig'];?>" alt="" width="420" height="90">
        
        </div>
</div>
</div>

<div class="row">
<div class="col-sm-4">Full name of witness</div>
<div class="col-sm-8"><input name="witness_name" type="text" value="<?php echo $resultData['witness_name'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-8">Date</div>
<div class="col-sm-4"><input name="witness_date" type="text" id="datepicker6" value="<?php echo $resultData['witness_date'];?>"/></div>
</div>
 
<div class="row">
<div class="col-sm-4">Address</div>
<div class="col-sm-8"><input name="witness_address" type="text" value="<?php echo $resultData['witness_address'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-4">Postcode</div>
<div class="col-sm-8"><input name="witness_postcode" type="text" value="<?php echo $resultData['witness_postcode'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-4">Occupation of witness </div>
<div class="col-sm-8"><input name="witness_ocp" type="text" value="<?php echo $resultData['witness_ocp'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-12"><strong>SIGNED BY</strong> the following authorised signatories on behalf of Vantage Pension Trustees Limited as trustee of the Vantage Pension Scheme.</div>
</div> 

<div class="row">
<div class="col-sm-6"><div class="signature" style="margin-top: 10px;">
        <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature7",
                    form_name: "myform",
                    field_name: "Signature7",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
                </script> -->
                <img src="<?php echo $resultData['vantage_sig'];?>" alt="" width="420" height="90"/>
        
        </div>Authorised signatory </div>
<div class="col-sm-6"><div class="signature" style="margin-top: 10px;">
 <img src="<?php echo $resultData['vantage2_sig'];?>" alt="" width="420" height="90"/>
        <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature6",
                    form_name: "myform",
                    field_name: "Signature6",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
                </script> -->        
        </div>Authorised signatory </div>
</div> 

<div class="row">
<div class="col-sm-12"><p><strong>The Member hereby confirms that by signing this agreement they fully understand the following;</strong></p>
<ul>
<li>That should any of their tax residency details (as confirmed on page 4) changes in the future that they will 
notify the trustees immediately and provide revised residential address verification documents.</li>
<li>That they have obtained the necessary financial, investment, taxation or other relevant or specialist advice 
required for their personal circumstances in connection with the suitability of the QROPS.</li>
<li>That they have seen sight of the relevant fee schedule for their requested pension scheme and agree to the 
specified charging structure.</li>
</ul>
<p><strong>The Member furthermore affirms that by signing this agreement they confirm the following statements are true to the best of their knowledge and belief;</strong></p>
<ul>
<li>That all details provided by the said member and contained or included within this application are accurate, 
true and correct.</li>
<li>That all contributions and transfers into the pension fund by the said member are not the result of, or 
connected with, any illegal or terrorist activity.</li>
</ul>
</div>
</div> 
 
 </div>
</div>
<div class="paper" id="page11">
<div class="container1 inner-wraper">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading">Transfer Request Form</h1>
 <img src="images/line2.jpg" width="100%" height="8" /> 
 <p>(NB. Please complete a separate transfer request form for each separate pension fund to be transferred into your QROPS.)</p> 
 </div>
 </div>
 <div class="row">
<div class="col-sm-4">Name of scheme</div>
<div class="col-sm-8"><input name="scheme" type="text" placeholder="Vantage Pension Scheme" value="<?php echo $resultData['scheme'];?>" /></div>
</div>
  <div class="row">
<div class="col-sm-4">Scheme reference number<br />
(official use only)</div>
<div class="col-sm-8"><input name="scheme_ref_no" type="text" placeholder="QROPS" value="<?php echo $resultData['scheme_ref_no'];?>" /></div>
</div>
 <div class="row">
<div class="col-sm-12">
<p>I request and consent to the payment of the transfer value(s) from the pension scheme detailed below to my 
QROPS as shown above.</p>
<p>I consent to Vantage/my financial advisor* obtaining details from the scheme administrator, trustee, insurance 
company or other pension provider of the following scheme/contract of which I am a member and authorise the 
giving of such details to Vantage/my financial advisor*.</p>
<p>Please provide Vantage/my financial advisor* with the transfer/discharge forms required to transfer my existing 
pension benefits to my new QROPS (*delete where applicable).</p>
</div>
</div>

<div class="row">
<div class="col-sm-4">Name of scheme</div>
<div class="col-sm-8"><input name="scheme_name" type="text" value="<?php echo $resultData['scheme_name'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-4">Name of transferring scheme</div>
<div class="col-sm-8"><input name="scheme_trns" type="text" value="<?php echo $resultData['scheme_trns'];?>" /></div>
</div>

<div class="row">
<div class="col-sm-4">Address of scheme</div>
<div class="col-sm-8"><input name="scheme_add" type="text" value="<?php echo $resultData['scheme_add'];?>" /></div>
</div>

<div class="row">
<div class="col-sm-4">Postcode</div>
<div class="col-sm-8"><input name="scheme_postcode" type="text" value="<?php echo $resultData['scheme_postcode'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-4">Scheme reference number</div>
<div class="col-sm-8"><input name="schemes_ref_no" type="text" value="<?php echo $resultData['schemes_ref_no'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-4">Pension value (if known)</div>
<div class="col-sm-8"><input name="scheme_value" type="text" value="<?php echo $resultData['scheme_value'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-4">Signature</div>
<div class="col-sm-8">
 <div class="signature" style="margin-top: 10px;">
        <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature8",
                    form_name: "myform",
                    field_name: "Signature8",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
                </script> -->
                <img src="<?php echo $resultData['scheme_signature'];?>" width="420" height="90" alt=""/>
        
        </div>
</div>
</div>

<div class="row">
<div class="col-sm-4">Member’s full name</div>
<div class="col-sm-8"><input name="scheme_m_name" type="text" value="<?php echo $resultData['scheme_m_name'];?>"/></div>
</div>

<div class="row">
<div class="col-sm-8">Date</div>
<div class="col-sm-4"><input name="scheme_dates" type="text" id="datepicker7" value="<?php echo $resultData['scheme_dates'];?>"/></div>
</div>

</div>
</div>
<div class="paper" id="page12">
<div class="container1">
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h1 class="heading"></h1>
 <img src="images/line.jpg" width="100%" height="8" /> </div>
 </div>
<div class="row">
<div class="col-sm-12">
<p>This page has been left blank on purpose.</p>
</div>
</div>
</div>
</div>
<div class="paper" id="page13">
<div class="container1 inner-wraper">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h1 class="heading">Financial Advisor/Intermediary Checklist</h1>
<img src="images/line2.jpg" width="100%" height="8" /> </div>
</div>
<div class="row">
<div class="col-sm-12">
<h3>Please ensure the following have been completed and are enclosed with this application (please tick):</h3>
</div>
</div> 
<div class="row">
<div class="col-sm-12"><input <?php if($resultData['investment_selection']==1001){ echo "checked"; } ?> name="investment_selection" type="checkbox" value="1001" /> <label>Investment selection details (including supporting information, where applicable, page 5)</label></div>
</div>
<?php //$resultData['signed_arg']=1002; ?>
<div class="row">
<div class="col-sm-12"><input <?php if($resultData['signed_arg']==1002){ echo "checked"; } ?> name="signed_arg" type="checkbox" value="1002" /> <label>Completed and signed fee agreement (if applicable, page 5)</label></div>
</div>
<div class="row">
<div class="col-sm-12"><input name="benefit_nominee" <?php if($resultData['benefit_nominee']==1003){ echo "checked"; } ?> type="checkbox" value="1003" /> <label>Death benefit nominee details (if applicable, page 7)</label></div>
</div>
<div class="row">
<div class="col-sm-12"><input name="signed_pre_arg" <?php if($resultData['signed_pre_arg']==1004){ echo "checked"; } ?> type="checkbox" value="1004" /> <label>Signed participation agreement (page 10)</label></div>
</div>
<div class="row">
<div class="col-sm-12"><input name="trns_req_form" <?php if($resultData['trns_req_form']==1005){ echo "checked"; } ?> type="checkbox" value="1005" /> <label>Transfer request form (page 11) (one for each pension fund to be transferred)</label></div>
</div>
<div class="row">
<div class="col-sm-12"><input <?php if($resultData['certfire_cl_pass']==1006){ echo "checked"; } ?>  name="certfire_cl_pass" type="checkbox" value="1006" /> <label>Certified copy of client passport</label></div>
</div>
<div class="row">
<div class="col-sm-12"><input name="client_address" <?php if($resultData['client_address']==1007){ echo "checked"; } ?> type="checkbox" value="1007" /> <label>Client address verification (e.g. bank statement or utility bill not older than 3 months from date of this application or <br />
a formal letter of introduction as per the section below)</label></div>
</div>
<div class="row">
<div class="col-sm-8">Was the client present for identification purposes?</div>
<div class="col-sm-4">
<div class="radio_wrapper">
  <input name="identification_purposes" id="14" value="14" type="radio" <?php echo ($resultData['identification_purposes'] == '14') ?  "checked" : "" ;  ?>/>
  <label for="y2a1">Yes</label>
  <input name="identification_purposes" id="15" value="15" type="radio" <?php echo ($resultData['identification_purposes'] == '15') ?  "checked" : "" ;  ?>/>
  <label for="y2a2">No</label>
</div></div>
</div>
<div class="row">
<div class="col-sm-12">
<p>The trustees reserve the right to request site of the advisor’s “reasons why”/suitability letter prepared for the member at anytime.</p>
<strong>Client due diligence</strong>
<p>In order to comply with anti-money laundering and funding of terrorism laws and regulations the trustees are required to verify the identity, address and source of wealth for each applicant. The trustees are unable to accept this application until full information is submitted. Vantage reserves the right to request enhanced due diligence information where “high risk” individuals are identified and also the right to decline the application should independent verification of information be found not to meet the standards of our client take-on procedures.</p>
<ol>
<li><strong>Verification of identity</strong><br />
Please provide a certified copy of your passport clearly showing your name, passport number, picture, 
nationality, date and place of birth, country of issue and date of issue.</li>
<li><strong>Verification of address</strong><br />
Evidence of your residential address is also required. This should be in the form of a certified copy of a bank 
statement or utility bill (not including mobile telephone bills) no more than three months old. Also acceptable 
is a formal letter of introduction from a person carrying on financial services business which is regulated and 
is operating in a well regulated country or territory confirming that they have visited the pension holder at their 
residential address.</li>
</ol>

<strong>Suitable certifiers</strong><br />
<p>A suitable certifier must be subject to professional rules of conduct, which provide comfort as to the integrity of the certifier. Acceptable persons to verify documents include a director, officer, or manager of a regulated financial services business operating in a well regulated country or territory.</p>
<strong>The certification should be evidenced by a written statement stating:</strong><br />
<ul>
<li>The title, full name and position of the individual certifying the documents, as well as his/her address, telephone number and email address where he/she can be contacted;</li>
<li>That the document is a true copy of the original document;</li>
<li>That the document has been seen and verified by the certifier; and</li>
<li>That the photo is a true likeness of the applicant.</li></ul>
</p>
</div>
</div>

</div>
</div>
<div class="paper" id="page14">
<div class="container1">
<div class="row">
<div class="col-sm-12"><h3>Financial advisor details</h3></div>
</div>
<div class="inner-wraper">
<div class="row">
           <div class="col-sm-4">Name of advisor/agent</div>
           <div class="col-sm-8"><input name="financial_adv_name" type="text" value="<?php echo $resultData['financial_adv_name'];?>" ></div>
  </div>
  
  <div class="row">
           <div class="col-sm-4">Authorised signatory </div>
           <div class="col-sm-8">
             <div class="signature" style="margin-top: 10px;">
        <!-- <script type="text/javascript">
                  new sform.Signature({
                    id: "signature9",
                    form_name: "myform",
                    field_name: "Signature9",
                    caption: "Signature",
                    w: 420,
                    h: 90
                  });
                </script> -->
                <img src="<?php echo $resultData['financial_sig'];?>" alt="" height="90" width="420"/>
                <!-- <img src="<?php //echo $resultData['imageData'];?>" width="175" height="200" /> -->
        
        </div>
          </div>
  </div>
   <div class="row">
           <div class="col-sm-4">Agency stamp</div> 
           <div class="col-sm-8">
           <img src="<?php echo $resultData['agency_stamp'];?>" width="150" height="150" alt=""/>
           
            <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="file_right">
            <input type="file" class="file_right" name="filewww" id="filewww" />--> </div>
  </div> 
  
  
  <div class="row">
        <div class="col-sm-8">Date</div>
        <div class="col-sm-4"><input name="financial_date" id="datepicker8" value="<?php echo $resultData['financial_date'];?>"  type="text"></div>
  </div>
 
</div>
</div>
</div>


<div class="paper" id="page15">
 <img src="images/back-pic.jpg" width="100%" height="1560" />
</div>
</form>
<script type="text/javascript">
function validatesign(){
if($('input[name="Signature1"]').val() == ""){
      alert("Please sign in signature of Patient.");
      return false;
}
}  
</script>
</body>
</html>  



<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LocalWire Communtiy Report Form</title>
<link rel="icon" href="img/localwirelogo.png" sizes="18x18">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href="css/com_form.css" rel="stylesheet">
 
 </head>
 <body bgcolor="#FCFAFF">
 
  <div class="container">
 
      <div class="pad">
<div class="panel" style="margin-top: -21px;">
  <div class="panel-body"  style="margin-left: -15px; margin-bottom: -20px;"><img src="img/localwireBanner text.png" height="50px"><span>&nbsp;Community Reporting</span>
</div>
      </div>
</div>
<div class="res">
   <form  id="register_form"  action="insert_community_reporting.php" method="post" enctype="multipart/form-data">
 
<div class="panel" style="margin-top: -26px; ">
    <div class="panel-body" style="margin-left: -15px;">

<table border="0" width="100%" align="left">
<tr>
<td>
<span class="nav-link active_tab1" id="list_login_details">Personal Details&nbsp;
<i class='fas fa-angle-right'></i>
</span>
</td>

<td>
<span class="nav-link inactive_tab1" id="list_personal_details">&nbsp;Share your Story&nbsp;
<i class='fas fa-angle-right'></i>
</span>
</td>

<td>
<span class="nav-link inactive_tab1" id="list_contact_details">&nbsp;Declaration & Submit</span
</td>
</tr>
</table>

</div>
</div>
<div class="tab-content" style="margin-top:-10px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <!--<div class="panel-heading">Login Details</div>-->
       <div class="panel-body">
<div class="form-group">
         <label>Full Name</label>
         <input type="text" name="name" id="uname" class="form-control" />
         <span id="error_uname" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" id="email" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>
<div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
         <div class="form-group">
         <label>Address&nbsp;(optional)</label>
         <textarea name="address"  class="form-control"></textarea>
<!--         <span id="error_address" class="text-danger"></span>-->
        </div>
       
<!--
-->
       
       </div>
      </div>
<div align="right">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-primary btn-lg">Next</button>
        </div>
     </div>

     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <!--<div class="panel-heading">Fill Personal Details</div>-->
       <div class="panel-body">
        <div class="form-group">
         <label>Title</label>
         <input type="text" name="title" id="title" class="form-control" />
         <span id="error_title" class="text-danger"></span>
        </div>
 

        <div class="form-group">
         <label>Storyline</label>
         <textarea  name="storyline" id="story" class="form-control"></textarea>
         <span id="error_story" class="text-danger"></span>
        </div>

 
<div class="form-group">
         <label>Location of Incident</label><br>
         <select id="location" name="location" class="form-control">
<option value="">Select One</option>
<option value="Niladri">Niladri Vihar</option>
  <option value="Sailashree">Sailashree Vihar</option>
  <option value="Maitree">Maitree Vihar</option>
  <option value="Infocity">Infocity</option>
<option value="Infocity-sqr">Infocity Square</option>
  <option value="Omfed-sqr">Omfed square</option>
  <option value="Damana-sqr">Damana Square</option>
  <option value="Nalco-sqr">Nalco Square</option>
<option value="Any">Any other palce</option>
</select>
         <span id="error_location" class="text-danger"></span>
        </div>
 
 
<div class="form-group">
         <label>Upload mediaUpload media: Choose file (Please ensure that the photograph being submitted is an original one clicked by you)</label>
<input type="file" class="no-border" accept="video/*,image/*" id="media" name="file" required>
         <!-- <input type="file" class="" name="file" id="media"> -->
         <span id="error_media" class="text-danger"></span>
        </div>
 

<div class="form-group">
         <label>Description of the photograph : Mention the date and time of the photograph along with a small caption.</label>
         <textarea  name="media_desc" id="desc_photo" class="form-control"></textarea>
         <span id="error_desc_photo" class="text-danger"></span>
        </div>
<!--
       
-->
</div>
      </div>
  <div align="right">
          <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
          <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-primary btn-lg">Next</button>
        </div>
     </div>

     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <!--<div class="panel-heading">Fill Contact Details</div>-->
       <div class="panel-body">
  <div class="" >
         <!--<label>Enter Mobile No.</label>-->
 <p  align="justify" class="steps"><b>I DECLARE, UNDER MY RESPONSIBILITY, THAT</b></p>
         <div style="overflow: auto;width: 100%; height: 60%; " align="justify"><!--<p align="left"><h6>Declaration</h6></p>-->
 


<p class="step_com">
<ul>
<li>
I, myself, am posting content which has been produced solely by me, is authentic and accurate to the best of my belief and knowledge, and has not been copied, partially or wholly, from any source, and hence does not violate any copyrights of an individual/organisation.</li>

<li>I have myself clicked the photo(s) that are being uploaded by me, and the photo(s) has not been copied, in part or wholly, from any source whatsoever, and hence does not violate the copyrights of an individual/organisation.</li>

<li>I am posting content under my own, authentic, identity, and that I have not impersonated anybody else or used a fictitious name to post any content whatsoever.</li>

<li>I am NOT posting content (story and photo) that engages in, promotes, encourages, facilitates, or admits to the offering, solicitation or trade of fake and misleading news.</li>

<li>I am NOT posting content (story and photo) that engages in self-promotion, advertising of my business/organization, denigrates/misleads about other organisations/competitors or in any malicious way, intends to destroy healthy competition.</li>

<li>I am NOT posting any person’s personal information (including address/phone number) in my story (or photo) without their explicit permission for doing so.</li>

<li>I am NOT posting any anti-social or anti-national content, content which promotes terrorism, racism, child labour, abuse/harassment of individuals, or in any malicious way intends to harm a person, a group of persons, or an organisation, either in my story or photograph.</li>
</ul>
</p>
 </div>
        </div>
 
       
       </div>
      </div>
<div class="form-group" >
         <!--<label>Enter Mobile No.</label>-->
<table border="0" width="100%"><tr>
<td align="left"><input type="checkbox" name="check" id="check" required> &nbsp;I agree</td>
         <!--<span id="error_check" class="text-danger"></span>-->

         <td align="right"><button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button></td>
</tr></table>
         <!-- <button type="submit" name="submit" id="btn_contact_details" class="btn btn-primary btn-lg">Submit</button> -->

       
        </div>

     </div>
    </div>
   </form>
</div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  var error_uname = '';
  var error_email = '';
  var error_mobile_no = '';
 var mobile_validation = /^\d{10}$/;
  //var error_mobile_no = '';
 
//  var error_password = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  //var mobile_validation = /^\d{10}$/;

if($.trim($('#uname').val()).length == 0)
  {
   error_uname = 'Full Name is required';
   $('#error_uname').text(error_uname);
   $('#uname').addClass('has-error');
  }
  else
  {
   error_uname = '';
   $('#error_uname').text(error_uname);
   $('#uname').removeClass('has-error');
  }
 
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
 
if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }


  if(error_email != '' || error_uname !='' || error_mobile_no !='')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
//  var error_first_name = '';
//  var error_last_name = '';
var error_title ='';
var error_story ='';
var error_location ='';
var error_media = '';
var error_desc_photo = '';

 
  if($.trim($('#title').val()).length == 0)
  {
   error_title = 'Title is required';
   $('#error_title').text(error_title);
   $('#title').addClass('has-error');
  }
  else
  {
   error_title = '';
   $('#error_title').text(error_title);
   $('#title').removeClass('has-error');
  }
 
  if($.trim($('#story').val()).length == 0)
  {
   error_story = 'story is required';
   $('#error_story').text(error_story);
   $('#story').addClass('has-error');
  }
  else
  {
   error_story = '';
   $('#error_story').text(error_story);
   $('#story').removeClass('has-error');
  }

if($.trim($('#location').val()).length == 0)
  {
   error_location = 'location is required';
   $('#error_location').text(error_location);
   $('#location').addClass('has-error');
  }
  else
  {
   error_location = '';
   $('#error_location').text(error_location);
   $('#location').removeClass('has-error');
  }

if($.trim($('#media').val()).length == 0)
  {
   error_media = 'Image is required';
   $('#error_media').text(error_media);
   $('#media').addClass('has-error');
  }
  else
  {
   error_media = '';
   $('#error_media').text(error_media);
   $('#media').removeClass('has-error');
  }

if($.trim($('#desc_photo').val()).length == 0)
  {
   error_desc_photo = 'Description is required';
   $('#error_desc_photo').text(error_desc_photo);
   $('#desc_photo').addClass('has-error');
  }
  else
  {
   error_desc_photo = '';
   $('#error_desc_photo').text(error_desc_photo);
   $('#desc_photo').removeClass('has-error');
  }


  if(error_title != '' || error_story != '' || error_location != '' || error_media != '' || error_desc_photo != '' )
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
var error_check = '';

if($.trim($('#check').val()).length == 0)
  {
   error_check = 'it is required';
   $('#error_check').text(error_check);
   $('#check').addClass('has-error');
  }
  else
  {
   error_check = '';
   $('#error_check').text(error_check);
   $('#check').removeClass('has-error');
  }


  if(error_check != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
 
 });
 
});
</script>
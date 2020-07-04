<!DOCTYPE html>
<html lang="en">
<head>
  <title>Community page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="s.css" rel="stylesheet">
	<script type="text/javascript">

/*function validation() {
	//var isValid=document.getElementById('validation').submit();
 var isValid = true;
if(isValid) {
    window.location = 'thankyou.php'; // your desired location
 }

 return false; 
}*/

		/*function valiadtion(){
		if( document.myForm.submit.value == 1 ) {
            window.location = 'thankyou.php';
         }
			return false;
		}*/
	</script>
	<style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
	
</head>
	
<body>

<div class="container">
	
	<form method="post" action="#" onsubmit= "return(validation());" class="myform" id="regiration_form">
		
		<fieldset>
		
	<div class="alert alert-success hide"></div>
			
			   <div class="panel">
		 <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details >></a>
    
     	 <a class="nav-link inactive_tab1" id="list_share_details" style="border:1px solid #ccc"> Your story >></a>
     
      	<a class="nav-link inactive_tab1" id="list_description_details" style="border:1px solid #ccc"> Description & Submit </a>
  
 	 </div>

	<div class="tab-pane active" id="personal_details">
      <div class="panel panel-default">
		  

       <div class="panel-body">
		   <div class="form-group">
         <label>Full Name</label>
         <input type="text" name="uname" id="uname" class="form-control" />
         <span id="error_name" class="text-danger"></span>
        </div>

        <div class="form-group">
         <label>Email</label>
         <input type="email" name="uemail" id="uemail" class="form-control" />
         <span id="error_email" class="text-danger"></span>
        </div>

        <div class="form-group">
         <label>Phone Number</label>
         <input type="text" name="umobile" id="umobile" class="form-control" />
         <span id="error_mobile" class="text-danger"></span>
        </div>

        <br/>
		<br />
       </div>
      </div>
     </div>		
	</div>
  <div class="col-md-12 col-xs-12 col-sm-12" align="center">
		<button type="button" name="btn_personal_details" id="btn_personal_details" class="button button2">Next</button></div>
			
	</fieldset>
	
	
	
	
	<fieldset>
		
	

	<div class="tab-pane fade" id="share_details">
      <div class="panel panel-default">
			<div class="panel-body">
		   <div class="form-group">
         <label>Title</label>
         <input type="text" name="title" id="title" class="form-control" />
         <span id="error_title" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Storyline</label>
         <input type="text" name="story" id="story" class="form-control" />
         <span id="error_story" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Location</label>
         <input type="text" name="location" id="location" class="form-control" />
         <span id="error_location" class="text-danger"></span>
        </div>
        <br/>
		<br />
       </div>
      </div>
     </div>		
	</div>
  <div class="col-md-12 col-xs-12 col-sm-12" align="center">
		<button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="button button2">Previous</button>
	  <button type="button" name="btn_share_details" id="btn_share_details" class="button button2">Next</button>
	</div>
			
	</fieldset>
	
	
	<fieldset>
		
<div class="tab-pane active" id="description_details">
      <div class="panel panel-default">
			<div class="panel-body">
		<div class="form-group">
         <label>check</label>
         <input type="checkbox" name="check" id="check" class="form-control" />
         <span id="error_check" class="text-danger"></span>
        </div>
        <!--<div class="form-group">
         <label>Storyline</label>
         <input type="text" name="story" id="story" class="form-control" />
         <span id="error_story" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Location</label>
         <input type="text" name="location" id="location" class="form-control" />
         <span id="error_location" class="text-danger"></span>
        </div>-->
        <br/>
		<br />
       </div>
      </div>
     </div>		
	</div>
  <div class="col-md-12 col-xs-12 col-sm-12" align="center">
		<button type="button" name="previous_btn_share_details" id="previous_btn_share_details" class="button button2">previous</button>
	  <button type="button" name="btn_description_details" id="btn_description_details" class="button button2">Submit</button>
	</div>
			
	</fieldset>
	<!--<fieldset>
		<div class="panel panel-default">
    		<div class="panel-body">Place of occurance<br><br>
				<select id="" name="" required>
					<option value="">select one</option>
					<option value="Niladri">Niladri Vihar</option>
  					<option value="Sailashree">Sailashree Vihar</option>
  					<option value="Maitree">Maitree Vihar</option>
  					<option value="Infocity">Infocity</option>
					<option value="Infocity-sqr">Infocity Square</option>
  					<option value="Omfed-sqr">Omfed square</option>
  					<option value="Damana-sqr">Damana Square</option>
  					<option value="Nalco-sqr">Nalco Square</option>
					<option value="Any">Any other palce</option>
				</select></div>
  		</div>
		<div class="panel panel-default">
		 <div class="panel-body">Write here(150 words only)<br><br><input type="text" class="no-outline" placeholder="Write Something" maxlength="150" required name=""></div>
  		</div>
		
  		<div class="panel panel-default">
    		<div class="panel-body">Upload Media<br><br><input type="file" class="no-border" accept="video/*,image/*" required name=""></div>
  		</div>
			<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
		<input type="button" name="next" class="next btn btn-info" value="Next" />
			</fieldset>-->
		
	
</form>
</div>

</body>
</html>




<script>
$(document).ready(function(){
 
 $('#btn_personal_details').click(function(){
  var error_name ='';
  var error_email = '';
  var error_password = '';
  var error_mobile = '';
 var mobile_validation = /^\d{10}$/;
	 
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if($.trim($('#uemail').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   //$('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#uemail').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    //$('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    //$('#email').removeClass('has-error');
   }
  }
	 
  
  if($.trim($('#uname').val()).length == 0)
  {
   error_name = 'Name is required';
   $('#error_name').text(error_name);
   //$('#password').addClass('has-error');
  }
  else
  {
   error_name = '';
   $('#error_name').text(error_password);
   //$('#password').removeClass('has-error');
  }
	 
if($.trim($('#umobile').val()).length == 0)
  {
   error_mobile = 'Mobile Number is required';
   $('#error_mobile').text(error_mobile);
   //$('#umobile').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#umobile').val()))
   {
    error_mobile = 'Invalid Mobile Number';
    $('#error_mobile').text(error_mobile);
    //$('#umobile').addClass('has-error');
   }
   else
   {
    error_mobile = '';
    $('#error_mobile').text(error_mobile);
    $('#umobile').removeClass('has-error');
   }
  } 

  if(error_email != '' || error_name != '' || error_mobile)
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
	  
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
	  
   $('#list_share_details').removeClass('inactive_tab1');
   $('#list_share_details').addClass('active_tab1 active');
   $('#list_share_details').attr('href', '#share_details');
   $('#list_share_details').attr('data-toggle', 'tab');
   $('#share_details').addClass('active in');
  }
 });
 
 $('#previous_btn_share_details').click(function(){
  $('#list_share_details').removeClass('active active_tab1');
  $('#list_share_details').removeAttr('href data-toggle');
  $('#share_details').removeClass('active in');
  $('#list_share_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
	
	/*change in
	
	login->personal
	personal->share
	contact->description
	

	*/
	
 
 $('#btn_share_details').click(function(){
  var error_title = '';
  var error_story = '';
  var error_location = '';
  
  if($.trim($('#title').val()).length == 0)
  {
   error_title = 'Title is required';
   $('#error_title').text(error_title);
   /*$('#first_name').addClass('has-error');*/
  }
  else
  {
   error_title = '';
   $('#error_title').text(error_title);
   /*$('#first_name').removeClass('has-error');*/
  }
  
  if($.trim($('#story').val()).length == 0)
  {
   error_story = 'Story is required';
   $('#error_story').text(error_story);
   //$('#last_name').addClass('has-error');
  }
  else
  {
   error_story = '';
   $('#error_story').text(error_story);
   //$('#last_name').removeClass('has-error');
  }
	 
	 if($.trim($('#location').val()).length == 0)
  {
   error_location = 'location is required';
   $('#error_location').text(error_location);
   //$('#last_name').addClass('has-error');
  }
  else
  {
   error_location = '';
   $('#error_location').text(error_location);
   //$('#last_name').removeClass('has-error');
  }

  if(error_title != '' || error_story != '' || error_location !== '')
  {
   return false;
  }
  else
  {
   $('#list_share_details').removeClass('active active_tab1');
   $('#list_share_details').removeAttr('href data-toggle');
   $('#share_details').removeClass('active');
   $('#list_share_details').addClass('inactive_tab1');
   $('#list_description_details').removeClass('inactive_tab1');
   $('#list_description_details').addClass('active_tab1 active');
   $('#list_description_details').attr('href', '#description_details');
   $('#list_description_details').attr('data-toggle', 'tab');
   $('#description_details').addClass('active in');
  }
 });
 
 $('#previous_btn_description_details').click(function(){
  $('#list_description_details').removeClass('active active_tab1');
  $('#list_description_details').removeAttr('href data-toggle');
  $('#description_details').removeClass('active in');
  $('#list_description_details').addClass('inactive_tab1');
  $('#list_share_details').removeClass('inactive_tab1');
  $('#list_share_details').addClass('active_tab1 active');
  $('#list_share_details').attr('href', '#share_details');
  $('#list_share_details').attr('data-toggle', 'tab');
  $('#share_details').addClass('active in');
 });
 
	
	
	/* last tab*/
 $('#btn_description_details').click(function(){
  var error_check = '';
  
  if($.trim($('#check').val()).length == 0)
  {
   error_address = 'check is required';
   $('#error_check').text(error_check);
   //$('#address').addClass('has-error');
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
   $('#btn_description_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>
	
<!--<script type="text/javascript">
$(document).ready(function(){
var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	
		$("#next").click(function(){
			
		var error_msg_email='';
			
		if($.trim($('#uemail').val()).length==0)
		{
			error_msg_email='email is requierd';
			$('#error_msg_email').text(error_msg_email);
		}
		else{
			error_msg_email='';
			$('#error_msg_email').text(error_msg_email);
		}
		if(error_msg_email !==''){return false;}
		else{	
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);}
	});
	
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
	$( "#regiration_form" ).submit(function(event) {
	  jQuery('.alert-success').removeClass('hide').html( "Handler for .submit() called and see console logs for your posted variable" );
	  console.log($(this).serialize());
	  event.preventDefault();
	});
});
</script>-->

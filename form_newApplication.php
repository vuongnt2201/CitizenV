<!-- NEW APPLICATION FORM -->
<!-- 
Bootstrap classes:
- form-inline to display form elements on one line
- form-group to group labels and form inputs


 -->
<?php include "header.php";?>
	
	<script src="custom_scripts/form-validator/jquery.form-validator.min.js"></script>
	<script src="custom_scripts/form-validator.js"></script>
	
	<!-- HEADER OF PAGE -->
	<div id="header_subpage1" class="col-xs-12 col-lg-12 col-md-12">
			<div id="header-label" class="themebg yey col-xs-10 col-md-4 col-lg-4">
				
				<h1>New Application </h1>	
				
				
			</div>
			
			
	</div>

	<div id="header" class="col-xs-12 col-lg-12 col-md-12">
	<div class="col-xs-12 col-lg-2 col-md-2">
		<!--PLACEHOLDER FOR LAYOUT-->
	</div>
	<div  class="col-xs-12 col-lg-8 col-md-8">

	<!--FORM CONTENT: SUBMIT TO newApplication.php-->
	<form role="form"  enctype="multipart/form-data" class="panel panel-default" name="form-application" id="form-application" method="post" action="newApplication.php">

		
		<p id="errtxt1" class="text-danger bg-danger hidden">You have not completed the form. Please fill up required fields.</p>
	
	<h3>&nbsp; Personal Information</h3>
	
	<!-- Input name -->
	<label>&nbsp;&nbsp; Name:</label>

	<div class="form-inline name">
	
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Surname</strong></span>-->
			<input class="form-control" type="text" name="surname" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. "  placeholder="Last Name" >
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Given Name</strong></span>-->
			 <input class="form-control" type="text" name="givenname" data-validation="required" 
		 data-validation-length="min1" data-validation-error-msg="This field is required. " placeholder="First Name" >
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Middle Name</strong></span>-->
			 <input class="form-control" type="text" name="middlename"  data-validation="required" 
		 data-validation-length="min1" data-validation-error-msg="This field is required. " placeholder="Middle Name" >
		</div>
	
	</div>

	<!-- Input address -->
	<label>&nbsp;&nbsp; Address:</label>

	<div  class="form-inline name">
		
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Surname</strong></span>-->
			<input class="form-control" type="text" name="streetname" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " placeholder="House Name, Street Name" >
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Given Name</strong></span>-->
			<select data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="barangay" class="form-control" required="">
				<option value="Anos">Anos</option>
				<option value="Bagong Silang">Bagong Silang</option>
				<option value="Bambang">Bambang</option>
				<option value="Batong Malake">Batong Malake</option>
				<option value="Bayog">Bayog</option>
				<option value="Baybayin">Baybayin</option>
				<option value="Lalakay">Lalakay</option>
				<option value="Maahas">Maahas</option>
				<option value="Malinta">Malinta</option>
				<option value="Mayondon">Mayondon</option>
				<option value="Putho-Tuntungin">Putho-Tuntungin</option>
				<option value="San Antonio">San Antonio</option>
				<option value="Tadlac">Tadlac</option>
				<option value="Timugan">Timugan</option>
				</select>
		</div>
	
	
	</div>

	</hr>

	<!-- Input telephone and years of residency -->
	<div class="form-inline">
		
		<div class="input-default input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Telephone Number</strong></span>
			  <input class="form-control" type="number"  id="telnum" name="telnum">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Years of Residency</strong></span>
			  <input class="form-control" type="number" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="yearsOfRes">
		</div>
		
	
	</div>

	<!-- Input birthday and birthplace -->
	<div class="form-inline">
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Date of Birth</strong></span>
			  <input class="form-control" type="date" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. "  name="birthday">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Place of Birth</strong></span>
			  <input class="form-control" type="text" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="birthplace">
		</div>
		
	
	</div>
	
	<!-- Input gender and civil status -->
	<div class="form-inline">
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Gender</strong></span>
			 <input  type="radio" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="gender" value="male">Male
			<input type="radio"  name="gender" value="female">Female<br>
		</div>

	<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Civil Status</strong></span>
				<select data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="civilstas" class="form-control" required="">
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Widowed">Widowed</option>
				<option value="Divorced">Divorced</option>
				</select>
			</div>
		
		
	
	</div>
	
	<hr/>
	<!-- Input spouse information -->
	<h3>&nbsp; Spouse Information</h3>

	<div class="form-inline">
		
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Name of Spouse</strong></span>
			  <input class="form-control" type="text" name="spousename" >
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Age of Spouse</strong></span>
			  <input class="form-control" type="number" name="spouseage" >
		</div>
		
	
	</div>
	
	
	<hr/>
	<h3>&nbsp; Education and Employment</h3>
	<!-- Input educational attainment and employed toggles -->
	<div class="form-inline">
		
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Educational Attainment</strong></span>
			 <select class="form-control" name="educattain" required="">
			<option value="Elementary Undergraduate">Elementary Undergraduate</option>
			<option value="Elementary Graduate">Elementary Graduate</option>
			<option value="Highschool Undergraduate">Highschool Undergraduate</option>
			<option value="Highschool Graduate">Highschool Graduate</option>
			<option value="College Undergraduate">College Undergraduate</option>
			<option value="College Graduate">College Graduate</option>
			<option value="Post-Graduate">Post-Graduate</option>
		</select><br>
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Are you presently employed?</strong></span>
			 <input type="radio" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="employed" value="Yes">Yes
		<input type="radio" name="employed" value="No">No<br>
		</div>
		
	
	</div>
	
	
	<hr/>

	<h4>&nbsp; Sources of Income</h4>

	<div class="form-inline">
		
		<!-- Input work position and salary -->
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Position</strong></span>
			  <input class="form-control" type="text" name="position" >
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Salary Per Month</strong></span>
			  <input class="form-control" type="number" name="salaryvalue" >
		</div>
		
	
	</div>
	
	<div class="form-inline">
		
		<!-- Input employer and address -->
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Employer</strong></span>
			  <input class="form-control" type="text" name="employer" >
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Address</strong></span>
			  <input class="form-control" type="text" name="workaddress">
		</div>
		
	
	</div>

	<div class="form-inline">
		<!-- Input telephone number of employer and other sources of income -->
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Telephone Number</strong></span>
			  <input class="form-control" type="number" name="worktelnum">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Other Sources of income</strong></span>
			  <input class="form-control" type="text" name="incomesrc" >
		</div>
	
	</div>

	<div class="form-inline">
		
		<!-- Ask for amout of income -->
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Amount </strong></span>
			  <input class="form-control" type="number" name="incomesrcamt" >
		</div>
		
	
	</div>
	
	<hr/>

	<h3>&nbsp; Philhealth Membership</h3>

	<div class="form-inline">
		
		<!-- Ask about philhealth membership and dependency -->
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Are you a member of PhilHealth? </strong></span>
			  	<input type="radio" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="phmember" value="Yes">Yes</input>
				<input type="radio" name="phmember" value="No">No</input><br>
		</div>

		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Are you a dependent of a Philhealth member? </strong></span>
			  	<input type="radio" data-validation="required" 
		 data-validation-length="1" data-validation-error-msg="This field is required. " name="phdependent" value="Yes">Yes</input>
				<input type="radio" name="phdependent" value="No">No </input><br>
		</div>
		
	
	</div>

	<!-- Ask for Philhealth numbers -->
	<div class="form-inline">
		
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Philhealth Number </strong></span>
			  <input class="form-control" type="number" name="phmemno">
		</div>

		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Philhealth Dependent Number </strong></span>
			  <input class="form-control" type="number" name="phspecify" >
		</div>
	
	</div>

	<hr/>

	<hr/>

	<!-- Input 3 members of the family -->
	<h3>&nbsp; Members of the Family</h3>

			<div class="form-inline">
		<div class="input-default input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Family Member</strong></span>
			  <input class="form-control" type="text"   placeholder="Name" name="fmem1name">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			
			  <input class="form-control" type="text" placeholder="Occupation" name="fmem1occupation">
		</div>
		
	
		</div>

		<div class="form-inline">
		<div class="input-default input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Family Member</strong></span>
			  <input class="form-control" type="text"  placeholder="Name" name="fmem2name">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			
			  <input class="form-control" type="text"  placeholder="Occupation" name="fmem2occupation">
		</div>
		
	
		</div>

		<div class="form-inline">
		<div class="input-default input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Family Member</strong></span>
			  <input class="form-control" type="text"   placeholder="Name" name="fmem3name">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			
			  <input class="form-control" type="text"  placeholder="Occupation" name="fmem3occupation">
		</div>
		
		<button id="button" class="btn btn-info btn-md center"  type="button">Next>></button>
		</div>
	</div>
	<div class="col-xs-12 col-lg-4 col-md-4">
	</div>

	<div class="col-xs-12 col-lg-12 col-md-12 ">
	<div>

	


		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-header">
			<h4>Your Application is ready to be processed</h4>			
			</div>
			<div class="modal-body">
				
		      		<h3 align=center>Your OSCA ID number is:</h3>
				<h1 align=center><?php include "private-files/generateid.php"?><h1>

				<input type="hidden" name="idno" value="<?php echo $SC_IDNO?>">
				<h3>Please check whether you have properly filled up the form. If you have forgotten to fill up required fields, the form will not be submitted.</h3>
				<button id="button" class="btn btn-success btn-lg" type="submit">Submit</button>
				
			</div>
		    </div>
		  </div>
		</div>

	</form>
	

	
	</div>	
	</div>	
	</div>
</body>
</html>

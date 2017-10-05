<?php
	include'routes.php';
	include'header.php';

?>

<title>4zoHr - Freshers Registration Form</title>
<style type="text/css">



.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  background: red;
  cursor: inherit;
  display: block;
}
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}

</style>
<body>

	

	<div class="container">
		<h4 class="display-4 mt-5">Fresher's Registration Form</h4>
	<hr>
		<form class="mt-3">
			<h4 class="my-2" > Personal Information : </h4>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  		<label for="title" class="col-form-label">Titles</label>
	  		  <select class="custom-select d-block my-0" required>
			    <option value="1">Mr.</option>
			    <option value="2">Mrs.</option>
			    <option value="3">Miss.</option>
			  </select>
	  	</div>
	    <div class="form-group col-md-3">
	      <label for="firstName" class="col-form-label">First Name</label>
	      <input type="text" class="form-control" id="firstName" placeholder="First Name">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="inputPassword4" class="col-form-label">Middle Name</label>
	      <input type="password" class="form-control" id="inputPassword4" placeholder="Middle Name">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="inputPassword4" class="col-form-label">Last Name</label>
	      <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
	    </div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  	<label for="gender" class="col-form-label">Gender</label>
	  		<select class="custom-select d-block my-0" required>
			    <option value="1">Male</option>
			    <option value="2">Female</option>  
			</select>
		</div>
		<div class="form-group col-md-2">
	  	<label for="MaritialStatus" class="col-form-label">Maritial Status</label>
	  		<select class="custom-select d-block my-0" required>
			    <option value="1">Single</option>
			    <option value="2">Maried</option>
			    <option value="2">Divorced</option>
			    <option value="2">Widowed</option>
			    <option value="2">Separated</option>       
			</select>
		</div>
		<div class="form-group col-md-4">
			<div class="well"> 
			      <div class="form-group">
				      <label>Date of Birth</label>
				      <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		</div>	
		<div class="form-group col-md-4">
	  		<label for="AadharNo" class="col-form-label">Aadhar Card Number</label>
	      	<input type="text" class="form-control" id="AadharNo">
	  	</div>	
	  </div>
	  <div class="form-row">
	  		<label for="Address" class="col-form-label">Address</label>
	       <input type="text" class="form-control" id="State" placeholder="Address">
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-5">
	      <label for="State" class="col-form-label">State</label>
	       <input type="text" class="form-control" id="State" placeholder="State">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="City" class="col-form-label">City</label>
	       <input type="City" class="form-control" id="Percentage" placeholder="City">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="inputZip" class="col-form-label">Zip</label>
	      <input type="text" class="form-control" id="inputZip">
	    </div>
	  </div>


	  	<h4 class="mt-3">Contact Details :</h4>
	  	
	  	<div class="form-row">
	  		<div class="form-group col-md-6">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" placeholder="name@example.com">
		  </div>
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="email" class="form-control" id="phoneNo" placeholder="020 5784XXXX">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" id="MobileNo" placeholder="98XXX78XXX">
		  </div>
	  	</div>

	  	<h4 class="mt-3">Educational Details :</h4>

	  	<div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">Highest Qualification</label>
		      <select id="Qualification" class="form-control">
		      	<option value="1">Less than 10th</option>
			    <option value="2">10th</option>
			    <option value="2">12th</option>
			    <option value="2">Graduation</option>
			    <option value="2">Post Graduation</option>   
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="Course" class="col-form-label">Course</label>
		       <input type="text" class="form-control" id="Course" placeholder="Course">
		    </div>
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="PassingYear" class="col-form-label">Passing Year</label>
		       <input type="text" class="form-control" id="PassingYear" placeholder="Passing Year">
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="Percentage" class="col-form-label">Percentage/CGPA</label>
		      <input type="text" class="form-control" id="Percentage" placeholder="Percentage or CGPA">
		    </div>
	 	 </div>

	 	 <h4 class="mt-3">Job Prefrences :</h4>

	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="IndustryType" class="col-form-label">Industry Type</label>
		      <select id="IndustryType" class="form-control">Choose</select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="IndustryType1" class="col-form-label">Choose</label>
		      <select id="IndustryType1" class="form-control">Choose</select>
		    </div>
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="IndustryType2" class="col-form-label">Choose</label>
		      <select id="IndustryType2" class="form-control">Choose</select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="IndustryType3" class="col-form-label">Choose</label>
		      <select id="IndustryType3" class="form-control">Choose</select>
		    </div>
	 	 </div>
	 	 <div class="form-row">
	 	 	<label for="KeySkill" class="col-form-label">Key Skill</label>
		    <input type="text" class="form-control" id="KeySkill" placeholder="HTML,CSS,JAVA">
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="jobType" class="col-form-label">Job Type</label>
		      <select id="IndustryType2" class="form-control">Choose</select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="jobType1" class="col-form-label">Choose</label>
		      <select id="jobType1" class="form-control">Choose</select>
		    </div>
	 	 </div>
	 	 <div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">I would also like to work in Facility Management Services FMS</span>
			</label>
	 	 </div>	

	 	 <h4 class="mt-3">Attach CV/Resume :</h4>



		 	<div class="input-group col-md-6 mt-3">
                <span class="input-group-btn">
                    <span class="btn btn-secondary btn-file">
                        Browse&hellip; <input type="file" single>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>



	  <button type="submit" class="btn btn-primary mt-3">Sign in</button>
</form>
	</div>


	<script>
$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});
	</script>

</body>
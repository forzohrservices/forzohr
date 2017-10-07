<?php
	include'routes.php';
	include'header.php';

?>

<title>4zoHr - Professional Registration Form</title>
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
		<h4 class="display-4 mt-5">PROFESSIONAL REGISTRATION FORM</h4>
	<hr>
		<form class="mt-3">
			<h4 class="my-2" > Personal Information : </h4>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  		<label for="title" class="col-form-label">Title</label>
	  		  <select class="custom-select d-block my-0" required>
			    <option value="1">Mr.</option>
			    <option value="2">Ms.</option>
			    <option value="3">Mrs.</option>
			  </select>
	  	</div>
	    <div class="form-group col-md-3">
	      <label for="firstName" class="col-form-label">First Name</label>
	      <input type="text" class="form-control" id="firstName" placeholder="First Name">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="MiddleName" class="col-form-label">Middle Name</label>
	      <input type="text" class="form-control" id="inputPassword4" placeholder="Middle Name">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="LastName" class="col-form-label">Last Name</label>
	      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
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
	      	<input type="text" class="form-control" id="AadharNo" maxlength="12">
	  	</div>	
	  </div>

	  	<div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="MobileNo" class="col-form-label" >Mobile Number</label>
		    <input type="text" class="form-control" id="MobileNo" placeholder="Ex - 9876543210" maxlength="10">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		  	<label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="email" class="form-control" id="phoneNo" placeholder="Ex - 012 345789" >
		  </div>
	  	</div>

	  	<div class="form-row">
	  		<div class="form-group col-md-6">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" placeholder="name@example.com">
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
	      <label for="Pincode" class="col-form-label">Pincode</label>
	      <input type="text" class="form-control" id="Pincode" maxlength="6">
	    </div>
	  </div>
	  	

	  	<h4 class="mt-3">Professional Details :</h4>

	  	<div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">Highest Qualification</label>
		      <select id="Qualification" class="form-control">
		      	<option value="1">Less than 10th</option>
			    <option value="10th">10th</option>
			    <option value="12th">12th</option>
			    <option value="Diploma">Diploma</option>
			    <option value="Graduation">Graduation</option>
			    <option value="Post Graduation">Post Graduation</option>   
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		       <label for="Course" class="col-form-label">Course</label>
		       <input type="text" class="form-control" id="Course" placeholder="Course">
		    </div>
	 	 </div>
	 	 <div class="form-group row mt-3">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Intorduction -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="postContent" rows="3" id="AboutCompany"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Professional Experience -</h5></label>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Years</label>
		       	<input type="text" class="form-control" id="Year" placeholder="Year" maxlength="4">
		      </div>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Months</label>
		       	<input type="text" class="form-control" id="Year" placeholder="Months" maxlength="2">
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Number of times hired -</h5></label>
		      <div class="col-sm-1">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Types of Profession -</h5></label>
		      <label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Start-Up</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Individual</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Firm</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Proprietor</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Company</span>
			</label>
			 <div class="col-sm-3">
			 	
		        <input type="text" class="form-control" id="other" placeholder="If other mention it">
		     </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Charge per consultation - (Approximate) </h5></label>
		      <div class="col-sm-2">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Category -</h5></label>
		      <div class="col-sm-6">
		       		

				      <select id="Qualification" class="form-control">
				      	<option value="Electronics &amp; Repair">Electronics &amp; Repair</option>
					    <option value="Religious &amp; Community Services">Religious &amp; Community Services</option>
					    <option value="Travel &amp; Accommodation Lessons/Tuitions">Travel &amp; Accommodation Lessons/Tuitions</option>
					    <option value="Real Estate Services">Real Estate Services</option>
					    <option value="Health & Wellness">Health &amp; Wellness</option>
					    <option value="Retail Stores">Retail Stores</option>
					    <option value="Financial & Legal Services">Financial &amp; Legal Services</option>
					    <option value="Home & Business Needs">Home &amp; Business Needs</option>
					    <option value="Technical Support Services">Technical Support Services</option>
					    <option value="Food & Catering">Food &amp; Catering</option>
					    <option value="Automobiles">Automobiles</option>
					    <option value="Educational institutes">Educational institutes</option>
					    <option value="Internet Based Services">Internet Based Services</option>
					    <option value="Wedding & Events">Wedding &amp; Events</option>
					    <option value="Memorial service">Memorial service</option>

					  </select>
				    
		      </div>
		 </div>


		 <div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="Specialization" class="col-form-label"><h5>Profession / Specialization / Expertise</h5></label>

		     <input type="text" class="form-control mb-2" id="Specialization" placeholder="">
		     <input type="text" class="form-control mb-2" id="Specialization" placeholder="">
		     <input type="text" class="form-control mb-2" id="Specialization" placeholder="">
		     <input type="text" class="form-control mb-2" id="Specialization" placeholder="">
		     <input type="text" class="form-control mb-2" id="Specialization" placeholder="">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		    <label for="Services" class="col-form-label"><h5>Types of Services you offered</h5></label>
		    <input type="text" class="form-control mb-2" id="Services" placeholder="">
		    <input type="text" class="form-control mb-2" id="Services" placeholder="">
		    <input type="text" class="form-control mb-2" id="Services" placeholder="">
		    <input type="text" class="form-control mb-2" id="Services" placeholder="">
		    <input type="text" class="form-control mb-2" id="Services" placeholder="">
		  </div>
	  	</div>

	  	<div class="form-group row mt-4">
		      <label for="teamDetails" class="col-sm-5 col-form-label"><h5>Team details (if you have) (In total no.) -</h5></label>
		      <div class="col-sm-4">
		       	<input type="text" class="form-control col-sm-2" id="teamDetails" placeholder=""> 
		      </div>
		 </div>

	
	    <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label"><h5>Name</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label">Role</label>
		      <label for="Roles" class="col-sm-4 col-form-label"><h5>Name</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label">Role</label>
		 </div>
	   	<div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">1.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
	 

	 	<h4 class="mt-3">Location of Services :</h4>
				<div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Cities where you have office : </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="4">
		      </div>
		      <div class="col-sm-6">
		      	<label for="TotalCities" class="col-form-label">Places</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Ex - Delhi, Banglore, Mumbai, Nagpur">
		      </div>
		    </div>
		<hr>
		 <div class="row mt-3">
		       <div class="col-sm-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Upload Photograph - </h5></label>
		      </div>
		      <div class="col-sm-6">
		      	<div class="input-group col-md-6">
                <span class="input-group-btn">
                    <span class="btn btn-secondary btn-file">
                        Browse&hellip; <input type="file" single>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
		      </div>
		      
		 </div>

		 <div class="row mt-3">
		       <div class="col-sm-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Upload CV - </h5></label>
		      </div>
		      <div class="col-sm-6">
		      	<div class="input-group col-md-6">
                <span class="input-group-btn">
                    <span class="btn btn-secondary btn-file">
                        Browse&hellip; <input type="file" single>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
		      </div>
		      
		 </div>

		 <div class="row mt-3">
		       <div class="col-sm-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Upload Adhar Card - </h5></label>
		      </div>
		      <div class="col-sm-6">
		      	<div class="input-group col-md-6">
                <span class="input-group-btn">
                    <span class="btn btn-secondary btn-file">
                        Browse&hellip; <input type="file" single>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
		      </div>
		      
		 </div>

		 <hr>

		<div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">I certify that my answers are true and complete to the best of my knowledge.</span>
			</label>
	 	</div>	
	 	<div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">I understand that false or misleading information in my application may result in my release.</span>
			</label>
	 	</div>


	 	 


	  <button type="submit" class="btn btn-primary mt-3 mb-5">Submit</button>
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
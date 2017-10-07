<?php
	include'routes.php';
	include'header.php';

?>

<title>4zoHr - Contractor Registration Form</title>
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
		<h4 class="display-4 mt-5">CONTRACTOR REGISTRATION FORM </h4>
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
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" id="MobileNo" placeholder="Ex - 9876543210" maxlength="10">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		  	<label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="email" class="form-control" id="phoneNo" placeholder="Ex - 012 345789" maxlength="6">
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
	  	


	  	<h4 class="mt-4">Professional Details</h4>

	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="CurrentCompany">Current Company</label>
	  			<input type="text" class="form-control" id="CurrentCompany" placeholder="">
	  		</div>
	  		<div class="form-group col-md-6">
	  			<label for="Position">Position</label>
	  			<input type="text" class="form-control" id="Position" placeholder="">
	  		</div>
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="Sector">Sector</label>
	  			<input type="text" class="form-control" id="Sector" placeholder="">
	  		</div>
	  		<div class="form-group col-md-6">
	  			<label for="Industry">Industry</label>
	  			<input type="text" class="form-control" id="Industry" placeholder="Ex - Forging, Foundry, Steel.. etc">
	  		</div>
	  	</div>
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
		      <label for="BriefBio" class="col-sm-3 col-form-label"><h5>Brief Bio -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="postContent" rows="3" id="BriefBio"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Professional Experience -</h5></label>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Years</label>
		       	<input type="text" class="form-control" id="Year" placeholder="Year" maxlength="4">
		      </div>
		      <div class="col-sm-3">
		         <label for="months" class="col-form-label">Months</label>
		       	<input type="text" class="form-control" id="months" placeholder="Months" maxlength="2">
		      </div>
		      <div class="col-sm-3">
		         <label for="projects" class="col-form-label">Number of Projects</label>
		       	<input type="text" class="form-control" id="projects" placeholder="projects">
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Sub Category / Skills -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="Skill 1, Skill 2, Skill 3">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Project Price Range -</h5></label>
		      <div class="col-sm-3">
		         <label for="Minimum" class="col-form-label">Minimum</label>
		       	<input type="text" class="form-control" id="Minimum" placeholder="Minimum">
		      </div>
		      <div class="col-sm-3">
		         <label for="Maximum" class="col-form-label">Maximum</label>
		       	<input type="text" class="form-control" id="Maximum" placeholder="Maximum">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="Specialization" class="col-sm-3 col-form-label"><h5>Specialization / Expertise -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Specialization" placeholder="Erection & commissioning, Production, Maintenance etc">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="Projects" class="col-sm-3 col-form-label"><h5>Types of Projects -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Projects" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Types of Services you offered -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Type of Professional -</h5></label>
		      <label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Firm</span>
			</label>
			<label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Proprietor ship</span>
			</label>
			<label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Company</span>
			</label>
			<label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">other</span>
			</label>
		 </div>	

		 <h4 class="mt-4">Type of Team</h4>
		 <h5 class="mt-5">Top Management Team (please mention team details you have)</h5>

		 <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Roles</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Team size (In No.)</label>
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Roles</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Team size (In No.)</label>
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
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>


		 <h5 class="mt-4">Lower Management Team (please mention team details you have)</h5>

		 <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Roles</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Team size (In No.).</label>
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Roles</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Team size (In No.)</label>
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
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>


		 <h5 class="mt-4">Labour and Worker Team (please mention team details you have)</h5>

		 <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Roles</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Team size (In No.)</label>
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Roles</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Team size (In No.)</label>
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
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>

		 <h4 class="mt-4">List of Machineries, Tools and Tackles</h4>

		 <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Description</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label">Quantity (in sets)</label>
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Description</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label">Quantity (in sets)</label>
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
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>List of Clients : </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Ex - 5">
		      </div>
		  </div>
		  <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Name</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label">Contact No. (optional)</label>
		      <label for="Roles" class="col-sm-4 col-form-label"><h5 class="text-center">Name</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label">Contact No. (optional)</label>
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
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">9.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">10.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Location of Services - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Ex - 7">
		      </div>
		      <div class="col-sm-6">
		      	<label for="TotalCities" class="col-form-label">Places</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Ex - Delhi, Banglore, Mumbai, Nagpur">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Industries of Serving - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Ex - 6">
		      </div>
		      <div class="col-sm-6">
		      	<label for="TotalCities" class="col-form-label">Industries</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Ex - Forging, Foundry, Steel.. etc">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Licences you have -</h5></label>
		      <label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Labour licence</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">EPF</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">ESIC</span>
			</label>
			 <div class="col-sm-3">
			    <input type="text" class="form-control" id="other" placeholder="If other mention it">
		     </div>
		 </div>

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


	 	  <button type="submit" class="btn btn-primary mt-3 mb-5">Submit</button>
	</form>
</div>     
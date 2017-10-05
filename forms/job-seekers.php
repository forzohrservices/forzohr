<?php
	include'routes.php';
	include'header.php';

?>

<title>4zoHr - Job Seeker's Registration Form</title>
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
		<h4 class="display-4 mt-5">Job Seeker's Registration Form</h4>
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
		    <div class="form-group col-md-4">
		      <label for="PassingYear" class="col-form-label">Passing Year</label>
		       <input type="text" class="form-control" id="PassingYear" placeholder="Passing Year">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Percentage" class="col-form-label">Percentage/CGPA</label>
		      <input type="text" class="form-control" id="Percentage" placeholder="Percentage or CGPA">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Board" class="col-form-label">Board / Specialization</label>
		      <input type="text" class="form-control" id="Board" placeholder="CBSE">
		    </div>
	 	 </div>

	 	 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>Co-Curriculum Activities -</h5></label>
		      <div class="col-sm-8">
		       	<input type="text" class="form-control" id="Year" placeholder="Leadership projects,Workshops,Seminars ">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>IT Skills -</h5></label>
		      <div class="col-sm-8">
		       	<input type="text" class="form-control" id="Year" placeholder="SECURITY, NETWORKING">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>Language’s Know -</h5></label>
		      <div class="col-sm-8">
		       	<input type="text" class="form-control" id="Year" placeholder="German, French, Spanish">
		      </div>
		 </div>

		 <h4 class="mt-5">Experience details</h4>

		 <div class="form-group row mt-2">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Fresher -</h5></label>
		      <div class="col-sm-3">
		         <label class="custom-control custom-checkbox mt-4">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Are You Fresher ?</span>
				</label>
		      </div>   
		 </div>


		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Total work Experience -</h5></label>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Years</label>
		       	<input type="text" class="form-control" id="Year" placeholder="Year">
		      </div>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Months</label>
		       	<input type="text" class="form-control" id="Year" placeholder="Months">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Current / Last Salary -</h5></label>
		      <div class="col-sm-3">
		       	<input type="text" class="form-control" id="Year" placeholder="Monthly/ Annum (in Rs.)">
		      </div>      
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Expected Salary -</h5></label>
		      <div class="col-sm-3">
		       	<input type="text" class="form-control" id="Year" placeholder="Monthly/ Annum (in Rs.)">
		      </div>      
		 </div>

		 <h4>Details of latest work</h4>

		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="CompanyName" class="col-form-label">Company Name</label>
		       	<input type="text" class="form-control" id="CompanyName" placeholder="Company Name">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="JobTitle" class="col-form-label">Job Title</label>
		       	<input type="text" class="form-control" id="JobTitle" placeholder="Job Title">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Role" class="col-form-label">Your Role/Designation</label>
		       	<input type="text" class="form-control" id="Role" placeholder="Your Role/Designation">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Div" class="col-form-label">Div/Department</label>
		       	<input type="text" class="form-control" id="Div" placeholder="Div/Department">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Industry" class="col-form-label">Industry</label>
		       	<input type="text" class="form-control" id="Industry" placeholder="Your Role/Designation">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Sector" class="col-form-label">Sector</label>
		       	<input type="text" class="form-control" id="Sector" placeholder="Sector">
		 	</div>
		 </div>
		 <div class="form-group row mt-3">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Job Details -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="postContent" rows="3" id="AboutCompany"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-3">
		    <div class="col-md-4">
		    	<div class="well"> 
			      <div class="form-group">
				      <label>From</label>
				      <input type="date" class="form-control" id="fromCurrent" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		    </div>

		      <div class="col-md-4">
		      	<div class="well"> 
			      <div class="form-group">
				      <label>To</label>
				      <input type="date" class="form-control" id="toCurrent" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		      </div>
		 </div>


		 <h4 class="mt-4">Details of Previous work</h4>

		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="CompanyName" class="col-form-label">Company Name</label>
		       	<input type="text" class="form-control" id="CompanyName" placeholder="Company Name">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="JobTitle" class="col-form-label">Job Title</label>
		       	<input type="text" class="form-control" id="JobTitle" placeholder="Job Title">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Role" class="col-form-label">Your Role/Designation</label>
		       	<input type="text" class="form-control" id="Role" placeholder="Your Role/Designation">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Div" class="col-form-label">Div/Department</label>
		       	<input type="text" class="form-control" id="Div" placeholder="Div/Department">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Industry" class="col-form-label">Industry</label>
		       	<input type="text" class="form-control" id="Industry" placeholder="Your Role/Designation">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Sector" class="col-form-label">Sector</label>
		       	<input type="text" class="form-control" id="Sector" placeholder="Sector">
		 	</div>
		 </div>
		 <div class="form-group row mt-3">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Job Details -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="postContent" rows="3" id="AboutCompany"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-3">
		    <div class="col-md-4">
		    	<div class="well"> 
			      <div class="form-group">
				      <label>From</label>
				      <input type="date" class="form-control" id="fromPrevious" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		    </div>

		      <div class="col-md-4">
		      	<div class="well"> 
			      <div class="form-group">
				      <label>To</label>
				      <input type="date" class="form-control" id="toPrevious" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		      </div>
		 </div>

		 <h4>Work Prefrences</h4>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Job Type -</h5></label>
		      <label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Full Time</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Part Time</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Permanent</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Temporary</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Company</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Pay Roll</span>
			</label>
		 </div>	
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Shift Time -</h5></label>
		      <label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Regular</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Morning</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Afternoon</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Evening</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Night</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Any</span>
			</label>
		 </div>	

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Role /Designation -</h5></label>     
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>      
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Div./Department -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>      
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Industry -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>      
		 </div>	 

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Sector -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>      
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Relevant Skills -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>      
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Preferred Location -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" placeholder="">
		      </div>      
		 </div>

		 <h4>Do You Have?</h4>

		 <div class="form-group row mt-4">

		     <div class="col-md-6">
		     	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Pancard -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		     </div>
		     <div class="col-md-6">
		     	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Driving License -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		     </div>

		 </div>	
		 <div class="form-group row mt-4">
		      <div class="col-md-6">
		      	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Voter ID -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		      </div>
		      <div class="col-md-6">
		      	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Passport -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		      </div>
		 </div>	

		 <h4>Disclaimer and Signature</h4>

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
			  <span class="custom-control-description">I certify that my answers are true and complete to the best of my knowledge.</span>
			</label>
	 	</div>

	 	  <button type="submit" class="btn btn-primary mt-3 mb-5">Submit</button>
	</form>
</div>     
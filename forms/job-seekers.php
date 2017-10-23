<?php
	include'routes.php';
	include'header.php';
	include'process/job-seekers.php';

?>

<title>4zoHr - Job Seeker's Registration Form</title>

<body>



	<div class="container">
		<h4 class="display-4 mt-5">JOB SEEKER'S REGISTRATION FORM</h4>
	<hr>
		<form class="mt-3" enctype="multipart/form-data" method="post">
			<h4 class="my-2" > Personal Information : </h4>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  		<label for="title" class="col-form-label">Title</label>
	  		  <select class="custom-select d-block my-0" required name="title">
			    <option value="Mr.">Mr.</option>
			    <option value="Ms.">Ms.</option>
			    <option value="Mrs.">Mrs.</option>
			  </select>
	  	</div>
	    <div class="form-group col-md-3">
	      <label for="firstName" class="col-form-label">First Name</label>
	      <input type="text" class="form-control" name="firstName" placeholder="First Name">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="MiddleName" class="col-form-label">Middle Name</label>
	      <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="LastName" class="col-form-label">Last Name</label>
	      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
	    </div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  	<label for="gender" class="col-form-label">Gender</label>
	  		<select class="custom-select d-block my-0" name="gender" required>
			    <option value="Male">Male</option>
			    <option value="Female">Female</option>
			</select>
		</div>
		<div class="form-group col-md-2">
	  	<label for="MaritialStatus" class="col-form-label">Maritial Status</label>
	  		<select class="custom-select d-block my-0" name="status" required>
			    <option value="Single">Single</option>
			    <option value="Maried">Maried</option>
			    <option value="Divorced">Divorced</option>
			    <option value="Widowed">Widowed</option>
			    <option value="Separated">Separated</option>    
			</select>
		</div>
		<div class="form-group col-md-4">
			<div class="well">
			      <div class="form-group">
				      <label>Date of Birth</label>
				      <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well">
			</div>
		</div>
		<div class="form-group col-md-4">
	  		<label for="AadharNo" class="col-form-label">Aadhar Card Number</label>
	      	<input type="text" class="form-control" name="aadhar" maxlength="12">
	  	</div>
	  </div>

	  <div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" name="mobile" placeholder="Ex - 9876543210" maxlength="10">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		  	<label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="text" class="form-control" name="phone" placeholder="Ex - 012 345789" maxlength="10">
		  </div>
	  	</div>

	  	<div class="form-row">
	  		<div class="form-group col-md-6">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" name="email" placeholder="name@example.com">
		  </div>
	  	</div>

	  <div class="form-row">
	  		<label for="Address" class="col-form-label">Address</label>
	       <input type="text" class="form-control" name="address" placeholder="Address">
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-5">
	      <label for="State" class="col-form-label">State</label>
	       <input type="text" class="form-control" name="state" placeholder="State">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="City" class="col-form-label">City</label>
	       <input type="City" class="form-control" name="city" placeholder="City">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="Pincode" class="col-form-label">Pincode</label>
	      <input type="text" class="form-control" name="pincode" maxlength="6">
	    </div>
	  </div>



	  <h4 class="mt-3">Educational Details :</h4>

	  	<div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">1. Qualification</label>
		      <select name="q1" class="form-control">
		      	<option value="Less than 10th">Less than 10th</option>
			    <option value="10th">10th</option>
			    <option value="12th">12th</option>
			    <option value="Diploma">Diploma</option>
			    <option value="Graduation">Graduation</option>
			    <option value="Post Graduation">Post Graduation</option>
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="Course" class="col-form-label">College/Institute</label>
		       <input type="text" class="form-control" name="c1" placeholder="College or Institute Name">
		    </div>
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="PassingYear" class="col-form-label">Passing Year</label>
		       <input type="text" class="form-control" name="py1" placeholder="Ex - 2017">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Percentage" class="col-form-label">Percentage or CGPA</label>
		      <input type="text" class="form-control" name="p1" placeholder="Ex - 78">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Board" class="col-form-label">Board / Specialization</label>
		      <input type="text" class="form-control" name="b1" placeholder="Ex. - CBSE / Btech">
		    </div>
	 	 </div>
	 	 <hr>
	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">2. Qualification</label>
		      <select name="q2" class="form-control">
		      	<option value="Less than 10th">Less than 10th</option>
			    <option value="10th">10th</option>
			    <option value="12th">12th</option>
			    <option value="Diploma">Diploma</option>
			    <option value="Graduation">Graduation</option>
			    <option value="Post Graduation">Post Graduation</option>
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="Course" class="col-form-label">College/Institute</label>
		       <input type="text" class="form-control" name="c2" placeholder="College or Institute Name">
		    </div>
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="PassingYear" class="col-form-label">Passing Year</label>
		       <input type="text" class="form-control" name="py2" placeholder="Ex - 2017">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Percentage" class="col-form-label">Percentage or CGPA</label>
		      <input type="text" class="form-control" name="p2" placeholder="Ex - 78">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Board" class="col-form-label">Board / Specialization</label>
		      <input type="text" class="form-control" name="b2" placeholder="Ex. - CBSE / Btech">
		    </div>
	 	 </div>
	 	 <hr>
	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">3. Qualification</label>
		      <select name="q3" class="form-control">
		      	<option value="Less than 10th">Less than 10th</option>
			    <option value="10th">10th</option>
			    <option value="12th">12th</option>
			    <option value="Diploma">Diploma</option>
			    <option value="Graduation">Graduation</option>
			    <option value="Post Graduation">Post Graduation</option>
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="Course" class="col-form-label">College/Institute</label>
		       <input type="text" class="form-control" name="c3" placeholder="College or Institute Name">
		    </div>
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="PassingYear" class="col-form-label">Passing Year</label>
		       <input type="text" class="form-control" name="py3" placeholder="Ex - 2017">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Percentage" class="col-form-label">Percentage or CGPA</label>
		      <input type="text" class="form-control" name="p3" placeholder="Ex - 78">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Board" class="col-form-label">Board / Specialization</label>
		      <input type="text" class="form-control" name="b3" placeholder="Ex. - CBSE / Btech">
		    </div>
	 	 </div>
	 	 <hr>
	 	 <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">4. Qualification</label>
		      <select name="q4" class="form-control">
		      	<option value="Less than 10th">Less than 10th</option>
			    <option value="10th">10th</option>
			    <option value="12th">12th</option>
			    <option value="Diploma">Diploma</option>
			    <option value="Graduation">Graduation</option>
			    <option value="Post Graduation">Post Graduation</option>
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		      <label for="Course" class="col-form-label">College/Institute</label>
		       <input type="text" class="form-control" name="c4" placeholder="College or Institute Name">
		    </div>
	 	 </div>
	 	 <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="PassingYear" class="col-form-label">Passing Year</label>
		       <input type="text" class="form-control" name="py4" placeholder="Ex - 2017">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Percentage" class="col-form-label">Percentage or CGPA</label>
		      <input type="text" class="form-control" name="p4" placeholder="Ex - 78">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="Board" class="col-form-label">Board / Specialization</label>
		      <input type="text" class="form-control" name="b4" placeholder="Ex. - CBSE / Btech">
		    </div>
	 	 </div>





	 	 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>Co-Curriculum Activities -</h5></label>
		      <div class="col-sm-8">
		       	<input type="text" class="form-control" name="curricular" placeholder="Ex - Leadership projects, Workshops, Seminars ">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>IT Skills -</h5></label>
		      <div class="col-sm-8">
		       	<input type="text" class="form-control" name="itskill" placeholder="Ex - MS Office, Tally, Accounting">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>Language’s Know -</h5></label>
		      <div class="col-sm-8">
		       	<input type="text" class="form-control" name="lang" placeholder="Ex - English, Hindi, Marathi">
		      </div>
		 </div>

		 <h4 class="mt-5">Experience details</h4>

		 <div class="form-group row mt-2">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Fresher -</h5></label>
		      <div class="col-sm-3">
		         <label class="custom-control custom-checkbox mt-4">
				  <input type="checkbox" name="fresher" value="yes" class="custom-control-input">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Are You Fresher ?</span>
				</label>
		      </div>
		 </div>


		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Total work Experience -</h5></label>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Years</label>
		       	<input type="text" class="form-control" name="Expyear" placeholder="Year" maxlength="4">
		      </div>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Months</label>
		       	<input type="text" class="form-control" name="Expmonth" placeholder="Months" maxlength="2">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Current / Last Salary -</h5></label>
		      <div class="col-sm-3">
		       	<input type="text" class="form-control" name="sal" placeholder="INR">
		      </div>
		      <div class="col-sm-4">
		       	<select class="custom-select d-block my-0" name="cur_sal" required>
				    <option value="Annual CTC">Annual CTC</option>
				    <option value="Monthly">Monthly</option>
			  	</select>
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Expected Salary -</h5></label>
		      <div class="col-sm-3">
		       	<input type="text" class="form-control" name="esal" placeholder="INR">
		      </div>
		      <div class="col-sm-4">
		       	<select class="custom-select d-block my-0" required name="exp_sal">
				    <option value="Annual CTC">Annual CTC</option>
				    <option value="Monthly">Monthly</option>
			  	</select>
		      </div>
		 </div>

		 <h4>Details of latest work</h4>

		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="CompanyName" class="col-form-label">Company Name</label>
		       	<input type="text" class="form-control" name="Lcname" placeholder="Company Name">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="JobTitle" class="col-form-label">Job Title</label>
		       	<input type="text" class="form-control" name="Ljob" placeholder="Job Title">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Role" class="col-form-label">Your Role/Designation</label>
		       	<input type="text" class="form-control" name="Lrole" placeholder="Your Role/Designation">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Div" class="col-form-label">Div/Department</label>
		       	<input type="text" class="form-control" name="Ldiv" placeholder="Div/Department">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Industry" class="col-form-label">Industry</label>
		       	<input type="text" class="form-control" name="Lindustry" placeholder="Ex - Forging, Foundry, Steel.. etc">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Sector" class="col-form-label">Sector</label>
		       	<input type="text" class="form-control" name="Lsector" placeholder="" onkeyup="showHint(this.value)">
	  			<span id="txtHint"></span>
		 	</div>
		 </div>
		 <div class="form-group row mt-3">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Job Details -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" rows="3" name="Ljobdetail"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-3">
		    <div class="col-md-4">
		    	<div class="well">
			      <div class="form-group">
				      <label>From</label>
				      <input type="date" class="form-control" name="Lfrom" placeholder="">
			      </div>
			</div>
			<div class="well">
			</div>
		    </div>

		      <div class="col-md-4">
		      	<div class="well">
			      <div class="form-group">
				      <label>To</label>
				      <input type="date" class="form-control" name="LtoCurrent" placeholder="Date of Birth">
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
		       	<input type="text" class="form-control" name="Pcname" placeholder="Company Name">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="JobTitle" class="col-form-label">Job Title</label>
		       	<input type="text" class="form-control" name="Pjob" placeholder="Job Title">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Role" class="col-form-label">Your Role/Designation</label>
		       	<input type="text" class="form-control" name="Prole" placeholder="Your Role/Designation">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Div" class="col-form-label">Div/Department</label>
		       	<input type="text" class="form-control" name="Pdiv" placeholder="Div/Department">
		 	</div>
		 </div>
		 <div class="form-group row">
		 	<div class="col-md-6">
		 		<label for="Industry" class="col-form-label">Industry</label>
		       	<input type="text" class="form-control" name="Pindustry" placeholder="Ex - Forging, Foundry, Steel.. etc">
		 	</div>
		 	<div class="col-md-6">
		 		<label for="Sector" class="col-form-label">Sector</label>
		       	<input type="text" class="form-control" name="Psector" placeholder="Sector">
		 	</div>
		 </div>
		 <div class="form-group row mt-3">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Job Details -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="Pjobdetails" rows="3"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-3">
		    <div class="col-md-4">
		    	<div class="well">
			      <div class="form-group">
				      <label>From</label>
				      <input type="date" class="form-control" name="Pfrom" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well">
			</div>
		    </div>

		      <div class="col-md-4">
		      	<div class="well">
			      <div class="form-group">
				      <label>To</label>
				      <input type="date" class="form-control" name="Ptocurrent" placeholder="Date of Birth">
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
			  <input type="checkbox" class="custom-control-input" name="jobtype[]" value="Full Time">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Full Time</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="jobtype[]" value="Part Time">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Part Time</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="jobtype[]" value="Permanent">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Permanent</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="jobtype[]" value="Temporary">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Temporary</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="jobtype[]" value="Contract">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Contract</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="jobtype[]" value="Pay Roll">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Pay Roll</span>
			</label>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Shift Time -</h5></label>
		      <label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="shift[]" value="Regular">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Regular</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="shift[]" value="Morning">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Morning</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="shift[]" value="Afternoon">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Afternoon</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="shift[]" value="Evening">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Evening</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="shift[]" value="Night">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Night</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="shift[]" value="Any">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Any</span>
			</label>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Role /Designation -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="W_role" placeholder="Ex. - Operator, Executive, Design Engineer etc">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Div./Department -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="W_dept" placeholder="Ex. - Maintenance,Project, Marketing, R&D etc.">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Industry -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="W_industry" placeholder="Ex. - Forging, Automative, Steel, Foundry">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Sector -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="W_sector" placeholder="Ex. - Iron or Steel">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Relevant Skills -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="W_rel_skill" placeholder="Ex. - Quality Assurance, Sales, ">
		      </div>
		 </div>

		 <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Preferred Location -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="W_location" placeholder="Ex. - Delhi, Mumbai, Nagpur, Pune">
		      </div>
		 </div>

		 <h4>Do You Have?</h4>

		 <div class="form-group row mt-4">

		     <div class="col-md-6">
		     	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Pancard -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="pan" value="yes">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="pan" value="no">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		     </div>
		     <div class="col-md-6">
		     	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Driving License -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="drive" value="yes">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="drive" value="no">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		     </div>

		 </div>
		 <div class="form-group row mt-4">
		      <div class="col-md-6">
		      	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Voter ID -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="voter" value="yes">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="voter" value="no">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		      </div>
		      <div class="col-md-6">
		      	<label for="AboutCompany" class="col-sm-6 col-form-label"><h5>Passport -</h5></label>
			      <label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="passport" value="yes">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">Yes</span>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="radio" class="custom-control-input" name="passport" value="no">
				  <span class="custom-control-indicator"></span>
				  <span class="custom-control-description">No</span>
				</label>
		      </div>
		 </div>
		 <hr>
		 <div class="row mt-3">
		       <div class="col-sm-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Upload Photograph - </h5></label>
		      </div>
		      <div class="col-sm-6">
		      	<div class="input-group col-md-6">
                
                <input type="file" accept="image/png, image/jpeg, image/gif" placeholder="Images only jpeg"  name="photoUpload"/>
                
            </div>
		      </div>
		      
		 </div>

		 <div class="row mt-3">
		       <div class="col-sm-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Upload Aadhaar Card - </h5></label>
		      </div>
		      <div class="col-sm-6">
		      	<div class="input-group col-md-6">
                <input type="file" accept="image/png, image/jpeg, image/gif" placeholder="Images only jpeg"  name="aadhaarUpload"/>
            </div>
		      </div>
		      
		 </div>

		 <div class="row mt-3">
		       <div class="col-sm-4">
		        <label for="cvUpload" class="col-form-label"><h5>Upload CV/Resume - </h5></label>
		      </div>
		      <div class="col-sm-6">
		      	<div class="input-group col-md-6">
                <input type="file" accept="application/docx, application/doc, application/rtf, application/pdf" placeholder="doc, docx, rtf and pdf only"  name="cvUpload"/>
            </div>
		      </div>
		      
		 </div>


		 <hr>


		 <h4>Disclaimer and Signature</h4>

		 <div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="disclaimer" value="I certify that my answers are true and complete to the best of my knowledge.">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">I certify that my answers are true and complete to the best of my knowledge.</span>
			</label>
	 	</div>

	 	<div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="disclaimer" value="If the application leads to employment, I understand that false or misleading information in my application or interview may
				result in my release.">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">If the application leads to employment, I understand that false or misleading information in my application or interview may
				result in my release.</span>
			</label>
	 	</div>

	 	  <button type="submit" name="submit" class="btn btn-info btn-lg mb-5 mt-5" >Submit</button>
	</form>
</div>

	<script>

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "dropdowns/sector.php?q=" + str, true);
        xmlhttp.send();
    }
}

</script>

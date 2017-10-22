<?php
	include'routes.php';
	include'header.php';
	include'process/expert.php';

?>

<title>4zoHr - Experts Registration Form</title>

<body>

	

	<div class="container">
		<h4 class="display-4 mt-5">EXPERT / CONSULTANT REGISTRATION FORM</h4>
	<hr>

<form class="mt-3"  enctype="multipart/form-data" method="post">

	<div class="form-group row mt-4">
		      <label for="question" class="col-sm-5 col-form-label"><h5>Are you Expert, Consultant or Both ?</h5></label>
		     <label class="custom-control custom-radio">
			  <input id="radio1" name="radio" type="radio" class="custom-control-input" value="Expert">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Expert</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" name="radio" type="radio" class="custom-control-input" value="Consultant">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Consultant</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" name="radio" type="radio" class="custom-control-input" value="Both">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Both</span>
			</label>
	</div>

	
			<h4 class="my-2" > Personal Information : </h4>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  		<label for="title" class="col-form-label">Title</label>
	  		  <select class="custom-select d-block my-0" name="title" required>
			    <option value="Mr.">Mr.</option>
			    <option value="Ms.">Ms.</option>
			    <option value="Mrs.">Mrs.</option>
			  </select>
	  	</div>
	    <div class="form-group col-md-3">
	      <label for="firstName" class="col-form-label">First Name</label>
	      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="MiddleName" class="col-form-label">Middle Name</label>
	      <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="Middle Name">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="LastName" class="col-form-label">Last Name</label>
	      <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
	    </div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  	<label for="gender" class="col-form-label">Gender</label>
	  		<select class="custom-select d-block my-0" required name="gender">
			    <option value="Male">Male</option>
			    <option value="Female">Female</option>  
			</select>
		</div>
		<div class="form-group col-md-2">
	  	<label for="status" class="col-form-label">Maritial Status</label>
	  		<select class="custom-select d-block my-0" name="status" required>
	  			<option>Select</option>
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
				      <input name="dob" type="date" class="form-control" id="dob" placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		</div>	
		<div class="form-group col-md-4">
	  		<label for="AadharNo" class="col-form-label">Aadhar Card Number</label>
	      	<input type="text" class="form-control" id="AadharNo" name="AadharNo" maxlength="12">
	  	</div>	
	  </div>

	  <div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" id="MobileNo" name="MobileNo" placeholder="Ex - 9876543210" maxlength="10">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		  	<label for="PhoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="text" class="form-control" id="PhoneNo" name="PhoneNo" placeholder="Ex - 012 345789" >
		  </div>
	  	</div>

	  	<div class="form-row">
	  		<div class="form-group col-md-6">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
		  </div>
	  	</div>

	  <div class="form-row">
	  		<label for="Address" class="col-form-label">Address</label>
	       <input type="text" class="form-control" id="State" placeholder="Address" name="Address">
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-5">
	      <label for="State" class="col-form-label">State</label>
	       <input type="text" class="form-control" id="State" placeholder="State" name="State">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="City" class="col-form-label">City</label>
	       <input type="City" class="form-control" id="Percentage" name="City" placeholder="City">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="Pincode" class="col-form-label">Pincode</label>
	      <input type="text" class="form-control" id="Pincode" maxlength="6" name="Pincode">
	    </div>
	  </div>
	  	


	 <h4 class="mt-4">Professional Details</h4>

	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="CurrentCompany">Current Company</label>
	  			<input type="text" class="form-control" id="CurrentCompany" name="CurrentCompany" placeholder="">
	  		</div>
	  		<div class="form-group col-md-6">
	  			<label for="Position">Position</label>
	  			<input type="text" class="form-control" id="Position" name="Position" placeholder="">
	  		</div>
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="Sector">Sector</label>
	  			<input name="Sector" type="text" class="form-control" id="Sector" placeholder="" onkeyup="showHint(this.value)">
	  			<span id="txtHint"></span>
	  		</div>
	  		<div class="form-group col-md-6">
	  			<label for="Industry">Industry</label>
	  			<input type="text" class="form-control" id="Industry" name="Industry" placeholder="Ex - Forging, Foundry, Steel.. etc">
	  		</div>
	  	</div>
	  	<div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">Highest Qualification</label>
		      <select name="Qualification" id="Qualification" class="form-control">
		      	<option value="Less than 10th">Less than 10th</option>
			    <option value="10th">10th</option>
			    <option value="12th">12th</option>
			    <option value="Diploma">Diploma</option>
			    <option value="Graduation">Graduation</option>
			    <option value="Post Graduation">Post Graduation</option>   
			  </select>
		    </div>
		    <div class="form-group col-md-5 ml-auto">
		       <label for="Course" class="col-form-label">Course</label>
		       <input name="Course" type="text" class="form-control" id="Course" placeholder="Course">
		    </div>
	 	 </div>
	 	 <div class="form-group row mt-3">
		      <label for="bio" class="col-sm-3 col-form-label"><h5>Brief Bio -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="bio" rows="3" id="bio"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Work Experience -</h5></label>
		      <div class="col-sm-3">
		         <label for="year" class="col-form-label">Years</label>
		       	<input name="year" type="text" class="form-control" id="Year" placeholder="Year" maxlength="4">
		      </div>
		      <div class="col-sm-3">
		         <label for="months" class="col-form-label">Months</label>
		       	<input name="months" type="text" class="form-control" id="months" placeholder="Months" maxlength="2">
		      </div>
		      <div class="col-sm-3">
		         <label for="charge" class="col-form-label">Charge in rupees (Approximate)</label>
		       	<input type="text" name="charge" class="form-control" id="charge" placeholder="INR">
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Subcategory/Skills -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="Year" name="Skill" placeholder="Skill 1, Skill 2, Skill 3">
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Achievement / Projects successfully completed -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" id="sub1" name="subj1" placeholder="Subject">
		       	
		         <textarea class="form-control mt-2" rows="3" id="description" name="des1" placeholder="Description"></textarea>
		      	
		      	<input type="text" class="form-control mt-2" id="Categories" name="cat1" placeholder="Categories">

		      	<input type="text" class="form-control mt-5" id="subject" name="sub2" placeholder="Subject">
		       	
		         <textarea class="form-control mt-2" name="postContent" rows="3" name="des2" id="description" placeholder="Description"></textarea>
		      	
		      	<input type="text" class="form-control mt-2" id="Categories" name="cat2" placeholder="Categories">
		  		</div>
			</div>
		  <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Certifications : </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="noCertificates" class="col-form-label">In Total Number</label>
		        <input type="text" name="noCertificates" class="form-control" id="noCertificates" placeholder="Ex - 5">
		      </div>
		  </div>


		  <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Certificate Name</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Year</label>
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Certificate Name</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Year</label>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">1.</label>
		   	  <div class="col-sm-3">
		        <input name="certificateName1" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="year1" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input name="certificateName2" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="year2" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" name="certificateName3" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="year3" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input name="certificateName4" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="year4" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="expertCategory" class="col-sm-3 col-form-label"><h5>Expert Categories -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="expertCategory" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="consulting" class="col-sm-3 col-form-label"><h5>Consulting Service -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="consulting" placeholder="">
		      </div>
		 </div>

		 <h4 class="mt-3">Area of Services you offer</h4>

		 <div class="form-group row mt-4">
		      <label for="Industries" class="col-sm-3 col-form-label"><h5>Industries -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="Industries" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="expertise" class="col-sm-3 col-form-label"><h5>Field of Expertise -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="expertise" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="functionalArea" class="col-sm-3 col-form-label"><h5>Functional Area -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="functionalArea" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="proj_type" class="col-sm-3 col-form-label"><h5>Types of Project -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="proj_type" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Executed Projects - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="noExecutedPro" name="noExecutedPro" placeholder="Example - 15">
		      </div>
		  </div>
		  <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Description</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">In Number</label>
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Description</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">In Number</label>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">1.</label>
		   	  <div class="col-sm-3">
		        <input name="e1" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="en1" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input name="e2" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="en2" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input name="e3" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="en3" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input name="e4" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="en4" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Projects Live - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="noLiveProject" name="noLiveProject" placeholder="Example - 14">
		      </div>
		  </div>
		  <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Description</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">In Number</label>
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Description</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">In Number</label>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">1.</label>
		   	  <div class="col-sm-3">
		        <input name="p1" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="pn1" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input name="p2" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="pn2" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input name="p3" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="pn3" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input name="p4" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="pn4" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>


		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5> Team Details - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="noTeam" name="noTeam" placeholder="Example - 10">
		      </div>
		  </div>
		  <div class="form-group row mt-3">
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Details</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Role</label>
		      <label for="Roles" class="col-sm-4 col-form-label text-center"><h5>Details</h5></label>
		      <label for="Number" class="col-sm-2 col-form-label text-center">Role</label>
		 </div>
				 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">1.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="t1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="tn1" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input name="t2" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input name="tn2" type="text" class="form-control" id="Number" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input name="t3" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="tn3" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input name="t4" type="text" class="form-control" id="Roles" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" name="tn4" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="noOfcities" class="col-form-label"><h5>Location of Services - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="noOfcities" name="noOfcities" placeholder="Ex - 5">
		      </div>
		      <div class="col-sm-6">
		      	<label for="TotalCities" class="col-form-label">Places</label>
		        <input type="text" name="places" class="form-control" id="TotalCities" placeholder="Ex - Delhi, Banglore, Mumbai, Nagpur">
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
                <input type="file" accept="application/docx, application/doc, application/rtf, application/pdf" placeholder="Images only jpeg"  name="cvUpload"/>
            </div>
		      </div>
		      
		 </div>




		 <hr>
		 <h4>Disclaimer and Signature</h4>

		 <div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="disclaimer[]" value="If the application leads to employment, I understand that false or misleading information in my application or interview may
			  result in my release.">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">If the application leads to employment, I understand that false or misleading information in my application or interview may
			  result in my release.</span>
			</label>
	 	</div>

	 	<div class="form-row">
	 	 	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="disclaimer[]" value="I understand that false or misleading information in my application may result in my release.">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">I understand that false or misleading information in my application may result in my release.</span>
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
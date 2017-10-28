<?php
	include'routes.php';
	include'header.php';
	include'process/contractor.php';

?>

<title>4zoHr - Contractor Registration Form</title>




<style type="text/css">


</style>

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




<body>

	
<?php
$error="";
 echo $error;?>
	<div class="container">
		<h4 class="display-4 mt-5">CONTRACTOR REGISTRATION FORM </h4>
	<hr>
		<form class="mt-3" enctype="multipart/form-data" method="post" >
			<h4 class="my-2" > Personal Information : </h4>
	  <div class="form-row">
	  	<div class="form-group col-md-2">
	  		<label for="title" class="col-form-label">Title</label>
	  		  <select class="custom-select d-block my-0" name="title" required>
	  		  	<option>Select</option>
			    <option value="Mr.">Mr.</option>
			    <option value="Ms.">Ms.</option>
			    <option value="Mrs.">Mrs.</option>
			  </select>
	  	</div>
	    <div class="form-group col-md-3">
	      <label for="firstName" class="col-form-label">First Name</label>
	      <input type="text" class="form-control" name="firstname" placeholder="First Name">
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
	  			<option>Select</option>
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
				      <label for="dob">Date of Birth</label>
				      <input type="date" class="form-control" name="dob"  placeholder="Date of Birth">
			      </div>
			</div>
			<div class="well"> 
			</div>
		</div>	
		<div class="form-group col-md-4">
	  		<label for="aadharNo" class="col-form-label">Aadhaar Card Number</label>
	      	<input type="text" class="form-control" name="aadharNo" maxlength="12">
	  	</div>	
	  </div>

	  <div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" name="MobileNo" placeholder="Ex - 9876543210" maxlength="10">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		  	<label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="text" class="form-control" name="phoneNo" placeholder="Ex - 012 345789" maxlength="10">
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
	  	


	  	<h4 class="mt-4">Professional Details</h4>

	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="CurrentCompany">Current Company</label>
	  			<input type="text" class="form-control" name="CurrentCompany" placeholder="">
	  		</div>
	  		<div class="form-group col-md-6">
	  			<label for="Position">Position</label>
	  			<input type="text" class="form-control" name="position" placeholder="">
	  		</div>
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-6">
	  			<label for="Sector">Sector</label>
	  			<input type="text" class="form-control" name="sector" placeholder="" onkeyup="showHint(this.value)">
	  			<span id="txtHint"></span>
	  		</div>
	  		<div class="form-group col-md-6">
	  			<label for="Industry">Industry</label>
	  			<input type="text" class="form-control" name="industry" placeholder="Ex - Forging, Foundry, Steel.. etc">
	  		</div>
	  	</div>

	  	<div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="Qualification" class="col-form-label">Highest Qualification</label>
		      <select id="Qualification" class="form-control" name="qualification">
		      	<option>Select</option>
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
		       <input type="text" class="form-control" name="course" placeholder="Course">
		    </div>
	 	 </div>
	 	 <div class="form-group row mt-3">
		      <label for="BriefBio" class="col-sm-3 col-form-label"><h5>Brief Bio -</h5></label>
		      <div class="col-sm-9">
		         <textarea class="form-control" name="bio" rows="3" id="BriefBio"></textarea>
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Professional Experience -</h5></label>
		      <div class="col-sm-3">
		         <label for="Year" class="col-form-label">Years</label>
		       	<input type="text" class="form-control" name="year" placeholder="Year" maxlength="2">
		      </div>
		      <div class="col-sm-3">
		         <label for="months" class="col-form-label">Months</label>
		       	<input type="text" class="form-control" name="months" placeholder="Months" maxlength="2">
		      </div>
		      <div class="col-sm-3">
		         <label for="projects" class="col-form-label">Number of Projects</label>
		       	<input type="text" class="form-control" name="no_proj" placeholder="projects">
		      </div>
		 </div>
		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Sub Category / Skills -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="skills" placeholder="Skill 1, Skill 2, Skill 3">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label my-4"><h5>Project Price Range -</h5></label>
		      <div class="col-sm-3">
		         <label for="Minimum" class="col-form-label">Minimum</label>
		       	<input type="text" class="form-control" name="minimum" placeholder="INR">
		      </div>
		      <div class="col-sm-3">
		         <label for="Maximum" class="col-form-label">Maximum</label>
		       	<input type="text" class="form-control" name="maximum" placeholder="INR">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="Specialization" class="col-sm-3 col-form-label"><h5>Specialization / Expertise -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="specialization" placeholder="Erection & commissioning, Production, Maintenance etc">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="Projects" class="col-sm-3 col-form-label"><h5>Types of Projects -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="proj_types" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Types of Services you offered -</h5></label>
		      <div class="col-sm-9">
		       	<input type="text" class="form-control" name="service_type" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Type of Professional -</h5></label>
		      <label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input" name="prof_type[]" value="Firm">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Firm</span>
			</label>
			<label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input" name="prof_type[]" value="Proprietor ship">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Proprietor ship</span>
			</label>
			<label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input" name="prof_type[]" value="Company">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Company</span>
			</label>
			<label class="custom-control custom-checkbox mt-2">
			  <input type="checkbox" class="custom-control-input" name="prof_type[]" value="other">
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
		        <input type="text" class="form-control" name="r1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n1" maxlength="5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" name="r2" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n2" maxlength="5" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" name="r3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n3" maxlength="5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" name="r4" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n4" maxlength="5" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" name="r5" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n5" maxlength="5" id="Number" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" name="r6" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n6 maxlength="5"" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" name="r7" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n7" maxlength="5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" name="r8" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" name="n8" maxlength="5" placeholder="">
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
		        <input type="text" class="form-control" id="Roles" name="l1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln1" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l2" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln2" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln3" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l4" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln4" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l5" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l6" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln6" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l7" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln7" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="l8" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="ln8" placeholder="">
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
		        <input type="text" class="form-control" id="Roles" name="w1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn1" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w2" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn2" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn3" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w4" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn4" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w5" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w6" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn6" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w7" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn7" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="w8" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="wn8" placeholder="">
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
		        <input type="text" class="form-control" id="Roles" name="m1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn1" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" maxlength="5" name="m2" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn2" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="m3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn3" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="m4" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn4" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="m5" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="m6" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn6" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="m7" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn7" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="m8" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="5" name="mn8" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>List of Clients : </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" name="no_clients" placeholder="Ex - 5">
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
		        <input type="text" class="form-control" id="Roles" name="c1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn1" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">2.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c2" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn2" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn3" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">4.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c4" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn4" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c5" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn5" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">6.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c6" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn6" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">7.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c7" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn7" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">8.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c8" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn8" placeholder="">
		      </div>
		 </div>
		 <div class="form-group row">
		 	<label for="Roles" class="col-sm-1 col-form-label">9.</label>
		   	  <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c9" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn9" placeholder="">
		      </div>
		      <label for="Roles" class="col-sm-1 col-form-label">10.</label>
		      <div class="col-sm-3">
		        <input type="text" class="form-control" id="Roles" name="c10" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="Number" maxlength="10" name="cn10" placeholder="">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Location of Services - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" name="TotalCities" placeholder="Ex - 7">
		      </div>
		      <div class="col-sm-6">
		      	<label for="cities" class="col-form-label">Places</label>
		        <input type="text" class="form-control" name="cities" placeholder="Ex - Delhi, Banglore, Mumbai, Nagpur">
		      </div>
		 </div>

		 <div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Industries of Serving - </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="totalIndustries" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" name="totalIndustries" placeholder="Ex - 6">
		      </div>
		      <div class="col-sm-6">
		      	<label for="industries" class="col-form-label">Industries</label>
		        <input type="text" class="form-control" name="industries" placeholder="Ex - Forging, Foundry, Steel.. etc">
		      </div>
		 </div>

		 <div class="form-group row mt-4">
		      <label for="AboutCompany" class="col-sm-3 col-form-label"><h5>Licenses you have -</h5></label>
		      <label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="license[]" value="Labour licenses">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Labour license</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="license[]" value="EPF">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">EPF</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="license[]" value="ESCIC">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">ESIC</span>
			</label>
			 <div class="col-sm-3">
			    <input type="text" class="form-control" id="other" name="otherLicenses" placeholder="If other mention it">
		     </div>
		 </div>

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

		 
	 	  <button type="submit" name="submit" class="btn btn-info btn-lg mb-5 mt-5" >Submit</button>
	</form>


</div>    
<?php
	include'footer.php';
?>


<script>
$("input[type='image']").click(function () {
    $("input[id='my_file']").click();
});

$("input[id='my_file']").change(function (e) {
    var $this = $(this);
    $this.next().html($this.val().split('\\').pop());
});
</script>
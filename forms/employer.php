<?php
	include'routes.php';
	include'header.php';
	include'process/employer.php';

?>

<title>4zoHr - Employer Registration Form</title>

<body>

	<div class="container">
		<h4 class="display-4 mt-5">EMPLOYER REGISTRATION FORM</h4>
	<hr>
		<form enctype="multipart/form-data" class="mt-3" method="POST">
			<h4 class="my-2" > Company Information : </h4>
	  <div class="form-row mb-3">
	  		<label for="CompanyName" class="col-form-label">Company Name</label>
	      	<input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="Company Name">
	  </div>
	  <div class="form-row mb-3">
	  	<div class="form-group col-md-6">
	  		<label for="FoundedYear" class="col-form-label">Founded Year</label>
	      	<input type="text" class="form-control" name="FoundedYear" id="FoundedYear" placeholder="Founded Year" maxlength="4">
	    </div>
		<div class="form-group col-md-6">
			<label for="NoOfEmployee" class="col-form-label">Total Number of Employee's (Approx)</label>
	      	<input type="text" class="form-control" name="NoOfEmployee" id="NoOfEmployee" placeholder="Employee's">
		</div>	  
	  </div>
	  <div class="form-row mb-3">
	  	<div class="form-group col-md-6">
	  		<label for="Sector" class="col-form-label">Sector</label>
	      	<input type="text" class="form-control" name="Sector" id="Sector" placeholder="" onkeyup="showHint(this.value)">
	  		<span id="txtHint"></span>
	  	</div>
	  	<div class="form-group col-md-6">
	  		<label for="Industry" class="col-form-label">Industry</label>
	      	<input type="text" class="form-control" id="Industry" name="Industry" placeholder="Ex - Forging, Foundry, Steel.. etc">
	  	</div>
	  </div>
	  <div class="form-row">
	  	<p class="h5 mr-2">Type : </p>
	  	<div class="form-group">
	  		<label class="custom-control custom-radio">
			  <input id="radio1"type="radio" class="custom-control-input" name="type[]" value="Start-Up">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Start-Up</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value="Small and Medium Enterprise (SME)">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Small and Medium Enterprise (SME)</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value="Individual Employer" >
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Individual Employer</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value="Individual Employer">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Individual Employer</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value=">Corporate">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Corporate</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value="Agency / HR Firm">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description"> Agency / HR Firm</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value="Facility Management Service Agency">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description"> Facility Management Service Agency</span>
			</label>
			<label class="custom-control custom-radio">
			  <input id="radio2" type="radio" class="custom-control-input" name="type[]" value="Consultancy">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Consultancy</span>
			</label>


	  	</div>
	  </div>
	  <div class="form-row">
	  		<label for="Address" class="col-form-label">Address</label>
	       <input type="text" class="form-control" name="Address" placeholder="Address">
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-5">
	      <label for="State" class="col-form-label">State</label>
	       <input type="text" class="form-control" id="State" name="State" placeholder="State">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="City" class="col-form-label">City</label>
	       <input type="City" class="form-control" name="City" placeholder="City">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="Pincode" class="col-form-label">Pincode</label>
	      <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="Pincode" maxlength="6">
	    </div>
	  </div>


	  	<h4 class="mt-3">Contact Information :</h4>
	  	
	  	<div class="form-row mt-3">
	  		<div class="form-group col-md-5">
		    <label for="ContactName">Contact Person Name</label>
		    <input type="text" class="form-control" id="ContactName" name="ContactName" placeholder="Contact Person Name">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		    <label for="Email">Email address</label>
		    <input type="email" class="form-control" name="Email" id="Email" placeholder="name@example.com">
		  </div>
	  	</div>
	  	<div class="form-row mb-3">
	  		
		    <label for="Designation" class="col-form-label">Designation</label>
		    <input type="text" class="form-control" id="Designation" name="Designation" placeholder="Designation">
		  
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" id="MobileNo" name="MobileNo" placeholder="Ex - 9876543210" maxlength="10">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		  	<label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="text" class="form-control" id="phoneNo" name="phoneNo" maxlength="10" placeholder="Ex - 012 345789">
		  </div>
	  	</div>

	  	<h4 class="mt-3 mb-3">Other Information :</h4>


		    <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>About Your Company -</h5></label>
		      <div class="col-sm-8">
		         <textarea class="form-control"  rows="8" name="AboutCompany" id="AboutCompany"></textarea>
		      </div>
		    </div>

	 	 
	 	 	
	 	 	<div class="form-group row mt-3">
		      <label for="inputEmail3" class="col-sm-10 col-form-label"><h5>Division/Department in your company</h5></label>
		      <label for="inputEmail3" class="col-sm-2 col-form-label">No. of Employee's(Aprrox.)</label>
		    </div>
		    <div class="form-group row">
		    	<label for="Roles" class="col-sm-1 col-form-label">1.</label>
		   	  <div class="col-sm-9">
		        <input type="text" class="form-control" id="inputEmail3" name="d1" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" maxlength="5" name="dn1" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		    	<label for="Roles" class="col-sm-1 col-form-label">2.</label>
		   	  <div class="col-sm-9">
		        <input type="text" class="form-control" id="inputEmail3" name="d2" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" maxlength="5" name="dn2" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		    	<label for="Roles" class="col-sm-1 col-form-label">3.</label>
		   	  <div class="col-sm-9">
		        <input type="text" class="form-control" id="inputEmail3" name="d3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" maxlength="5" name="dn3" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		    	<label for="Roles" class="col-sm-1 col-form-label">4.</label>
		   	  <div class="col-sm-9">
		        <input type="text" class="form-control" id="inputEmail3" name="d4" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" maxlength="5" name="dn4" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		    	<label for="Roles" class="col-sm-1 col-form-label">5.</label>
		   	  <div class="col-sm-9">
		        <input type="text" class="form-control" id="inputEmail3" name="d5" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" maxlength="5" name="dn5" placeholder="">
		      </div>
		    </div>



	 		<div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Cities where you have office : </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" name="TotalCities" placeholder="Ex - 5">
		      </div>
		      <div class="col-sm-6">
		      	<label for="Places" class="col-form-label">Places</label>
		        <input type="text" class="form-control" id="Places" name="Places" placeholder="Ex - Delhi, Banglore, Mumbai, Nagpur">
		      </div>
		    </div>
		    <div class="form-group row mt-3">
		       <div class="col-sm-4">
		        <label for="GSTIIN" class="col-form-label"><h5>GSTIN (Optional) : </h5></label>
		      </div>
		      <div class="col-sm-8">
		        <input type="text" class="form-control" id="GSTIN" name="GSTIN" placeholder="22AA000AAAAA1Z5" maxlength="15" >
		      </div>
		    </div>

		    





	  <button type="submit" name="submit" class="btn btn-info btn-lg mb-5 mt-5" >Submit</button>
</form>
	</div>

<?php
	include'footer.php';
?>

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

</body>
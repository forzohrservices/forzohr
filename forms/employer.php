<?php
	include'routes.php';
	include'header.php';

?>

<title>4zoHr - Employer Registration Form</title>
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
		<h4 class="display-4 mt-5">Employer Registration Form</h4>
	<hr>
		<form class="mt-3">
			<h4 class="my-2" > Company Information : </h4>
	  <div class="form-row mb-3">
	  		<label for="CompanyName" class="col-form-label">Company Name</label>
	      	<input type="text" class="form-control" id="CompanyName" placeholder="Company Name">
	  </div>
	  <div class="form-row mb-3">
	  	<div class="form-group col-md-6">
	  		<label for="FoundedYear" class="col-form-label">Founded Year</label>
	      	<input type="text" class="form-control" id="FoundedYear" placeholder="Founded Year">
	    </div>
		<div class="form-group col-md-6">
			<label for="Employee" class="col-form-label">Total Number of Employee's (Approx)</label>
	      	<input type="text" class="form-control" id="Employee" placeholder="Employee's">
		</div>	  
	  </div>
	  <div class="form-row mb-3">
	  	<div class="form-group col-md-6">
	  		<p class="h5 mr-2 mt-3">Sector : </p>
		  	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Manufacturing</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">IT</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Service</span>
			</label>
	  	</div>
	  	<div class="form-group col-md-6">
	  		<label for="Industry" class="col-form-label">Industry</label>
	      	<input type="text" class="form-control" id="Industry" placeholder="Industry">
	  	</div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group">
	  		<p class="h5 mr-2">Type : </p>
		  	<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Start-Up</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Small and Medium Enterprise (SME)</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Individual Employer</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Corporate</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Agency / HR Firm</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Facility Management Service Agency</span>
			</label>
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Consultancy</span>
			</label>
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


	  	<h4 class="mt-3">Contact Information :</h4>
	  	
	  	<div class="form-row mt-3">
	  		<div class="form-group col-md-5">
		    <label for="ContactName">Contact Person Name</label>
		    <input type="text" class="form-control" id="ContactName" placeholder="Contact Person Name">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" placeholder="name@example.com">
		  </div>
	  	</div>
	  	<div class="form-row mb-3">
	  		
		    <label for="Designation" class="col-form-label">Designation</label>
		    <input type="text" class="form-control" id="Designation" placeholder="Designation">
		  
	  	</div>
	  	<div class="form-row">
	  		<div class="form-group col-md-5">
		    <label for="phoneNo" class="col-form-label">Phone Number (with pincode)</label>
		    <input type="text" class="form-control" id="phoneNo" placeholder="020 5784XXXX">
		  </div>
		  <div class="form-group col-md-5 ml-auto">
		    <label for="MobileNo" class="col-form-label">Mobile Number</label>
		    <input type="text" class="form-control" id="MobileNo" placeholder="98XXX78XXX">
		  </div>
	  	</div>

	  	<h4 class="mt-3 mb-3">Other Information :</h4>


		    <div class="form-group row">
		      <label for="AboutCompany" class="col-sm-4 col-form-label"><h5>About Your Company -</h5></label>
		      <div class="col-sm-8">
		         <textarea class="form-control" name="postContent" rows="8" id="AboutCompany"></textarea>
		      </div>
		    </div>

	 	 
	 	 	
	 	 	<div class="form-group row mt-3">
		      <label for="inputEmail3" class="col-sm-10 col-form-label"><h5>Division/Department in your company</h5></label>
		      <label for="inputEmail3" class="col-sm-2 col-form-label">No. of Employee's(Aprrox.)</label>
		    </div>
		    <div class="form-group row">
		   	  <div class="col-sm-10">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		   	  <div class="col-sm-10">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		   	  <div class="col-sm-10">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		   	  <div class="col-sm-10">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		   	  <div class="col-sm-10">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		      <div class="col-sm-2">
		        <input type="text" class="form-control" id="inputEmail3" placeholder="">
		      </div>
		    </div>
	 		<div class="form-group row mt-3">
		       <div class="col-sm-4 mt-4">
		        <label for="inputEmail3" class="col-form-label"><h5>Cities where you have office : </h5></label>
		      </div>
		      <div class="col-sm-2">
		      	<label for="TotalCities" class="col-form-label">In Total Number</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="5">
		      </div>
		      <div class="col-sm-6">
		      	<label for="TotalCities" class="col-form-label">Places</label>
		        <input type="text" class="form-control" id="TotalCities" placeholder="Delhi, Banglore, Mumbai, Nagpur">
		      </div>
		    </div>
		    <div class="form-group row mt-3">
		       <div class="col-sm-4">
		        <label for="inputEmail3" class="col-form-label"><h5>GSTIN  : </h5></label>
		      </div>
		      <div class="col-sm-8">
		        <input type="text" class="form-control" id="TotalCities" placeholder="22AA000AAAAA1Z5">
		      </div>
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
<?php

	include'../config/config.php';

	@$CompanyName = $_POST['CompanyName'];

	@$FoundedYear = $_POST['FoundedYear'];

	@$NoOfEmployee = $_POST['NoOfEmployee'];

	@$Sector = $_POST['Sector'];

	@$Industry = $_POST['Industry'];

	if (isset($_POST['type'])) {
			$checkStore = $_POST['type']; 
		 }else{
		 	$checkStore = " ";
		 } 
		$type = " ";
		$N = count($checkStore);
		for ($i=0; $i <$N ; $i++) { 
			$type .= $checkStore[$i]." ";

		}


	@$Address = $_POST['Address'];

	@$State = $_POST['State'];

	@$City = $_POST['City'];

	@$Pincode = $_POST['Pincode'];

	@$ContactName = $_POST['ContactName'];

	@$Email = $_POST['Email'];

	@$Designation = $_POST['Designation'];

	@$MobileNo = $_POST['MobileNo'];

	@$phoneNo = $_POST['phoneNo'];

	@$AboutCompany = $_POST['AboutCompany'];

	@$Division = $_POST['d1']."-".$_POST['dn1']." ".$_POST['d2']."-".$_POST['dn2']." ".$_POST['d3']."-".$_POST['dn3']." ".$_POST['d4']."-".$_POST['dn4']." ".$_POST['d5']."-".$_POST['dn5'];

	$Office = @$_POST['TotalCities']."-".@$_POST['Places'];

	@$GSTIN = $_POST['GSTIN'];

	date_default_timezone_set('Asia/Kolkata');
	$entryTime = date('Y-m-d H:i:s');

	//----------------------------------------------------------


		//apostrophe removal

	$CompanyName = str_replace("'","''", $CompanyName);
	//$FoundedYear = str_replace("'","''", $FoundedYear);
	//$NoOfEmployee = str_replace("'","''", $NoOfEmployee);
	$Sector = str_replace("'","''", $Sector);
	$Industry = str_replace("'","''", $Industry);
	$Address = str_replace("'","''", $Address);
	$State = str_replace("'","''", $State);
	$City = str_replace("'","''", $City);
	//$Pincode = str_replace("'","''", $Pincode);
	$ContactName = str_replace("'","''", $ContactName);
	$Email = str_replace("'","''", $Email);
	$Designation = str_replace("'","''", $Designation);
	//$MobileNo = str_replace("'","''", $MobileNo);
	//$phoneNo = str_replace("'","''", $phoneNo);
	$AboutCompany =str_replace("'","''", $AboutCompany);
	$Division = str_replace("'","''", $Division);
	$Office = str_replace("'","''", $Office);
	//$GSTIN = str_replace("'","''", $GSTIN);

	


//-------------------------------------------------------

	//Fire query

	$error = "";
	$query="";

	if (isset($_POST['submit'])) {
		
		
		if(empty($_POST['ContactName'])){
			$error .= " Contact Name ";
		}if(empty($_POST['Email'])){
			$error .= " Email ";
		}if (empty($_POST['MobileNo'])) {
			$error .= " Mobile Number ";
		}
		else
		{
			$query = "INSERT INTO employer(CompanyName, FoundedYear, NoOfEmployee, Sector, Industry, Address, State, City, Pincode, ContactName, Email, Designation, MobileNo, phoneNo, AboutCompany, Division, Office, GSTIN,entryTime) VALUES ('$CompanyName','$FoundedYear','$NoOfEmployee','$Sector','$Industry','$Address','$State','$City','$Pincode','$ContactName','$Email','$Designation','$MobileNo','$phoneNo','$AboutCompany','$Division','$Office','$GSTIN','$entryTime')";
		}


		 if ($conn->multi_query($query) === TRUE) {

			    echo '
			    	<div class="container mt-3">
						<div class="alert alert-success" role="alert">
						  Form Submitted successfully
						</div>
					</div> 
			    ';			   
			}else {
				echo'
					<div class="container mt-3">
						<div class="alert alert-danger" role="alert">
						  '.$error.' is mandatory
						</div>
					</div>
				';
				  //echo "Error: " . $query . "<br>" . $conn->error;

			   
			}


			$conn->close();   


		}

?>
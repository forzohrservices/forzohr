<?php
	include'../config/config.php';

	function imageUpload(string $tagName, string $destination, $mobile, $name){

		$validextensions = array( "png", "jpeg", "jpg", "JPEG", "PNG", "JPG" );
		$temporary = explode(".", $_FILES[$tagName]["name"]);
		$file_extension = end($temporary);
		$imgFullpath="";

	    if ((($_FILES[$tagName]["type"] == "image/png") || ($_FILES[$tagName]["type"] == "image/jpg") || ($_FILES[$tagName]["type"] == "image/jpeg") || ($_FILES[$tagName]["type"] == "image/PNG") || ($_FILES[$tagName]["type"] == "image/JPEG") || ($_FILES[$tagName]["type"] == "image/JPG")
	    ) && ($_FILES[$tagName]["size"] < 2097152)//Approx. 2Mb files can be uploaded.
	    && in_array($file_extension, $validextensions)) {

	        if ($_FILES[$tagName]["error"] > 0) {
	             echo "Return Code: " . $_FILES[$tagName]["error"] . "<br/><br/>";
        } else 
            {

                    

                    if (file_exists("uploads/contractor/".$destination."/" . $_FILES[$tagName]["name"])) 
                    {
                        echo( $_FILES[$tagName]["name"] . " <b>already exists.</b> ");
                    } 
                    else 
                    {   
                        //echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
                        //echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
                        //echo "<b>Type:</b> " . $_FILES[$tagName]["type"] . "<br>";
                        //echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                        //echo "<b>Temp file:</b> " . $_FILES[$tagName]["tmp_name"] . "<br>";
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/contractor/".$destination."/" .$mobile.$name.".".$file_extension);
                        $imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/contractor/".$destination."/" .$mobile.$name.".".$file_extension;
                        //echo "<b>Stored in:</b><a href = '$imgFullpath' target='_blank'> " .$imgFullpath.'<a>';

                    }

            }
    	}if(!isset($_FILES['files'])){
    		echo "";
    	}
        else 
            {
                echo "<span>***Invalid file Size or Type***<span>";
            }

            return $imgFullpath;
            
	}

		@$title = $_POST["title"];
		@$firstname = $_POST['firstname'];
		@$middlename = $_POST['middlename'];
		@$lastname = $_POST['lastname'];
		$name = $title." ".$firstname." ".$middlename." ".$lastname;
		$imageName =  $firstname.$middlename.$lastname;

		@$gender = $_POST['gender'];

		@$status = $_POST['status'];

		@$dob = $_POST['dob'];

		@$aadhar = $_POST['aadharNo'];

		@$mobile = $_POST['MobileNo'];

		@$phone = $_POST['phoneNo'];

		@$email = $_POST['email'];

		@$address = $_POST['address'];

		@$state = $_POST['state'];

		@$city = $_POST['city'];

		@$pincode = $_POST['pincode'];

		@$cur_comp = $_POST['CurrentCompany'];

		@$position = $_POST['position'];

		@$sector = $_POST['sector'];

		@$industry = $_POST['industry'];

		@$qualification = $_POST['qualification'];

		@$course = $_POST['course'];

		@$bio = $_POST['bio'];

		@$year = $_POST['year'];

		@$months = $_POST['months'];

		$prof_exp = $year."-".$months;

		@$no_proj = $_POST['no_proj'];

		@$skills = $_POST['skills'];

		@$proj_range = $_POST['minimum']."-".$_POST['maximum'];

		@$specialization = $_POST['specialization'];

		@$proj_type = $_POST['proj_types'];

		@$service_type = $_POST['service_type'];

		//----------------store checkboxes value-------------------

		if (isset($_POST['prof_type'])) {
			$checkStore = $_POST['prof_type']; 
		 }else{
		 	$checkStore = " ";
		 } 
		$prof_type = " ";
		$N = count($checkStore);
		for ($i=0; $i <$N ; $i++) { 
			$prof_type .= $checkStore[$i]." ";

		}
		//echo $prof_type;

		//----------------------------------------------------------

		 @$T_M_T = $_POST['r1']."-".$_POST['n1']." ".$_POST['r2']."-".$_POST['n2']." ".$_POST['r3']."-".$_POST['n3']." ".$_POST['r4']."-".$_POST['n4']." ".$_POST['r5']."-".$_POST['n5']." ".$_POST['r6']."-".$_POST['n6']." ".$_POST['r7']."-".$_POST['n7']." ".$_POST['r8']."-".$_POST['n8'];

		 @$L_M_T = $_POST['l1']."-".$_POST['ln1']." ".$_POST['l2']."-".$_POST['ln2']." ".$_POST['l3']."-".$_POST['ln3']." ".$_POST['l4']."-".$_POST['ln4']." ".$_POST['l5']."-".$_POST['ln5']." ".$_POST['l6']."-".$_POST['ln6']." ".$_POST['l7']."-".$_POST['ln7']." ".$_POST['l8']."-".$_POST['ln8'];

		 @$L_W_T = $_POST['w1']."-".$_POST['wn1']." ".$_POST['w2']."-".$_POST['wn2']." ".$_POST['w3']."-".$_POST['wn3']." ".$_POST['w4']."-".$_POST['wn4']." ".$_POST['w5']."-".$_POST['wn5']." ".$_POST['w6']."-".$_POST['wn6']." ".$_POST['w7']."-".$_POST['wn7']." ".$_POST['w8']."-".$_POST['wn8'];

		 @$LMTT = $_POST['m1']."-".$_POST['mn1']." ".$_POST['m2']."-".$_POST['mn2']." ".$_POST['m3']."-".$_POST['mn3']." ".$_POST['m4']."-".$_POST['mn4']." ".$_POST['m5']."-".$_POST['mn5']." ".$_POST['m6']."-".$_POST['mn6']." ".$_POST['m7']."-".$_POST['mn7']." ".$_POST['m8']."-".$_POST['mn8'];

		 @$no_clients = $_POST['no_clients'];

		 @$list_of_clients = $_POST['c1']."-".$_POST['cn1']." ".$_POST['c2']."-".$_POST['cn2']." ".$_POST['c3']."-".$_POST['cn3']." ".$_POST['c4']."-".$_POST['cn4']." ".$_POST['c5']."-".$_POST['cn5']." ".$_POST['c6']."-".$_POST['cn6']." ".$_POST['c7']."-".$_POST['cn7']." ".$_POST['c8']."-".$_POST['cn8']." ".$_POST['c9']."-".$_POST['cn9']." ".$_POST['c10']."-".$_POST['cn10'];

		 @$location_of_service = $_POST['TotalCities']."-".$_POST['cities'];

		 @$industries = $_POST['totalIndustries']."-".$_POST['industries'];

		//----------------store checkboxes value-------------------
		 if (isset($_POST['license'])) {
		 	$licenseStore = $_POST['license'];
		 }else{
		 	$licenseStore = " ";
		 }
		$license = " ";
		$A = count($licenseStore);
		for ($i=0; $i <$A ; $i++) { 
			$license.= $licenseStore[$i]." ";

		}
		@$otherLicenses = $_POST['otherLicenses'];
		$license." ".$otherLicenses;

		date_default_timezone_set('Asia/Kolkata');
		$entryTime = date('Y-m-d H:i:s');

		//----------------------------------------------------------


			//Apostophes removal

		$name = str_replace("'","''", $name);
		$address = str_replace("'","''", $address);
		$state = str_replace("'","''", $state);
		$city = str_replace("'","''", $city);
		$cur_comp = str_replace("'","''", $cur_comp);
		$position = str_replace("'","''", $position);
		$sector = str_replace("'","''", $sector);
		$industry = str_replace("'","''", $industry);
		$qualification = str_replace("'","''", $qualification);
		$course = str_replace("'","''", $course);
		$bio = str_replace("'","''", $bio);
		$skills = str_replace("'","''", $skills);
		$specialization = str_replace("'","''", $specialization);
		$proj_type = str_replace("'","''", $proj_type);
		$service_type = str_replace("'","''", $service_type);
		$L_M_T = str_replace("'","''", $L_M_T);
		$L_W_T = str_replace("'","''", $L_W_T);
		$T_M_T = str_replace("'","''", $T_M_T);
		$LMTT = str_replace("'","''", $LMTT);
		$list_of_clients = str_replace("'","''", $list_of_clients);
		$location_of_service = str_replace("'","''", $location_of_service);
		$industries = str_replace("'","''", $industries);
		




		//----------------------------------------------------------


		$error = "";
		$query="";

	if (isset($_POST['submit'])) {
		
		if ($_POST['title']=="Select") {
			$error .= "Title";
		}
		if(empty($_POST['firstname'])){
			$error .= " First Name ";
		}if(empty($_POST['lastname'])){
			$error .= " Last Name ";
		}if (empty($_POST['MobileNo'])) {
			$error .= " Mobile Number ";
		}
		else{

			if (isset($_FILES['photoUpload'])) {
						# code...
						$photoUrl = imageUpload("photoUpload","photograph",$mobile, $imageName);
						$aadhaarUrl =  imageUpload("aadhaarUpload","aadhaar",$mobile, $imageName);
					

			$query = "INSERT INTO contractor 
				(name, gender, marital_status, dob, aadhar, mobile, phone, email, address, state, city, pincode, cur_comp, position, sector, industry, qualification, course, bio, prof_exp, no_proj, skills, proj_range, specialization, proj_types, service_type, prof_type, L_M_T, L_W_T, T_M_T, LMTT, no_clients, list_of_clients, location_of_service, industries, license, photographUpload, aadharUpload, entryTime) 
				VALUES ('$name','$gender','$status','$dob','$aadhar','$mobile','$phone','$email','$address','$state','$city','$pincode','$cur_comp','$position','$sector','$industry','$qualification','$course','$bio','$prof_exp','$no_proj','$skills','$proj_range','$specialization','$proj_type','$service_type','$prof_type','$L_M_T','$L_W_T','$T_M_T','$LMTT','$no_clients','$list_of_clients','$location_of_service','$industries','$license','$photoUrl','$aadhaarUrl','$entryTime')";
				}

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
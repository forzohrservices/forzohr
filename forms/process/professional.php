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

                    

                    if (file_exists("uploads/professional/".$destination."/" . $_FILES[$tagName]["name"])) 
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
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/professional/".$destination."/" .$mobile.$name.".".$file_extension);
                        $imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/professional/".$destination."/" .$mobile.$name.".".$file_extension;
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

	//------------------------doc upload script--------------------

	function docUpload(string $tagName, string $destination, $mobile, $name){

		$validextensions = array( "docx", "pdf", "rtf", "doc");
		$temporary = explode(".", $_FILES[$tagName]["name"]);
		$file_extension = end($temporary);
		$docFullpath="";

	    if ((($_FILES[$tagName]["type"] == "application/docx") || ($_FILES[$tagName]["type"] == "application/pdf") || ($_FILES[$tagName]["type"] == "application/doc") || ($_FILES[$tagName]["type"] == "application/rtf") 
	    ) && ($_FILES[$tagName]["size"] < 2097152)//Approx. 2Mb files can be uploaded.
	    && in_array($file_extension, $validextensions)) {

	        if ($_FILES[$tagName]["error"] > 0) {
	             echo "Return Code: " . $_FILES[$tagName]["error"] . "<br/><br/>";
        } else 
            {

                    

                    if (file_exists("uploads/professional/".$destination."/" . $_FILES[$tagName]["name"])) 
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
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/professional/".$destination."/" .$mobile.$name.".".$file_extension);
                        $docFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/professional/".$destination."/" .$mobile.$name.".".$file_extension;
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
            	//$docFullpath="";
            return $docFullpath;
            
	}




	@$name = $_POST['title']." ".$_POST['firstName']." ".$_POST['middlename']." ".$_POST['lastname'];
	@$varName =$_POST['firstName'].$_POST['middlename'].$_POST['lastname'];

	@$gender = $_POST['gender'];

	@$status = $_POST['status'];

	@$dob = $_POST['dob'];

	@$AadharNo = $_POST['aadhar'];

	@$MobileNo = $_POST['mobile'];

	@$PhoneNo = $_POST['phone'];

	@$email = $_POST['email'];

	@$Address = $_POST['address'];

	@$State = $_POST['state'];

	@$City = $_POST['city'];

	@$Pincode = $_POST['pincode'];

	@$Qualification = $_POST['qualification'];

	@$Course = $_POST['course'];

	@$bio = $_POST['introduction'];

	@$profExp = $_POST['year']."-".$_POST['months'];

	@$hirenumber = $_POST['hirenumber'];


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

		$prof_type.= @$_POST['profother'];

	@$consultcharge = $_POST['consultcharge'];

	@$category = $_POST['category'];


	@$expertise = $_POST['sp1']."-".$_POST['sp2']."-".$_POST['sp3']."-".$_POST['sp4']."-".$_POST['sp5'];

	@$services = $_POST['s1']."-".$_POST['s2']."-".$_POST['s3']."-".$_POST['s4']."-".$_POST['s5'];

	@$noTeam = $_POST['noTeam'];

	@$teamDetails = $_POST['t1']."-".$_POST['tn1']."-".$_POST['t2']."-".$_POST['tn2']."-".$_POST['t3']."-".$_POST['tn3']."-".$_POST['t4']."-".$_POST['tn4'];

	@$locationService = $_POST['noOfcities']."-".$_POST['places'];


	if (isset($_POST['disclaimer'])) {
			$checkStore = $_POST['disclaimer']; 
		 }else{
		 	$checkStore = " ";
		 } 
		$disclaimer = " ";
		$N = count($checkStore);
		for ($i=0; $i <$N ; $i++) { 
			$disclaimer .= $checkStore[$i]." ";

		}

	date_default_timezone_set('Asia/Kolkata');
	$entryTime = date('Y-m-d H:i:s');

			if (isset($_FILES['photoUpload'])) {
					$photoUrl = imageUpload("photoUpload","photograph",$MobileNo, $varName);
				
				}else{
					$photoUrl =" ";

				}

			if(isset($_FILES['cvUpload'])){
				$aadhaarUrl =  imageUpload("aadhaarUpload","aadhaar",$MobileNo, $varName);
			}else {
				$aadhaarUrl = " ";
			}

			if(isset($_FILES['cvUpload'])){
				$cvUrl = docUpload("cvUpload","cv",$MobileNo,$varName);
			} else{
				$cvUrl = " ";
			}
					
//----------------------------------------------------------


			//apostrophe removal


	$name = str_replace("'","''", $name);
	$Address = str_replace("'","''", $Address);
	$State = str_replace("'","''", $State);
	$City = str_replace("'","''", $City);
	$Qualification = str_replace("'","''", $Qualification);
	$Course = str_replace("'","''", $Course);
	$bio = str_replace("'","''", $bio);
	$consultcharge = str_replace("'","''", $consultcharge);
	$expertise = str_replace("'","''", $expertise);
	$services = str_replace("'","''", $services);
	$teamDetails = str_replace("'","''", $teamDetails);
	$locationService = str_replace("'","''", $locationService);




//----------------------------------------------------------


		$error = "";
		$query="";

	if (isset($_POST['submit'])) {
		
		if ($_POST['title']=="Select") {
			$error .= "Title";
		}
		if(empty($_POST['firstName'])){
			$error .= " First Name ";
		}if(empty($_POST['lastname'])){
			$error .= " Last Name ";
		}if (empty($_POST['mobile'])) {
			$error .= " Mobile Number ";
		}
		else{

	

			$query = "INSERT INTO professional( name, gender, status, aadhar, mobile, phone, dob, email, address, state, city, pincode, qualification, course, bio, pro_exp, hired, pro_type, consultation, category, expertise, services, teamNo, teamDetails, location, photoUrl, cvUrl, aadharUr, disclaimer, entryTime) VALUES ('$name','$gender','$status','$AadharNo','$MobileNo','$PhoneNo','$dob','$email','$Address','$State','$City','$Pincode','$Qualification','$Course','$bio','profExp','$hirenumber','$prof_type','consultcharge','$category','$expertise','$services','$noTeam','$teamDetails','locationService','$photoUrl','$cvUrl','$aadhaarUrl','$disclaimer','$entryTime')";
				

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
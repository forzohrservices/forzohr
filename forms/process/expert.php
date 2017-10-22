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

                    

                    if (file_exists("uploads/expert/".$destination."/" . $_FILES[$tagName]["name"])) 
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
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/expert/".$destination."/" .$mobile.$name.".".$file_extension);
                        $imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/expert/".$destination."/" .$mobile.$name.".".$file_extension;
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
		$imgFullpath="";

	    if ((($_FILES[$tagName]["type"] == "application/docx") || ($_FILES[$tagName]["type"] == "application/pdf") || ($_FILES[$tagName]["type"] == "application/doc") || ($_FILES[$tagName]["type"] == "application/rtf") 
	    ) && ($_FILES[$tagName]["size"] < 2097152)//Approx. 2Mb files can be uploaded.
	    && in_array($file_extension, $validextensions)) {

	        if ($_FILES[$tagName]["error"] > 0) {
	             echo "Return Code: " . $_FILES[$tagName]["error"] . "<br/><br/>";
        } else 
            {

                    

                    if (file_exists("uploads/expert/".$destination."/" . $_FILES[$tagName]["name"])) 
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
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/expert/".$destination."/" .$mobile.$name.".".$file_extension);
                        $docFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/expert/".$destination."/" .$mobile.$name.".".$file_extension;
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

            return $docFullpath;
            
	}


	@$choice = $_POST['radio'];

	@$name = $_POST['title']." ".$_POST['firstName']." ".$_POST['MiddleName']." ".$_POST['LastName'];
	@$varName =$_POST['firstName'].$_POST['MiddleName'].$_POST['LastName'];
	@$gender = $_POST['gender'];

	@$status = $_POST['status'];

	@$dob = $_POST['dob'];

	@$AadharNo = $_POST['AadharNo'];

	@$MobileNo = $_POST['MobileNo'];

	@$PhoneNo = $_POST['PhoneNo'];

	@$email = $_POST['email'];

	@$Address = $_POST['Address'];

	@$State = $_POST['State'];

	@$City = $_POST['City'];

	@$Pincode = $_POST['Pincode'];

	@$CurrentCompany = $_POST['CurrentCompany'];

	@$Position = $_POST['Position'];

	@$Sector = $_POST['Sector'];

	@$Industry = $_POST['Industry'];

	@$Qualification = $_POST['Qualification'];

	@$Course = $_POST['Course'];

	@$bio = $_POST['bio'];

	@$workExp = $_POST['year']."-".$_POST['months']."-".$_POST['charge'];

	@$skill = $_POST['Skill'];

	@$proj1 = $_POST['sub1']."-".$_POST['des1']."-".$_POST['cat1'];

	@$proj2 = $_POST['sub2']."-".$_POST['des2']."-".$_POST['cat2'];

	@$certifications = "No. of certificates - ".$_POST['noCertificates']." ".$_POST['certificateName1']."-".$_POST['year1']." ".$_POST['certificateName2']."-".$_POST['year2']." ".$_POST['certificateName3']."-".$_POST['year3']." ".$_POST['certificateName4']."-".$_POST['year4'];

	@$expertCategory = $_POST['expertCategory'];

	@$consulting = $_POST['consulting'];

	@$Industries = $_POST['Industries'];

	@$expertise = $_POST['expertise'];

	@$functionalArea = $_POST['functionalArea'];

	@$proj_type = $_POST['proj_type'];

	@$noExecutedPro = $_POST['noExecutedPro'];

	@$executedProject = $_POST['e1']."-".$_POST['en1']."-".$_POST['e2']."-".$_POST['en2']."-".$_POST['e3']."-".$_POST['en3']."-".$_POST['e4']."-".$_POST['en4'];

	@$noLiveProject = $_POST['noLiveProject'];

	@$liveProject = $_POST['p1']."-".$_POST['pn1']."-".$_POST['p2']."-".$_POST['pn2']."-".$_POST['p3']."-".$_POST['pn3']."-".$_POST['p4']."-".$_POST['pn4'];

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


//----------------------------------------------------------


		$error = "";
		$query="";

	if (isset($_POST['submit'])) {
		
		if ($_POST['title']=="Select") {
			$error .= "Title";
		}
		if(empty($_POST['firstName'])){
			$error .= " First Name ";
		}if(empty($_POST['LastName'])){
			$error .= " Last Name ";
		}if (empty($_POST['MobileNo'])) {
			$error .= " Mobile Number ";
		}
		else{

	

			$query = "INSERT INTO expert( choice, name, gender, status, dob, aadhar, mobile, phone, email, address, state, city, pincode, curComp, position, sector, industry, qualification, course, bio, workExp, skills, proj1, proj2, certifications, expertCategory, consulting, industries, expertise, functionalArea, proj_type, noExecutedPro, executedProject, noLiveProject, liveProject, noTeam, teamDetails, locationService, photographLink, cvLink, aadharLink, disclaimer, entryTime) VALUES ('$choice','$name','$gender','$status','$dob','$AadharNo','$MobileNo','$PhoneNo','$email','$Address','$State','$City','$Pincode','$CurrentCompany','$Position','$Sector','$Industry','$Qualification','$Course','$bio','$workExp','$skill','$proj1','$proj2','$certifications','$expertCategory','$consulting','$Industries','$expertise','functionalArea','$proj_type','$noExecutedPro','$executedProject','$noLiveProject','$liveProject','$noTeam','$teamDetails','$locationService','$photoUrl','$aadhaarUrl','$cvUrl','$disclaimer','$entryTime')";
				

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
				  echo "Error: " . $query . "<br>" . $conn->error;

			   
			}


			$conn->close();   

	}





?>
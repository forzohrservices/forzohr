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

                    

                    if (file_exists("uploads/job-seekers/".$destination."/" . $_FILES[$tagName]["name"])) 
                    {
                        echo( $_FILES[$tagName]["name"] . " <b>already exists.</b> ");
                    } 
                    else 
                    {   
                        //echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
                        //echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
                        //echo "<b>Type:</b> " . $_FILES[$tagName]["type"] . "<br>";
                        //echo "<b>Size:</b>  " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                        //echo "<b>Temp file:</b> " . $_FILES[$tagName]["tmp_name"] . "<br>";
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/job-seekers/".$destination."/" .$mobile.$name.".".$file_extension);
                        $imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/job-seekers/".$destination."/" .$mobile.$name.".".$file_extension;
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

	    if ((($_FILES[$tagName]["type"] == "application/docx") || ($_FILES[$tagName]["type"] == "application/msword") || ($_FILES[$tagName]["type"] == "application/pdf") || ($_FILES[$tagName]["type"] == "application/doc") || ($_FILES[$tagName]["type"] == "application/rtf") 
	    ) && ($_FILES[$tagName]["size"] < 2097152)//Approx. 2Mb files can be uploaded.
	    && in_array($file_extension, $validextensions)) {

	        if ($_FILES[$tagName]["error"] > 0) {
	             echo "Return Code: " . $_FILES[$tagName]["error"] . "<br/><br/>";
        } else 
            {

                    

                    if (file_exists("uploads/job-seekers/".$destination."/" . $_FILES[$tagName]["name"])) 
                    {
                        echo( $_FILES[$tagName]["name"] . " <b>already exists.</b> ");
                    } 
                    else 
                    {   
                        echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
                        echo "<br/><b>File Name:</b> " . $_FILES[$tagName]["name"] . "<br>";
                        echo "<b>Type:</b> " . $_FILES[$tagName]["type"] . "<br>";
                        echo "<b>Size:</b> " . ($_FILES[$tagName]["size"] / 1024) . " kB<br>";
                        echo "<b>Temp file:</b> " . $_FILES[$tagName]["tmp_name"] . "<br>";
                        move_uploaded_file($_FILES[$tagName]["tmp_name"], "uploads/job-seekers/".$destination."/" .$mobile.$name.".".$file_extension);
                        $docFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/job-seekers/".$destination."/" .$mobile.$name.".".$file_extension;
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

    @$q1 = $_POST['q1'];

    @$c1 = $_POST['c1'];

    @$py1 = $_POST['py1'];

    @$p1 = $_POST['p1'];

    @$b1 = $_POST['b1'];

    @$q2 = $_POST['q2'];

    @$c2 = $_POST['c2'];

    @$py2 = $_POST['py2'];

    @$p2 = $_POST['p2'];

    @$b2 = $_POST['b2'];

    @$q3 = $_POST['q3'];

    @$c3 = $_POST['c3'];

    @$py3 = $_POST['py3'];

    @$p3 = $_POST['p3'];

    @$b3 = $_POST['b3'];

    @$q4 = $_POST['q4'];

    @$c4 = $_POST['c4'];

    @$py4 = $_POST['py4'];

    @$p4 = $_POST['p4'];

    @$b4 = $_POST['b4'];

    @$curricular = $_POST['curricular'];

    @$itskill = $_POST['itskill'];

    @$lang = $_POST['lang'];

    @$fresher = $_POST['fresher'];

    @$work_exp = $_POST['Expyear']."-".$_POST['Expmonth'];

    @$cur_salary = $_POST['sal']." ".$_POST['cur_sal'];

    @$exp_salary = $_POST['esal']." ".$_POST['exp_sal'];

    @$Lcom_name = $_POST['Lcname'];

    @$Ljob_title = $_POST['Ljob'];

    @$Lrole = $_POST['Lrole'];

    @$Ldept = $_POST['Ldiv'];

    @$Lindustry = $_POST['Lindustry'];

    @$Lsector = $_POST['Lsector'];

    @$Ljob_detail = $_POST['Ljobdetail'];

    @$Ljob_date = $_POST['Lfrom']."-".$_POST['LtoCurrent'];

    @$Pcom_name = $_POST['Pcname'];

    @$Pjob_title = $_POST['Pjob'];

    @$Prole = $_POST['Prole'];

    @$Pdept = $_POST['Pdiv'];

    @$Pindustry = $_POST['Pindustry'];

    @$Psector = $_POST['Psector'];

    @$Pjob_details = $_POST['Pjobdetails'];

    @$Pjob_date = $_POST['Pfrom']."-".$_POST['Ptocurrent'];


        if (isset($_POST['jobtype'])) {
            $checkStore = $_POST['jobtype']; 
         }else{
            $checkStore = " ";
         } 
        $jobtype = " ";
        $N = count($checkStore);
        for ($i=0; $i <$N ; $i++) { 
            $jobtype .= $checkStore[$i]." ";

        }



        if (isset($_POST['shift'])) {
            $checkStore = $_POST['shift']; 
         }else{
            $checkStore = " ";
         } 
        $shift = " ";
        $N = count($checkStore);
        for ($i=0; $i <$N ; $i++) { 
            $shift .= $checkStore[$i]." ";

        }

        @$W_role = $_POST['W_role'];

        @$W_dept = $_POST['W_dept'];

        @$W_industry = $_POST['W_industry'];

        @$W_sector =  $_POST['W_sector'];

        @$W_rel_skill = $_POST['W_rel_skill'];

        @$W_location = $_POST['W_location'];

        @$pan = $_POST['pan'];

        @$drive = $_POST['drive'];

        @$voter = $_POST['voter'];

        @$passport = $_POST['passport'];

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

//----------------------------------------------------------


            //apostrophe removal

    $name = str_replace("'","''", $name);
    $Address = str_replace("'","''", $Address);
    $State = str_replace("'","''", $State);
    $City = str_replace("'","''", $City);
    $q1 = str_replace("'","''", $q1);
    $c1 = str_replace("'","''", $c1);
    $py1 = str_replace("'","''", $py1);
    $p1 = str_replace("'","''", $p1);
    $b1 = str_replace("'","''", $b1);
    $q2 = str_replace("'","''", $q2);
    $c2 = str_replace("'","''", $c2);
    $py2 = str_replace("'","''", $py2);
    $p2 = str_replace("'","''", $p2);
    $b2 = str_replace("'","''", $b2);
    $q3 = str_replace("'","''", $q3);
    $c3 = str_replace("'","''", $c3);
    $py3 = str_replace("'","''", $py3);
    $p3 = str_replace("'","''", $p3);
    $b3 = str_replace("'","''", $b3);
    $q4 = str_replace("'","''", $q4);
    $c4 = str_replace("'","''", $c4);
    $py4 = str_replace("'","''", $py4);
    $p4 = str_replace("'","''", $p4);
    $b4 = str_replace("'","''", $b4);
    $curricular = str_replace("'","''", $curricular);
    $itskill = str_replace("'","''", $itskill);
    $lang = str_replace("'","''", $lang);
    $Lcom_name = str_replace("'","''", $Lcom_name);
    $Ljob_title = str_replace("'","''", $Ljob_title);
    $Lrole = str_replace("'","''", $Lrole);
    $Ldept = str_replace("'","''", $Ldept);
    $Lindustry = str_replace("'","''", $Lindustry);
    $Lsector = str_replace("'","''", $Lsector);
    $Ljob_detail = str_replace("'","''", $Ljob_detail);
    $Pcom_name = str_replace("'","''", $Pcom_name);
    $Pjob_title = str_replace("'","''", $Pjob_title);
    $Prole = str_replace("'","''", $Prole);
    $Pdept = str_replace("'","''", $Pdept);
    $Pindustry = str_replace("'","''", $Pindustry);
    $Psector = str_replace("'","''", $Psector);
    $Pjob_details = str_replace("'","''", $Pjob_details);
    $W_role = str_replace("'","''", $W_role);
    $W_dept = str_replace("'","''", $W_dept);
    $W_industry = str_replace("'","''", $W_industry);
    $W_sector =  str_replace("'","''", $W_sector);
    $W_rel_skill = str_replace("'","''", $W_rel_skill);
    $W_location = str_replace("'","''", $W_location);




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

    

            $query = "INSERT INTO jobseekers( name, gender, status, dob, aadhar, mobile, phone, email, address, state, city, pincode, qualification1, college1, year1, percentage1, board1, qualification2, college2, year2, percentage2, board2, qualification3, college3, year3, percentage3, board3, qualification4, college4, year4, percentage4, board4, curriculum, it_skills, languages, fresher, work_exp, cur_salary, exp_salary, Lcom_name, Ljob_title, Lrole, Ldept, Lindustry, Lsector, Ljob_details, Ljob_date, Pcomp_name, Pjob_title, Prole, pdept, Pindustry, Psector, Pjob_details, Pjob_date, job_type, shift_time, work_role, work_dept, work_industry, work_sector, skills, preferred_location, pancard, driving_license, voter_id, passport, photoUrl, cvUrl, aadharUrl, disclaimer, entryTime) VALUES ('$name','$gender','$status','$dob','$AadharNo','$MobileNo','$PhoneNo','$email','$Address','$State','$City','$Pincode','$q1','$c1','$py1','$p1','$b1','$q2','$c2','$py2','$p2','$b2','$q3','$c3','$py3','$p3','$b3','$q4','$c4','$py4','$p4','$b4','$curricular','$itskill','$lang','$fresher','$work_exp','$cur_salary','$exp_salary','$Lcom_name','$Ljob_title','$Lrole','$Ldept','$Lindustry','$Lsector','$Ljob_detail','$Ljob_date','$Pcom_name','$Pjob_title','$Prole','$Pdept','$Pindustry','$Psector','$Pjob_details','$Pjob_date','$jobtype','$shift','$W_role','$W_dept','$W_industry','$W_sector','$W_rel_skill','$W_location','$pan','$drive','$voter','$passport','$photoUrl','$cvUrl','$aadhaarUrl','$disclaimer','$entryTime')";
                

        }


           
          if ($conn->multi_query($query) === TRUE) {

                echo '
                    <div class="container mt-5">
                        <div class="alert alert-success" role="alert">
                          Form Submitted successfully
                        </div>
                    </div> 
                ';             
            }else {
                echo'
                    <div class="container mt-5">
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

    
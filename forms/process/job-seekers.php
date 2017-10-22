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
		$docFullpath="";

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
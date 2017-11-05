<?php

        $date = Date("j/m/Y/H/i/s", Time());
        echo($date);
        $allowedExts = array("doc","docx");
        $extension = array_pop(explode(".", $_FILES["file"]["name"]));

        if ((($_FILES["file"]["type"] == "application/msword"))
        && ($_FILES["file"]["size"] < 2000000)
        && in_array($extension, $allowedExts))
        {
        if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {    
            echo "hello";
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("uploaded_papers/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . " already exists. ";
          }
        else
          {
            //changed file name 
            $file_name = time()."_".$_FILES['file']['name'];
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "uploads/" .$file_name);
          echo "Stored in: " . "uploaded/" .$file_name;
          }
          }
          }                                          
          else
          {
          echo "Invalid file";
          }
?> 
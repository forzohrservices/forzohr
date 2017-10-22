<?php
    $error = ""; $successMessage = "";
    if($_POST)
    {
            if(!$_POST["inputFname"]){
                $error .= "Enter first name.<br>";
            }
            if(!$_POST["inputLname"]){
                $error .= "Enter last name.<br>";
            }
            if(!$_POST["email"]){
                $error .= "An email address is required.<br>";
            }
            if(!$_POST["content"]){
                $error .= "The content address is required.<br>";
            }
            if(!$_POST["subject"]){
                $error .= "The subject address is required.<br>";
            }
            if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
              $error .= "Invalid email format.<br>";
                }
            if($error != "")
                {
                        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
                }
                else  {
                    $inputFname= $_POST['inputFname'];
                    $inputLname= $_POST['inputLname'];
                    $emailTo = "amitraj.1996@gmail.com"; //Info@forzohr.com
                    $subject = $_POST['subject'];
                    //$content = "<strong>Name:</strong>" .($_POST['inputFname']). ($_POST['inputLname']);
                    //$content = $_POST['content'];
                    $content = "Name :".$inputFname." ".$inputLname." \n \n ".$_POST['content']."\n \n".$_POST['subject'];
                    $headers ="From: ".$_POST['email'];//.'<'.$_POST['inputFname'].$_POST['inputLname'];
                    if(mail($emailTo, $subject, $content, $headers)) {
                        $successMessage = '<div class="alert alert-success" role="alert">
                            We\'ll get back to you ASAP!
                            </div>';
                        }
                    else
                    {
                        $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later </strong></p></div>';
                    }
                    //echo $inputFname." ".$inputLname." ".$subject." ".$headers." ".$content;
                }
    }
 ?>


<!DOCTYPE html>
<html lang="en">


  <head>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">



  </head>

  <body>



      <div class="container">


    


<div class="row mt-3">

<div class="col-md-5">

    <form method="post">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputFname" class="col-form-label">First Name</label>
                <input type="Name" class="form-control" id="inputFname" name="inputFname" placeholder="First Name">
              </div>

              <div class="form-group col-md-6">
                <label for="inputLname" class="col-form-label">Last Name</label>
                <input type="Name" class="form-control" id="inputLname" name="inputLname" placeholder="Last Name">
              </div>
            </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email-id">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="subject">Contact Number</label>
          <input type="text" class="form-control" id="subject" maxlength="10" name="subject">
    </div>


  <div class="form-group">
    <label for="content">How can we help you?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </div>
  <div id="error"><?php echo $error.$successMessage; ?></div>
  <button id="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



</div>
</div>
        

          
          


          

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, thens Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



    <script type="text/javascript">
    $("form").submit(function (e) {
var error = "";
if ($("#inputFname").val() == ""){
    error += "First name required.<br>";
}
if ($("#inputLname").val() == ""){
    error += "Last name required.<br>";
}
if ($("#email").val() == ""){
    error += "The email address required.<br>";
}
if ($("#subject").val() == ""){
    error += "The Contact Number is required.<br>";
}
if ($("#content").val() == ""){
    error += "The content field required.";
}
if(error != "") {
$("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
return false;
}
else {
return true;
}
});
    </script>

  </body>
      
</html>
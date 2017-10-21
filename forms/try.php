<?php
 	if (isset($_POST['formSubmit'])) {
 		 $aDoor = $_POST['formDoor'];
 
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  
 	}
?>

<form method="post">

Which buildings do you want access to?<br />
<input type="checkbox" name="formDoor[]" value="Acorn Building" />Acorn Building<br />
<input type="checkbox" name="formDoor[]" value="Brown Hall" />Brown Hall<br />
<input type="checkbox" name="formDoor[]" value="Carnegie Complex" />Carnegie Complex<br />
<input type="checkbox" name="formDoor[]" value="Drake Commons" />Drake Commons<br />
<input type="checkbox" name="formDoor[]" value="Elliot House" />Elliot House

<input type="submit" name="formSubmit" value="Submit" />

</form>
  
<?php

	$name = $email= $gender= $DOB= $Degree= $BG= $Photo = "";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
	echo $name;
    // check if name only contains letters and whitespace
  
    }
	if(empty($_post["email"){
		 $emailErr = "email is required";
  } else {
    $email= $_POST["email"];
	echo $email ;
  }
	 
    
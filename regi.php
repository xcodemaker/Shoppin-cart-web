<?php
include "connect.php";
$fname=$_POST["Firstname"];
$lname=$_POST["Lastname"];
$password=md5($_POST["Password"]);
$mobile=$_POST["Mobile"];
$repassword=$_POST["Confirm_Password"];
 $name="/^[a-zA-Z ]*$/";
 $number="/^[0-9]+$/";
$email = $_POST["Email"];
 if(strcmp($_POST["Firstname"],"Firstname")&&strcmp($_POST["Lastname"],"Lastname")&&strcmp($_POST["Email"],"Email")&&strcmp($_POST["Password"],"Password")&&strcmp($_POST["Address1"],"Address1")){
    		
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format <br>"; 
      echo $emailErr ;
      exit();
    }
    if(!preg_match($name,$fname)){
    	echo "This $fname is not valid <br>";
    	exit();
    }
    if(!preg_match($name,$lname)){
    	echo "This $lname is not valid <br>";
    	exit();
    }
    if(strlen($password)<8){
    	echo "password is weak! <br>";
    	exit();
    }
    if($password!=$repassword){
    	echo "password is not match <br>";
    	exit();
    }
    if(strcmp($_POST["Mobile"],"Mobile")){
    if(!preg_match($number,$mobile)){
    	echo "Mobile number $mobile is not valid <br>";
    	exit();
    }}
     $sql = "INSERT INTO user_info (first_name, last_name, email,password,mobile,address1,address2)
 VALUES ('".$_POST["Firstname"]."','". $_POST["Lastname"]."','". $_POST["Email"]."','".$password."','". $_POST["Mobile"]."','". $_POST["Address1"]."','". $_POST["Address2"]."')";
  if ($conn->query($sql) === TRUE) {
 
 	echo "<div class='row'>
<div class='col-md-2'></div>
	<div class='col-md-8'>
	<div class='alert alert-warning alert-dismissable' style='margin:2%;'>
    					<a href='#' class='close' data-dismis='alert' aria-label='close'>&times;</a><b>successfuly signup.....!</b>
    		</div>
    		</div>
<div class='col-md-2'></div>";

 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 }else{
 	echo "<div class='alert alert-warning alert-dismissable'>
    					<a href='#' class='close' data-dismis='alert' aria-label='close'>X</a><b>Please Fill all fields.....!</b>
    		</div>";
    		exit();
    
}

 ?>
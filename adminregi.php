<?php
include "connect.php";
//echo "hey";
$fname=$_POST["Firstname"];
$lname=$_POST["Lastname"];
$password=md5($_POST["Password"]);
$mobile=$_POST["Mobile"];
$repassword=md5($_POST["Confirm_Password"]);
 $name="/^[a-zA-Z ]*$/";
 $number="/^[0-9]+$/";
$email = $_POST["Email"];
$type=$_POST["type"];
 if(strcmp($_POST["Firstname"],"Firstname")&&strcmp($_POST["Lastname"],"Lastname")&&strcmp($_POST["Email"],"Email")&&strcmp($_POST["Password"],"Password")&&strcmp($_POST["Address"],"Address")){
    		
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "
      <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    Invalid email format.</p>
            </div>"; 
      echo $emailErr ;
      exit();
    }
    if(!preg_match($name,$fname)){
    	echo "
        <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    This $fname is not valid.</p>
            </div>";
    	exit();
    }
    if(!preg_match($name,$lname)){
    	echo "
        <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    This $lname is not valid.</p>
            </div>";
    	exit();
    }
    if(strlen($password)<8){
    	echo "
        <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    password is weak! .</p>
            </div>";
    	exit();
    }
    if($password!=$repassword){
    	echo "
        <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    password is not match .</p>
            </div>";
    	exit();
    }
    if(strcmp($_POST["Mobile"],"Mobile")){
    if(!preg_match($number,$mobile)){
    	echo "
        <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    Mobile number $mobile is not valid  .</p>
            </div>";
    	exit();
    }}
    $sqlcheck="select * from user_info where email='".$email."' ";
    $run_query=mysqli_query($conn,$sqlcheck);
    $count=mysqli_num_rows($run_query);
    if ($count>0) {
     // if ($conn->query($sqlcheck) === TRUE) {
 
    echo "
    <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    email is already exists. try another one...!</p>
            </div>";
    exit();
    } 
     $sql = "INSERT INTO user_info (first_name, last_name, email,password,mobile,address1,type)
 VALUES ('".$_POST["Firstname"]."','". $_POST["Lastname"]."','". $_POST["Email"]."','".$password."','". $_POST["Mobile"]."','". $_POST["Address"]."','". $_POST["type"]."')";
  if ($conn->query($sql) === TRUE) {
 
 	echo "truesignup";

 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 }else{
 	echo "
    <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Error Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    Please Fill all fields.....!</p>
            </div>
            ";
    		exit();
    
}

 ?>
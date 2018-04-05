<?php
include "connect.php";
session_start();
if(isset($_POST["userLogin"])){
	// echo $_POST["userEmail"];
	$email=mysqli_real_escape_string($conn,$_POST["userEmail"]);
	$password=md5($_POST["userPassword"]);

	$user_query="select * from user_info where email ='$email' AND password ='$password'";
	$run_query=mysqli_query($conn,$user_query);
	 $count=mysqli_num_rows($run_query);
	 
	if($count==1){
		$row=mysqli_fetch_array($run_query);
			$_SESSION["uid"]=$row["user_id"];
			$_SESSION["name"]=$row["first_name"];
			echo "truelogin";
		
	
	}else{
		echo "incorect password or user name...please try again!";
	}
}
?>
<?php
session_start();
include "connect.php";
  
if(isset($_POST["details"])){
	$category_query="select * from categories";
	$run_query=mysqli_query($conn,$category_query);
	if(mysqli_num_rows($run_query)>0){
		while ($row=mysqli_fetch_array($run_query)) {
			$cid=$row["cat_id"];
			$cat_name=$row["cat_title"];
			echo "<a href='#0' value='$cid' id='select_category' class='list-group-item' cid='{$cid}'  >$cat_name</a>";
		}
	}
}
if(isset($_POST["get_details"])){
	$_SESSION["p_id"]=$_POST["pro_id"];
	$sql = "INSERT INTO wishlist (pro_id,user_id)
 VALUES ('".$_POST["pro_id"]."','". $_SESSION["uid"]."')";
	if ($conn->query($sql) === TRUE) {
		echo "success";
	}
}

	
if(isset($_SESSION["p_id"])&&isset($_POST["load"])){
	$p_id=$_SESSION["p_id"];
	$sql="select * from products where product_id='$p_id'";
	$run_query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($run_query)>0){
		while ($row=mysqli_fetch_array($run_query)) {
 $product_id=$row["product_id"];
 $product_cat=$row["product_cat"];
 $product_brand=$row["product_brand"];
 $product_title=$row["product_title"];
 $product_price=$row["product_price"];
 $product_desc=$row["product_desc"];
 $product_image=$row["product_image"];
 $product_keywords=$row["product_keywords"];
 $product_price_del=$product_price+$product_price*5/100;
  $products=<<<DELIMITER
   <img class="img-responsive" src="images/{$product_image}" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">Rs.{$product_price}</h4>
                        <h4><a href="#">{$product_title}</a>
                        </h4>
                        <p>{$product_desc}</p>
                    </div>
                    <lable>product id :</lable>
                    <input type='text' readonly value='{$product_id}' id='product_id'>
DELIMITER;

			echo $products;
}
}
}
if(isset($_POST["commentinput"])){
	echo "hello";
 $date=date("Y-m-d H:i:s");

	$sql = "INSERT INTO comments (pro_id,user_id,date,comment)
 VALUES ('".$_POST["p_id"]."','".$_SESSION["uid"]."','".$date."','".$_POST["comments"]."')";
	if ($conn->query($sql) === TRUE) {
		echo "success";
	}
}
if(isset($_POST["ready"])){
	// echo "hellonk";
	$firstname="";
	$lastname="";
	$p_id=$_SESSION["p_id"];
	$sql="select * from comments where pro_id='$p_id'";
	$run_query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($run_query)>0){
		// echo "dhammika";
		while ($row=mysqli_fetch_array($run_query)) {
 // $product_id=$row["product_id"];
 $user_id=$row["user_id"];
 $comment=$row["comment"];
 $date=$row["date"];
 $sqlname="select first_name,last_name from user_info where user_id='$user_id'";
 $run_query1=mysqli_query($conn,$sqlname);
 if($run_query1){
		$row1=mysqli_fetch_assoc($run_query1);
 $firstname=$row1["first_name"];
 $lastname=$row1["last_name"];
}
 
  $products=<<<DELIMITER
   <hr>

                    <div class="row">
                        <div class="col-md-12">
                        <h4 style='color:blue;'> {$firstname} {$lastname}</h4>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                           
                            <span class="pull-right">Date : {$date}</span>
                            <p>{$comment}</p>
                        </div>
                    </div>
DELIMITER;

			echo $products;
}
}
}
?>
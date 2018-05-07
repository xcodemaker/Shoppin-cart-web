<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ShopeMe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "success";
}


 $product_id=$_POST["product_id"];
 $product_cat=$_POST["product_cat"];
 $Product_brand=$_POST["Product_brand"];
 $product_title=$_POST["product_title"];
 $product_price=$_POST["product_price"];
 $product_desc=$_POST["product_desc"];
 $product_image=$_POST["product_image"];
 $product_keywords=$_POST["product_keywords"];
 echo $product_id;
	 $sql = "INSERT INTO products (product_id, product_cat, Product_brand,product_title,product_price,product_desc,product_image,product_keywords)
 VALUES ('".$_POST["product_id"]."','". $_POST["product_cat"]."','". $_POST["Product_brand"]."','". $_POST["product_title"]."','". $_POST["product_price"]."','". $_POST["product_desc"]."','". $_POST["product_image"]."','".$_POST["product_keywords"]."')";

 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
	

?>
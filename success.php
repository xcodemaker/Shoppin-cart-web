<?php 
session_start();
include "connect.php";


$itemTransaction   = $_REQUEST['tx']; // Paypal transaction ID
$itemPrice         = $_REQUEST['amt']; // Paypal received amount
$itemCurrency      = $_REQUEST['cc']; // Paypal received currency type
$uid      = $_REQUEST['cm'];
$p_status=$_REQUEST['st'];
  //echo "success1";
$sql="select * from cart where user_id='$uid'";
 $run_query=mysqli_query($conn,$sql);
	

	if(mysqli_num_rows($run_query)>0){
		while ($row=mysqli_fetch_array($run_query)) {
			$pid=$row['p_id'];
			$pname=$row['product_title'];
			$p_price=$row['price'];
			$p_quantity=$row['qty'];
			$amount=$row['total_amount'];
$sql2="INSERT INTO customer_order (uid,pid,p_name,p_price,p_quantity,p_status,trx_id)
 VALUES ('".$uid."','". $pid."','". $pname."','".$p_price."','". $p_quantity."','". $p_status."','".$itemTransaction."')";
  if ($conn->query($sql2) === TRUE) {
  	//echo "success2";
  }
  $sql3="INSERT INTO received_payments (uid,pid,amount,trx_id)
 VALUES ('".$uid."','". $pid."','". $amount."','".$itemTransaction."')";
  if ($conn->query($sql3) === TRUE) {
  	//echo "success3";
  }
$sql4="update products set total_qty=(total_qty-$p_quantity) where product_id='$pid'";
if ($conn->query($sql4) === TRUE) {
  	//echo "success4";
  }
		}
	}


  $sql5="delete from cart where user_id='$uid'";
  $run_query=mysqli_query($conn,$sql5);
 if ($conn->query($sql3) === TRUE) {

header("location:index.php");
//echo "success5";
	}


?>
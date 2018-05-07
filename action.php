<?php
session_start();
include "connect.php";
  
if(isset($_POST["category"])){
	$category_query="select * from categories";
	$run_query=mysqli_query($conn,$category_query);
	echo "<ul class='select_category'>";
	if(mysqli_num_rows($run_query)>0){
		while ($row=mysqli_fetch_array($run_query)) {
			$cid=$row["cat_id"];
			$cat_name=$row["cat_title"];
			echo "<li><a href='#0' value='$cid' id='select_category'  cid='{$cid}'  >$cat_name</a></li>";
		}
		echo "</ul> ";
	}
}
if(isset($_POST["product"])){
	$category_query="select * from products order by rand()";
	$run_query=mysqli_query($conn,$category_query);
	

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
 $product_qtry=$row["total_qty"];
 $product_price_del=$product_price+$product_price*5/100;
 if($product_qtry>0){
			 $products=<<<DELIMITER
			 				<div class="col-md-3 ">
								<div class="col-m" style="height:70%; margin-bottom:30px;">								
									<a href="#" data-toggle="modal"  id="get_details" pro_id="{$product_id}" data-target="#myModal1" class="offer-img">
										<img src="images/{$product_image}"  class="img-responsive btn" alt="" style="width: 200px;height:170px;">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women" style="overflow:hidden; height:20px;">
											<h6><a href="single.html">{$product_title}</a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>Rs.{$product_price_del}</label><em class="item_price">RS.{$product_price}</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button id="product"  pid="{$product_id}" class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
DELIMITER;

			echo $products;
		}
	}
		
}
}
if(isset($_POST["search"])||isset($_POST["get_selected_category"])){
	
	if(isset($_POST["get_selected_category"])){
		$id=$_POST["cat_id"];
		$sql="select * from products where product_cat='$id'";
	}else{
		$keyword=$_POST["keyword"];
		$sql="select * from products where product_keywords like '%$keyword%'";
	}
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
  $product_qtry=$row["total_qty"];
 if($product_qtry>0){
			 $products=<<<DELIMITER
			 				<div class="col-md-3 " >
								<div class="col-m" style="height:70%; margin-bottom:30px;">								
									<a href="#" data-toggle="modal"  id="get_details" pro_id="{$product_id}" data-target="#myModal1" class="offer-img">
										<img src="images/{$product_image}" class="img-responsive" alt="" style="width: 200px;height:170px;">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women" style="overflow:hidden; height:20px;">
											<h6><a href="single.html">{$product_title}</a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>Rs.{$product_price_del}</label><em class="item_price">Rs.{$product_price}</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button id="product" pid="{$product_id}" class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
DELIMITER;

			echo $products;
		}
	}
		
}
}

if (isset($_POST["addToproduct"])) {
	$p_id=$_POST["proId"];  
	$user_id=$_SESSION["uid"];

	$sql="select * from cart where p_id='$p_id' and user_id='$user_id'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	if ($count>0) {
		
		echo 
    		"<div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    product is already added into the cart continue shopping...!</p>
            </div>";
		}else{
			if(!empty($_SESSION["uid"])){
			$sql="select * from products where product_id='$p_id'";
			$run_query=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($run_query);
			$id=$row["product_id"];
			$pro_name=$row["product_title"];
			$pro_image=$row["product_image"];
			$pro_price=$row["product_price"];
			$sql="INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price');";
			if(mysqli_query($conn,$sql)){
				echo "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    You successfully added to cart.</p>
            </div>";
			}
		}else{
echo "<div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
               <span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>
                <hr class='message-inner-separator'>
                <p>
                    please login and continue shopping.....</p>
            </div>";
		}

		}

		
}
if (isset($_POST["get_cart_product"])) {
	$uid=$_SESSION["uid"];
	$sql="select * from cart where user_id='$uid'";
	$run_query=mysqli_query($conn,$sql);
	// echo $run_query;
	$count=1;
	$counts=mysqli_num_rows($run_query);
	if($counts>0){
		while ($row=mysqli_fetch_array($run_query)) {
			$id=$row["id"];
			$pro_id=$row["p_id"];
			$pro_name=$row["product_title"];
			$pro_image=$row["product_image"];
			$pro_price=$row["price"];
			$pro_q=$row["qty"];
			$total=$row["total_amount"];
			// <tr title="summary 1" data-id="1" data-price="1.50">
   //                      <td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="images/{$pro_image}"></td>
   //                      <td>{$pro_name}</td>
   //                      <td title="Unit Price"><input id="price-{$pro_id}" style="border:none; visibility:hidden; width:5px;" type="text" readonly class="price" min="0"  value="{$pro_price}" pro_id="{$pro_id}" >{$pro_price}</td>
   //                      <td title="Quantity"><input type="number" min="1" style="width: 70px;" class="my-product-quantity qty" id="qty-{$pro_id}" pro_id="{$pro_id}" value="{$pro_q}"></td>
   //                      <td title="Total"><input class="my-product-total total" value="{$total}" pro_id="{$pro_id}" id="total-{$pro_id}"></td>
   //                      <td title="Remove from Cart" class="text-center"  style="width: 30px;"><a id='removecart' remove_id="{$pro_id}" pro_id='{$pro_id}' 
   //                      uid='{$uid}' href="#" class="btn btn-xs btn-danger my-product-remove">X</a></td>
                       // <td title="Update from Cart" class="text-center"  style="width: 30px;"><a id='updatecart' update_id='{$pro_id}' 
                       //  uid='{$uid}' href="#" class="btn btn-xs btn-primary my-product-remove"><i class="fa fa-upload" aria-hidden="true"></i>
                       // </a></td>	
   //                  </tr>

			$cart=<<<DELIMITER
			 			<tr>
                    <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="images/{$pro_image}" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{$pro_name}</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><input id="price-{$pro_id}" style="border:none; visibility:hidden; width:5px;" type="text" readonly class="price" min="0"  value="{$pro_price}" pro_id="{$pro_id}" >{$pro_price}</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control text-center qty"  min="1" style="width: 70px;" class="my-product-quantity qty" id="qty-{$pro_id}" pro_id="{$pro_id}" value="{$pro_q}">
                            </td>
                            <td data-th="Subtotal" class="text-center"><input class="my-product-total total" value="{$total}" pro_id="{$pro_id}" id="total-{$pro_id}"></td>
                            <td class="actions" data-th="">
                        		<button class="btn btn-info btn-sm" id='updatecart' update_id='{$pro_id}' 
                        uid='{$uid}' href="#" ><i class="fa fa-refresh"></i></button>       
                        
                                <button class="btn btn-danger btn-sm" id='removecart' remove_id="{$pro_id}" pro_id='{$pro_id}' 
                        uid='{$uid}'  ><i class="fa fa-trash-o"></i></button>                                
                            </td>
                            <input type="hidden" name="item_name_{$count}" value="{$pro_name}">
                            <input type="hidden" name="item_number_{$count}" value="{$pro_id}">
                            <input type="hidden" name="amount_{$count}" value="{$total}">
                            <input type="hidden" name="quantity_{$count}" value="{$pro_q}">
                    </tr>
DELIMITER;

			echo $cart;
			$count=$count+1;
		  
		}
// 		$total=<<<DELIMITER
// 			 			<tr>
//                         <td></td>
//                         <td><strong>Total</strong></td>
//                         <td></td>
//                         <td></td>
//                         <td><strong id="my-cart-grand-total">$1.5</strong></td>
//                         <td></td>
//                     </tr>
//                     <tr style="color: red">
//                         <td></td>
//                         <td><strong>Total (including discount)</strong></td>
//                         <td></td>
//                         <td></td>
//                         <td><strong id="my-cart-discount-price">$1.5</strong></td>
//                         <td></td>
//                     </tr> 
                    
// DELIMITER;

// 			echo $total;
	}
}
if(isset($_POST["removeFromCart"])){
	$pid=$_POST["remove_id"];
	$uid=$_SESSION["uid"];

	$category_query="delete from cart where user_id='$uid' and p_id='$pid'  ";
	$run_query=mysqli_query($conn,$category_query);
	if($run_query){
		echo "removed";
	}
}
if(isset($_POST["updatecart"])){
	$pid=$_POST["update_id"];
	$uid=$_SESSION["uid"];
	$qty=$_POST["update_qty"];
	$total=$_POST["price_total"];
$sql="select total_qty from products where product_id='$pid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$product_qty=$row['total_qty'];
if($product_qty>=$qty){
	$cart_query="update  cart set qty='$qty',total_amount='$total' where user_id='$uid' and p_id='$pid'  ";
	$run_query=mysqli_query($conn,$cart_query);
	if($run_query){
		// echo "updated";
	}
}else{
	echo "out of stock.....";
            
}
}
if(isset($_POST["get_total_amount"])){
	// $pid=$_POST["update_id"];
	$uid=$_SESSION["uid"];

	$cart_query="select sum(total_amount) as 'total' from cart  where user_id='$uid' ";
	$run_query=mysqli_query($conn,$cart_query);
	if($run_query){
		$row=mysqli_fetch_assoc($run_query);
		$total=$row['total'];
		echo $total;
	}
}
if (isset($_POST["wishlist"])) {
	$uid=$_SESSION["uid"];
	$sql="SELECT * from products WHERE product_id in (SELECT pro_id from wishlist where user_id='$uid')";
	$run_query=mysqli_query($conn,$sql);
	// echo $run_query;
	$count=mysqli_num_rows($run_query);
	if($count>0){
		while ($row=mysqli_fetch_array($run_query)) {
			
			$pro_id=$row["product_id"];
			$pro_name=$row["product_title"];
			$pro_image=$row["product_image"];
			$pro_price=$row["product_price"];
			// $pro_q=$row["qty"];
			// $total=$row["total_amount"];

			$cart=<<<DELIMITER
			 			<tr title="summary 1" data-id="1" data-price="1.50">
                        <td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="images/{$pro_image}"></td>
                        <td>{$pro_name}</td>
                        <td title="Unit Price"><input id="price-{$pro_id}" style="border:none; visibility:hidden; width:5px;" type="text" readonly class="price" min="0"  value="{$pro_price}" pro_id="{$pro_id}" >{$pro_price}</td>
                   
               
                        <td title="Remove from Cart" class="text-center"  style="width: 30px;"><a id='removecart' remove_id="{$pro_id}" pro_id='{$pro_id}' 
                        uid='{$uid}' href="#" class="btn btn-xs btn-danger my-product-remove">X</a></td>
                       <td title="Update from Cart" class="text-center"  style="width: 30px;"><a id='updatecart' update_id='{$pro_id}' 
                        uid='{$uid}' href="#" class="btn btn-xs btn-primary my-product-remove"><i class="fa fa-upload" aria-hidden="true"></i>
                       </a></td>	
                    </tr>
                    
DELIMITER;

			echo $cart;
		 
		}
		}
	}
if(isset($_POST["forgot"])){
	// $pid=$_POST["update_id"];
	$email=$_POST["forgotmail"];
	$sql="select * from user_info where email='$email'";
	$run_query=mysqli_query($conn,$sql);
	// echo $run_query;
	$count=mysqli_num_rows($run_query);
	if($count>0){
		
		$_SESSION["forgotmail"]=$email;
$uniqidStr = md5(uniqid(mt_rand()));;
$_SESSION["forgotpass"]=$uniqidStr;
   $sqlupdate="update user_info set forgot_pass_identity='$uniqidStr' where email='$email' ";
   $run_query=mysqli_query($conn,$sqlupdate);
  //  echo  $run_query;
  //  //$counts=mysqli_num_rows($run_query);
  // echo "forgottrue";
   if($run_query>0){
  echo "forgottrue";
 }
	}
}
if(isset($_POST["forgotcontinue"])){
	// $pid=$_POST["update_id"];
	$uniqidStr=$_SESSION["forgotpass"];
    $email=$_SESSION["forgotmail"];
	$sql="select * from user_info where email='$email'";
	$run_query=mysqli_query($conn,$sql);
	if($run_query){
		$row=mysqli_fetch_assoc($run_query);
		$name=$row["first_name"];
			$resetPassLink = 'http://shopeme.000webhostapp.com/resetPassword.php?fp_code='.$uniqidStr;
   	$to = $_SESSION["forgotmail"];
				$subject = "Password Update Request";
				$mailContent = 'Dear '.$name.', 
				<br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
				<br/>To reset your password, visit the following link: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
				<br/><br/>Regards,
				<br/>shopeme';
				//set content-type header for sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				//additional headers
				$headers .= 'From: ShopMe<shopme.dsk@gmail.com>' . "\r\n";
				//send email
				mail($to,$subject,$mailContent,$headers);
				echo 'Please check your e-mail, we have sent a password reset link to your registered email.';
	}
}
if(isset($_POST["changepass"])){
	// $pid=$_POST["update_id"];
	$password=md5($_POST["pass"]);
	$confirm_password=md5($_POST['cpass']);
	$fp_code=$_POST["fpass"];
	// $email=$_SESSION["forgotmail"];

	if($password==$confirm_password){

	$sqlupdate="update user_info set password='$password' where  forgot_pass_identity='$fp_code' ";
   $run_query=mysqli_query($conn,$sqlupdate);
  //  echo  $run_query;
  //  //$counts=mysqli_num_rows($run_query);
  // echo "forgottrue";
   if($run_query>0){
  echo "changesuccess";
 }
}
}
if(isset($_POST["cart_count"])){
	$uid=$_SESSION["uid"];
	$sql="select * from cart where user_id='$uid'";
	$run_query=mysqli_query($conn,$sql);
	echo mysqli_num_rows($run_query);
}
?>
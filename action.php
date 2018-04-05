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
	$category_query="select * from products";
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
			 $products=<<<DELIMITER
			 				<div class="col-md-3 ">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="images/{$product_image}" class="img-responsive" alt="" style="width: 200px;height:170px;">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">{$product_title}</a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>$2.00</label><em class="item_price">RS.{$product_price}</em></p>
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
			 $products=<<<DELIMITER
			 				<div class="col-md-3 " >
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="images/{$product_image}" class="img-responsive" alt="" style="width: 200px;height:170px;">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">{$product_title}</a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>$2.00</label><em class="item_price">RS.{$product_price}</em></p>
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

if (isset($_POST["addToproduct"])) {
	$p_id=$_POST["proId"];  
	$user_id=$_SESSION["uid"];

	$sql="select * from cart where p_id='$p_id' and user_id='$user_id'";
	$run_query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run_query);
	if ($count>0) {
		
		echo "<div class='alert alert-warning alert-dismissable'>
    					<a href='#' class='close' data-dismis='alert' aria-label='close'>X</a><b>product is already added into the cart continue shopping...!</b>
    		</div>";
		}else{
			$sql="select * from products where product_id='$p_id'";
			$run_query=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($run_query);
			$id=$row["product_id"];
			$pro_name=$row["product_title"];
			$pro_image=$row["product_image"];
			$pro_price=$row["product_price"];
			$sql="INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price');";
			if(mysqli_query($conn,$sql)){
				echo "<div class='alert alert-warning alert-dismissable'>
    					<a href='#' class='close' data-dismis='alert' aria-label='close'>X</a><b>product is added....!</b>
    		</div>";
			}

		}

		
}
if (isset($_POST["get_cart_product"])) {
	$uid=$_SESSION["uid"];
	$sql="select * from cart where user_id='$uid'";
	$run_query=mysqli_query($conn,$sql);
	// echo $run_query;
	$count=mysqli_num_rows($run_query);
	if($count>0){
		while ($row=mysqli_fetch_array($run_query)) {
			$id=$row["id"];
			$pro_id=$row["p_id"];
			$pro_name=$row["product_title"];
			$pro_image=$row["product_image"];
			$pro_price=$row["price"];
			$pro_q=$row["qty"];
			$total=$row["total_amount"];

			$cart=<<<DELIMITER
			 			<tr title="summary 1" data-id="1" data-price="1.50">
                        <td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="images/{$pro_image}"></td>
                        <td>{$pro_name}</td>
                        <td title="Unit Price"><input id="price-{$pro_id}" style="border:none; visibility:hidden; width:5px;" type="text" readonly class="price" min="0"  value="{$pro_price}" pro_id="{$pro_id}" >{$pro_price}</td>
                        <td title="Quantity"><input type="number" min="1" style="width: 70px;" class="my-product-quantity qty" id="qty-{$pro_id}" pro_id="{$pro_id}" value="{$pro_q}"></td>
                        <td title="Total"><input class="my-product-total total" value="{$total}" pro_id="{$pro_id}" id="total-{$pro_id}"></td>
                        <td title="Remove from Cart" class="text-center"  style="width: 30px;"><a id='removecart' remove_id="{$pro_id}" pro_id='{$pro_id}' 
                        uid='{$uid}' href="#" class="btn btn-xs btn-danger my-product-remove">X</a></td>
                       <td title="Update from Cart" class="text-center"  style="width: 30px;"><a id='updatecart' pro_id='{$pro_id}' 
                        uid='{$uid}' href="#" class="btn btn-xs btn-primary my-product-remove"><i class="fa fa-upload" aria-hidden="true"></i>
                       </a></td>	
                    </tr>
                    
DELIMITER;

			echo $cart;
		 
		}
		$total=<<<DELIMITER
			 			<tr>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td></td>
                        <td><strong id="my-cart-grand-total">$1.5</strong></td>
                        <td></td>
                    </tr>
                    <tr style="color: red">
                        <td></td>
                        <td><strong>Total (including discount)</strong></td>
                        <td></td>
                        <td></td>
                        <td><strong id="my-cart-discount-price">$1.5</strong></td>
                        <td></td>
                    </tr> 
                    
DELIMITER;

			echo $total;
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
?>
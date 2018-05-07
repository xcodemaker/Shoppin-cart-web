<?php
session_start();
include "connect.php";

if(isset($_POST["updateitem"])){
	
			 $products=<<<DELIMITER
			 				<form  class="form-horizontal" id="formupdate" enctype="multipart/form-data" method="post"  action="">
                        
                       	<div class="row">
      <label for="id_email" class="control-label col-md-4  requiredField">Search product<span class="asteriskField">*</span> </label>
<input type="text" style=""  id="searchinput" name="search" placeholder="product id" />
 <button id="searchbtn" class="btn btn-primary btn-sm">Search</button>
	</div>
                  
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">product Category<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <!-- <input class="input-md emailinput form-control" id="id_product_cat" name="product_cat" placeholder="Enter product category" style="margin-bottom: 10px" type="number" /> -->
                                <select name="product_cat" form="formupdate">
 									 <option value="1">Motherbords</option>
  									<option value="2">Sensors</option>
  									<option value="3">Modules</option>
 									<option value="4">Shields</option>
 									<option value="5">Components</option>
  									<option value="6">Communication</option>
 									<option value="7">Robotics</option>
 									<option value="8">Semiconductors</option>
                                 </select>
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Product_brand<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <!-- <input class="input-md textinput textInput form-control" id="id_Product_brand" name="Product_brand" placeholder="Enter product brand" style="margin-bottom: 10px" type="text" /> -->
                                <select name="Product_brand" form="formupdate">
 									 <option value="1">Arduino</option>
  									<option value="2">Rasberi pi</option>
  									<option value="3">ModeMCU</option>
 									<option value="4">PIC</option>
                                 </select>
                            </div>
                        </div>
                        <div id="div_id_password2" class="form-group required">
                             <label for="id_password2" class="control-label col-md-4  requiredField">product title<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_product_title" name="product_title" placeholder="Enter product title" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> product price<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_product_price" name="product_price" placeholder="product product price" style="margin-bottom: 10px" type="number" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> product quantity<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_product_qty" name="product_qty" placeholder=" product quantity" style="margin-bottom: 10px" type="number" />
                            </div>
                        </div>
                        
                        <div id="div_id_company" class="form-group required"> 
                            <label for="id_company" class="control-label col-md-4  requiredField">product description<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_product_desc" name="product_desc" placeholder="enter product description" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_catagory" class="form-group required">
                            <label for="id_catagory" class="control-label col-md-4  requiredField"> product image <span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_product_image" name="fileToUpload" placeholder="enter image name" style="margin-bottom: 10px" type="file" />
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField">product keywords<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_product_keywords" name="product_keywords" placeholder="Enter product keywords" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                               <input type="submit" name="update" value="Update" class="btn btn-primary btn btn-info" id="productupdate" />
      
                            </div>
                        </div> 
                            
                    </form>
DELIMITER;

			echo $products;
		}
		

if(isset($_POST["searchitem"])){
	$search=$_POST["search"];
	$category_query="select * from products where product_id='$search' ";
	$run_query=mysqli_query($conn,$category_query);
	

	if(mysqli_num_rows($run_query)>0){
		while ($row=mysqli_fetch_array($run_query)) {
 //$product_id=$row["product_id"];
 $product_cat=$row["product_cat"];
 $product_brand=$row["product_brand"];
 $product_title=$row["product_title"];
 $product_price=$row["product_price"];
 $product_desc=$row["product_desc"];
 $product_image=$row["product_image"];
 $product_keywords=$row["product_keywords"];
			 $products=<<<DELIMITER
			 				<form  class="form-horizontal" id="formupdate" enctype="multipart/form-data" method="post"  action="">
                        
                       	<div class="row">
      <label for="id_email" class="control-label col-md-4  requiredField">Search product<span class="asteriskField">*</span> </label>
<input type="text" style=""  id="searchinput" value='{$search}' name='search' placeholder="product id" />
 <button id="searchbtn" class="btn btn-primary btn-sm">Search</button>
	</div>
                  
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">product Category<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <!-- <input class="input-md emailinput form-control" id="id_product_cat" name="product_cat" placeholder="Enter product category" style="margin-bottom: 10px" type="number" /> -->
                                <select name="product_cat" form="formupdate">
 									 <option value="1">Motherbords</option>
  									<option value="2">Sensors</option>
  									<option value="3">Modules</option>
 									<option value="4">Shields</option>
 									<option value="5">Components</option>
  									<option value="6">Communication</option>
 									<option value="7">Robotics</option>
 									<option value="8">Semiconductors</option>
                                 </select>
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Product_brand<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <!-- <input class="input-md textinput textInput form-control" id="id_Product_brand" name="Product_brand" placeholder="Enter product brand" style="margin-bottom: 10px" type="text" /> -->
                                <select name="Product_brand" form="formupdate">
 									 <option value="1">Arduino</option>
  									<option value="2">Rasberi pi</option>
  									<option value="3">ModeMCU</option>
 									<option value="4">PIC</option>
                                 </select>
                            </div>
                        </div>
                        <div id="div_id_password2" class="form-group required">
                             <label for="id_password2" class="control-label col-md-4  requiredField">product title<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="id_product_title" name="product_title" value='{$product_title}' placeholder="Enter product title" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> product price<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" value='{$product_price}' id="id_product_price" name="product_price" placeholder=" product price" style="margin-bottom: 10px" type="number" />
                            </div>
                        </div>
                        
                        <div id="div_id_company" class="form-group required"> 
                            <label for="id_company" class="control-label col-md-4  requiredField">product description<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" value='{$product_desc}' id="id_product_desc" name="product_desc" placeholder="enter product description" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_catagory" class="form-group required">
                            <label for="id_catagory" class="control-label col-md-4  requiredField"> product image <span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput value='' form-control" id="id_product_image" name="fileToUpload" placeholder="enter image name" style="margin-bottom: 10px" type="file" />
                                 <img src="images/{$product_image}"  class="img-responsive btn" alt="" style="width: 200px;height:170px;">
                            </div>
                        </div> 
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField">product keywords<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="id_product_keywords" value='{$product_keywords}' name="product_keywords" placeholder="Enter product keywords" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-4 ">
                                <input type="submit" name="update" value="Update" class="btn btn-primary btn btn-info" id="productupdate" />

                            </div>
                            <div class="controls col-md-4 ">
                                <button id="productremove" class="btn btn-danger">remove</button>

                            </div>
                        </div> 
                            
                    </form>
DELIMITER;

			echo $products;
		}
		
}
}
if(isset($_POST['searchinput'])){
  $sql="delete from products where product_id='".$_POST['searchinput']."'";
  if ($conn->query($sql) === TRUE) {
    echo "record removed successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// <input type="submit" name="update" value="Update" class="btn btn-primary btn btn-info" id="productupdate" />
// if(isset($_POST[""])){
// <button id="productupdate" class="btn btn-primary btn-sm">update</button>
// }
// $imgname=$_FILES['fileToUpload']['name'];
//    $sql = "INSERT INTO products ( product_cat, Product_brand,product_title,product_price,product_desc,product_image,product_keywords,total_qty)
//  VALUES ('". $_POST["product_cat"]."','". $_POST["Product_brand"]."','". $_POST["product_title"]."','". $_POST["product_price"]."','". $_POST["product_desc"]."','".$imgname."','".$_POST["product_keywords"]."','".$_POST["product_qty"]."')";
if(isset($_POST['out_of_stock'])){
  $sql="select * from products where total_qty='0'";
  $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_array($result)) {
      $product_id=$row["product_id"];
 $product_cat=$row["product_cat"];
 $product_brand=$row["product_brand"];
 $product_title=$row["product_title"];
 $product_price=$row["product_price"];
 
 $product_image=$row["product_image"];
 
 $product_qty=$row["total_qty"];


 $cart=<<<DELIMITER
            <tr>
                    <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="images/{$product_image}" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{$product_title}</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><input  style="border:none; visibility:hidden; width:5px;" type="text" readonly class="price" min="0"  >{$product_price}</td>
                            <td data-th="Price"><input  style="border:none; visibility:hidden; width:5px;" type="text" readonly class="price" min="0"  >{$product_id}</td>
                            
                           
                            
                    </tr>
DELIMITER;

      echo $cart;
    }
 }
}
?>
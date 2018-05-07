<?php
session_start();
if($_SESSION["type"]!="admin"){
  header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>shopeme</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/adminjs.js"></script>
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/index2.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/navstyle.css"> -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/reset.css"> -->
  <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link href="css/font-awesome.css" rel="stylesheet"> 

<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="banner-top">
    <div class="container">
        <h3 >Admin</h3>
        <h4><a href="index.php">Home</a><label>/</label>Admin</h4>
        <div class="clearfix"> </div>
    </div>
</div>
	<div class="container">
	<div class="row">

<!--========== First Modal ==========-->
<article class="col-md-4 well">
    <h3 class="page-header text-center">Change Account setting<br />
        <small>you can manage users</small>
    </h3>
    <br><hr> 
    <div class="text-center">
        <a class="btn btn-success" href="#successModal" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i>User Setting</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">[ × ]</button>
                    <h2><i class="glyphicon glyphicon-cloud"></i>Add Admin</h2>
                </div>
                <div class="modal-body">
                <div class="row">
<div class="col-md-2"></div>
  <div class="col-md-8" id="admin_msg">
    <!-- alert -->
  </div>
                    <form class="form-horizontal" action="#" method="post" id="formadmin">
                        
                        
                         <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">First Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                             
                            <input class="input-md textinput textInput form-control" type="text" value="Firstname" name="Firstname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Firstname';}" required="">
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Last Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                          
                            <input class="input-md textinput textInput form-control" type="text" value="Lastname" name="Lastname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lastname';}" required="">
                            </div>
                        </div>
                        <div id="div_id_password2" class="form-group required">
                             <label for="id_password2" class="control-label col-md-4  requiredField">Emali<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                               
                            <input class="input-md textinput textInput form-control" type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField">password<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                           
                            <input class="input-md textinput textInput form-control" type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required=""> 
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField">Comfirm Password<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                           
                            <input class="input-md textinput textInput form-control" type="password" value="Confirm Password" name="Confirm_Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required"> 
                            <label for="id_company" class="control-label col-md-4  requiredField">Mobile Number<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 
                            <input class="input-md textinput textInput form-control" type="text" value="Mobile" name="Mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" required="">
                            </div>
                        </div> 
                        <div id="div_id_catagory" class="form-group required">
                            <label for="id_catagory" class="control-label col-md-4  requiredField"> Address <span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                
                            <input class="input-md textinput textInput form-control" type="text" value="Address" name="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
                            </div>
                        </div> 
                       
                                 
                            <input class="input-md textinput textInput form-control" style="visibility: hidden;" type="text" value="admin" name="type" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'admin';}" required="" readonly>
                           
                        
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                               <a id="submitadminbtn" class="btn btn-primary btn btn-info">Done</a>
      
                            </div>
                        </div> 
                    </form>

                </div><div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary pull-right" data-next="modal">Next</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</article>

<!--========== Second Modal ==========-->
<article class="col-md-4 well">
    <h3 class="page-header text-center">Get reports<br />
        <small>you can manage stock easy</small>
    </h3>
    <br><hr>
    <div class="text-center">
        <a class="btn btn-warning" href="#warningModal" data-toggle="modal"><i class="glyphicon glyphicon-briefcase"></i>Reports</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2><i class="glyphicon glyphicon-user"></i>out of stock</h2>
                </div>
                <div class="modal-body" >
                <br>
                <br>
                <br>
                  <div class="row">
                <div class="col-md-5">
                </div>
                <div class="col-md-2">
                <button type="submit" class="btn btn-primary pull-right" id="out_of_stock">Out of stock</button> 
</div>
                    <div class="col-md-5">
                </div>
                </div>
<br>
                <br>
                <br>
                <table id="cart" class="table table-hover table-condensed" style="border-color: black;">
                    <thead>
                        <!-- <tr>
                            <th style="width:10%">Product</th>
                             <th style="width:50%"></th>
                            <th style="width:10%">Price</th>
                            <th style="width:10%">product id</th>
                            
                           
                        </tr> -->
                    </thead>
                    <tbody id='reportupdate'>
                        <!-- <tr id="cart_product"> -->
                            <!-- <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">Product 1</h4>
                                        <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$1.99</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control text-center" value="1">
                            </td>
                            <td data-th="Subtotal" class="text-center">1.99</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                                
                            </td> -->
                        <!-- </tr> -->
                    </tbody>
                    <tfoot>
                   <!--  <tr id='cartmsg'></tr>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>Total Rs.</strong><strong id="my-cart-grand-total"></strong></td>
                        </tr>
                        <tr>
                            <td><a href="profile.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total (<span style="color: red;">including discount</span>) Rs.</strong><strong id="my-cart-discount-price"></strong></td>
                            <td> <a href="#" class="btn btn-success btn-block" id="Checkoutbtn">Checkout <i class="fa fa-angle-right"></i></a> 
                                
                            </td>
                        </tr> -->
                    </tfoot>
                </table>
                </div><div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" class="btn btn-primary pull-right">Submit</button> -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</article>

<!--========== Third Modal ==========-->
<article class="col-md-4 well">
    <h3 class="page-header text-center">Shopping Cart Items<br />
        <small>add product and update details</small>
    </h3>
    <br><hr>
    <div class="text-center">
        <a class="btn btn-primary" href="#primaryModal" data-toggle="modal"><i class="glyphicon glyphicon-shopping-cart"></i> Add Product</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> [ × ] </button>
                    <h2><i class="glyphicon glyphicon-shopping-cart"></i>   Add Items</h2>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                      <div class="table-responsive" id="adminupdate">
                        <form  class="form-horizontal" id="#idForm" enctype="multipart/form-data" method="post"  action="">
                        
                       
                  
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">product Category<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <!-- <input class="input-md emailinput form-control" id="id_product_cat" name="product_cat" placeholder="Enter product category" style="margin-bottom: 10px" type="number" /> -->
                                <select name="product_cat" form="#idForm">
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
                                <select name="Product_brand" form="#idForm">
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
                                <input type="submit" name="upload" value="Upload" class="btn btn-primary btn btn-info" id="submit-id-signup" />
      
                            </div>
                        </div> 
                            
                    </form>

                      </div>
                    </div><!-- ends col-12 -->

                </div><div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary pull-right" data-next="modal" id="updateitem">Update Item Details</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</article>

	</div>
</div>
<script >
    	$("#idForm").submit(function() {
    		alert("add new");
 	<?php
include "connect.php";

$imgname=$_FILES['fileToUpload']['name'];
	 $sql = "INSERT INTO products ( product_cat, Product_brand,product_title,product_price,product_desc,product_image,product_keywords,total_qty)
 VALUES ('". $_POST["product_cat"]."','". $_POST["Product_brand"]."','". $_POST["product_title"]."','". $_POST["product_price"]."','". $_POST["product_desc"]."','".$imgname."','".$_POST["product_keywords"]."','".$_POST["product_qty"]."')";

 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
	
$target_dir = "images";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imgtemp=$_FILES["fileToUpload"]["tmp_name"];
move_uploaded_file($imgtemp,"images/".$_FILES['fileToUpload']['name']);



?>
});
   
    </script>   
    <script>     $(document).ready(function(){
             $("body").delegate("#formupdate","submit",function(event){
    //alert("submit");
<?php
 $search=$_POST["search"];
 echo    $search; 
 $product_cat=$_POST["product_cat"];
 $Product_brand=$_POST["Product_brand"];
 $product_title=$_POST["product_title"];
 $product_price=$_POST["product_price"];
 $product_desc=$_POST["product_desc"];
 $product_image=$_FILES['fileToUpload']['name'];
 $product_keywords=$_POST["product_keywords"];
 //echo $product_id;
 if($product_image!=""){
   $sql = "UPDATE  products
 SET  product_cat='$product_cat', Product_brand=' $Product_brand',product_title=' $product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keywords' where product_id='$search'";

 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
}else{
  $sql = "UPDATE  products
 SET  product_cat='$product_cat', Product_brand=' $Product_brand',product_title=' $product_title',product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$search'";

 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
    
?>
 });    
    
     })
     </script>        
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
  if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/navmain.js"></script>
</body>
</html>
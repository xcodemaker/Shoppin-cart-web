<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <script src="js/jquery-1.11.1.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Add product</div>
               <!-- -->
            </div>  
            <div class="panel-body" >
                <!-- <form method="post" action=".">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' /> -->
                            

                    <form  class="form-horizontal" id="idForm" enctype="multipart/form-data" method="post"  action="">
                        
                       
                  
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

               <!--  </form> -->
            </div>
        </div>
    </div> 
</div>
    </div> 
    <script >
    	$("#idForm").submit(function() {
    		alert("submit");
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
      $(document).ready(function(){
  
      $("body").delegate("#productupdate","submit",function(event){
   
alert("hello");
    event.preventDefault();
   //var key= $("#searchinput").val();
   //alert(key);
   <?php
//  $search=$_POST["search"];
//  echo    $search; 
//  $product_cat=$_POST["product_cat"];
//  $Product_brand=$_POST["Product_brand"];
//  $product_title=$_POST["product_title"];
//  $product_price=$_POST["product_price"];
//  $product_desc=$_POST["product_desc"];
//  $product_image=$_FILES['fileToUpload']['name'];
//  $product_keywords=$_POST["product_keywords"];
//  //echo $product_id;
//  if($product_image!=""){
//    $sql = "UPDATE  products
//  SET  product_cat='$product_cat', Product_brand=' $Product_brand',product_title=' $product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keywords' where product_id='$search'";

//  if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//  } else {
//      echo "Error: " . $sql . "<br>" . $conn->error;
//  }
// }else{
//   $sql = "UPDATE  products
//  SET  product_cat='$product_cat', Product_brand=' $Product_brand',product_title=' $product_title',product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$search'";

//  if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//  } else {
//      echo "Error: " . $sql . "<br>" . $conn->error;
//  }
// }
    //       $.ajax({
    //   url : "actionadmin.php",
    //   method :"POST",
    //   data : $("#formupdate").serialize(),
    //   success : function(data){ 
    //   $("#adminupdate").html(data); 
    //   }
    // });
 ?>
});
    })
    </script>           
</body>
</html>
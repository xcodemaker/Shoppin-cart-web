<?php
session_start();
if(!isset($_SESSION["uid"])){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>shopeme</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index2.css">
    <link rel="stylesheet" type="text/css" href="css/navstyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link href="css/font-awesome.css" rel="stylesheet"> 
     <link href="css/shop-item.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

    <!-- Bootstrap Core CSS -->
    

    <!-- Custom CSS -->
   

   

   <body style="">
<?php include "navbar.php";?>
<div class="banner-top">
    <div class="container">
        <h3 >wishlist</h3>
        <h4><a href="index.php">Home</a><label>/</label>wishlist</h4>
        <div class="clearfix"> </div>
    </div>
</div>
    <!-- Page Content -->
    <div class="container">

      <div class="modal-body">
                <table class="table table-hover table-responsive" id="my-cart-table">
                  <tbody id="wish_product">
                   
                  </tbody>
                </table>
              </div>  

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
            url : "action.php",
            method :"POST",
            data : {wishlist:1},
            success : function(data){
                 
                $("#wish_product").html(data);

            }
        });
        })
    </script>

</body>

</html>

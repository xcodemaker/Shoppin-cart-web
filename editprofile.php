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
	<!-- <script src="js/jquery-1.11.1.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
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

<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body style="background-color: rgb(18, 12, 12) ;">

<header class="cd-auto-hide-header">
  <div class="logo"><a href="#0"><img class="img-responsive" src="images/shop me icon.png" alt="Logo" style="width: 300px; height: 100px;"></a></div>

  <nav class="cd-primary-nav" style="position: static;">
    <a href="#cd-navigation" class="nav-trigger">
      <span>
        <em aria-hidden="true"></em>
        Menu
      </span>
    </a> <!-- .nav-trigger -->

    <ul id="cd-navigation " class="card">
          <li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
          <li ><a href="#" ><i class="fa fa-user" aria-hidden="true"></i><?php echo "Hi,".$_SESSION["name"];?></a>
          <li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
          <li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
          <li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
    </ul>
  </nav> <!-- .cd-primary-nav -->

  
</header> <!-- .cd-auto-hide-header -->
<nav class="cd-secondary-nav" id="get_category" style="z-index: 500;">

    
  </nav><!-- .cd-auto-hide-header -->

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="banner-top">
  <div class="container">
    <h3 >Welcome</h3>
    <h4><div class="dropdown"  style="visibility: hidden; width: 200px; " ><button style="visibility: visible;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Account
  </button>
          <ul style="visibility: visible;" class="dropdown-menu" style="z-index: 1000; overflow: hidden; position: absolute;" >
            <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
          </div></h4>
           <div class="cart">
          <button data-toggle="modal" id="mycartbtn" data-target="#myModal" style="visibility: hidden;">
            <span   class="fa fa-shopping-cart my-cart-icon"  style="position: absolute;  z-index: 999; visibility: visible;"><span class="badge badge-notify my-cart-badge" style="visibility: visible;">3</span></span>
          </button>
            

          </div>
          <!-- <span  data-toggle="modal" data-target="#myModal" class="fa fa-shopping-cart my-cart-icon"  style="position: absolute; background-color: inherit; z-index: 999;"><span class="badge badge-notify my-cart-badge">3</span></span> -->
          <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title pull-left" id="myModalLabel" style="color: black; "><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> My Cart</h3>
              </div>
              <div class="modal-body">
                <table class="table table-hover table-responsive" id="my-cart-table">
                  <tbody id="cart_product">
                    <!-- <tr title="summary 1" data-id="1" data-price="1.50">
                        <td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="images/of.png"></td>
                        <td>Moong</td>
                        <td title="Unit Price">$1.50</td>
                        <td title="Quantity"><input type="number" min="1" style="width: 70px;" class="my-product-quantity" value="1"></td>
                        <td title="Total" class="my-product-total">$1.5</td>
                        <td title="Remove from Cart" class="text-center" style="width: 30px;"><a href="javascript:void(0);" class="btn btn-xs btn-danger my-product-remove">X</a></td>
                    </tr>
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
                    </tr> -->
                    <tr>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td></td>
                        <td>Rs.<strong id="my-cart-grand-total"></strong></td>
                        <td></td>
                    </tr>
                    <tr style="color: red">
                        <td></td>
                        <td><strong>Total (including discount)</strong></td>
                        <td></td>
                        <td></td>
                        <td>Rs.<strong id="my-cart-discount-price"></strong></td>
                        <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
            </div>
          </div>
          </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="carousel fade-carousel slide background-carousel" data-ride="carousel" data-interval="4000" id="bs-carousel" >
  <!-- Overlay -->
  <!-- <div class="overlay"></div>-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol> 
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <div style="position: absolute; z-index: 1200;">
  	<div id="search-bg img-responsive" >
  <div class="">
		<div class="banner-info img-responsive" >
			<h3 style="color: rgb(0, 255, 255);">Building Internet of Things with the <span style="font-family: myFirstFont; color: rgb(0, 102, 102);">Arduino Technology</span>
Buy, Learn, Make, Develop your Project with Arduino and Raspberry PI</h3>	
			<div class="search-form">
				<form action="#" method="post">
					<input type="text" id="searchinput"  placeholder="Search..." name="keyword">
					<input type="submit" value=" " id="searchbtn" >
				</form>
			</div>		
		</div>	
    </div>
    </div>
  </div>
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
  </div> 
  
</div>
<!-- content -->

<div class="content-top ">
	<div class="container ">							
<!-- <div class="col-md-12">
	<div class="panel panel-info">
		<div class="panel-heading">Products
			
		</div>
		<div class="panel-body"> -->
    <div class="row">
<div class="col-md-2"></div>
  <div class="col-md-8" id="product_msg">
    <!-- alert -->
  </div>
<div class="col-md-2"></div>
</div>
		<div class=" tab-content tab-content-t ">
					
						<div class=" con-w3l" id="get_product">
						
							</div>
							<!-- </div> -->
		<!-- </div>
		<div class="panel-footer">&copy:2017 </div>
	</div> -->
</div>
</div>
</div>
<br>
<br>
<!-- content -->
<!-- footer -->
<?php include "footer.php";?>
<!-- footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/navmain.js"></script>
</body>
</html>
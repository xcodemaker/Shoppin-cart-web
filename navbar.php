
<!-- // $nav=<<<DELIMITER -->
			 				<!-- <header class="cd-auto-hide-header">
	<div class="logo"><a href="#0"><img class="img-responsive" src="images/shop me icon.png" alt="Logo" style="width: 300px; height: 100px;"></a></div>

	<nav class="cd-primary-nav">
		<a href="#cd-navigation" class="nav-trigger">
			<span>
				<em aria-hidden="true"></em>
				Menu
			</span>
		</a>  .nav-trigger -->

		<!-- <ul id="cd-navigation " class="card">
					<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
		</ul>
	</nav> --> <!-- .cd-primary-nav -->

	
<!-- </header>  --> <!-- .cd-auto-hide-header -->
<?php
// session_start();
?>
<header class="">
<div class="header">

    <div class="container">
      
      <div class="logo" >
       <!--  <h1  ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1> -->
       <a href="#0"><img class="img-responsive" src="images/shop me icon.png" alt="Logo" style="width: 300px; height: 100px;margin-right: auto;margin-left: auto;"></a>
      </div>
      <div class="head-t" id="cd-navigation">
        <ul class="card">
          <li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
          <li ><a href="<?php if(isset($_SESSION["name"])){
          	 echo "#";
          	}else{
          	echo "login.php";	
          	}
          	?>" ><i class="fa fa-user" aria-hidden="true"></i><?php  if(isset($_SESSION["name"])){
          	 echo "Hi,".$_SESSION["name"];
          	}else{
          	echo "login";	
          	}
         
          ?></a></li>
          <li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
          <li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
          <li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
        </ul> 
      </div>
  </div>
  </div>
  
</header>
<nav class="cd-secondary-nav" id="get_category">

		
	</nav>  <!-- .cd-secondary-nav
  <!--banner-->

<!-- // DELIMITER;
// echo $nav;
 -->

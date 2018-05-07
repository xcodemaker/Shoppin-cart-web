<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}

?><!DOCTYPE html>
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
<body style="">


<?php include "navbar.php";?>


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
					<input type="text" placeholder="Search..." name="Search...">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
    </div>
  </div>
   <div class="item slides active">
    <div id='container'>
    <div class="overlay"></div>
      <div class="slide-1"></div>
      </div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
     <div id='container'>
    <div class="overlay"></div>
      <div class="slide-2"></div>
      </div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
     <div id='container'>
    <div class="overlay"></div>
      <div class="slide-3"></div>
      </div>
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
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

<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body style="">
<?php include "navbar.php";?> 
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="index.php">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->
<div class='row'>
<div class='col-md-2'></div>
	<div class='col-md-8'>
	<div id="loginmsg">
    					
    		</div>
    		</div>
<div class='col-md-2'style="margin-bottom:20px;"></div>
	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" id="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" id="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Login" id="loginbtn">
					</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left" id="forgotbtn">Forgot Password</a>
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!--footer-->

<!--footer-->
<?php include "footer.php";?>
<!-- //footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/navmain.js"></script>
</body>
</html>
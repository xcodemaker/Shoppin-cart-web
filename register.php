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
<body style="background-color: rgb(18, 12, 12) ;">
<?php include "navbar.php";?>
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.php">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

<div class="row">
<div class="col-md-2"></div>
	<div class="col-md-8" id="signup_msg">
		<!-- alert -->
	</div>
<div class="col-md-2"></div>
</div>


	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1" id="resgisterend">
					<h3>Register</h3>
					<form action="#" method="post" id="#idFormregister">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Firstname" name="Firstname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Firstname';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Lastname" name="Lastname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lastname';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="Confirm_Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="	fa fa-mobile" aria-hidden="true"></i>
							<input  type="text" value="Mobile" name="Mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="	fa fa-mobile" aria-hidden="true"></i>
							<input  type="text" value="Address1" name="Address1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address1';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="	fa fa-mobile" aria-hidden="true"></i>
							<input  type="text" value="Address2" name="Address2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address2';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit" id="submitbtn">
					</form>
				</div>
				
			</div>
		</div>
</div>
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
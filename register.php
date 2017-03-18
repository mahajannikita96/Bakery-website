<!--%@ Page Language="C#" AutoEventWireup="true" CodeFile="register.php.cs" Inherits="_Default" %-->
<?php
include 'header.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>Sign Up - Sweet Delights </title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
    <style type="text/css">
        .auto-style1 {
            width: 326px;
            height: 108px;
        }
        .auto-style2 {
            width: 944px;
            height: 337px;
            margin-top: 0px;
        }
        .auto-style3 {
            left: 1px;
            top: -12px;
            height: 565px;
            width: 498px;
        }
        .auto-style4 {
            left: 0px;
            top: -58px;
            width: 540px;
            height: 576px;
        }
        .auto-style5 {
            margin-bottom: 0px;
        }
        .auto-style6 {
            height: 41px;
        }
        .auto-style7 {
            left: 0px;
            top: 0px;
            height: 806px;
            margin-bottom: 37px;
        }
        .auto-style8 {
            width: 312px;
        }
        .auto-style10 {
            width: 312px;
            height: 26px;
        }
        .auto-style11 {
            height: 26px;
        }
        </style>
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="index.php"><img src="images/logo.gif" alt="Logo" class="auto-style1"/></a>
				</div>
				<div>
					<div>
						<a href="signin1.php" >Sign in</a>
                        <a href="index.php" class="last">Help</a>
					</div>
					<form action="#">
						<input type="text" id="search" maxlength="30" />
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">The Bakery shop</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="section" style="left: 0px; top: -11px; width: 961px; height: 348px">
				<img src="images/bakeryback.gif" alt="Image" class="auto-style2"/>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="auto-style7">
			<div id="account" class="auto-style4">
				<div class="auto-style3">
					<form id="form1" action="register_signup.php" method="POST">
						<span>SIGN-UP</span>
						
							<p> &nbsp;&nbsp;E-mail*: <input type="email" name="email" id="email" required placeholder="E-mail ID"> </p>
							 <?php  if(isset($_POST)-1){echo '<p style="color:red;">&nbsp;&nbsp;E-mail Already in use</p>'; unset($_POST); print_r($_POST);} ?>
							<p>&nbsp;&nbsp; Username*: <input type="text" name="username" id="username" required placeholder="Enter an unique username"> </p>
						
							<p>&nbsp;&nbsp;Password*: <input type="password" name="pwd" id="pwd" required placeholder="Enter a password"> </p>
						
							<p>&nbsp;&nbsp;Confirm Password*: <input type="password" name="cnfm_pwd" id="cnfm_pwd" required placeholder="Enter the password again"> </p>

							<input type="submit" name="submit-btn" id="submit-btn"> 
							<input type="button" name="clr-btn" id="clr-btn" value="Reset Fields" onClick="this.form.reset()"> <br/> <br/>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="section" style="height: 370px; margin-top: 0px">
			<div>
				<div class="aside">
					<div>
						<div>
							<b>Too <span>BUSY</span> to shop?</b>
							<a href="signin.php">Sign up for free</a>
							<p>and we&#39;ll deliver it on your doorstep</p>
						</div>
					</div>
				</div>
				<div class="connect">
					<span>Follow Us</span>
					<ul>
						<li><a href="http://facebook.com/" target="_blank" class="facebook">Facebook</a></li>
						<li><a href="http://twitter.com/" target="_blank" class="twitter">Twitter</a></li>
						<li><a href="#" class="subscribe">Subscribe</a></li>
						<li><a href="http://www.flickr.com/" target="_blank" class="flicker">Flicker</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="navigation">
			<div>
				<ul>
					<li class="first"><a href="index.html">help</a></li>
					<li><a href="index.php">about cake delight</a></li>
					<li><a href="index.php">cake delight talk</a></li>
					<li><a href="index.php">developers</a></li>
					<li><a href="index.php">privacy policy</a></li>
					<li><a href="index.php">terms of use(updated 10/15/08)</a></li>
				</ul>
				<p>Copyright &copy; 2006-2008 cake delight  All rights reserved</p>
			</div>
		</div>
	</div>

<script type="text/javascript">
	var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("cnfm_pwd");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>
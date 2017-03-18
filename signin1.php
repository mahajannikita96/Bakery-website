<?php
	include 'header.php';
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
	<title>Sign In - Sweet Delights </title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <style type="text/css">
        .auto-style1 {
            width: 880px;
            height: 172px;
            margin-bottom: 0px;
        }
        .auto-style2 {
            width: 192px;
            height: 50px;
        }
        .auto-style3 {
            left: -1px;
            top: 3px;
        }
        .auto-style4 {
            width: 258px;
        }
        .auto-style5 {
            height: 37px;
        }
        .auto-style6 {
            height: 38px;
        }
    </style>
</head>
<body>
    <div id="header">
		<div>
			<div>
				<div id="logo">
					<img src="images/logo.gif" alt="Logo"/>
				</div>
				<div>
					<div>
						<a href="register.php">Sign Up</a>
						<a href="sample.php" class="last">Help</a>
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
				<li class="auto-style2"><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="section">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>
			    <br />
                <br />
                <br />
                <br />
			</div>
		</div>
	</div>
	<div id="content">
		<div class="auto-style3">
			<div id="account">
				<div>
					<form id="form1" action="checkLogin.php" method="POST">
						<span>SIGN-IN</span>
						<p>&nbsp;&nbsp; Username*: <input type="text" name="username" id="username" required placeholder="Enter your username"> </p>
						<p>&nbsp;&nbsp; Password*: <input type="password" name="pwd" id="pwd" required placeholder="Enter your password"> </p>
						<input type="submit" name="submit-btn" id="submit-btn">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="section">
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
						<li><a href="http://facebook.com/freewebsitetemplates" target="_blank" class="facebook">Facebook</a></li>
						<li><a href="http://twitter.com/fwtemplates" target="_blank" class="twitter">Twitter</a></li>
						<li><a href="#" class="subscribe">Subscribe</a></li>
						<li><a href="http://www.flickr.com/freewebsitetemplates/" target="_blank" class="flicker">Flicker</a></li>
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
</body>
</html>

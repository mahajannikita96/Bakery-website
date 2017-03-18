<?php
	include 'header.php';
	if(!($_COOKIE["logged_in"])){
		header('Location: signin1.php');
	}
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Home - Sweet Delights</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />

    <style type="text/css">
        .auto-style1 {
            height: 44px;
        }
        .auto-style2 {
            left: -2px;
            top: 0px;
            width: 931px;
            height: 399px;
        }
        .auto-style3 {
            width: 700px;
            height: 462px;
        }
        .auto-style4 {
            width: 284px;
        }
        .auto-style5 {
            width: 276px;
        }
        .auto-style6 {
            width: 273px;
        }
        .auto-style7 {
            width: 233px;
        }
        .auto-style10 {
            left: 0px;
            top: 0px;
            width: 452px;
            height: 149px;
        }
        .auto-style11 {
            width: 290px;
            height: 123px;
        }
    </style>
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo" class="auto-style10">
					<a href="index.html"><img alt="Logo" class="auto-style11" src="images/logo.gif"/></a>
				</div>
				<div>
					<div>
						<!--a href="register.php.">Sign up</a-->
						<a href="cart.php" >Hello, <?php echo $_COOKIE["username_bake"]; ?></a>
						<a href="logout.php"> Logout </a>
                        <a href="sample.php" class="last">Help</a>
		    		</div>
					<form action="#">
						<input type="text" id="search" maxlength="30" />
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="product.php">The Bakery shop</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div id="section" class="auto-style2">
				<ul class="auto-style7">
					<li class="auto-style4"><a href="Productlist2.php">Seasonal cakes</a></li>
					<li class="auto-style5"><a href="product.php">paestries</a></li>
                    <li><a href="Productlist8.php"> Gannache &amp; Mousse </a></li>
                    <li class="auto-style4"><a href="product.php">speciality cakes</a></li>
					<li class="auto-style6"><a href="product.php">special occasion cakes</a></li>
					<li><a href="product.php">wedding cakess</a></li>
					<li><a href="product.php">tarts and Flans</a></li>
					<li><a href="product.php">Chocolates,Bread and pies</a></li>
                    <li><a href="Productlist9.php" class="auto-style1">cookies</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
				</ul>
				<a href="index.php"><img src="images/CreamCafe.gif" alt="Image" class="auto-style3"/></a>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="home">
			<div class="aside" style="left: 0px; top: 0px; width: 446px; height: 451px">
				<h1>Welcome to Sweet Delights</h1>
				<p>Bakery is the name given to various kinds of baked goods made from ingredients such as flour, butter, shortening, baking powder or eggs. Small cakes, tarts and other sweet baked goods are called &#34;pastries&#34;.</p> 
				<p>Bakery products may also refer to the dough from which such baked goods are made. Pastry dough is rolled out thinly and used as a base for baked goods. Common pastry dishes include pies, tarts and quiches. 
				<p>Bakery products  is distinguished from bread by having a higher fat content, which contributes to a flaky or crumbly texture. A good pastry is light and airy and fatty, but firm enough to support the weight of the filling. When making a shortcrust pastry, care must be taken to blend the fat and flour thoroughly before adding. </p>
                <p>&nbsp;</p>
			</div>
			<div class="section">
				<div>
					<h2>The Bakery story</h2>
					<p> The art of baking was developed early during the Roman Empire. It was highly famous art as Roman citizens loved baked goods and demanded for them frequently for important occasions such as feasts and weddings.Due to the fame and desire that the art of baking received, around 300 BC, baking was introduced as an occupation and respectable profession for Romans.</p>
				</div>
				<ul>
					<li class="first">
						<img src="images/cake.jpg" alt="Image" />
					</li>
					<li>
						<img src="images/burgercake.jpg" alt="Image" />
					</li>
					<li>
						<a href="index.php"><img src="images/cupcake.jpg" alt="Image" /></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="home">
			<div>
				<div class="aside">
					<div class="signup">
						<div>
							<b>Too <span>BUSY</span> to shop?</b>
							<a href="register.php">Sign up for free</a>
							<p>and we&#39;ll deliver it on your doorstep</p>
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
				<div class="section">
					<div>
						<div>
							<h3><a href="index.php">Daily Cake Surprise</a></h3>
							<p></p>
						</div>
					</div>
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
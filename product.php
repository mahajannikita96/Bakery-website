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
	<title>Sweet Delights</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <style type="text/css">
        .auto-style1 {
            width: 939px;
            height: 529px;
        }
        .auto-style2 {
            width: 225px;
            height: 216px;
        }
        .auto-style3 {
            width: 178px;
            height: 199px;
        }
        .auto-style4 {
            left: 3px;
            top: 22px;
            width: 365px;
            height: 202px;
            right: 207px;
        }
        .auto-style5 {
            width: 254px;
            height: 194px;
        }
        .auto-style6 {
            width: 192px;
            }
        .auto-style7 {
            width: 150px;
            height: 166px;
        }
        .auto-style8 {
            left: 0px;
            top: 0px;
            height: 208px;
        }
        .auto-style9 {
            width: 195px;
        }
    </style>
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="home.php"><img src="images/logo.gif" alt="Logo"/></a>
				</div>
				<div>
					<div>
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
				<li><a href="index.php">Home</a></li>
				<li class="current"><a href="product.php">The Bakery shop</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="section">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>
			</div>
		</div>
	</div>
	<div id="content">
		<div>
			<h1>The Bakery shop</h1>
			<ul>
				<li>
					<div>
						<div>
							<h2>Speciality Cakes</h2>
							<p></p>
							<a href="Productlist.php" class="view">view all</a>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/shoecake.jpg" alt="Image" class="auto-style2" /></div>
				</li>
				<li>
					<div>
						<div>
							<h2><b>Tarts and Flans</b></h2>
							<p>&nbsp;</p>
							<a href="Productlist7.php" class="view">view all</a>
						</div>
						<img src="images/tarts.jpg" alt="Image" />
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2><b>Chocolates and cookies </b></h2>
							<p></p>
							<a href="choco_cookie.php" class="view">view all</a>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
						<img src="images/choco-chip-cookies.gif" alt="Image" class="auto-style3" />
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2><b>Quiche/Pies</b></h2>
							<p></p>
							<a href="Productlist4" class="view">view all</a>
						</div>
						<img src="images/dessert.jpg" alt="Image" />
					</div>
				</li>
                <li>
					<div class="auto-style8">
						<div>
							<h2 class="auto-style9">Wedding Cakes</h2>
							<p class="auto-style11">&nbsp;</p>
							&nbsp;<br />
                            
                            	<a href="Productlist5.php" class="view">View All</a>
                        </div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        <br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/weddingcake.jpg" alt="Image" class="auto-style7" />
					</div>
				</li><li>
					<div>
						<div>
							<h2>Seasonal Cakes</h2>
                            <p>&nbsp;</p>
                            <p>
                            
                            	<a href="seasonal_cakes.php" class="view">View All</a></p>
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/confirmationcakes.jpg" alt="Image" class="auto-style6" />
					</div>
				</li>
				<li>
					<div>
						<div>
							<h2>Pastries</h2>
							<p></p>
							<a href="Productlist3.php" class="view">view all</a>
						</div>
						<img src="images/pastries.jpg" alt="Image" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				&nbsp;&nbsp;
				</li>
				<li>
					<div>
						<div class="auto-style4">
							<h2>Mousse and Ganache</h2>
                            <p>&nbsp;</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="mousse_ganache.php" class="view">view all</a>
						</div>
						&nbsp;</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/ganache.jpg" alt="Image" class="auto-style5" /></li>
			</ul>
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
					<li class="first"><a href="index.php">help</a></li>
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
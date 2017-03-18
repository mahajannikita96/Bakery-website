<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<title>About - Cake Website Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style type="text/css">
        .auto-style1 {
            height: 195px;
            width: 933px;
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
						<a href="register.aspx">Sign up</a>
						<a href="signin1.aspx" class="last">Sign in</a>
                        <a href="index.aspx">Help</a>
					</div>
					<form action="#">
						<asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li><a href="index.aspx">Home</a></li>
				<li><a href="product.aspx">The Bakery shop</a></li>
				<li class="current"><a href="about.aspx">About us</a></li>
				<li><a href="services.aspx">Services</a></li>
				<li><a href="blog.aspx">Blog</a></li>
				<li><a href="contact.aspx">Contact Us</a></li>
			</ul>
			<div class="section">
			<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="about">
			<div class="aside">
				<h1>About Sweet Delights</h1>
				<span></span>
				<p></p>
				<span></span>
				<p></p>
				<span>Be Part of Our Community</span>
				<p></p>
				</div>
			<div class="section">
				<div id="visitshop">
					<div>
						<p><span>Sweets from the heart</span> Treat your loveones</p>
						 <p class="visit">visit the shop</p>
					</div>
				</div>
				<div>
					<h3>Please read</h3>
					<p>Forum</p>
				</div>
				<div>
					<h3>Address</h3>
					<p>18th Floor,Iconic Luxery <br />Brand Avenue <br /> Businees Park <br />Navi Mumbai 665 331 <br /></p>
				</div>
				<div>
					<p class="callus">CALL US <span>1-800-4216243</span></p>
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
							<a href="signin.html">Sign up for free</a>
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
					<li class="first"><h3>Help</h3></li>
					<li><h3>about cake delight</h3></li>
					<li><h3>cake delight talk</h3></li>
					<li><h3>developers</h3></li>
					<li><h3>privacy policy</h3></li>
					<li><h3>terms of use(updated 10/15/08)</h3></li>
				</ul>
				<p>Copyright &copy; 2006-2008 cake delight  All rights reserved</p>
			</div>
		</div>
	</div>
</body>
</html>
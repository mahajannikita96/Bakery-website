<%@ Page Language="C#" AutoEventWireup="true" CodeFile="blogs.aspx.cs" Inherits="blogs" %>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Blog - Sweet Delights </title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <style type="text/css">
        .auto-style1 {
            height: 197px;
            width: 929px;
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
						<a href="signup.aspx">My Account</a>
						<a href="signin.aspx" >Sign in</a>
                        <a href="index.aspx" class="last">Help</a>
					</div>
					<form action="#">
						<input type="text" id="search" maxlength="30" />
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li><a href="index.aspx">Home</a></li>
				<li><a href="product.aspx">The Bakery shop</a></li>
				<li><a href="about.aspx">About us</a></li>
				<li><a href="services.aspx">Services</a></li>
				<li class="current"><a href="blog.aspx">Blog</a></li>
				<li><a href="contact.aspx">Contact Us</a></li>
			</ul>
			<div class="section">
			<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="blog">
			<div id="articles">
				<ul>
					<li>
						<div>
							<div>
								<span class="date">Dec 3</span>
								<span class="connect">
									<a href="http://twitter.com/" target="_blank" class="twitter">Twitter</a>
									<a href="#" target="_blank" class="heart">Heart</a>
									<a href="http://facebook.com/" target="_blank" class="facebook">Facebook</a>
								</span>
								<h1>New Recipes: Fancy Desserts</h1>
								<h2>Let&#39;s bake!</h2>
								<p></p>
								<span id="tag1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tag: <a href="index.html">Cookies</a> <a href="index.html">Recipes</a></span>
							</div>
						</div>
					</li>
					<li>
						<div>
							<div>
								<span class="date">Nov 29</span>
								<span class="connect">
									<a href="http://twitter.com/fwtemplates" target="_blank" class="twitter">Twitter</a>
									<a href="#" target="_blank" class="heart">Heart</a>
									<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="facebook">Facebook</a>
								</span>
								<h1><a href="index.html">3 Day Christmas Sale on the Shop</a></h1>
								<h2>December 3-5&#44; 2011 Crazy Discounts</h2>
								<p>Pellentesque placerat sollicitudin metus eget euismod. Suspendisse potenti. Sed nibh augue, rutrum quis posuere quis, elementum et enim. Morbi varius varius odio ac facilisis. Pellentesque ut erat vulputate ligula elementum ultrices. Morbi tempor magna sed tellus pellentesque ac ultricies justo euismod. Proin vitae enim non eros eleifend aliquam. Morbi posuere nibh vitae sapien ultrices molestie. Vivamus elit nulla, dignissim non fringilla vel, facillisis et arcu.</p>
								<span id="tag">Tag: <a href="index.html">Sale</a> <a href="index.html">Promos</a> <a href="index.html">Food</a></span>
							</div>
						</div>
					</li>
				</ul>
				<div class="section">
					<a href="index.aspx" class="newpost">New Post</a>
					<a href="index.aspx" class="oldpost">Old Post</a>
				</div>
			</div>
			<div id="sidebar">
				<h2>Archives</h2>
				<h3 class="first"><a href="index.aspx">2011 <span>(60)</span></a></h3>
				<div>
					<p><a href="index.aspx">November <span>(11)</span></a></p>
					<p><a href="index.aspx">October <span>(3)</span></a></p>
					<p><a href="index.aspx">September <span>(8)</span></a></p>
					<p><a href="index.aspx">August <span>(3)</span></a></p>
					<p><a href="index.aspx">July <span>(2)</span></a></p>
					<p><a href="index.aspx">June</a></p>
					<p><a href="index.aspx">May <span>(8)</span></a></p>
					<p><a href="index.aspx">April <span>(7)</span></a></p>
					<p><a href="index.aspx">March <span>(7)</span></a></p>
					<p><a href="index.aspx">April <span>(7)</span></a></p>
					<p><a href="index.aspx">February <span>(10)</span></a></p>
					<p><a href="index.aspx">January <span>(1)</span></a></p>
				</div>
				<h3><a href="index.aspx">2010</a></h3>
				<h3><a href="index.aspx">2009</a></h3>
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
					<li class="first"><a href="index.aspx">help</a></li>
					<li><a href="index.aspx">about cake delight</a></li>
					<li><a href="index.aspx">cake delight talk</a></li>
					<li><a href="index.aspx">developers</a></li>
					<li><a href="index.aspx">privacy policy</a></li>
					<li><a href="index.aspx">terms of use(updated 10/15/08)</a></li>
				</ul>
				<p>Copyright &copy; 2006-2008 cake delight  All rights reserved</p>
			</div>
		</div>
	</div>
</body>
</html>

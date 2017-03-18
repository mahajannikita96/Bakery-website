<?php
    include 'header.php';
    if(!($_COOKIE["logged_in"])){
        header('Location: signin1.php');
    }
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
    <title>Gannache &amp; Mousse</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
    <style type="text/css">
        .auto-style1 {
            width: 945px;
            height: 211px;
        }
        .auto-style2 {
            width: 170px;
            height: 216px;
        }
        .auto-style3 {
            width: 202px;
            height: 183px;
        }
        .auto-style5 {
            width: 153px;
            height: 188px;
        }
        .auto-style6 {
            left: 30px;
            top: 22px;
            width: 398px;
            height: 197px;
        }
        .auto-style7 {
            left: 0px;
            top: 19px;
            height: 220px;
        }
        .auto-style8 {
            left: -5px;
            top: 7px;
            height: 217px;
        }
        .auto-style12 {
            left: 30px;
            top: 20px;
            height: 73px;
        }
        .auto-style13 {
            width: 230px;
            height: 212px;
        }
        .auto-style18 {
            left: -2px;
            top: 0px;
            height: 1065px;
            width: 902px;
        }
        .auto-style19 {
            height: 250px;
            width: 453px;
        }
        .auto-style20 {
            left: 30px;
            top: 20px;
            height: 197px;
            width: 198px;
        }
        .auto-style21 {
            width: 160px;
            height: 178px;
        }
        .auto-style22 {
            width: 136px;
            height: 180px;
        }
        .auto-style24 {
            left: 2px;
            top: 0px;
        }
        .auto-style25 {
            left: 2px;
            top: 0px;
            height: 214px;
        }
        .auto-style26 {
            left: 30px;
            top: 20px;
            height: 131px;
        }
        .auto-style27 {
            width: 41px;
            height: 37px;
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
				<li class="current"><a href="index.aspx">Home</a></li>
				<li ><a href="product.aspx">The Bakery shop</a></li>
				<li><a href="about.aspx">About us</a></li>
				<li><a href="services.aspx">Services</a></li>
				<li><a href="blog.aspx">Blog</a></li>
				<li><a href="contact.aspx">Contact Us</a></li>
			</ul>
			<div class="section">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>&nbsp;
			</div>
		</div>
	</div>
	<div class="container">
		
        <div class="row">
			<div class="col-md-11">
                <h1>The Bakery shop</h1>
                <br/>
                <h3>Mousse &amp; Ganache </h3>
            </div>
            <div class="col-md-1">
                <br/>    
			     <p> <a href="#"><img src="images/images.gif" class="auto-style27" /></a> </p>
            </div>
		</div>
					
		<div class="row">
            <div class="col-md-4">
				<img src="images/wcake.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="1">
                        <input type="hidden" name="cakename" value="blueberry_vanilla"><h2>Blueberry Vannila</h2><br />
				    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="125"><b>Price</b> : 125
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-4">
                <img src="images/sacramento-wedding-cakes.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="2">
                        <input type="hidden" name="cakename" value="vanilla_orange_rose"><h2>Vanilla Orange Rose</h2><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="125"><b>Price</b> : 145
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-4">
                <img src="images/exotic-flower-cake.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="3">
                        <input type="hidden" name="cakename" value="exotic_flower_cake"><h2>Exotic Flower Cake</h2><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="215"><b>Price</b> : 215
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <p></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="images/stunning-pink-wedding-cake.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="4">
                        <input type="hidden" name="cakename" value="stunning_pink_wedding_cake"><h3>Stunning Pink wedding cake</h3><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="135"><b>Price</b> : 135
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-4">
                <img src="images/wedding-celebrations-cascade-cake.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="5">
                        <input type="hidden" name="cakename" value="triple_choco_box"><h2>Triple Chocolate Box</h2><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="185"><b>Price</b> : 185
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-4">
                <img src="images/chocowc.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="6">
                        <input type="hidden" name="cakename" value="white_choco_cake"><h2>White Chocolate Cake</h2><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="215"><b>Price</b> : 225
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p></p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-2">
                <p></p>
            </div>

            <div class="col-md-4">
                <img src="images/whit0chocoe.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="7">
                        <input type="hidden" name="cakename" value="strawberry_flowers_cake"><h3>Strawberry Flowers Cake</h3><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="135"><b>Price</b> : 135
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-1">
                <p></p>
            </div>

            <div class="col-md-4">
                <img src="images/weddingcake31.gif" alt="Image" class="auto-style2" />
                <form method = "POST" action="#" id="8">
                        <input type="hidden" name="cakename" value="dark_choco_box"><h2>Dark Chocolate Cake</h2><br />
                    <div class="row">
                        <div class="col-md-3">
                             <b>Quantity</b>
                        </div>
                        <div class="col-md-9">
                             <select name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                             </select>
                        </div>
                    </div>
                    <input type="hidden" name="cakeprice" value="195"><b>Price</b> : 195
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Add to Cart" name="sbmt-btn">
                        </div>
                    </div>
                </form>
            </div> 



            <div class="col-md-1">
                <p></p>
            </div>


        </div>
    </div>
				
				
				
        </div>
	</div>
				<div id="footer">
		<div class="section">
			<div>
				<div class="aside">
					<div class="auto-style17">
						<div>
							<b>Too <span>BUSY</span> to shop?</b>
							<a href="signin.aspx">Sign up for free</a>
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



    
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

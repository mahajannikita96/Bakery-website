<?php
    include 'header.php';
    if(!($_COOKIE["logged_in"])){
        header('Location: signin1.php');
    }
    else{
        $sum_quant_sql = "SELECT SUM(quantity) as itemcount FROM product WHERE username = '".$_COOKIE["username_bake"]."' GROUP BY username";
        $result = $conn->query($sum_quant_sql);
        $items_cart = 0;
        while($row = $result->fetch_assoc()) {
            $items_cart = $row["itemcount"];
        }

        $sum_price_sql = "SELECT SUM(productprice) as itemprice FROM product WHERE username = '".$_COOKIE["username_bake"]."' GROUP BY username";
        $result = $conn->query($sum_price_sql);
        $items_price = 0;
        while($row = $result->fetch_assoc()) {
            $items_price = $row["itemprice"];
        }
    }
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
    <title>The Bakery Shop: Sweet Delights</title>
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
                <li class="current"><a href="index.php">Home</a></li>
                <li ><a href="product.php">The Bakery shop</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="section">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>&nbsp;
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="row">
            <div class="col-md-8">
                <h1>The Bakery shop</h1>
                <br/>
                <h3>Mousse &amp; Ganache</h3>
            </div>
            <div class="col-md-4">
                <br/>    
                 <p> <a href="cart.php"><img src="images/images.gif" class="auto-style27" /></a> <?php echo $items_cart; ?> items(s) in the cart. Total Price: <?php echo $items_price; ?> Rs.</p>
            </div>
        </div>
                    
        <div class="row">
            <div class="col-md-4">
                <img src="images/chocolatemoussecake.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="add_to_cart3.php" id="1">
                        <input type="hidden" name="cookiename" value="chocolate"><h2>Chocolate Mousse</h2><br />
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
                    <input type="hidden" name="cookieprice" value="65"><b>Price</b> : 65
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
                <img src="images/chocolatebiscotti.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="add_to_cart3.php" id="2">
                        <input type="hidden" name="cookiename" value="chocolate_biscotti"><h2>Chocolate Biscotti</h2><br />
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
                    <input type="hidden" name="cookieprice" value="55"><b>Price</b> : 55
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
                <img src="images/cookies1.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="add_to_cart3.php" id="3">
                        <input type="hidden" name="cookiename" value="assorted_butter_cookies"><h2>Assorted Butter Cookies</h2><br />
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
                    <input type="hidden" name="cookieprice" value="20"><b>Price</b> : 20
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
                <img src="images/Buttercookie1.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="add_to_cart3.php" id="4">
                        <input type="hidden" name="cookiename" value="biscotti"><h3>Biscotti</h3><br />
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
                    <input type="hidden" name="cookieprice" value="15"><b>Price</b> : 15
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
                <img src="images/chococookie.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="add_to_cart3.php" id="5">
                        <input type="hidden" name="cookiename" value="double_choco_cookie"><h2>Double Chocolate Cookie</h2><br />
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
                    <input type="hidden" name="cookieprice" value="55"><b>Price</b> : 55
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
                <img src="images/gingerbreadcookie.jpg" alt="Image" class="auto-style2" />
                <form method = "POST" action="add_to_cart3.php" id="6">
                        <input type="hidden" name="cookiename" value="gingerbread_cookie"><h2>Ginger Bread Cake</h2><br />
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
                    <input type="hidden" name="cookieprice" value="25"><b>Price</b> : 25
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



    
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>









<!--DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>The Bakery Shop - Sweet Delights</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <style type="text/css">
        .auto-style1 {
            width: 945px;
            height: 211px;
        }
        .auto-style2 {
            width: 225px;
            height: 216px;
        }
        .auto-style3 {
            width: 202px;
            height: 183px;
        }
        .auto-style4 {
            left: 3px;
            top: 22px;
            width: 365px;
            height: 202px;
            right: 207px;
        }
        .auto-style5 {
            width: 216px;
            height: 174px;
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
            left: -523px;
            top: -730px;
        }
        .auto-style13 {
            width: 230px;
            height: 212px;
        }
        .auto-style17 {
            left: 32px;
            top: 0px;
            height: 128px;
        }
        .auto-style18 {
            left: -2px;
            top: 0px;
            height: 783px;
            width: 902px;
        }
        .auto-style19 {
            height: 282px;
        }
        .auto-style20 {
            left: 30px;
            top: 20px;
            height: 186px;
        }
        .auto-style21 {
            width: 178px;
            height: 176px;
        }
        .auto-style22 {
            width: 204px;
            height: 197px;
        }
        .auto-style24 {
            height: 109px;
            width: 325px;
        }
        .auto-style25 {
            height: 85px;
            width: 117px;
        }
        .auto-style26 {
            width: 36px;
            height: 29px;
        }
    </style>
</head>
<body style="width: 118%">
	
	<div id="header">
		<div>
			<div>
				<div id="logo">
					&nbsp;<img src="images/logo.gif" alt="Logo" class="auto-style24"/></div>
				<div>
					<div>
						<a href="cart.php" >Hello, <?php //echo $_COOKIE["username_bake"]; ?></a>
                        <a href="logout.php"> Logout </a>
                        <a href="sample.php" class="last">Help</a>
					
                    </div>
                    <form action="#">
						<input type="text" id="search" maxlength="30" class="auto-style25" />
						<input type="submit" value="" id="searchbtn" />
                </form>
	        
                </div>
			</div>
			<ul>
				<li ><a href="index.aspx">Home</a></li>
				<li class="current"><a href="product.aspx">The Bakery shop</a></li>
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
    <form runat="server">
        	<div id="content">
		<div class="auto-style18">
			<h1>The Bakery shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1>
              <br/>
            <h3>Pastries&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h3>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/images.gif" class="auto-style26" /><asp:Label ID="Label1" runat="server"></asp:Label></p>
			<ul>
				<li>
					<div>
						<div>
							<h2>1. Chocolate Mousse</h2>
							<br /><p>Quantity :&nbsp;
                                <asp:DropDownList ID="DropDownList1" runat="server" Height="16px" Width="67px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                            </p>
                            &nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :65
                            <br /><br /><p>
                                <asp:Button ID="Button1" runat="server" Text="Add to cart " /></p>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="cart.aspx"><img src="images/chocolatemoussecake.jpg" alt="Image" class="auto-style2" /></a></div>
				</li>
				<li>
					<div>
						<div>
							<h2>2. Lemon Cheese Mousse</h2>
                            <br /><p>Quantity:
                                <asp:DropDownList ID="DropDownList2" runat="server" Height="16px" Width="52px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                            </p>
							Price :100
							<br /><br /> <p><asp:Button ID="Button2" runat="server" Text="Add to cart" /></p>
                            
                            
                        </div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="cart.aspx"><img src="images/lemon.jpg" alt="Image" class="auto-style22" /></a>
					</div>
				</li>
				<li>
					<div class="auto-style8">
						<div class="auto-style6">
							<h2>3. Noissette</h2>
						<br />	<p >Quantity:
                                <asp:DropDownList ID="DropDownList3" runat="server" Height="16px" Width="52px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList></p>
                            Price : 35
                            <br />
                            <br />
                            
                              <asp:Button ID="Button3" runat="server" Text="Add to cart" />
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
						<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.aspx"> <img src="images/Noisettep.jpg" alt="Image" class="auto-style3"  /></a>
					</div>
				</li>
				<li>
					<div>
						<div class="auto-style12">
							<h2>4. Chocolate Eclairs</h2>
                           
                            <br />
                            <p>Quantity:
                                <asp:DropDownList ID="DropDownList4" runat="server" Height="16px" Width="52px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>  </p>
                            Price: 65<br /><br />
                            
                          <asp:Button ID="Button4" runat="server" Text="Add to cart" />
                            
                           
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="cart.aspx"><img src="images/Chocolate%20Eclairs.jpg" alt="Image" class="auto-style13" /></a>
					</div>
				</li>
				<li>
					<div class="auto-style7">
						&nbsp;<div class="auto-style20">
							<h2>5. Creme Caramel</h2>
							<p > Quantity :&nbsp;
                                <asp:DropDownList ID="DropDownList5" runat="server" Height="16px" Width="52px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList></p>
                            Price : 75<br />
                            <p>
                                <asp:Button ID="Button5" runat="server" Text="Add to cart" />
                            </p>
                            </div>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.aspx"> <img src="images/ Creame%20Caramel .jpg" alt="Image" class="auto-style21" /></a>
                            </div>
				&nbsp;&nbsp;
				</li>
				<li class="auto-style19">
					<div>
						<div class="auto-style4">
							<h2>6. Cointreau</h2>
                            <p>Quantity :&nbsp;
                                <asp:DropDownList ID="DropDownList6" runat="server" Height="16px" Width="52px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>  </p>
                          Price: 55
							<p>
                                <asp:Button ID="Button6" runat="server" Text="Add to cart" /></p>
						</div>
						&nbsp;</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a href="cart.aspx"><img src="images/Cointreau.jpg" alt="Image" class="auto-style5" /></a> 
                    </li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="section">
			<div>
				<div class="aside">
					<div class="auto-style17">
						<div>
							<b>Too <span>BUSY</span> to shop?</b>
							<a href="register.aspx">Sign up for free</a>
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
					<li class="first">help</li>
					<li>about cake delight</li>
					<li>cake delight talk</li>
					<li>developers</li>
					<li>privacy policy</li>
					<li>terms of use(updated 10/15/08)</li>
				</ul>
				<p>Copyright &copy; 2006-2008 cake delight  All rights reserved</p>
			</div>
		</div>
	</div>
        </form>

   </body>
</html-->

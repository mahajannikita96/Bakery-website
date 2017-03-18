<?php
    include 'header.php';
    if(!($_COOKIE["logged_in"])){
        header('Location: signin1.php');
    }
?>
<!DOCTYPE html>
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
						<a href="cart.php" >Hello, <?php echo $_COOKIE["username_bake"]; ?></a>
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
</html>

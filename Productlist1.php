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
            height: 204px;
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
            width: 182px;
            height: 226px;
        }
        .auto-style22 {
            width: 200px;
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
            height: 182px;
            width: 203px;
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
				<li><a href="index.aspx">Home</a></li>
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
    <form id="form1" runat="server">
	<div id="content">
		<div class="auto-style18">
			<h1>The Bakery shop</h1>
            <br/>
            <h3>Chocolates and Cookies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h3>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/images.gif" class="auto-style27" /><asp:Label ID="Label1" runat="server"></asp:Label> </p>
            <ul>
				<li>
					<div>
						<div class="aside" style="left: 30px; top: 20px; height: 172px">
							<h2>Chocolate </h2><br />
							<p>&nbsp;&nbsp; Quantity&nbsp;&nbsp;&nbsp;&nbsp;
                                <asp:DropDownList ID="DropDownList1" runat="server" AutoPostBack="True" Height="16px" Width="58px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                    <asp:ListItem></asp:ListItem>
                                </asp:DropDownList>
                            <br />
                                    
                            </p>
                            &nbsp;&nbsp; Price is 25
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <br />
                            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <asp:Button ID="Button1" runat="server" Text="Add to cart" />
&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/choco1.jpg" alt="Image" class="auto-style2" /></div>
				</li>
				<li>
					<div class="auto-style25">
						<div class="auto-style26">
							<h2>Chocolate Biscotti</h2><br />
							<p>Quantity&nbsp;&nbsp; &nbsp;
                                <asp:DropDownList ID="DropDownList2" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                    <asp:ListItem></asp:ListItem>
                                </asp:DropDownList>
                            </p>
                            <p>Price : 55</p>
                            <asp:Button ID="Button2" runat="server" Text="Add to cart" />
 
                            <br />
                            <p>
                                &nbsp;</p>
                            &nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        <br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <img src="images/chocolatebiscotti.jpg" alt="Image" class="auto-style22" />
					</div>
				</li>
				<li>
					<div class="auto-style8">
						<div class="auto-style6">
							<h2>Assorted Butter Cookie</h2><br />
							<p >Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <asp:DropDownList ID="DropDownList3" runat="server" AutoPostBack="True" Height="16px" Width="58px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                    <asp:ListItem></asp:ListItem>
                                </asp:DropDownList>
                            &nbsp;</p>
                            <br /><br />
                            Price : 20<br />
                            <br />
                            <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <asp:Button ID="Button3" runat="server" Height="22px" Text="Add to cart" Width="89px" />
                            <br />
                            <br />
                            <p>	&nbsp;</p>
                            <p>&nbsp;</p>
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
						<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/cookies1.jpg" alt="Image" class="auto-style3"  />
					</div>
				</li>
				<li>
					<div class="auto-style24">
						<div class="auto-style12">
							<h2>Biscotti</h2>
                           
                            <br />
                            <p>Quantity&nbsp;&nbsp;&nbsp;
                                <asp:DropDownList ID="DropDownList4" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                    <asp:ListItem></asp:ListItem>
                                </asp:DropDownList>
                                </p>
                            <p>Price is 15</p>
                            <br />
                            <br />
                                                        <br />
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <asp:Button ID="Button4" runat="server" Text="Add to cart" />
                                <br />
                                </p>
                            &nbsp;<br />
                            <br />
                            <br />
                            <br />
                           
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/Buttercookie1.jpg" alt="Image" class="auto-style13" />
					</div>
				</li>
				<li>
					<div class="auto-style7">
						&nbsp;<div class="auto-style20">
							<h2>Double Chocolate cookie</h2><br />
							<p >Quantity
                                 <asp:DropDownList ID="DropDownList5" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                    <asp:ListItem></asp:ListItem>
                                </asp:DropDownList>
                                <br />
							</p>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Price : 20<br />
                            <br />
&nbsp;&nbsp;&nbsp;
                            <asp:Button ID="Button5" runat="server" Text="Add to cart" />
                            <br />
                            </div>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/chococookie.jpg" alt="Image" class="auto-style21" />
					</div>
				&nbsp;&nbsp;
				</li>
				<li class="auto-style19">
					<div>
						<div class="auto-style4">
							<h2>Ginger bread cookie</h2><br />
                            <p>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <asp:DropDownList ID="DropDownList6" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                    <asp:ListItem></asp:ListItem>
                                </asp:DropDownList>
                                </p>
                            <p>&nbsp;&nbsp;&nbsp;
                            Price : 20</p>
                           <br />
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <asp:Button ID="Button6" runat="server" Text="Add to cart" />
                                &nbsp;</p>
						</div>
						&nbsp;</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="images/gingerbreadcookie.jpg" alt="Image" class="auto-style5" /> </li>
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
   
    </form>
   
</body>
</html>

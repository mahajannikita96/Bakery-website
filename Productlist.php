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
            width: 185px;
            height: 197px;
        }
        .auto-style4 {
            left: 30px;
            top: 20px;
            width: 185px;
            height: 186px;
            right: 235px;
        }
        .auto-style5 {
            width: 210px;
            height: 194px;
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
            height: 157px;
        }
        .auto-style21 {
            width: 206px;
            height: 190px;
        }
        .auto-style23 {
            height: 31px;
            width: 41px;
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
				<li><a href="index.php">Home</a></li>
				<li class="current"><a href="product.php">The Bakery shop</a></li>
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
    <form id="form1" runat="server">
	<div id="content">
		<div class="auto-style18">
			<h1>The Bakery shop</h1>
            <br/>
            <h3>Speciality Cakes</h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/images.gif" class="auto-style23" /><asp:Label ID="Label1" runat="server"></asp:Label> 
            <br />
			<br />
			<ul>
				<li>
					<div>
						<div>
							<h2>Fraisier</h2>
							<br />
                          <p>  Quantity : <asp:DropDownList ID="DropDownList1" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                                </p>
                            <br />
                            Price&nbsp;&nbsp;&nbsp;&nbsp; : 75<br /><br />
                            
                                <a href="cart.php"><asp:Button ID="Button1" runat="server" Text="Add to cart" /></a>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/Fraiser.jpg" alt="Image" class="auto-style2" /></div>
				</li>
				<li>
					<div>
						<div>
							<h2>Verger</h2>
                            <br />
							Quantity&nbsp; :<asp:DropDownList ID="DropDownList2" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                               <br />
                           &nbsp; 
                            <br />
                            Price : 100 <br />
                            <br />
                            &nbsp;
                             <a href="cart.php">
                                <asp:Button ID="Button2" runat="server" Text="Add to cart" /></a>
                           
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/verger.jpg" alt="Image" />
					</div>
				</li>
				<li>
					<div class="auto-style8">
						<div class="auto-style6">
							<h2>Strawberry short cake</h2><br />
							Quantity :&nbsp;&nbsp; &nbsp;<asp:DropDownList ID="DropDownList3" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                                &nbsp;<br />
                           &nbsp;&nbsp; 
                            <br />
                            Price :&nbsp; 45
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                            <br />
                            &nbsp;&nbsp;
                                <asp:Button ID="Button3" runat="server" Text="Add to cart" />
                            
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
						 <a href="cart.php"><img src="images/strawberryshort.jpg" alt="Image" class="auto-style3"  /></a>
					</div>
				</li>
				<li>
					<div>
						<div class="auto-style12">
							<h2>Mille Feuille Cake</h2><br />
							&nbsp; Quantity : &nbsp;<asp:DropDownList ID="DropDownList4" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                                
                            <br />
                            <br />
&nbsp;
                                
                            Price   : 35
                            
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                            <br />
                            &nbsp;
                               <a href="cart.php">  <asp:Button ID="Button4" runat="server" Text="Add to cart" /></a>
							&nbsp;</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.php"> <img src="images/Mille.jpg" alt="Image" class="auto-style13" /></a>
					</div>
				</li>
				<li>
					<div class="auto-style7">
						&nbsp;<div class="auto-style20">
							<h2>&nbsp; BlackForest&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br />
				 Quality : &nbsp;<asp:DropDownList ID="DropDownList5" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                            
                            <br />
                            <br />
                            
                            Price : 115 
                            <br />
                            <br />
                                <asp:Button ID="Button5" runat="server" Text="Add to cart" />
                           
                           <br />
                            </div>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/Blackforest.gif" alt="Image" class="auto-style21" />
					</div>
				&nbsp;&nbsp;
				</li>
				<li class="auto-style19">
					<div>
						<div class="auto-style4">
							<h2>St. Honore</h2>
                            <br />
                            Quantity :&nbsp;  <asp:DropDownList ID="DropDownList6" runat="server" AutoPostBack="True" Height="16px" Width="72px">
                                    <asp:ListItem>1</asp:ListItem>
                                    <asp:ListItem>2</asp:ListItem>
                                    <asp:ListItem>3</asp:ListItem>
                                    <asp:ListItem>4</asp:ListItem>
                                    <asp:ListItem>5</asp:ListItem>
                                </asp:DropDownList>
                               
                            <br />
                            <br />
                               
                            Price : 90
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                            <br />
                            <br />
                            &nbsp;
                                <asp:Button ID="Button6" runat="server" Text="Add to cart" />
                           
						</div>
						&nbsp;</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<img src="images/sthonor.jpg" alt="Image" class="auto-style5" /> </li>
			</ul>
            
		</div>
	</div>
        </form>
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

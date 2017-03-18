<%@ Page Language="C#" AutoEventWireup="true" CodeFile="contacts.aspx.cs" Inherits="contacts" %>

<!DOCTYPE html>
<script runat="server"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
	<title>Contact Us - Cake Delights Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <style type="text/css">
        .auto-style4 {
            height: 672px;
        }
        .auto-style8 {
            left: 0px;
            top: -13px;
            height: 729px;
        }
        .auto-style11 {
            height: 198px;
            width: 914px;
        }
        .auto-style14 {
            height: 751px;
     
        }
        </style>
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="index.html"><img src="images/logo.gif" alt="Logo"/></a>
				</div>
				<div>
					<div>
						<a href="register.aspx">Sign up</a>
                        <a href="signin1.aspx" >Sign in</a>
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
				<li><a href="product.aspx">The Pastry shop</a></li>
				<li><a href="about.aspx">About us</a></li>
				<li><a href="services.aspx">Services</a></li>
				<li><a href="blog.aspx">Blog</a></li>
				<li class="current"><a href="contact.aspx">Contact Us</a></li>
			</ul>
			<div class="section" style="left: 0px; top: 0px; width: 921px">
	<img src="images/bakeryback.gif" alt="Image" class="auto-style11"/>
			</div>
		</div>
	</div>
	<div id="content" class="auto-style14">
		<div class="auto-style8">
			<h1>Contact us</h1>
			<div id="visitshop">
				<div>
					<p><span>Sweets from the heart</span> Treat your loveones</p>
					 <a href="register.aspx" class="visit">visit the shop</a>
				</div>
			</div>
			<form runat="server" class="auto-style4">
				<p>If you need assistance feel free to e-mail us.</p>
				<table>
							<tr>
								<td>
                                    <asp:Label ID="name" runat="server" Text="Name"></asp:Label></td>
								<td >
                                    <asp:TextBox ID="TextBox1" runat="server" ></asp:TextBox>&nbsp;</td>
							</tr>
							<tr>
								<td>
                                    <asp:Label ID="email" runat="server" Text="Email Address"></asp:Label></td>
								<td>
                                    <asp:TextBox ID="TextBox2" runat="server" ></asp:TextBox></td>
							</tr>
							<tr>
								<td >
                                    <asp:Label ID="sub1" runat="server" Text="Subject"></asp:Label></td>
								<td >
                                    &nbsp;&nbsp;&nbsp;
                                    <asp:TextBox ID="TextBox5" runat="server"></asp:TextBox>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
							</tr>
                    <tr>
								<td>
                                <asp:Button ID="Button1" runat="server" Text="Submit"/>
                                </td>
								<td>
                                    <asp:Button ID="Button2" runat="server" Text="Reset" Width="82px" /></td>
							</tr>
                    							</table>
                <h5>Comments</h5>
                <asp:TextBox ID="TextBox3" runat="server" TextMode="MultiLine" Height="170px" Width="518px"></asp:TextBox>
                
                &nbsp;
                
                <asp:Button ID="Button3" runat="server" Text="Send" />
               
                
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
                
			</form>
		</div>
	</div>
    <br />
	<div id="footer">
		<div class="section">
			<div>
				<div class="aside">
					<div class="signup" style="left: -6px; top: 0px; height: 166px;">
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
					<li><a href="index.html">about cake delight</a></li>
					<li><a href="index.html">cake delight talk</a></li>
					<li><a href="index.html">developers</a></li>
					<li><a href="index.html">privacy policy</a></li>
					<li><a href="index.html">terms of use(updated 10/15/08)</a></li>
				</ul>
				<p>Copyright &copy; 2006-2008 cake delight  All rights reserved</p>
			</div>
		</div>
	</div>
</body>
</html>

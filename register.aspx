<!--%@ Page Language="C#" AutoEventWireup="true" CodeFile="register.aspx.cs" Inherits="_Default" %-->
<!DOCTYPE html>
<script runat="server">
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>Sign Up - Sweet Delights </title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
    <style type="text/css">
        .auto-style1 {
            width: 326px;
            height: 108px;
        }
        .auto-style2 {
            width: 944px;
            height: 337px;
            margin-top: 0px;
        }
        .auto-style3 {
            left: 1px;
            top: -12px;
            height: 565px;
            width: 498px;
        }
        .auto-style4 {
            left: 0px;
            top: -58px;
            width: 540px;
            height: 576px;
        }
        .auto-style5 {
            margin-bottom: 0px;
        }
        .auto-style6 {
            height: 41px;
        }
        .auto-style7 {
            left: 0px;
            top: 0px;
            height: 806px;
            margin-bottom: 37px;
        }
        .auto-style8 {
            width: 312px;
        }
        .auto-style10 {
            width: 312px;
            height: 26px;
        }
        .auto-style11 {
            height: 26px;
        }
        </style>
</head>
<body>
	<div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="index.aspx"><img src="images/logo.gif" alt="Logo" class="auto-style1"/></a>
				</div>
				<div>
					<div>
						<a href="register.aspx">SignUp</a>
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
				<li><a href="product.aspx">The Bakery shop</a></li>
				<li><a href="about.aspx">About us</a></li>
				<li><a href="services.aspx">Services</a></li>
				<li><a href="blog.aspx">Blog</a></li>
				<li><a href="contact.aspx">Contact Us</a></li>
			</ul>
			<div class="section" style="left: 0px; top: -11px; width: 961px; height: 348px">
				<img src="images/bakeryback.gif" alt="Image" class="auto-style2"/>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="auto-style7">
			<div id="account" class="auto-style4">
				<div class="auto-style3">
					<form id="form1" runat="server">
						<span>SIGN-UP</span>
						<table class="auto-style5">
							<tr>
								<td class="auto-style11">
                                    <asp:Label ID="email" runat="server" Text="Email"></asp:Label></td>
								<td class="auto-style10">
                                    <asp:TextBox ID="TextBox1" runat="server" ></asp:TextBox>
                                  </td>
                                <td class="auto-style11">
                                      <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ErrorMessage="Invalid Email Address" ControlToValidate="TextBox1" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="You must enter a email" ControlToValidate="TextBox1" Width="154px"></asp:RequiredFieldValidator>
                                    &nbsp;</td>
							</tr>
							<tr>
								<td>
                                    <asp:Label ID="login" runat="server" Text="Username"></asp:Label></td>
								<td class="auto-style8">
                                    <asp:TextBox ID="TextBox2" runat="server" OnTextChanged="TextBox2_TextChanged" style="height: 22px" ></asp:TextBox>
                                    </td>
                                <td>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="TextBox2" ErrorMessage="Enter Username"></asp:RequiredFieldValidator>
                                </td>
							</tr>
							<tr>
								<td>
                                    <asp:Label ID="pass1" runat="server" Text="password"></asp:Label></td>
								<td class="auto-style8">
                                    <asp:TextBox ID="TextBox3" runat="server" TextMode="Password"></asp:TextBox>
                                    </td>
                                <td>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="TextBox3" ErrorMessage="Password not entered .." Width="157px"></asp:RequiredFieldValidator>
                                    <asp:RangeValidator ID="RangeValidator1" runat="server" ControlToValidate="TextBox3" ErrorMessage="Password length should be greater than 6" MaximumValue="8" MinimumValue="1"></asp:RangeValidator>
                                    <asp:CompareValidator ID="CompareValidator1" runat="server" ControlToCompare="TextBox3" ErrorMessage="incorrect passwod" ControlToValidate="TextBox4"></asp:CompareValidator>
&nbsp;                               
                                </td>
							</tr>
							<tr>
								<td>
                                    <asp:Label ID="pass2" runat="server" Text="Confirm password"></asp:Label></td>
								<td class="auto-style8">
                                    <asp:TextBox ID="TextBox4" runat="server"  TextMode="Password" Width="101px"></asp:TextBox></td>
							</tr>
							<tr>
								<td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <asp:Button ID="Button1" runat="server" Text="sign up" OnClick="Button1_Click" />
                                &nbsp;<br />
&nbsp;&nbsp;
                                </td>
								<td class="rememberme" style="height: 41px; width: 312px;"><label for="rememberme"><input type="checkbox" id="rememberme" /> Remember me</label>
                                </td>
                                                       <td>
                                                           
			   <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT * FROM [registers]"></asp:SqlDataSource>
				
                                                       </td>
                            </tr>
						<tr><td>
                            <asp:Label ID="Label1" runat="server" Width="80px"></asp:Label></td></tr>
                        </table>
				
					</form>
				</div>
			</div>
		  </div>
	</div>
	<div id="footer">
		<div class="section" style="height: 370px; margin-top: 0px">
			<div>
				<div class="aside">
					<div>
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
					<li class="first"><a href="index.html">help</a></li>
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
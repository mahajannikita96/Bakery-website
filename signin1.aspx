<%@ Page Language="C#" AutoEventWireup="true" CodeFile="signin1.aspx.cs" Inherits="signin1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
	<title>Sign In - sweet Delights </title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <style type="text/css">
        .auto-style1 {
            width: 880px;
            height: 172px;
            margin-bottom: 0px;
        }
        .auto-style2 {
            width: 192px;
            height: 50px;
        }
        .auto-style3 {
            left: -1px;
            top: 3px;
        }
        .auto-style4 {
            width: 258px;
        }
        .auto-style5 {
            height: 37px;
        }
        .auto-style6 {
            height: 38px;
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
						<a href="register.aspx">Sign Up</a>
						<a href="sample.aspx">Help</a>
						<a href="signin1.aspx" class="last">Sign in</a>
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
				<li class="auto-style2"><a href="contact.aspx">Contact Us</a></li>
			</ul>
			<div class="section">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bakeryback.gif" alt="Image" class="auto-style1"/>
			    <br />
                <br />
                <br />
                <br />
			</div>
		</div>
	</div>
	<div id="content">
		<div class="auto-style3">
			<div id="account">
				<div>
					<form id="form1" runat="server">
						<span>SIGN-IN</span>
						<table>
							<tr>
								<td>
                                    <asp:Label ID="Label1" runat="server" Text="Username"></asp:Label></td>
								<td class="auto-style4">
                                    <asp:TextBox ID="TextBox1" runat="server" Width="156px" OnTextChanged="TextBox1_TextChanged"  ></asp:TextBox>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="TextBox1" ErrorMessage="Enter Username" Height="16px" Width="116px"></asp:RequiredFieldValidator>
&nbsp; </td>
							</tr>
							<tr>
								<td>
                                    <asp:Label ID="Label2" runat="server" Text="Password"></asp:Label></td>
								<td class="auto-style4">
                                    <asp:TextBox ID="TextBox2" runat="server" TextMode="Password" Width="159px" OnTextChanged="TextBox2_TextChanged" ></asp:TextBox>
                                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="TextBox2" ErrorMessage="Enter Password"></asp:RequiredFieldValidator>
                                </td>
							</tr>
							<tr>
								<td class="auto-style5"></td>
								<td class="rememberme" style="width: 258px; height: 37px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <asp:CheckBox ID="CheckBox1" runat="server" AutoPostBack="True" CausesValidation="True" OnCheckedChanged="CheckBox1_CheckedChanged" Text="Remember me " TextAlign="Left" />
&nbsp;</td>
							</tr>
                            <tr>
                                <td class="auto-style6">    <asp:Button ID="Button1" runat="server" Text="Sign in" Width="71px" OnClick="Button1_Click" style="height: 26px" />  </td>
                                <td class="auto-style6">
                                    <asp:Button ID="Button2" runat="server" Text="Clear" Width="64px" OnClick="Button2_Click" />
                                  
                                </td>
                            </tr>
						</table>
                    
                        <br />
                        <asp:Label ID="Label3" runat="server" Width="45px"></asp:Label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br />
					    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT [username], [pass1] FROM [registers]"></asp:SqlDataSource>
					</form>
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
							<a href="signin.aspx">Sign up for free</a>
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

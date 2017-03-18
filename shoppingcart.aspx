<%@ Page Title="" Language="C#" MasterPageFile="~/cartmaster.master" AutoEventWireup="true" CodeFile="shoppingcart.aspx.cs" Inherits="shoppingcart" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    	
</asp:Content>
  
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div id="body">
    
   <hr/>
        
    <div id="head">

        <br /><br />
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MY &nbsp; CART</h1>
    </div>
    <hr />    
   <table style="margin-top:20px;">
   <tr><td><asp:Label Text="" ID="lbl_nocart" runat="server" Font-Size="Large"/></td></tr>
    <tr>
        <td id="cart_td">
            <asp:GridView ID="GV_My_Cart" DataSourceID="SDS_My_Cart" runat="server" AutoGenerateColumns="False" CellPadding="4" 
                ForeColor="#333333" GridLines="None" Width="800px" DataKeyNames="cart_id" >
                                
                <AlternatingRowStyle BackColor="White" />
                                
                <Columns>
                   <asp:BoundField HeaderText="ProductId" DataField="product_id"/>
                   <asp:BoundField HeaderText="ProductName" DataField="product_name"/>

                <asp:TemplateField>
                    <HeaderTemplate>
                        Quantity
                    </HeaderTemplate>
                    <ItemTemplate>
                        <asp:TextBox runat="server" ID="txt_Quantity" Text='<%# Bind("quantity") %>'></asp:TextBox>
                    </ItemTemplate>
                
                </asp:TemplateField>
                <asp:BoundField HeaderText="Price" DataField="price" />
                <asp:BoundField HeaderText="Amount" DataField="amount" />
                 <asp:TemplateField ItemStyle-HorizontalAlign="Center">
                        <HeaderTemplate>
                            Remove Item
                        </HeaderTemplate>
                        <ItemTemplate>
                           <asp:CheckBox runat="server" ID="chb_Remove" />
                        </ItemTemplate>

<ItemStyle HorizontalAlign="Center"></ItemStyle>
                    </asp:TemplateField>
                
                </Columns>
   
                
                <EditRowStyle BackColor="#2461BF" />
                <FooterStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
                <HeaderStyle Font-Size="Large"  BackColor="#507CD1" Font-Bold="True" ForeColor="White" 
                Height="40px" HorizontalAlign="Center" BorderStyle="Ridge" BorderWidth="1px"/>
                <PagerStyle BackColor="#2461BF" ForeColor="White" HorizontalAlign="Center" />
                <RowStyle HorizontalAlign="Center" Height="30px" BorderStyle="Ridge" BorderWidth="1px" Font-Size="Large" BackColor="#EFF3FB" />
                <SelectedRowStyle BackColor="#D1DDF1" Font-Bold="True" ForeColor="#333333" />
                <SortedAscendingCellStyle BackColor="#F5F7FB" />
                <SortedAscendingHeaderStyle BackColor="#6D95E1" />
                <SortedDescendingCellStyle BackColor="#E9EBEF" />
                <SortedDescendingHeaderStyle BackColor="#4870BE" />
   
   
            </asp:GridView>
        
        </td>
    </tr>
    <tr>
                <td >
                    <asp:Label ID="lbl_static" runat="server" Text="Total Price:" /><strong><asp:Label Text="" ID="lbl_Total_price" runat="server" /></strong>
                </td>
            </tr>

    <tr>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <asp:Button ID="btn_update" Text="Update Cart" BackColor="white" 
                ForeColor="black"  runat="server"  Height="42px" 
                Width="150px"/>
            <strong>
            <asp:Button ID="btn_placeorder" Text="Place Order" BackColor="Orange" 
                ForeColor="white"  runat="server" Height="45px" Width="171px"/>
            </strong>
        </td>


    </tr>
   
   </table>
   </div>
    <asp:HiddenField runat="server" ID="sessionId"/>
   <!-- here sql configure-->
</asp:Content>


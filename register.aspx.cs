using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.HtmlControls;

using System.Web.UI.WebControls;
using System.Data.SqlClient;

public partial class _Default : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\nikita\Documents\Visual Studio 2015\Projects\Bakery_System\App_Data\Database2.mdf;Integrated Security=True");
 

    protected void Page_Load(object sender, EventArgs e)
    {
  
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
       
            con.Open();
            SqlCommand cmd = con.CreateCommand();

            cmd.CommandType = System.Data.CommandType.Text;
            cmd.CommandText = "insert into registers values('" + TextBox1.Text + "','" + TextBox2.Text + "','" + TextBox3.Text + "','" + TextBox4.Text + "')";
        con.Close();
    }


    protected void TextBox2_TextChanged(object sender, EventArgs e)
    {
        
        string usernm = "select * FROM registers WHERE username='" + TextBox2.Text + "'";
        SqlCommand cmd = new SqlCommand(usernm, con);
        con.Open();
        SqlDataReader dr = cmd.ExecuteReader();
        if(dr.HasRows)
        {
            Session["username"] = TextBox2.Text;
            Label1.Text= "Username already exist";
        }
        else
        {
           // Response.Write( "Registration Successfull");
            Response.Redirect("index.aspx");
        }
        con.Close();
    }
  
}
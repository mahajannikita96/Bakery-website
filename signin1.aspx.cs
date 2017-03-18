using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;
using System.Data;
using System.Drawing;
using System.Configuration;
using System.Web.Security;
public partial class signin1 : System.Web.UI.Page
{

    SqlConnection con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\nikita\Documents\Visual Studio 2015\Projects\Bakery_System\App_Data\Database2.mdf;Integrated Security=True");




    protected void Page_Load(object sender, EventArgs e)
    {
        TextBox1.Focus();
       
     }

    protected void Button1_Click(object sender, EventArgs e)
    {
      //  SqlDataReader dr = cmd.ExecuteReader();
        SqlDataAdapter da = new SqlDataAdapter();
        da.SelectCommand = new SqlCommand();
        da.SelectCommand.Connection = con;
        da.SelectCommand.CommandText = "user_login";
        da.SelectCommand.CommandType = System.Data.CommandType.StoredProcedure;
        da.SelectCommand.Parameters.AddWithValue("@username", TextBox1.Text);
        da.SelectCommand.Parameters.AddWithValue("@pass1", TextBox2.Text);

      

    }




    protected void CheckBox1_CheckedChanged(object sender, EventArgs e)
    {  if (CheckBox1.Checked)
        {
            Response.Cookies["userName"].Expires = DateTime.Now.AddDays(30);
            Response.Cookies["passwd"].Expires = DateTime.Now.AddDays(30);
        }
    else
        {
            Response.Cookies["userName"].Expires = DateTime.Now.AddDays(-1);
            Response.Cookies["passwd"].Expires = DateTime.Now.AddDays(-1);
        }
        Response.Cookies["userName"].Value = TextBox1.Text.Trim();
        Response.Cookies["passwd"].Value = TextBox2.Text.Trim();

    }


    protected void Button2_Click(object sender, EventArgs e)
    {
        TextBox1.Text = "";
        TextBox2.Text = "";
       
    }

    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {
        string usernm = "Select username FROM registers WHERE username='" + TextBox1.Text + "'";
        SqlCommand cmdusr= new SqlCommand(usernm, con);
        con.Open();
        SqlDataReader dr = cmdusr.ExecuteReader();
     //   string user1 = cmdusr.ExecuteScalar().ToString().Replace(" ", "");
        if (dr.HasRows)
        {
            Session["username"] = TextBox2.Text;
            Server.Transfer("index.aspx", true);
        }
        else
        {
          Label3.Text="username  is not  correct ...Enter Again";
            TextBox1.Text = "";
        }
        con.Close();
    }

    protected void TextBox2_TextChanged(object sender, EventArgs e)
    {
        string passwd = "Select pass1 FROM registers WHERE pass1='" + TextBox2.Text;
        SqlCommand cmdpass = new SqlCommand(passwd, con);
        con.Open();
        SqlDataReader dr1 = cmdpass.ExecuteReader();
        // string pass1 = cmdpass.ExecuteScalar().ToString().Replace(" ", "");
        if (dr1.HasRows)
        {
            Session["passwd"] = TextBox2.Text;
            Server.Transfer("index.aspx", true);
        }
        else
        {
            Label3.Text="Password is not  correct ...Enter Again";
            TextBox2.Text = " ";
        }
        con.Close();
    }
}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PEAR.com - Your Online PC Store</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    
  </head>
  <body>
    <div id="container">
      
      <div id="header" > <img src="images/logosmall.png"
          alt="" height="200" width="200" style="float:right; margin:60px 720px 15px 15px;> </div>
      <div id="banner"></div>
      <div id="menu_panel">
        <ul>
          <li><a href="productsuser.php"
              target="_parent">Products</a></li>
          <li><a href="cart.php"
              target="_parent">Cart</a></li>
          <li><a class="current" href="update.php">Update Info</a></li>
		  <li><a href="#"></a></li>
		  <li><a href="#"></a></li>
		  <li><a href="#"></a></li>
		  <li><a href="#"></a></li>
		  <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
      <!-- end of menu -->
      <div id="content">
        <div id="content_left">
		<div class="cleaner_with_height">&nbsp;</div>
		  		  
<?php
/* include db connection file */
include("db.php");

/* update process */
if(isset($_POST['Update'])){
	$Realname = $_POST['Realname'];
	$Contact = $_POST['Contact'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	
	$sql = "UPDATE currentuser SET
			Contact = '$Contact',
			Address = '$Address',
			Email = '$Email'";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Update success</h5>";
}
/* delete process */
if(isset($_POST['Delete'])){
	$Realname = $_POST['Realname'];
	$sql = "DELETE FROM products WHERE Realname = $Realname";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Delete success</h5>";
}

echo "<br><a href='cart.php' style='color:black;'>Back</a>";
/* close connection */
mysql_close($bd);
?>
		  
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
		<div id="content_right">
          
          <div class="templatemo_right_section">
            <h4>Categories</h4>
            <div class="templatemo_right_section_content">
              <ul>
                <li><a href="#" style="text-decoration:none; color:silver;">Computer Hardware</a></li>
                <li><a href="#" style="text-decoration:none; color:silver;">Laptops</a></li>
                <li><a href="#" style="text-decoration:none; color:silver;">Software</a></li>
                <li><a href="#" style="text-decoration:none; color:silver;">Accessories</a></li>
              </ul>
            </div>
          </div>
          <div class="templatemo_right_section">
            <h4><br>
            </h4>
            <div class="templatemo_right_section_content">&nbsp; <br>
            </div>
          </div>
        </div>
        <!-- end of content right-->
        <div class="cleaner">&nbsp;</div>
      </div>
      <div id="footer_panel">
          <div id="footer_center"> PEAR.com &copy;Copyright.2014<br>
		</div>
        <div class="cleaner">&nbsp;</div>
      </div>
    </div>
    <div align="center"><br>
    </div>
  </body>
</html>
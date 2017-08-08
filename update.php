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
          <li><a class="current" href="#">Update Info</a></li>
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
          <h2>Update Info</h2>
		  <?php
/* includ db connection file*/
include("db.php");
/* execute SQL statement */
$sql = "SELECT * FROM currentuser";
$query = mysql_query($sql) or die ("Error: " . mysql_error());
$row = mysql_num_rows($query);
if($row == 0){
	echo "No record found";
	echo "<br><a href='cart.php'>Back</a>";
}
else{
	$r = mysql_fetch_assoc($query);
	$Realname = $r['Realname'];
	$Contact = $r['Contact'];
	$Address = $r['Address'];
	$Email = $r['Email'];
?>
	<html>
<body>
<form name="form" method="post" action="process1.php">
<table border="0">
<tr><td>Name:</td><td><input type="text" name="Realname" value="<?php echo $Realname; ?>" size="50"></td></tr>
<tr><td>Contact:</td><td><input type="text" name="Contact" value="<?php echo $Contact; ?>" size="50">*can be updated</td></tr>
<tr><td>Address:</td><td><input type="text" name="Address" value="<?php echo $Address; ?>" size="50">*can be updated</td></tr>
<tr><td>Email: </td><td><input type="text" name="Email" value="<?php echo $Email; ?>" size="50">*can be updated</td></tr>
<tr><td colspan="2" align="center">
<input type="submit" name="Update" value="Update">
<a href="productsuser.php" style="color:black;">Back</a></td>
</table>
</form>
</body>
</html>
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
        <!-- end of ocntent left -->
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
<?php
}
mysql_close($bd);
?>
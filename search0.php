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
          <li><a href="admin.php">Products</a></li>
          <li><a href="users.php"
              target="_parent">Users</a></li>
		  <li><a href="orders.php">Orders</a></li>
          <li><a href="search.php" class="current">Update Product</a></li>
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
          <h2>Searched Product</h2>
		  	<?php
/* includ db connection file*/
include("db.php");


$ID = $_POST['search'];

/* execute SQL statement */
$sql = "SELECT * FROM products 
	WHERE ID = $ID";
$query = mysql_query($sql) or die ("Error: " . mysql_error());
$row = mysql_num_rows($query);
if($row == 0){
	echo "No record found";
	echo "<br><a href='search.php' style='color:black;'>Back</a>";
}
else{
	$r = mysql_fetch_assoc($query);
	$ID = $r['ID'];
	$Product = $r['Product'];
	$Description = $r['Description'];
	$Price = $r['Price'];
?>
<html>
<body>
<form name="form" method="post" action="process0.php">
<table border="0">
<tr><td>ID:</td><td><input type="text" name="ID" value="<?php echo $ID; ?>"></td></tr>
<tr><td>Product:</td><td><input type="text" name="Product" value="<?php echo $Product; ?>"></td></tr>
<tr><td>Description:</td><td><input type="text" name="Description" value="<?php echo $Description; ?>">*can be updated</td></tr>
<tr><td>Price: RM</td><td><input type="text" name="Price" value="<?php echo $Price; ?>">*can be updated</td></tr>
<tr><td colspan="2" align="center">
<input type="submit" name="Update" value="Update">
<input type="submit" name="Delete" value="Delete">
<a href="search.php" style="color:black;">Back</a></td>
</table>
</form>
</body>
</html>
		  
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
		<div id="content_right">
          
          <div class="templatemo_right_section">
            
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
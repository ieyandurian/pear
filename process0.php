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
          <li><a href="search.php" class="current">Update Product</a></li>
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
	$ID = $_POST['ID'];
	$Description = $_POST['Description'];
	$Price = $_POST['Price'];
	
	$sql = "UPDATE products SET
			Description = '$Description',
			Price = '$Price'
			WHERE ID = $ID";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Update success</h5>";
}
/* delete process */
if(isset($_POST['Delete'])){
	$ID = $_POST['ID'];
	$sql = "DELETE FROM products WHERE ID = $ID";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Delete success</h5>";
}
echo "<br><a href='search.php' style='color:black;'>Back</a>";
/* close connection */
mysql_close($bd);
?>
		  
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
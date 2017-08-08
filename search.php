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
		<h2>Update Product</h2>
		 <form method="post" action="search0.php">
		<h6>Product ID: </h3><input type="text" name="search">
		<input type="submit" value="Search">
		</form>
          <div class="cleaner_with_height">&nbsp;</div>
		  		  
		  <?php
				include('db.php');
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM products where  Category ='$filter'");
				}
				else
				{
					$result = mysql_query("SELECT * FROM products");
				}
				while($row=mysql_fetch_assoc($result))
				{
					echo 
					'<div class="product_box">
					<h7>'.$row['ID'].'<br></h7>
					<h3>'.$row['Product'].'<br>
					</h3>
					<img src="images/products/'.$row['ID'].'.jpg" width="200" height="150" alt="image"/>
					<p>'.$row['Description'].'<br>
					</p>
					<div class="price">PRICE:<span>RM '.$row['Price'].'</span></div>
					<div class="buynow"><a href="addtocart.php?Product='.$row['Product'].'">Buy Now</a></div>
					</div>';
				}
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
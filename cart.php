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
          <li><a class="current" href="cart.php"
              target="_parent">Cart</a></li>
          <li><a href="update.php">Update Info</a></li>
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
          <h2>Shopping Cart</h2>
		  <form method="POST" action="order.php" >
		  <?php
				include('db.php');
				
				$currentuser = mysql_query("SELECT * FROM currentuser");
				while($urow=mysql_fetch_assoc($currentuser))
				{
				echo 'Name: '.$urow['Realname'].' </br/>';
				echo 'Contact:  '.$urow['Contact'].'</br/>';
				echo 'Address:  '.$urow['Address'].'</br/>';
				echo 'Email: '.$urow['Email'].'</br/>';
				}
				
				$result = mysql_query("SELECT * FROM cart");
				
				echo'<br><hr><br><table border="1" bgcolor="555555" cellpadding="0" cellspacing="0" width="100%">
						<th>ID</th><th>Product</th><th>Item Count</th><th>Actions</th>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr>
							<td width="40" align="center">'.$row['ID'].'</td>
							<td>'.$row['Product'].'</td>
							<td align="right" width="100"><input type="textbox" value="'.$row['ItemCount'].'" id="t'.$row['ID'].'" name="t'.$row['ID'].'"/></td>
							<td width="80" align="center"><a href="deletecart.php?ID='.$row['ID'].'" style="color:black;">DELETE</a></td>
						</tr>';
				}
				echo '</table><br><br>';?>
				<input type="submit" value="Submit Order"" />
				<?php
				echo '<a href="clearcart.php" style="color:white;">Clear Cart</a>';
				?>
				
				</form>
		  
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
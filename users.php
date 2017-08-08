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
              target="_parent" class="current">Users</a></li>
          <li><a href="orders.php">Orders</a></li>
          <li><a href="search.php">Update Product</a></li>
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
          <h2>User List</h2>
		  
		  
		  <?php
				include('db.php');
				
					$result = mysql_query("SELECT * FROM users");
				
				echo'<table border="1" bgcolor="555555" cellpadding="0" cellspacing="0">
						<th>Username</th><th>Password</th><th>Role</th><td>Realname</td>
						<th>Address</th><th>Contact</th><th>Email</th><th>Actions</th>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr>
							<td>'.$row['Username'].'</td>
							<td>'.$row['Password'].'</td>
							<td>'.$row['Role'].'</td>
							<td>'.$row['Realname'].'</td>
							<td>'.$row['Address'].'</td>
							<td>'.$row['Contact'].'</td>
							<td>'.$row['Email'].'</td>
							<td><a href="deleteuser.php?ID='.$row['ID'].'" style="color:black;">DELETE</a></td>
						</tr>';
				}
				echo '</table>';
				
				?>
		  
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
        <!-- end of ocntent left -->
        
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
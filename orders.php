<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <script type="text/javascript">

function counting(){
	num1 = parseFloat(document.borang.num1.value);
	num2 = parseFloat(document.borang.num2.value);
	operator = document.borang.operator.value;
	
	if(operator == "tambah")
	sum = num1 + num2;
	else if(operator == "tolak")
	sum = num1 - num2;
	else if(operator == "darab")
	sum = num1 * num2;
	else if(operator == "bahagi")
	sum = num1 / num2;
	else
	alert("Select an operator: ");
	document.borang.result.value=sum;
	

}
</script>
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
          <li><a href="orders.php" class="current"
              target="_parent">Orders</a></li>
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
          <h2>Order List</h2>
		  
		  
		  <?php
				include('db.php');
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM orders");
				}
				else
				{
					$result = mysql_query("SELECT * FROM orders");
				}
				echo'<table border="1" bgcolor="555555" cellpadding="0" cellspacing="0" width="100%">
						<th>ID</th><th>Name</th><th>Product</th><th>Count</th><th>Address</th><th>Order Date</th><th>Actions</th>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr>
							<td>'.$row['ID'].'</td>
							<td>'.$row['Customer'].'</td>
							<td>'.$row['Product'].'</td>
							<td>'.$row['Count'].'</td>
							<td>'.$row['Address'].'</td>
							<td>'.$row['OrderDate'].'</td>
							<td><a href="deleteorder.php?ID='.$row['ID'].'" style="color:black;">DELETE</a></td>
						</tr>';
				}
				echo '</table>';
				
				?>
		  
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
        <!-- end of ocntent left -->
        <div id="content_right">		  
		  <div class="templatemo_right_section">
            <h4>Calculator</h4>
            <div class="templatemo_right_section_content">
              <table border = "0" cellspacing = "0">
				<form name="borang">
				<tr>
				<td>Number: </td><td><input name="num1" type="text" size="22%"></td>
				</td>
				</tr>
				<tr>
				<td>Operation: </td><td><select name="operator">
					<option value="tambah">Add</option>
					<option value="tolak">Minus</option>
					<option value="darab">Multiply</option>
					<option value="bahagi" >Division</option>
					</select></td>
				</tr>
				<tr>
				<td>Number: </td><td><input name="num2" type="text" size="22%"></td>
				</tr>
				<tr>
				<td colspan="2" align="center"><input type="button" name="submit" value="Submit" onclick="counting()"><input type="reset" value="Reset"></td>
				</tr>
				<tr>
				<td>
				Answer: </td><td><input type="text" name="result" size="22%">
				</td>
				</tr>
				</form>
				</table>
            </div>
          </div>
		  
          <div class="templatemo_right_section">
            <h4><br></h4><div class="templatemo_right_section_content">&nbsp; <br>
            </div>
          </div>
        </div>
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
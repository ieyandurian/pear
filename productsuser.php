<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <script type ="text/javascript">
    function myFunction()
	{
	var fnum1 = document.form1.fnum1.value;
	var fnum1 = parseFloat(fnum1);
	var fnum2 = document.form1.fnum2.value;
	var fnum2 = parseFloat(fnum2);

	var rate = fnum2 / 8;
	var cal = fnum1 * rate;
    document.form1.max.value = cal; 
	}
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
          <li><a href="#" class="current">Products</a></li>
          <li><a href="cart.php"
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
          <h2>Product List</h2>
		  
		  
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
            <h4><br></h4>
            <div class="templatemo_right_section_content">&nbsp; <br>
            </div>
          </div>
		  <div class="templatemo_right_section">
            <h4>Ram Transfer Rate</h4>
            <div class="templatemo_right_section_content">
              <form name="form1" method="post" action="">
				Clock: <br><input type ="text" name="fnum1"><br>
				Number of Bits: <br><input type ="text" name="fnum2"><br>
				Maximum Theoretical Transfer Rate: <br><input type ="text" name="max"> MB/s<br>
				<input type="button" value="Calculate" onclick="myFunction()">
				<input type="reset" value="Reset">
			  </form>
            </div>
          </div>
		  
          <div class="templatemo_right_section">
            <h4><br></h4><div class="templatemo_right_section_content">&nbsp; <br>
            <h4>Calculator</h4></div>
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
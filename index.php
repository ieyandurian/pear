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
          <li><a href="#" class="current">Home</a></li>
          <li><a href="gallery.php"
              target="_parent">Gallery</a></li>
          <li><a href="services.php"
              target="_parent">Services</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="#"></a></li>
		  <li><a href="#"></a></li>
		  <li><a href="products.php" target="_parent">Login</a></li>
        </ul>
      </div>
      <!-- end of menu -->
      <div id="content">
        <div id="content_left">
          <h1>Welcome to PEAR.com Online Shopping<br>
          </h1>
          PEAR.com Online Shopping sells the latest pc technology available from various famous brand such as ASUS, ACER, HP, and many more.<br>
		  PEAR.com also offer the latest anti-virus softwares that have maximum level of protection. We also provide the trendious accessories that will give you the best perfomance of technology.
          <div class="cleaner_with_height">&nbsp;</div>
          <h2>Sample Products</h2>
		  		  
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
					<div class="buynow"><a href="products.php">Buy Now</a></div>
					</div>';
				}
				?>
		  
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
		<div id="content_right">
          
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
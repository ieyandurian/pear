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
          <li><a href="index.php">Home</a></li>
          <li><a href="#" class="current">Gallery</a></li>
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
          
          <div class="cleaner_with_height">&nbsp;</div>
          <h2>Gallery</h2>
		  
		  
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
					<h3>'.$row['Product'].'<br>
					</h3>
					<img src="images/products/'.$row['ID'].'.jpg" width="200" height="150" alt="image">
					</div>';
				}
				?>
		  
          <div class="cleaner_with_height">&nbsp;</div>
        </div>
        <!-- end of ocntent left -->
        <div id="content_right">  
          <div class="templatemo_right_section">
            <h5>Advertisement</h5>
            <div class="templatemo_right_section_content">&nbsp; <br>
            </div><h5><video width="210" height="120" controls>
			<source src="sound/Let It Go - Idina Menzel.mp4" type="video/mp4">
		  </video><br>
            </h5>
			<h5><video width="210" height="120" controls>
			<source src="sound/Let It Go - Demi Lovato.mp4" type="video/mp4">
		  </video><br>
            </h5>
			<h5><video width="210" height="120" controls>
			<source src="sound/Let It Go (Bebaskan) - Marsha Milan Londoh.mp4" type="video/mp4"> 
		  </video><br>
            </h5>
			<h5><video width="210" height="120" controls>
			<source src="sound/Let It Go (随它吧) - 姚贝娜 (Beina Bella Yao).mp4" type="video/mp4"> 
		  </video><br>
            </h5>
			<h5><video width="210" height="120" controls>
			<source src="sound/Let It Go ~ Ari no Mama de (ありのままで) - May J.mp4" type="video/mp4">
		  </video><br>
            </h5>
			<h5><video width="210" height="120" controls>
			<source src="sound/Let It Go - 효린 (Hyorin).mp4" type="video/mp4"> 
		  </video><br>
            </h5>
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

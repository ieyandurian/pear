<?php
	include('db.php');
	$prod = $_POST['prod'];
	$desc = $_POST['desc'];
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	
	
	mysql_query("INSERT INTO products (Product,Description,Category,Price)
	VALUES('$prod','$desc','$cat','$price')");
	
	header("location: admin.php");
	exit();
?>

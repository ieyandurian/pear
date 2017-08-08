<?php
	include('db.php');
	$Product=$_GET['Product'];
	mysql_query("INSERT INTO cart (Product)
	VALUES('$Product')");
	header("location: cart.php");
	exit();
?>

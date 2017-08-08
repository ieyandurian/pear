<?php
	include('db.php');
	
	$currentuser = mysql_query("SELECT * FROM currentuser");
	while($urow=mysql_fetch_assoc($currentuser))
	{
	
	$CName=$urow['Realname'];
	$Contact=$urow['Contact'];
	$Address=$urow['Address'];
	$Email=$urow['Email'];
	}
	
	$result=mysql_query("SELECT * FROM cart");
	while($row=mysql_fetch_assoc($result))
	{			
	$Prod = $row['Product'];
	$ItemCount = $_POST['t'.$row['ID'].''];
	mysql_query("INSERT INTO orders (Customer,Product,Count,Address,OrderDate)
	VALUES('$CName','$Prod','$ItemCount','$Address',now())");
	}
	mysql_query("DELETE FROM cart");
	header("location: productsuser.php");
	exit();
?>

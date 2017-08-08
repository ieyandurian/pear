<?php
	include('db.php');
	$ID=$_GET['ID'];
	mysql_query("DELETE FROM users WHERE ID = $ID");
	header("location: users.php");
	exit();
?>

<?php
	$full=$_POST["first_name"]." ".$_POST["last_name"];
	$birthday=$_POST["Month"]." ".$_POST["Day"].", ".$_POST["Year"];

 include"connection.php";

	$sql="INSERT INTO tbl_names Values('".$full."','".$_POST["email"]."','".$_POST["xx"]."','".$birthday."','".$_POST["m"]."')";

	$con->query($sql);

	header("location: index.php?sucess=1");
?>
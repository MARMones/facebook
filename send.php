<?php
session_start();

  	$con=new PDO("mysql:host=localhost; dbname=dbs","root","");

	$sql="INSERT INTO tbl_msg Values('".$_POST["subject"]."','".$_SESSION["user"]."','".$_POST["receiver"]."','".$_POST["content"]."','".""."')";

	$con->query($sql);

	header("location: msg.php?sucess=1");
?>
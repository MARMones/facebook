<?php
session_start();
if(!(isset($_SESSION["login"]))){
		header("location: index.php");
}
?>

<?php
$con=new PDO("mysql:host=localhost;dbname=dbs","root","");
$query="SELECT * FROM tbl_msg WHERE receiver='" . $_SESSION["user"] . "'";
$result=$con->query($query);
while($data=$result->fetch(PDO::FETCH_BOTH)){
$subject=$data[0];
$from=$data[1];
$msg=$data[3];
}
?>

<html>
<head>
</head>
<body>
<center>
	<fieldset style="width: 500px; border-color: #9900FF"><legend style="font-size: 30px" value="">View Message</legend>
	
<label >From:</label>
<input type="text" name="receiver" style="color: #9900FF; border-color: #9900FF" value="<?php echo $from; ?>"><br><br>
<label >Subject:</label>
<input type="text" name="subject" style="color: #9900FF; border-color: #9900FF" value="<?php echo $subject; ?>"><br>
<label>Message:</label><br>
<input type="text" name="content" value="<?php echo $msg; ?>" style="width: 500px; height: 500px; color: #9900FF; border-color: #9900FF"><br>
     </center>
     </fieldset>
</body>
</html>
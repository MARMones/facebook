<?php
session_start();
if(!(isset($_SESSION["login"]))){
		header("location: index.php");
}
?>

<?php
$con=new PDO("mysql:host=localhost;dbname=dbs","root","");
$query="SELECT * FROM tbl_names WHERE uname='" . $_SESSION["user"] . "'";
$result=$con->query($query);
while($data=$result->fetch(PDO::FETCH_BOTH)){
$uname=$data[0];
$pword=$data[1];
$bday=$data[3];
$sex=$data[4];
}
?>
<html>

	<body>
	<center>
    <fieldset>
    <legend>Profile</legend>
	<div>

		<h1><p style="font-size: 40px"> <?php echo "Welcome, ".ucwords($pword); ?> </p></h1>
		--------------------
		<p style="font-size: 25px"> <?php echo "Name: ".ucwords($uname); ?> </p>
		<p style="font-size: 25px"> <?php echo "Username: ".ucwords($pword); ?> </p>
		<p style="font-size: 25px"> <?php echo "Birthday: ".ucwords($bday); ?> </p>
		<p style="font-size: 25px"> <?php echo "Sex: ".ucwords($sex); ?> </p></div>
                               
        <form method="post" action="inbox.php">
    <input type="submit" name="Inbox" value="Inbox"><br></form>

    <form method="post" action="msg.php">
    <input type="submit" name="Message" value="Message">
    </form>

    <p><a href="logout.php"> Logout</a></p>
         </fieldset> 
	</body>     
	</center>
</html>
<?php 
session_start();

$con=new PDO("mysql:host=localhost;dbname=dbs","root","");
$query="SELECT * FROM tbl_names WHERE uname='" . $_POST["uname"] . "' and pword='" . $_POST["pword"] . "'";
$result=$con->query($query);
$numrows=$result->rowCount();
	
	if($numrows>=1){
   $_SESSION["login"]=true;
   $_SESSION["user"]=$_POST["uname"];
header("location: profile.php?uname=");

}else{
header ("location: index.php?login_attempt=sadjgsakdgajsdvbaskjdsadmnbjdbsajkdbsakjdsba");
}

?>
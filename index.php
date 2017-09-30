<?php
session_start();
if(isset($_SESSION["login"])){
	if ($_SESSION["login"]==true) {
		header("location: profile.php");
	}
}
?>

<?php  
$err_msg="";
	if(isset($_GET["login_attempt"])){
	$err_msg="Invalid Username and/or password!";
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Facebook - Log In or Sign Up</title>
	<style>
	#fblabel{
		border: 2px solid #3B5988;
		background-color: #3B5988;
		width:  1500px;
		height: 100px;
		align: center;
	}
	</style>
	</head>

<body>

<div id="fblabel">
<label style="color: white; text-decoration: bold; font-size: 50px; position: absolute; top: 25px; left: 50px; font-family:calibri">FACEBOOK</label>

<form method="post" action="login.php">
<span style="color:red; font-family:arial; position: absolute; top:85px; left:800px"> <?php echo $err_msg; ?> </span>
<label style="color: white; font-family:arial; position:absolute; top:20px; left:800px">Email or Phone</label><input type="text" name="uname" style="width: 142px; position: absolute; left:800px; top:50px"/>
<label style="color: white; font-family:arial; position:absolute; top:20px; left:970px">Password</label><input type="password" name="pword" style="width: 142px; position: absolute; left:970px; top:50px"/>
<input type="submit" name="login" value="Log In" style="width: 70px; position: absolute; left: 1140px; top:50px; font-family:arial; color: white ; background-color: #4267b2; border-color: #4267b2"  />
</form>
</div>

<form method="post" action="register.php">

<label style="font-family:calibri; font-size:45px; position:absolute; top:140px; left:790px; text-decoration: bold">Sign Up</label>
	<label style="font-family:calibri; font-size:25px; position:absolute; top:190px; right:305px; text-decoration: bold">It's free and always will be.</label>
	<input type="text" name="first_name" placeholder="First name" style="width: 142px; position: absolute; right:365px; top:240px; height:35px; width: 210px; font-size: 20px "/>
	<input type="text" name="last_name" placeholder="Last name" style="width: 142px; position: absolute; right:130px; top:240px; height:35px; width: 210px; font-size: 20px "/>
	<input type="text" name="email" placeholder="Mobile number or email" style="width: 142px; position: absolute; right:125px; top:290px; height:35px;  width: 450px; font-size: 20px "/>
	<input type="text" name="mobile" placeholder="Re-enter mobile number or email" style="width: 142px; position: absolute; right:125px; top:340px; height:35px; width: 450px; font-size: 20px "/>
	<input type="Password" name="xx" placeholder="New Password" style="width: 142px; position: absolute; right:125px; top:390px; height:35px; width: 450px; font-size: 20px "/>
	<label style="font-family:calibri; font-size:	25px; position:absolute; top:440px; right:495px; text-decoration: bold">Birthday</label>

		<select name="Month" style="position: absolute; top: 480px; right: 480px">
		<option value="Month">Month</option>
		<option value="January">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
		</select>
		
		<select name="Day" style="position: absolute; top: 480px; right: 400px">
		<option value="day">Day</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="30">30</option>
		<option value="31">31</option></select>

		<select name="Year" style="position: absolute; top: 480px; right: 315px">
		<option value="YEAR">Year</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
		<option value="1994">1994</option>
		<option value="1994">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		<option value="1989">1989</option>
		<option value="1988">1988</option>
		<option value="1987">1987</option>
		<option value="1986">1986</option>
		<option value="1985">1985</option>
        <option value="1984">1984</option>  
        <option value="1983">1983</option> 
        <option value="1982">1982</option> 
        <option value="1981">1981</option>  
        <option value="1980">1980</option>    
		</select>

		<div style="position: relative; top: 410px; left:780px">
		<input type="radio" name="m" value="Female"> <label style="font-size: 25px; font-family:calibri">Female </label>
		<input type="radio" name="m" value="Male"><label style="font-family:calibri; font-size:25px;text-decoration: bold">Male</label>
		</div>

		<input type="submit" name="ok" value="Sign Up" style="width: 210px; height:  45px; position: absolute; right: 375px; top:570px; font-family:arial; color: white ; background-color: #5e984b; border-color: #5e984b; font-size: 20px; border-radius:7px" />
</form>
</body>
</html>


  

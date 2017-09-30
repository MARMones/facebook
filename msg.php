<?php
session_start();

?>


<html>
<head>
</head>
<body>
<center>
	<fieldset style="width: 500px; border-color: #9900FF"><legend style="font-size: 30px">Message</legend>
	
<form method="post" action="send.php">
<label >To:</label>
<input type="text" name="receiver" style="color: #9900FF; border-color: #9900FF"><br><br>
<label >Subject:</label>
<input type="text" name="subject" style="color: #9900FF; border-color: #9900FF"><br>
<label>Message:</label><br>
<textarea name="content" style="width: 500px; height: 500px; resize:none; color: #9900FF; border-color: #9900FF"></textarea><br>
<input type="submit" name="send" value="SEND" style="position:absolute; right: 510px"><br>
</form>
     </center>
     </fieldset>
</body>
</html>
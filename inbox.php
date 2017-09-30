<?php 
session_start();

$dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

        $dbname = 'dbs';
        mysql_select_db($dbname);

        $query = "SELECT * FROM tbl_msg";
        $result = mysql_query($query) 
        or die(mysql_error()); 
?>


<html>
<head>
</head>
<body>
<center>
	<fieldset style="width: 500px; border-color: #9900FF"><legend style="font-size: 30px">Inbox</legend>
	
<center>
        <?php
         print "<table>";
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
        { 
        print "<tr>"; 
        print "<td>" . $row['subject'] . " | " . $row['msg'] . "</td>";
        print "</tr>"; 
        } 
        print "</table>"; 
        ?>
</center>


     </center>
     </fieldset>
</body>
</html>

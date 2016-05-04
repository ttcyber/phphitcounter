<?php
include 'db.php'; include 'error.php'; 

//echo " $hostName     $databaseName  $username <br />"; 

 if (!($connection = @ mysql_pconnect($hostName,$username, $password))) die("Could not connect to database");
	mysql_select_db("coleman", $connection); #picks which database to select from in mysql

	$result = mysql_query ("SELECT CURDATE();", $connection); #gets date
	$row = mysql_fetch_row($result);$date = $row[0]; #fetches row resualts from data base. 
   
	$result = mysql_query ("SELECT CURTIME();", $connection); #gets time 
	$row = mysql_fetch_row($result);$time = $row[0]; 

	$str0 = '';			
	$str1 = $_SERVER['REMOTE_ADDR']; #gets remote ip 
	$str2 = $time;
	$str3 = $date;
	$str4 = $_SESSION['pagename'];
echo " $str1 : $date : $time <br>"; 
	$query = "INSERT INTO stream.hits (`id`, `ip`, `timein`, `datein`, `pagename`) VALUES ('' ,'$str1','$str2','$str3','$str4');"; #insets all this into the database
echo "$query";
 $result = @ mysql_query ($query, $connection)  or showerror();			
	mysql_close();

?>

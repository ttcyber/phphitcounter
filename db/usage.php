<?php
include 'db.php';
?>

<html>
<head>
  <title> hits</title>
</head>
<body>
<tt>

<?php
   	
$connection = mysql_connect("localhost",$username,$password);
mysql_select_db("stream", $connection);
$sql = "select * from stream.hits order by id desc limit 50;";
  	$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
	echo "$therows hits.<br><br>";
   	while ($row = mysql_fetch_row($result)){
   		
     			for ($i=0; $i<mysql_num_fields($result); $i++){
										
       			echo "$row[$i] * ";
   							
					}
					echo "<br> ";
	 	}




  	mysql_close($connection);
	
?>
</tt>
</body>
</html>  

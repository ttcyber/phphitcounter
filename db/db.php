<?php
   $hostName = "localhost";
   $databaseName = "stream";
   $username = "user";
   $password = "password";
   
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>

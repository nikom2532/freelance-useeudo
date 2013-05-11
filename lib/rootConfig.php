<?php
// Connection's Parameters
$db_host="";
$db_name="";
$username="";
$password="";
function rootCon($db_host,$db_name,$username,$password){
	$db_con=mysql_connect($db_host,$username,$password);
	$connection_string=mysql_select_db($db_name);
	// Connection
	mysql_connect($db_host,$username,$password);
	mysql_select_db($db_name);
	}

?>

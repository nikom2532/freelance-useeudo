<?php
// Connection's Parameters
$db_host="useeudo.com";
$db_name="useeudoc_shoppingcart";
$username="shoppingcart";
$password="mmmf123";
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
// Connection
mysql_connect($db_host,$username,$password);
mysql_select_db($db_name);
?>

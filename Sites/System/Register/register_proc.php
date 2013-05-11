<?php
	$rootpath = "../../";
	include($rootpath."lib/DB.php");
	include($rootpath."lib/func_date.php");
	include($rootpath."lib/config.php");
	// include($rootpath."include/head_index.php");


	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	
	$sql = "
		SELECT *
		FROM  `shoppingcart_users`
		WHERE `username` = '{$username}'
	;";
	$result = mysql_query($sql);
	if(!($rs = mysql_fetch_array($result))){
		$sql2 = "
			INSERT INTO `shoppingcart_users` 
			(`username`, `password`, `firstname`,
			 `lastname`, `address`, `tel`, `email`)
			 VALUE ('{$username}','{$password}','{$firstname}','{$lastname}','{$address}','{$tel}','{$email}')
		;";
		
		if($result2 = mysql_query($sql2)) echo "ok";
		else{
			die(mysql_error());
		}
	}
	else{
		echo "dumplicate account";
	}

// include($rootpath."include/bottom_index.php");
?>
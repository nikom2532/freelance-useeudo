<?php
	session_start();
	$rootpath = "../../";
	include($rootpath."lib/config.php");
	
	$_SESSION["userID"] = "";
//	session_destroy();
	header("location: {$rootpath}index.php");
?>
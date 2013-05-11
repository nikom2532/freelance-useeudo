<?
	ob_start();
	session_start();
//	session_destroy();
/*
	for($Line=0; $i<1000; $i++){
		$_SESSION["strProductID"][$Line] = "";
		$_SESSION["strQty"][$Line] = "";
	}
*/
	$user = $_SESSION["userID"];
	session_destroy();
	
	include($rootpath."lib/config.php");	
	
	session_start();
	$_SESSION["userID"] = $user;

	header("location:show.php");
?>

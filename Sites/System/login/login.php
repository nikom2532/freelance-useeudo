<?php
	session_start();
	$rootpath = "../../";
//	include($rootpath."include/head_index.php");
	include($rootpath."lib/config.php");
		
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "
		SELECT `userID`
		FROM  `shoppingcart_users`
		WHERE `username` = '{$username}'
		AND `password` = '{$password}' ;
	";
	$result = mysql_query($sql);

	if($rs = mysql_fetch_array($result)){
//		echo $rs["userID"];
//		print_r($rs);
//		setcookie("userID", $rs["userID"], time()+3600);
		$_SESSION["userID"] = $rs["userID"];
		header("location: {$rootpath}index.php");
	}
	else{
?>
		<form id="loginFalse" action="<?php echo "{$rootpath}/index.php"; ?>" method="POST">
			<input type="hidden" name="loginFalse" value="false" />
		</form>
		<script>
			$("#loginFalse").submit();
		</script>
<?php
	}
?>
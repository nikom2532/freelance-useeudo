<?php
	//echo $_SESSION["userID"] = "";
	//upset($_SESSION["userID"]);

	if($_SESSION["userID"] == ""){
//	if($_COOKIE["userID"] == ""){
?>
		<div id="login">
			<form method="POST" action="<?php echo $rootpath; ?>System/login/login.php">
				<div id="textwhite">ชื่อผู้ใช้</div>
				<div class="margin5"><input type="text" name="username" id="username" style="width: 140px; margin-top: 5px; " class="inputBox2"/></div>
				<div id="textwhite">รหัสผ่าน</div>
				<div class="margin5"><input type="password" name="password" id="password" style="width: 140px; margin-top: 5px; " class="inputBox2"/></div>
				<div class="margin5">
					<input type="submit" style="margin-top: 10px;" value="เข้าสู่ระบบ"/>
				</div><br>
				<div><a href="<?php echo $rootpath?>Register.php">ลงทะเบียน</a></div>
				<div><a href="#">ลืมรหัสผ่าน</a></div>
<?php
				if($_POST["loginFalse"] == "false"){
?>
					<span>ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง</span>
<?php		}
?>
			</form>
		</div>
<?php
	}
	else{
		$sql = "
			SELECT `username`
			FROM  `shoppingcart_users`
			WHERE `userID` = '{$_SESSION["userID"]}'
		";
		$result = mysql_query($sql);
		if($rs = mysql_fetch_array($result)){
			$username = $rs["username"];
		}
?>
		<div id="login">
			<div class="margin5">สวัสดี, <?php echo $username; ?></div>
			<div class="margin5"><a href="<?php echo $rootpath; ?>System/login/logout.php">ออกจากระบบ</a></div>
		</div>
<?php
	}
?>

<?php /*
<div id="Menu">
	menu</br >
	menu</br >
	menu</br >
	menu</br >	
</div>
*/ ?>

<!-- <a href="Webboard.php"> 
<img src="./img/wb.png" width="164" height="64"/></a>
-->
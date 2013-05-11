<?php
session_start();
$rootpath = "./";
include($rootpath."include/head_index.php");
?>
<?php
//mysql_connect("localhost","root","helloworld");
//mysql_select_db("shoppingcart");

$sql = "
	SELECT * 
	FROM  `shoppingcart_users`
";
$result = mysql_query($sql);
$rs = mysql_fetch_array($result);
?>
<form method="POST" id="registerForm">
	<div style="width: 70%;margin-left: auto;margin-right: auto">
		<div style="width: 50%;float: left;text-align: right">
			Username/ชื่อผู้ใช้ :
			Firstname/ชื่อ :
			Lastname/นามสกุล :
			Address/ที่อยู่ :
			Tel/เบอร์ติดต่อ :
			E-mail :
		</div>
		<div style="width: 50%;float: left">
			<input type="text" name="username" value="<?php echo $rs['firstname']; ?>" />
			<input type="text" name="firstname" value="<?php echo $rs['firstname']; ?>" />
			<input type="text" name="lastname" value="<?php echo $rs['lastname']; ?>" />
			<input type="text" name="address" value="<?php echo $rs['address'] ?>" />
			<input type="text" name="tel" value="<?php echo $rs['tel'] ?>" />
			<input type="text" name="email" value="<?php echo $rs['email'] ?>" />
		</div>
	</div>
</form>

<?php
mysql_close();
include($rootpath."include/bottom_index.php");
?>
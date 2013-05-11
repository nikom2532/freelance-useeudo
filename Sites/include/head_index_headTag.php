<?php
	session_start();
	include($rootpath."lib/DB.php");
	include($rootpath."lib/func_date.php");
	include($rootpath."lib/config.php");
	@mysql_query("SET NAMES 'utf8'; ");
/*	if (!$db->open()){
		die($db->error());
	}
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset='utf-8'" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8;">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta http-equiv="Content-Language" content="th"> 
    <!--meta http-equiv="content-Type" content="text/html; charset=window-874"> 
    <meta http-equiv="content-Type" content="text/html; charset=tis-620"-->
	<title>Useeudo</title>
	<?php // <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> ?>
	<script type="text/javascript" src="<?php echo $rootpath; ?>include/jQuery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $rootpath; ?>include/jQuery/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo $rootpath; ?>include/javascript/login.js"></script>
	<script src="<?php echo $rootpath?>include/javascript/register.js"></script>
	<script src="<?php echo $rootpath?>include/javascript/Product_page.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>css/style.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>css/css_stylesheet.css" /> -->
</head>
<body>
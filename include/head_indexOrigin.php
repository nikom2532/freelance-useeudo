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
    <meta http-equiv="content-Type" content="text/html; charset=window-874"> 
    <meta http-equiv="content-Type" content="text/html; charset=tis-620">
	<title>Useeudo</title>
	<?php // <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> ?>
	<script type="text/javascript" src="<?php echo $rootpath; ?>include/jQuery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $rootpath; ?>include/javascript/login.js"></script>
	<script src="<?php echo $rootpath?>include/javascript/register.js"></script>
	<script src="<?php echo $rootpath?>include/javascript/Product_page.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>css/style.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo $rootpath; ?>css/css_stylesheet.css" /> -->
</head>

<body>
	<div align="center">
        <div id="content"><br>
        	<div id="logo">
            </div>
        	<div id="header">
            	<span></span>
            	<div id="box_menu">
					<table width="990" border="0" cellspacing="0" cellpadding="0">
  						<tr>
                          	<td width="152" height="30">&nbsp;</td>
   							<td width="117" align="center" valign="middle"><div id="link"><a href="index.php"><img src="img/btn_menu_1.png"></a></div></td>


                          	<td width="13" align="center" valign="middle">&nbsp;</td>
                          	<td width="116" align="center" valign="middle"><div id="link"><a href="How_to_pay.php"><img src="img/btn_menu_2.png"></a></div></td>
                            <td width="14" align="center" valign="middle">&nbsp;</td>
                            <td width="116" align="center" valign="middle"><div id="link"><a href="Register.php"><img src="img/btn_menu_4.png"></a></div></td>

                            <td width="13" align="center" valign="middle">&nbsp;</td>
                            <td width="116" align="center" valign="middle"><div id="link"><a href="contactUs.php"><img src="img/btn_menu_3.png"></a></div></td>
                            
                            <td width="205">&nbsp;</td>
					  </tr>
					</table>
              </div>
            </div>
            <div id="in_content">
	            <div id="box_leftColumn" style="float:left;">
	            	<?php include("{$rootpath}include/leftContent_index.php"); ?>
	            </div>
            	<div id="box_content"> <!--1.2-->

<?php
$rootpath = "./";
include($rootpath."include/head_index.php");
include($rootpath."lib/config.php");
?>
<?
//$objConnect = mysql_connect("localhost","root","helloworld") or die("Error Connect to Database");
//$objDB = mysql_select_db("shoppingcart");

if($_GET["Action"] == "Save")
{
	//*** Insert Question ***//
	$strSQL = "INSERT INTO `shoppingcart_webboard` ";
	$strSQL .="(CreateDate,Question,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysql_query($strSQL);
	
	header("location:Webboard.php");
}
?>
<html>
<head>
<title>Test</title>
</head>
<body>

<form action="NewQuestion.php?Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="621" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td width="20%">Question</td>
      <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="50"></td>
    </tr>
    <tr>
      <td width="20%">Details</td>
      <td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td width="20%">Name</td>
      <td width="80%"><input name="txtName" type="text" id="txtName" value="" size="50"></td>
    </tr>
  </table>
  
  <input name="btnSave" type="submit" id="btnSave" value="Submit">
</form>
</body>
</html>
<?
// mysql_close($objConnect);
?>
<?php
include($rootpath."include/bottom_index.php");
?>

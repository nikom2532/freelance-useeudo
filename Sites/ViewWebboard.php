<?php
$rootpath = "./";
include($rootpath."include/head_index.php");
?>

<?
//$objConnect = mysql_connect("localhost","root","helloworld") or die("Error Connect to Database");
//$objDB = mysql_select_db("shoppingcart");

if($_GET["Action"] == "Save")
{
	//*** Insert Reply ***//
	$strSQL = "INSERT INTO `shoppingcart_reply` ";
	$strSQL .="(QuestionID,CreateDate,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysql_query($strSQL);
	
	//*** Update Reply ***//
	$strSQL = "UPDATE `shoppingcart_webboard`; ";
	$strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
	$objQuery = mysql_query($strSQL);	
}
?>
<html>
<head>
<title>Test</title>
</head>
<body>
<?
//*** Select Question ***//
$strSQL = "SELECT * FROM `shoppingcart_webboard`  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);

//*** Update View ***//
$strSQL = "UPDATE `shoppingcart_webboard` ";
$strSQL .="SET View = View + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery = mysql_query($strSQL);	
?>
<div class = "wb">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="viewWebboard">
  <tr>
    <td colspan="2"><center><h1><?=$objResult["Question"];?></h1></center></td>
  </tr>
  <tr>
    <td height="53" colspan="2"><?=nl2br($objResult["Details"]);?></td>
  </tr>
  <tr>
    <td width="70%">ชื่อ : <?=$objResult["Name"];?> วันที่สร้าง : <?=$objResult["CreateDate"];?></td>
    <td width="30%">จำนวนคนดู : <?=$objResult["View"];?> ตอบกลับ : <?=$objResult["Reply"];?></td>
  </tr>
</table>

<?
$intRows = 0;
$strSQL2 = "SELECT * FROM `shoppingcart_reply`  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL."]");
while($objResult2 = mysql_fetch_array($objQuery2))
{
	$intRows++;
?> ลำดับที่ : <?=$intRows;?>
<table width="100%" border="0" cellpadding="1" cellspacing="1" class="viewWebboard">
  <tr>
    <td height="53" colspan="2"><?=nl2br($objResult2["Details"]);?></td>
  </tr>
  <tr>
    <td width="60%">ชื่อ :
        <?=$objResult2["Name"];?>      </td>
    <td width="40%">วันที่สร้าง :
    <?=$objResult2["CreateDate"];?></td>
  </tr>
</table>
<?
}
?>

<div style="margin: 15px 40% 10px 40%;">
	<a href="Webboard.php"><div id="webboard-button-new">ย้อนกลับ</div></a>
</div>
<script>
	$(document).ready(function(){
		$("#frmMain").validate();
	});
</script>

<form action="ViewWebboard.php?QuestionID=<?php echo $_GET['QuestionID'];?>&Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="100%" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td width="20%">รายละเอียด</td>
      <td width="80%"><textarea name="txtDetails" cols="50" rows="5" id="txtDetails" class="inputBox3 required"></textarea></td>
    </tr>
    <tr>
      <td width="10%">ชื่อ</td>
<?php
	
?> 
      	<td width="90%"><input name="txtName" type="text" id="txtName" value="" size="50" class="inputBox3 required"></td>
    </tr>
  </table>
  
  <input name="btnSave" type="image" id="btnSave" src="./img/sendBtn.png"/>
</form>
</div>
</body>
</html>
<?
mysql_close($objConnect);
?>
<?php
include($rootpath."include/bottom_index.php");
?>

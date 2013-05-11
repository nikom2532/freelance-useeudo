<?php
session_start();
$rootpath = "./";

//echo "+++".$_SESSION["userID"];

include($rootpath."include/head_index.php");
?>
<?
//mysql_connect("localhost","root","helloworld");
//mysql_select_db("shoppingcart");

$strSQL = "SELECT * FROM `shoppingcart_orders` WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
?>
<br>
<div>ทำรายการสำเร็จ</div>
<br>
<table>
    <tr>
      <td>รหัสสั่งซื้อ   </td>
      <td> : <?=$objResult["OrderID"];?></td>
    </tr>
    <tr>
      <td>ชื่อ-นามสกุล   </td>
      <td>
	   : <?php
		$strSQLuser = "
	   		SELECT `Name`
			FROM  `shoppingcart_orders`
			WHERE `Name` = '-Unregister User-'
			AND `OrderID` = '{$_GET["OrderID"]}'
		;";
		$objQueryUser = mysql_query($strSQLuser);
		if($objResultUser = mysql_fetch_array($objQueryUser)){
			//echo $objResultUser["Name"];
			echo $_SESSION["txtName"];
			//echo "aa";
		}
		else{
			$strSQLname = "
		   		SELECT `firstname`,`lastname`
				FROM  `shoppingcart_users`
				WHERE `userID` = '{$_SESSION["userID"]}'
			;";
			$objQueryName = mysql_query($strSQLname);
			$objResultName = mysql_fetch_array($objQueryName);
			echo "{$objResultName["firstname"]} {$objResultName["lastname"]}";
		}
		//unset($_SESSION["txtName"]);
	   ?></td>
    </tr>
    <tr>
      <td>ที่อยู่   </td>
      <td> : <?=$objResult["Address"];?></td>
    </tr>
    <tr>
      <td>เบอร์ติดต่อ   </td>
      <td> : <?=$objResult["Tel"];?></td>
    </tr>
    <tr>
      <td>E-mail   </td>
      <td> : <?=$objResult["Email"];?></td>
    </tr>
  </table>

  <br>

<table align="center" bgcolor="#EEEEEE" >
  <tr bgcolor="#999999" align="center">
    <td width="200">ผลิตภัณฑ์</td>
    <td width="82">ราคา</td>
    <td width="79">จำนวน</td>
    <td width="79">ทั้งหมด</td>
  </tr>
<?

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM `shoppingcart_orders_detail` WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysql_query($strSQL2)  or die(mysql_error());

while($objResult2 = mysql_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM `shoppingcart_product` WHERE ProductID = '".$objResult2["ProductID"]."' ";
		$objQuery3 = mysql_query($strSQL3)  or die(mysql_error());
		$objResult3 = mysql_fetch_array($objQuery3);
		$Total = $objResult2["Qty"] * $objResult3["Price"];
		$SumTotal = $SumTotal + $Total;
		
		// echo $objResult2["Qty"];
		// echo $objResult3["Price"];
		//echo $objResult3;
	  ?>
	  <tr>
		<td><?=$objResult3["ProductName"];?></td>
		<td><?=$objResult3["Price"];?></td>
		<td><?=$objResult2["Qty"];?></td>
		<td><?php echo number_format($Total,2); ?></td>
	  </tr>
	  <?
 }
  ?>
</table><br>
<div align="center">รวมทั้งสิ้น <?=number_format($SumTotal,2);?> บาท</div>
<div align="center">โปรด Check ที่ E-mail ของท่าน</div>
<div align="center"><a href=".">กลับ</a></div>
<div align="center"></div>

<?
mysql_close();
?>
<?php
include($rootpath."include/bottom_index.php");


?>

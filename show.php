<?
session_start();
$rootpath = "./";
include($rootpath."include/head_index.php");
?>
<?
?><br>
<?php
include($rootpath."How_to_pay_body.php");
?>
<br/>
<table align="center" class="nospace" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#ccc" align="center" style="height: 30px;">
    <td width="200">ผลิตภัณฑ์</td>
    <td width="100">ราคา</td>
    <td width="85">จำนวน</td>
    <td width="85">ทั้งหมด</td>
    <td width="10">ลบ</td>
  </tr>
  <?
  $Total = 0;
  $SumTotal = 0;
//echo $_SESSION["intLine"];
  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM `shoppingcart_product` WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr bgcolor="#EEEEEE" align="center">
		<td><?=$objResult["ProductName"];?></td>
		<td><?=$objResult["Price"];?></td>
		<td><?=$_SESSION["strQty"][$i];?></td>
		<td><?=number_format($Total,2);?></td>
		<td><a href="delete.php?Line=<?=$i;?>" ><img src="img/ShoppingCartDelete.png" width="45" height="45" border="0"></a></td>
	  </tr>
	  <?
	  }
  }
  ?>
</table><br>
<div align="center">รวมทั้งสิ้น <?=number_format($SumTotal,2);?> บาท</div>

<?
	if($SumTotal > 0)
	{
?>
		<div style="text-align:center;width:50%;margin-top:15px">
			<div style="float:left;margin-left:20px">
				<a href="clear.php"><div id="show-button">ยกเลิกทั้งหมด</div></a>
			</div>
			<div style="float:left;margin-left:50px">
				<a href="checkout.php"><div id="show-button">จ่ายเงิน</div></a>
			</div>
		</div>
<?
	}
?>
</div>
<?
mysql_close();
?>
<?php
include($rootpath."include/bottom_index.php");
?>

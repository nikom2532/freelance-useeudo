<?php
$rootpath = "./";
include($rootpath."include/head_index.php");
include($rootpath."lib/config.php");
?>
<?
//mysql_connect("localhost","root","helloworld");
//mysql_select_db("shoppingcart");
$strSQL = "SELECT * FROM `shoppingcart_product` where Product_type='Sauce'";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>

<br>
<table width="500" align="center" class="nospace" border="0" cellspacing="0" cellpadding="0">
  <?
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  <tr bg bgcolor="#EEEEEE">
	<td align="center"><img src="img/<?=$objResult["Picture"];?>" width="50" height="50">
    <td align="center"><a href="product_detail.php" ><?=$objResult["ProductName"];?></td></a>
    <td align="center"><a href="order.php?ProductID=<?=$objResult["ProductID"];?>" ><img src="img/ShoppingCartAdd.png" width="45" height="45" border="0"/></a></td>
   </tr>
  <?
  }
  ?>
</table>
<div align="right"><a href="clear.php">Clear Cart</a></div>
<?
mysql_close();
?>
<?php
include($rootpath."include/bottom_index.php");
?>

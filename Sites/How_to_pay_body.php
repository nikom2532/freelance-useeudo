<?php
$strSQL = "SELECT * FROM `shoppingcart_product` ;";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>

<div class="subMenu"><img src="img/pic_head_page4.png"/></div>
<table width="500" align="center" class="nospace" border="0" cellspacing="0" cellpadding="0">
  <?
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  <tr bg bgcolor="#EEEEEE">
	<td align="center"><img src="img/<?=$objResult["Picture"];?>" width="50" height="50">
    <td align="center"><a href="product_detail.php?ProductID=<?=$objResult['ProductID']?>" ><?=$objResult["ProductName"];?></td></a>
    <td align="center"><a href="order.php?ProductID=<?=$objResult["ProductID"];?>" ><img src="img/ShoppingCartAdd.png" width="45" height="45" border="0"/></a></td>
   </tr>
  <?
  }
  ?>
</table>
<div class=""><a href="clear.php"></a></div>

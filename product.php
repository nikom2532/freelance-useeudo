<?php
$rootpath = "./";
$page="product";
include($rootpath."include/head_index.php");
include($rootpath."lib/config.php");

//mysql_connect("localhost","root","helloworld");
//mysql_select_db("shoppingcart");
$strSQL = "SELECT * FROM `shoppingcart_product` ;";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>


<div class="subMenu"><img src="img/pic_head_page3.png"/></div>
<table width="500" align="center" class="nospace" border="0" cellspacing="0" cellpadding="0">
  <?
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  <tr bg bgcolor="#EEEEEE">

    <td align="center">
    	<a href="product_detail.php?ProductID=<?=$objResult['ProductID']?>" ><?=$objResult["ProductName"];?></a>
    </td>
   </tr>
  <?
  }
  ?>
</table>

<?
mysql_close();
include($rootpath."include/bottom_index.php");
?>

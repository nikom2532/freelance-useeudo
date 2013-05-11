<?php
$page = "recept";
$rootpath = "./";
include($rootpath."include/head_index.php");

$recipes = $_GET["recipes"];


$strSQL = "SELECT `youtube`,`recipes_name` FROM `shoppingcart_recipes` where `recipes_name` = '{$recipes}';";

$objQuery = mysql_query($strSQL) or die(mysql_error());
//$db->query($strSQL);

while($objResult = mysql_fetch_array($objQuery)){
	$recipes_name = $objResult["recipes_name"];
	$youtube = $objResult["youtube"];
}

?>
<br>

<table id="product" width="100%" align="center"  class="nospace" border="0" cellspacing="0" cellpadding="0">
<?php
	// $productCount = 1;
	// while($objResult = mysql_fetch_array($objQuery))
 	// {

?>
	<tr>  
		<td align="center" width="148" height="93">
			<span id="product_L1">
				
			</span>
			<span id="product_L2">
	    		<a href="product_detail.php" ><?=$recipes_name;?></a>
	    	</span>
	    </td>
   	  
	</tr>
	<tr>
		<td align="center" style="width: 100%">
			<iframe width="420" height="315" src="http://www.youtube.com/embed/<?=$youtube;?>" frameborder="0" allowfullscreen></iframe>
		</td>
	</tr>
		
<?php
	// }
?>
</table>
<?
//mysql_close();
?>
<?php
include($rootpath."include/bottom_index.php");
?>

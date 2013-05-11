<?php
$rootpath = "./";
include($rootpath."include/head_index.php");
?>
<!--2.1-->
<div class="subMenu"><img src="img/pic_head_page3.png"/></div>

<?php //#################### เพิ่ม จาก product_video.php

$ProductID = $_GET["ProductID"];

 $strSQL = "
	SELECT * 
	FROM  `shoppingcart_product` 
	where `ProductID` = '{$ProductID}';
";

$objQuery = mysql_query($strSQL) or die(mysql_error());
//$db->query($strSQL);

while($objResult = mysql_fetch_array($objQuery)){
	$ProductName = $objResult["ProductName"];
	$description = $objResult["description"];
	$ingredient = $objResult["ingredient"];
	$useful = $objResult["useful"];
	$volume = $objResult["volume"];
	$quantity = $objResult["quantity"];
}

?>
<br>
<div style="padding-left:15px; padding-right:15px;">
<table id="product" style="table-layout: fixed;" width="100%" align="center"  class="nospace" border="0" cellspacing="0" cellpadding="0">
	<col width="18%" />
	<col width="2%" />
	<col width="80%" />
	<tr bg bgcolor="#EEEEEE">  
		<td colspan="3">
			<div style="text-align:center; font-size: 25px; margin-bottom: 20px "><?php echo $ProductName; ?></div>
		</td>
	</tr>
	<tr >
		<td>
			ลักษณะ
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $description; ?>
		</td>
	</tr>
	<tr >
		<td>
			ส่วนประกอบ 
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $ingredient; ?>
		</td>
	</tr>
	<tr >
		<td>
			ลักษณะ 
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $ProductName; ?>
		</td>
	</tr>
	<tr >
		<td>
			ประโยชน์ 
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $useful; ?>
		</td>
	</tr>
	<tr >
		<td>
			ปริมาณ 
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $volume; ?>
		</td>
	</tr>
	<tr >
		<td>
			ปริมาณที่นำไปใช้ 
		</td>
		<td>
			:
		</td>
		<td>
			<?php echo $quantity; ?>
		</td>
	</tr>
</table>
</div>

<div style="margin: 0px 45% 10px 45%;">
	<a href="<?php echo $rootpath;?>product.php"><div id="webboard-button-new">Back</div></a>
</div>
<?php //2.2 ?>
<?php
include($rootpath."include/bottom_index.php");
?>

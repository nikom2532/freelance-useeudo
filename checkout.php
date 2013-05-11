<?
session_start();
?>
<?php
$rootpath = "./";
include($rootpath."include/head_index.php");
?>
<?php
//mysql_connect("localhost","root","helloworld");
//mysql_select_db("shoppingcart");
?>
<script>
	$(document).ready(function(){
		$("#checkoutForm").validate();
	});
</script>
<br>
<table align="center" class="nospace" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#ccc" align="center" style="height: 30px;">
	    <td width="200">ผลิตภัณฑ์</td>
	    <td width="100">ราคา</td>
	    <td width="85">จำนวน</td>
	    <td width="85">ทั้งหมด</td>
	</tr>
<?php
	$Total = 0;
	$SumTotal = 0;
	for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
	{
		if($_SESSION["strProductID"][$i] != "")
		{
			$strSQL = "SELECT * FROM `shoppingcart_product` WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
			$objQuery = mysql_query($strSQL) or die(mysql_error());
			$objResult = mysql_fetch_array($objQuery);
			$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
			$SumTotal = $SumTotal + $Total;
?>
			<tr bgcolor="#EEEEEE" align="center">
				<td><?=$objResult["ProductName"];?></td>
				<td><?=$objResult["Price"];?></td>
				<td><?=$_SESSION["strQty"][$i];?></td>
				<td><?=number_format($Total,2);?></td>
			</tr>
<?php
			
			$ProductName[$i] = $objResult["ProductName"];
			$Price[$i] = $objResult["Price"];
			$strQty[$i] = $_SESSION["strQty"][$i];
			$TotalPrice[$i] = number_format($Total,2);
			
			
		}
	}
//echo $_SESSION["intLine"];
	 echo "a";
	 echo $_SESSION["strQty"][0];
	 echo "a";
	 $_SESSION["strQty"][0] = "b";
	
	$_SESSION['ProductName'] = $ProductName;
	$_SESSION['Price'] = $Price;
	$_SESSION['strQty'] = $strQty;
	$_SESSION['TotalPrice'] = $TotalPrice;
	/*
	print_r($_SESSION['ProductName']);
	print_r($_SESSION['Price']);
	print_r($_SESSION['strQty']);
	print_r($_SESSION['TotalPrice']);
	*/
?>
<?php
	// print_r($_SESSION['ProductName']);
?>
</table>
<br><br>
<div align="center">ทั้งหมด <?=number_format($SumTotal,2);?> บาท</div>
<p></p>

<?php
	//not login
	if($_SESSION["userID"] == ""){
		
		
		//เพิ่ม time stamp
		//เพิ่ม bank ที่โอน
		//พลิตภัณท์*
		//ราคา
		//จำนวน*
		//จำนวนเงิน* 
		/* <td><?=$objResult["ProductName"];?></td>
		// <td><?=$objResult["Price"];?></td>
		// <td><?=$_SESSION["strQty"][$i];?></td>
		// <td><?=number_format($Total,2);?></td>
 		<input type="hidden" name="ProductName" value="<?=$ProductName[];?>" />
		<input type="hidden" name="Price" value="<?=$Price[];?>" />
		<input type="hidden" name="strQty" value="<?=$strQty[$i];?>" />
		<input type="hidden" name="$TotalPrice" value="<?=$TotalPrice[$i];?>" />
		<input type="hidden" name="" />
		*/
?>
<form name="form1" id="checkoutForm" method="post" action="save_checkout.php?<?php http_build_query($strQty,$_SESSION["strQty"]); ?> ">
<!-- 	<input type="hidden" name="strQty" value="<?php print_r($_SESSION["strQty"]);?>" /> -->
	<table>
		<tr>
			<td colspan="2">
				<div id="checkout-bookbank">ชำระเงินผ่านธนาคาร</div>
				<div>
					<input type="radio" name="bookBank" class="required validate-radio" value="SCB" /> ธนาคารไทยพาณิชย์
				</div>
				<div>
					<input type="radio" name="bookBank" class="required validate-radio" value="BBL" /> ธนาคารกรุงเทพ
				</div>
				<div>
					<input type="radio" name="bookBank" class="required validate-radio" value="KBANK" /> ธนาคารกสิกรไทย <label for="bookBank" generated="true" class="error" style=""></label>
				</div>
			</td>
		</tr>
        <tr>
        	<td><br/>ชื่อ-นามสกุล </td>
            <td><br/><input type="text" name="txtName" id="firstname" value="" class="required inputBox"/><div id="firstname_e" class="alert"></div></td>
        </tr>
        <tr>
        	<td>ที่อยู่ </td>
            <td><textarea rows="4" cols="50" name="txtAddress" id="address" value="" class="inputBox required"></textarea><div id="address_e" class="alert"></div></td>
        </tr>
        <tr>
        	<td>เบอร์ติดต่อ</td>
            <td><input type="text" name="txtTel" id="tel" value="" class="inputBox required"/><div id="tel_e" class="alert"></div></td>
        </tr>
        <tr>
        	<td>E-mail</td>
            <td><input type="text" name="txtEmail" id="email" value="" class="inputBox required"/><div id="email_e" class="alert"></div><div class="alert" id="existEmail"></div></td>
        </tr>
    </table>
    <div align="center"><input type="submit" name="Submit" value="ยืนยัน"></div>
</form>
<?php
	}
	//already login
	else{
		$sql = "
			SELECT * 
			FROM  `shoppingcart_users`
		";
		$result = mysql_query($sql);
		$rs = mysql_fetch_array($result);
		
//$a=5;
// $a[]=1;
// $a[]=2;
// echo $a; // Array
// 
// echo "<input type='hidden' name='strQty' value='$a' />";
// 
// $_POST["strQty"][2];


?>
<form name="form1" id="checkoutForm" method="post" action="save_checkout.php?<?php http_build_query($strQty,$_SESSION["strQty"]); ?> ">
<!-- 	<input type="hidden" name="strQty" value="<?php echo $_SESSION["strQty"];?>" /> -->
	
	
	
	
  <table align="center" bgcolor="#EEEEEE" >
  	<tr >
		<tr>
			<td colspan="2">
				<div id="checkout-bookbank">ชำระเงินผ่านธนาคาร</div>
				<div>
					<input type="radio" name="bookBank" class="required validate-radio" value="SCB" /> ธนาคารไทยพาณิชย์
				</div>
				<div>
					<input type="radio" name="bookBank" class="required validate-radio" value="BBL" /> ธนาคารกรุงเทพ
				</div>
				<div>
					<input type="radio" name="bookBank" class="required validate-radio" value="KBANK" /> ธนาคารกสิกรไทย <label for="bookBank" generated="true" class="error" style=""></label>
				</div>
			</td>
		</tr>
      <td width="71"><br/>ชื่อ-นามสกุล</td>
      <td width="217"><br/><input type="text" name="txtName" class="required" value="<?php echo $rs['firstname']." ".$rs['lastname'] ?>"></td>
    </tr>
    <tr>
      <td><br/><br/>ที่อยู่</td>
      <td><textarea name="txtAddress" class="required"><?php echo $rs['address'] ?></textarea></td>
    </tr>
    <tr>
      <td>เบอร์โทรศัพท์</td>
      <td><input type="text" name="txtTel" class="required" value="<?php echo $rs['tel'] ?>"></td>
    </tr>
    <tr>
      <td>Email ผู้ส่ง</td>
      <td><input type="text" name="txtEmail" class="required" value="<?php echo $rs['email']; ?>"></td>
    </tr>
  </table>
    <div align="center"><input type="submit" class="required" name="Submit" value="ยืนยัน"></div>
</form>
<?php
	}
?>

<?
mysql_close();
?>
<?php
include($rootpath."include/bottom_index.php");
?>

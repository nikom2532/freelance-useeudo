<?php
include("{$rootpath}include/head_index_headTag.php");
session_start();

$bookBank = $_POST["bookBank"];
$now = date("Y-m-d H:i:s");
$ProductName = $_SESSION['ProductName'];
$Price = $_SESSION['Price'];
$strQty = $_SESSION['strQty'];
$TotalPrice = $_SESSION['TotalPrice'];

unset($_SESSION['ProductName']);
unset($_SESSION['Price']);
unset($_SESSION['strQty']);
unset($_SESSION['TotalPrice']);

if($_SESSION["userID"]!=""){
	$name = $_SESSION["userID"];
}
else{
	$name = "-Unregister User-";
}

/*
//for test POST
echo($bookBank);
echo($now);
print_r($ProductName);
print_r($Price);
print_r($strQty);
print_r($TotalPrice);
*/

  $Total = 0;
  $SumTotal = 0;
/*
  $strSQL = "
	INSERT INTO `shoppingcart_orders` (OrderDate,Name,Address,Tel,Email,BookBank)
	VALUES
	('".$now."','".$name."','".$_POST["txtAddress"]."','".$_POST["txtTel"]."','".$_POST["txtEmail"]."','".$bookBank."') 
  ";

  mysql_query($strSQL) or die(mysql_error());

  $strOrderID = mysql_insert_id();
//  echo $_SESSION["intLine"];
  
  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {	
			$strSQL = "
				INSERT INTO `shoppingcart_orders_detail` (OrderID,ProductID,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$strQty[$i]."') 
			  ";
			  mysql_query($strSQL) or die(mysql_error());
	  }
  }
*/
//echo "a";
//echo $_SESSION["strQty"][0];
//print_r($strQty);
//echo "a";

//mysql_close();
$userID = $_SESSION["userID"];
session_destroy();
session_start();
$_SESSION["userID"] = $userID;


/*
$to = "administrator@useeudo.com";
$subject = "[useeudo] แจ้งการสั่งซื้อสินค้า"; 
$email = $_POST["txtEmail"] ; 
$message = "
ชื่อ : {$_POST['txtName']}
ที่อยู่ : {$_POST['txtAddress']} 
เบอร์โทรศัพท์ : {$_POST['txtTel']} 
E-Mail : {$_POST['txtEmail']}
";

$headers = "From: $email"; 
$sent = mail($to, $subject, $message, $headers) ; 
*/


$subject = "[UseeUdo] แจ้งการสั่งซื้อสินค้า";
echo $message = "
ชื่อ : ".$_POST['txtName']."
ที่อยู่ : ".$_POST['txtAddress']."
เบอร์โทรศัพท์ : ".$_POST['txtTel']." 
E-Mail : ".$_POST['txtEmail']."
";
include("{$rootpath}lib/mail_server_request.php");

$_SESSION["txtName"] = $_POST['txtName'];


//header("location:finish_order.php?OrderID=".$strOrderID);


?>
</body>
</html>
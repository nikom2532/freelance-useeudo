<?php
$rootpath = "./";
?>
<?php
include($rootpath."include/head_index.php");
?>
<div class="subMenu"><img src="img/pic_head_page5.png"/></div>
<div class="registerPage">
	<script>
		$(document).ready(function(){
			$("#registerForm").validate();
		});
	</script>
	<form method="POST" id="registerForm">
    	<table>
        	<tr>
            	<td>ชื่อผู้ใช้ </td>
                <td><input type="text" name="username" id="username" value="" class="inputBox required"/><div id="username_e" class="alert"></div></td>
            </tr>
            <tr>
            	<td>รหัสผ่าน  </td>
                <td><input type="password" name="password" id="password" value="" class="inputBox required"/><div id="password_e" class="alert"></div></td>
            </tr>
            <tr>
            	<td>ชื่อ  </td>
                <td><input type="text" name="firstname" id="firstname" value="" class="inputBox required"/><div id="firstname_e" class="alert"></div></td>
            </tr>
            <tr>
            	<td>นามสกุล  </td>
                <td><input type="text" name="lastname" id="lastname" value="" class="inputBox required"/><div id="lastname_e" class="alert"></div></td>
            </tr>
            <tr>
            	<td>ที่อยู่ </td>
                <td><textarea rows="4" cols="50" name="address" id="address" value="" class="inputBox required" style="resize: none"></textarea><div id="address_e" class="alert"></div></td>
            </tr>
            <tr>
            	<td>เบอร์ติดต่อ</td>
                <td><input type="text" name="tel" id="tel" value="" class="inputBox required"/><div id="tel_e" class="alert required"></div></td>
            </tr>
            <tr>
            	<td>E-mail</td>
                <td><input type="text" name="email" id="email" value="" class="inputBox required email"/><div id="email_e" class="alert required"></div><div class="alert" id="existEmail"></div></td>
            </tr>
        </table>
		<input type="submit" id="submitRegister" value="สมัครสมาชิก" /><br>
	</form>
</div>
<?php
include($rootpath."include/bottom_index.php");
?>

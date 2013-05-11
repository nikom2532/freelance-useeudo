<?php
if (isset($subject) && isset($message))
{
	$from = 'Admin <administrator@useeudo.com>';
    // nice RFC 2822 From field
	//'from' is sender e-mail

$to = $rs['email']; //from home_member_regis.php

//$subject = 'Website Change Request';

$headers = "From: ".$from."\r\n";
//$headers .= "Reply-To: ". $from . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n ";
//$headers .= array('X-Mailer'=>'PHP script at '.$_SERVER['HTTP_HOST']);


mail($to, $subject, $message, $headers);
$mail_send = true;
}
?>

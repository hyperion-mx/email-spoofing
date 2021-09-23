<?php

$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;

$oldphpself = $_SERVER['PHP_SELF'];
$oldremoteaddr = $_SERVER['REMOTE_ADDR'];
$_SERVER['PHP_SELF'] = "/";
$_SERVER['REMOTE_ADDR'] = $_SERVER['SERVER_ADDR'];

mail($to,$subject,$message,$headers);

$_SERVER['PHP_SELF'] = $oldphpself;
$_SERVER['REMOTE_ADDR'] = $oldremoteaddr;
exit();

?>
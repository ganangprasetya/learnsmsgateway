<?php
$id = $_GET['messageid'];
$post_string='messageid='.$id;
$fp = fsockopen('localhost',80, $errno, $errstr, 30);

$out = "POST /sms/updatestatus.php HTTP/1.1\r\n";
$out.= "Host: localhost\r\n";
$out.= "Content-Type: application/x-www-form-urlencoded\r\n";
$out.= "Content-Length: ".strlen($post_string)."\r\n";
$out.= "Connection: Close\r\n\r\n";
if (isset($post_string)) $out.= $post_string;

fwrite($fp, $out);
fclose($fp);

echo '000';

?>
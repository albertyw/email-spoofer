<?php
#Check the password
$fileName = 'password';
$handle = fopen($fileName, 'r');
$password = fread($handle, filesize($fileName));
fclose($handle);
if($_POST['password'] != $password){
    die('Wrong Password.');
}

$headers = $_POST['headers'];
$from = $_POST['from'];
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers .="From: $from";

mail($to, $subject, $message, $headers) or die("EMAIL FAIL");
echo $to."<br>";
echo $subject."<br>";
echo $message."<br>";
echo $headers."<br>";
echo 'EMAIL SENT';

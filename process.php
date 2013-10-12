<?php
#Check the password
if($_POST['password'] != 'PASSWORD'){
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

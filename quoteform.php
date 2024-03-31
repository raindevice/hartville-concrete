<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailHeader = "From:".$fname." ".$lname."<".$email.">\r\n";

$recipient = "rywilldav@gmail.com";

mail($recipient, $subject, $message, $mailHeader);
or die("Error!");

echo"Message sent successfully!";



?>
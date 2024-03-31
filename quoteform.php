<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailHeader = "From:".$fname." ".$lname."<".$email.">\r\n";

$recipient = "hartvilleconcrete@gmail.com";



?>
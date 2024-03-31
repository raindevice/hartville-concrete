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

echo'
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="./style/style.css">
        <title>Hartville Concrete</title>
    </head>
    <body>
        <header>
            <img id="header-logo" src="./assets/logo.jpg" alt="hartville concrete company logo">
            <h2 id="header-contact">
                Call Us <a href="tel:330-806-0459"><span>330-806-0459</span></a></a>
            </h2>

        </header>
        <div class="section-container" id="redirect">
            <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        </div>
        <script src="script.js"></script>
    </body>
</html>


';



?>
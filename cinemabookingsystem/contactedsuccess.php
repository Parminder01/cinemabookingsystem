<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$email_message = "

Full name: ".$name."
Email: ".$email."
Message: ".$message."

";


mail('youremail@yourhost.com', 'new message', $email_message);
header("Location: emailsuccess.php");

?>


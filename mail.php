<?php
if(isset( $_POST['fname']))
$name = $_POST['fname'];
if(isset( $_POST['lname']))
$name = $_POST['lname'];
if(isset( $_POST['phone']))
$name = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
echo "Name cannot be empty.";
die();
}
if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email format invalid.";
die();
}
}
if ($subject === ''){
echo "Subject cannot be empty.";
die();
}
if ($message === ''){
echo "Message cannot be empty.";
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "vikas.ac.in@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
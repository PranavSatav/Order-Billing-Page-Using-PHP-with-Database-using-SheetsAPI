<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$website = $_POST['website'];
$priority = $_POST['priority'];
$payment = $_POST['payment'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" Full Name: $name \n Contact No: $phone  \n Customer Email: $email  \n Note to Seller: $website \n Country: $priority \n State: $type \n Mode of Payment: $payment \n Shipping Address: $message";
$recipient = "pranvsatv@gmail.com , $email";
$subject = "Order Placed!";
$mailheader = "From: Ikshana <ikshana@gmail.com> \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: https://nubz.000webhostapp.com/restaurant/thankyou.html"); 
?>

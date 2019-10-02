<?php

$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];
$subject = "New contact form submission: " . $_POST['subject'];
$sender_message = $_POST['sender_message'];
/*
  If a full stop is found on the beginning of a line in the message, 
  it might be removed. To solve this problem, 
  we replace the full stop with a double dot
*/
$sender_message = str_replace("\n.", "\n..", $sender_message);
// lines should not exceed 70 characters
$sender_message = wordwrap($sender_message, 70);
$headers = "From: davidojesekhoba@gmail.com"

$email_body = "You have received a new message from $sender_name. \n".
  "Their email address is $sender_email \n".
  "Here is the message: \n$message"


mail("davidojesekhobais@gmail.com", $subject, $email_body, $headers);

?>
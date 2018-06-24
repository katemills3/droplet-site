<?php
if(!isset($_POST['submit']))
{
  echo "Here is an error message";
}
$name = $_POST['name'];
$visitor_email = $_POST ['email'];
$message = $_POST['message'];

if(empty($name))
{
  echo "Please fill out all fields";
  exit;
}

$email_from = 'katemills3@gmail.com';
$email_subject = "New RSVP!";
$email_body = "$name\n"
    "RSVP value here"
$to = "katemills3@gmail.com";
$headers = "From: $name"

mail($to,$email_subject,$email_body,$headers);

?>

<?php
$name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'muhammadwisalkhanmv@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message"

$to = "muhammadwisalkhanmv@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";


  mail($to,$email_subject,$email_body,$headers);

//   redirect to home page
    header("Location: index.html");

?>

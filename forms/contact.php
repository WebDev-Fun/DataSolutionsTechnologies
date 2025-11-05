<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //  where you want to receive messages
  $to = "info@datasolutionstech.com";

  // collect form data
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  //  create message body
  $fullMessage  = "Name: " . $name . "\n";
  $fullMessage .= "Email: " . $email . "\n";
  $fullMessage .= "Subject: " . $subject . "\n\n";
  $fullMessage .= "Message:\n" . $message . "\n";

  //  headers so the mail looks clean
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  //  send mail
  if (mail($to, $subject, $fullMessage, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Message sending failed. Please try again later.";
  }

}
?>

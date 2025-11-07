<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
  $to = "info@datasolutionstech.com";


  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);


  $fullMessage  = "Name: " . $name . "\n";
  $fullMessage .= "Email: " . $email . "\n";
  $fullMessage .= "Subject: " . $subject . "\n\n";
  $fullMessage .= "Message:\n" . $message . "\n";


  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();


  if (mail($to, $subject, $fullMessage, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Message sending failed. Please try again later.";
  }

}
?>

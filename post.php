<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "your_email@example.com"; // hay que cambiar el mail 
  $headers = "From: $email\r\n";

  // para mandar un mail
  if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Failed to send message.";
  }
}
?>

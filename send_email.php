<?php
  $name = $_POST['contact-name'];
  $email = $_POST['contact-email'];
  $message = $_POST['contact-project'];
  $to = 'tchimbault.pro@gmail.com';
  $subject = '[website] Contact';
  $message = 'Name: '.$name."\n".'Email: '.$email."\n".'Message: '.$message;
  $headers = 'From: '.$email."\r\n".
  'Reply-To: '.$email."\r\n".
  'X-Mailer: PHP/'.phpversion();
  mail($to, $subject, $message, $headers);
  header('location: index.html');
?>

<?php
  // Configuration
  $recipient_email = 'jayamitsoni10126@gmail.com'; // Replace with your email address
  $subject = 'Contact Form Submission';

  // Get the form data
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];

  // Validate the form data
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo 'Please fill in all the fields.';
    exit;
  }

  // Send the email
  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'MIME-Version: 1.0' . "\r\n" .
             'Content-Type: text/html; charset=UTF-8';

  $body = '<p>Name: ' . $name . '</p>' .
           '<p>Email: ' . $email . '</p>' .
           '<p>Subject: ' . $subject . '</p>' .
           '<p>Message: ' . $message . '</p>';

  if (mail($recipient_email, $subject, $body, $headers)) {
    echo 'Thank you for contacting us! We will get back to you soon.';
  } else {
    echo 'Error sending email. Please try again later.';
  }
?>
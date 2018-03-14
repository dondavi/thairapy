<?php
$fullName = $_REQUEST['name'];
$emailAddress = $_REQUEST['email'];
$phoneNumber = $_REQUEST['phone'];
$contactMessage = $_REQUEST['message'];

if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $emailAddress )) {
  $subject = 'Contact Us | Thairapy Website News And Updates';
  //$to = 'gjlambertson@gmail.com';
  $to = 'info@thairapysalonspa.com';

  $headers = "MIME-Version: 1.0\r\n";
  $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers.= "From: info@thairapysalonspa.com\r\n";
  $headers.= "Reply-To: info@thairapysalonspa.com\r\n";
  $headers.= "X-Mailer: PHP/".phpversion();

  $message = 'Name: ' . $fullName . '<br />';
  $message.= 'Email: ' . $emailAddress . '<br />';
  $message.= 'Phone: ' . $phoneNumber . '<br />';
  $message.= 'Message: ' . $contactMessage . '<br />';

  if (@mail($to, $subject, $message, $headers)) {
    echo 'sent';
  } else {
    echo 'failed';
  }
} else {
  echo 'failed';
}
?>
<?php
$emailTo = $_REQUEST['email'];
$honeypot = $_REQUEST['goawayspambot'];
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $emailTo )) {
  $subject = 'Sign-Up | Thairapy Website News And Updates';
  //$to = 'gjlambertson@gmail.com';
  $to = 'info@thairapysalonspa.com';

  $headers = "MIME-Version: 1.0\r\n";
  $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers.= "From: info@thairapysalonspa.com\r\n";
  $headers.= "Reply-To: info@thairapysalonspa.com\r\n";
  $headers.= "X-Mailer: PHP/".phpversion();

  $message = 'Email : ' . $_REQUEST['email'];

  if (@mail($to, $subject, $message, $headers)) {
    if($honeypot){
      echo 'failed';
      exit;
    } else {
      echo 'sent';
    }
  } else {
    echo 'failed';
    exit;
  }
} else {
  echo 'failed';
}
?>
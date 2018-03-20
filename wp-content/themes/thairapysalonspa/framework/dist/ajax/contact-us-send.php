<?php

include('/assets/inc/app/config.php');
//echo var_dump($_GET);


// ---- BEGIN GATHER AND SEND EMAIL ---- //
	
	$Mail_FirstName = $_GET['C_FirstName'];
	$Mail_LastName = $_GET['C_LastName'];
	$Mail_EmailAddress = $_GET['C_EmailAddress'];
	$Mail_BusPhone = $_GET['C_BusPhone'];
	$Mail_Special_Requests = $_GET['C_Special_Requests1'];
	
	$message = "";
	$message.="<p><strong>Name:</strong> " . $Mail_FirstName . " " . $Mail_LastName . "</p>";
	$message.="<p><strong>Email:</strong> " . $Mail_EmailAddress . "</p>";
	$message.="<p><strong>Phone:</strong> " . $Mail_BusPhone . "</p>";
	$message.="<p><strong>Message:</strong> " . $Mail_Special_Requests . "</p>";
	
	require_once('class.phpmailer.php');
	
	$mail             = new PHPMailer();
	
	$body             = $message;
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
											   // 1 = errors and messages
											   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "noreply@dondavi.net";  // GMAIL username
	$mail->Password   = "%t23dsTva#";            // GMAIL password
	
	$mail->SetFrom(FROMEMAIL, 'Thairapy Website [no reply]');
	
	$mail->AddReplyTo(FROMEMAIL, 'Thairapy Website [no reply]');
	
	$mail->Subject    = "General Inquiry From Thairapy Website";
	
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	$address = ADMINEMAIL;
	$mail->AddAddress($address, "Thairapy Salon and Spa");
	
	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	
	if(!$mail->Send()) {
		 // echo "Mailer Error: " . $mail->ErrorInfo;
		 echo 1;
	} else {
		  //echo "Message sent!";
		  echo 0;
	}
	
// ---- END GATHER AND SEND EMAIL ---- //

?>
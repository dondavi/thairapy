<?
include('/assets/inc/app/config.php');
//echo var_dump($_GET);

$ThisEmail = $_GET['SignUpEmail'];

//if (preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $ThisEmail))
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $ThisEmail)) 
{ 
	// ---- BEGIN SEND EMAIL ---- //
	
	require_once('class.phpmailer.php');
	
	$mail             = new PHPMailer();
	
	$body             = 'Let me know when something new happens: ' . $ThisEmail;
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
	
	$mail->Subject    = "Mailing List Sign-Up From Thairapy Website";
	
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
	
} else { 
	echo '1';
}

?>
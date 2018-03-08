<?php

include('/assets/inc/app/config.php');
require_once('class.phpmailer.php');

/*---------------------------------------------------------------------------
|	BEGIN: SEND EMAIL CLASS
|---------------------------------------------------------------------------*/
/*class Mailer {
   
   function sendReviewEmail($email,$subject,$message) {
	   $headers = "From: ".FROMEMAIL."\r\nBCc: ".BCCEMAIL."\r\nReply-To: ".ADMINEMAIL."\r\nContent-Type: text/html; charset=iso-8859-1'";
	   return mail( $email, $subject, $message, $headers );
   }

};

$mailer = new Mailer;*/
/*---------------------------------------------------------------------------
|	END: SEND EMAIL CLASS
|---------------------------------------------------------------------------*/

function stripOutBar($str) {
	
	$output = '';
	$output = str_replace('|','',$str);
	
	return $output;
	
}

// ---- BEGIN GATHER AND SEND EMAIL ---- //
	/*$Mail_FirstName = $_POST['C_FirstName'];
	$Mail_LastName = $_POST['C_LastName'];
	$Mail_EmailAddress = $_POST['C_EmailAddress'];
	$Mail_ReviewTitle = $_POST['C_ReviewTitle'];
	$Mail_ReviewBody = $_POST['C_ReviewBody'];
	$Mail_RatingValue = $_POST['C_RatingValue'];
	
	if($Mail_RatingValue == 0 || $Mail_RatingValue == '0') 
	{
		$Mail_RatingValue = 'n/a';
	}

	$email = ADMINEMAIL;
	$subject = "New Review Submission via Thairapy Website";
	
	$message = '';
	$message.= '<html><body>';
	
	$message.='<p>Name: ' . $Mail_FirstName . ' ' . $Mail_LastName . '<br />';
	$message.='Email: ' . $Mail_EmailAddress . '</p>';
	$message.='<p>Rating: ' . $Mail_RatingValue  . '<br />';
	$message.='Review Title: ' . $Mail_ReviewTitle . '<br />';
	$message.='Review Description: ' . $Mail_ReviewBody . '<br />';
	$message.='<p><a href="#">Click here to approve the review</a>. (Once approved, it will appear on the webstie).</p>';
	
	$message.= '</body></html>';
	
	$mailer->sendReviewEmail($email,$subject,$message);*/
	
	$timeStamp = time();
	
	
	
	
	$mail	=	new PHPMailer();
	
	$Mail_FirstName = $_POST['C_FirstName'];
	$Mail_LastName = $_POST['C_LastName'];
	$Mail_EmailAddress = $_POST['C_EmailAddress'];
	$Mail_ReviewTitle = $_POST['C_ReviewTitle'];
	$Mail_ReviewBody = $_POST['C_ReviewBody'];
	$Mail_RatingValue = $_POST['C_RatingValue'];
	
	if($Mail_RatingValue == 0 || $Mail_RatingValue == '0') 
	{
		$Mail_RatingValue = 'n/a';
	}
	
	$message = '';
	$message.= '<html><body>';
	
	$message.='<p>Name: ' . $Mail_FirstName . ' ' . $Mail_LastName . '<br />';
	$message.='Email: ' . $Mail_EmailAddress . '</p>';
	$message.='<p>Rating: ' . $Mail_RatingValue  . '<br />';
	$message.='Review Title: ' . $Mail_ReviewTitle . '<br />';
	$message.='Review Description: ' . $Mail_ReviewBody . '<br />';
	$message.='<p><a href="' . APPURL . '/assets/inc/ajax/ReviewApprove.php?t=' . $timeStamp . '">Click here to approve the review</a>. (Once approved, it will appear on the webstie).</p>';
	
	$message.= '</body></html>';
	
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
	$mail->Subject    = "New Review Submission via Thairapy Website";
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);
	
	$address = DEVEMAIL;
	$mail->AddAddress($address, "Thairapy Salon and Spa");
	
	if(!$mail->Send()) {
		 // echo "Mailer Error: " . $mail->ErrorInfo;
		 echo 1;
	} else {
		  //echo "Message sent!";
		  echo 0;
	}
// ---- END GATHER AND SEND EMAIL ---- //

// ---- BEGIN WRITE REVIEW TO FILE ---- //
	
	$file = 'ReviewsData.php';
	//chmod($file, 0777);
	
	$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
	$context = stream_context_create($opts);
	$header = file_get_contents($file,false,$context);

	//$current = file_get_contents($file);
	$current = stripOutBar($Mail_RatingValue) . "|" . stripOutBar($Mail_ReviewTitle) . "|" . stripOutBar($Mail_EmailAddress) .  "|" . stripOutBar($Mail_FirstName) . " " . stripOutBar(substr($Mail_LastName, 0, 1)) . "|" . stripOutBar(addslashes($Mail_ReviewBody)) . "|0|" . time() . PHP_EOL;
	
	//file_put_contents($file, $current);
	file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
	
	/*$filename = 'ReviewsData.php';
	$somecontent = stripOutBar($Mail_RatingValue) . "|" . stripOutBar($Mail_ReviewTitle) . "|" . stripOutBar($Mail_EmailAddress) .  "|" . stripOutBar($Mail_FirstName) . " " . stripOutBar(substr($Mail_LastName, 0, 1)) . "|" . stripOutBar(addslashes($Mail_ReviewBody)) . "|0|" . time() . PHP_EOL;
	
	// Let's make sure the file exists and is writable first.
	if (is_writable($filename)) {
	
		// In our example we're opening $filename in append mode.
		// The file pointer is at the bottom of the file hence
		// that's where $somecontent will go when we fwrite() it.
		if (!$handle = fopen($filename, 'a')) {
			 echo "Cannot open file ($filename)";
			 exit;
		}
	
		// Write $somecontent to our opened file.
		if (fwrite($handle, $somecontent) === FALSE) {
			echo "Cannot write to file ($filename)";
			exit;
		}
	
		echo "Success, wrote ($somecontent) to file ($filename)";
	
		fclose($handle);
	
	} else {
		echo "The file $filename is not writable";
	}*/
	
// ---- END WRITE REVIEW TO FILE ---- //

?>
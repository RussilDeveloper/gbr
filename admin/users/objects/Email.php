<?php 
class Email {
	
	public static function sendEmailID() {
		
		return 'rajakarthick0306@gmail.com';
	}
	
	
	public static function sendEmailName() {
		return ' - Team';
	}
	
	
	public static function sendEmailPassword() {
		
		return 'raja0306';
	}

	public static function sendHost() {
		
		return 'smtp.gmail.com';
	}

	public static function sendPort() {
		
		return '587';
	}

	
	
	
	public static function sendEmail($toEmail){
		date_default_timezone_set('Etc/UTC');
		require_once(ROOT.'/PHPMailer/class.phpmailer.php');
		
		//Create a new PHPMailer instance
		$mail = new PHPMailer();
		//Tell PHPMailer to use SMTP
		$mail->IsSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug  = 2;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host       = self::sendHost();
		//$mail->Host       = 'mail.digidreamsindia.com/mail.justbuycycles.in';
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port       = self::sendPort();
		//Whether to use SMTP authentication
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "tls";
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username   = self::sendEmailID();
		//Password to use for SMTP authentication
		$mail->Password   = self::sendEmailPassword();
		//Set who the message is to be sent from
		$mail->SetFrom(self::sendEmailID(), self::sendEmailName());
		//Set an alternative reply-to address
		$mail->AddReplyTo(self::sendEmailID(), self::sendEmailName());
		//Set who the message is to be sent to
		//$mail->AddAddress($to);
		//$mail->AddBCC($tobcc);
		
		//checking if there are multiple email ids ; that is if it has =>
		if (strpos($toEmail,'=>') !== false) {
			//then has multiple email ids
			$a = explode('=>',$toEmail);
			foreach($a as $email) {
				$mail->AddAddress($email);
			}
		} else {
			$mail->AddAddress($toEmail);
		}
		
		//if($_POST[bcc1]) {$mail->AddBCC($_POST[bcc1]);}
		//if($_POST[bcc2]) {$mail->AddBCC($_POST[bcc2]);}
		
		//Set the subject line
		$mail->Subject = "subject";
		//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
		$mail->MsgHTML("message");
		//Replace the plain text body with one created manually
		//$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		$attachment=0;
		if(strlen($attachment) > 0) {
			$mail->AddAttachment($attachment);
		}
		
		
		$mail->Send();
	}

	public static function sendEmailFuntion($message){
		date_default_timezone_set('Etc/UTC');
		require_once(ROOT.'/PHPMailer/class.phpmailer.php');

		$toEmail="";
		$subject="";
		
		//Create a new PHPMailer instance
		$mail = new PHPMailer();
		//Tell PHPMailer to use SMTP
		$mail->IsSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug  = 2;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host       = self::sendHost();
		//$mail->Host       = 'mail.digidreamsindia.com/mail.justbuycycles.in';
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port       = self::sendPort();
		//Whether to use SMTP authentication
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "tls";
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username   = self::sendEmailID();
		//Password to use for SMTP authentication
		$mail->Password   = self::sendEmailPassword();
		//Set who the message is to be sent from
		$mail->SetFrom(self::sendEmailID(), self::sendEmailName());
		//Set an alternative reply-to address
		$mail->AddReplyTo(self::sendEmailID(), self::sendEmailName());
		//Set who the message is to be sent to
		//$mail->AddAddress($to);
		//$mail->AddBCC($tobcc);
		
		//checking if there are multiple email ids ; that is if it has =>
		if (strpos($toEmail,'=>') !== false) {
			//then has multiple email ids
			$a = explode('=>',$toEmail);
			foreach($a as $email) {
				$mail->AddAddress($email);
			}
		} else {
			$mail->AddAddress($toEmail);
		}
		
		//if($_POST[bcc1]) {$mail->AddBCC($_POST[bcc1]);}
		//if($_POST[bcc2]) {$mail->AddBCC($_POST[bcc2]);}
		
		//Set the subject line
		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
		$mail->MsgHTML($message);
		//Replace the plain text body with one created manually
		//$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		$attachment=0;
		if(strlen($attachment) > 0) {
			$mail->AddAttachment($attachment);
		}
		
		
		$mail->Send();
	}
	
	
	
	
	
	
	
	
	
	
	
}
?>
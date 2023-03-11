<?php include('../users/includes/init.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_POST['name'] == " "){
    return false;
}
if($_POST['phone'] == " "){
    return false;
}
if($_POST['email'] == " "){
    return false;
}
if($_POST['doctor'] == " "){
    return false;
}
if($_POST['appdate'] == " "){
    return false;
}
if($_POST['apptime'] == " "){
    return false;
}
else{
    



    $name = $_POST['name'];
    $pnumber = $_POST['phone'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];
    
    $doctorname = Details::getTableDetails($db,'doctor','id',$doctor,'spec');

        $today = date('Y-m-d');

        try {

        $query = $db->prepare("INSERT INTO `register` (`name`,`pnumber`,`email`,`doctorID`,`doctor`,`appdate`,`apptime`,`date_create`) VALUES 

                (:name,:pnumber,:email,:doctorID,:doctor,:appdate,:apptime,:dateCreate)");

        } catch (PDOException $e){ die($e->getMessage()); }


        $query->bindParam(':name',$name);
        $query->bindParam(':pnumber',$pnumber);
        $query->bindParam(':email',$email);
        $query->bindParam(':doctor',$doctorname);
        $query->bindParam(':doctorID',$doctor);
        $query->bindParam(':appdate',$appdate);
        $query->bindParam(':apptime',$apptime);
        $query->bindParam(':dateCreate',$today);

        $query->execute();
     $site = "Inhouse Medicare - Book an appointment";
     
     
     //Load Composer's autoloader
require 'mail/vendor/autoload.php';
	// ADD your Email and Name
    $name = $_POST['name'];
    $pnumber = $_POST['phone'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];
	$senderSubject = 'Inhouse Medicare Website - Book an appointment';
	
	$url = "https://lead.brandonanything.com/api/lead-form.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "api=dllTMGhobm1yNzZIckFZRkdJV1Z3Zz09&name={$name}&email={$email}&mobile={$pnumber}&location=&message=Department : {$doctorname}&others=App Date : {$appdate}&others1= App Time : {$apptime}&type=lead");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    // echo $result;
    curl_close($ch);
	
	$curl = curl_init();
    curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://live-server-10931.wati.io/api/v1/sendTemplateMessage?whatsappNumber=+919150712224',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "template_name": "lead_php",
  "broadcast_name": "lead_php",
  "parameters": [
    {
      "name": "website",
      "value": "'.$senderSubject.'"
    },
{
      "name": "name",
      "value": "'.$name.'"
    },
{
      "name": "email",
      "value": "'.$email.'"
    },
{
      "name": "phone",
      "value": "'.$pnumber.'"
    },{
      "name": "doctor",
      "value": "'.$doctorname.'"
    },
{
      "name": "appointmentdate",
      "value": "'.$appdate.'"
    },{
      "name": "appointmenttime",
      "value": "'.$apptime.'"
    }
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI1MzIwNDlkMC1mMGUyLTRhNWQtOWJhYy00ZTQwZTc1OTM3ZGMiLCJ1bmlxdWVfbmFtZSI6ImJjY21hcnRlY2hAZ21haWwuY29tIiwibmFtZWlkIjoiYmNjbWFydGVjaEBnbWFpbC5jb20iLCJlbWFpbCI6ImJjY21hcnRlY2hAZ21haWwuY29tIiwiYXV0aF90aW1lIjoiMDcvMDQvMjAyMiAxNDowNDoxMyIsImRiX25hbWUiOiIxMDkzMSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFETUlOSVNUUkFUT1IiLCJleHAiOjI1MzQwMjMwMDgwMCwiaXNzIjoiQ2xhcmVfQUkiLCJhdWQiOiJDbGFyZV9BSSJ9.YesBj7OLMGxiHX4ZO8peZ0Na9MDtj5QAGtsFFFAoeVc',
    'Content-Type: application/json-patch+json',
    'Cookie: affinity=1662970830.264.170.225110|9d37cc0b99fcea2247b6925e4d69bd4d'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
	
	
		$curl = curl_init();
    curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://live-server-10931.wati.io/api/v1/sendTemplateMessage?whatsappNumber=+919342010772',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "template_name": "lead_php",
  "broadcast_name": "lead_php",
  "parameters": [
    {
      "name": "website",
      "value": "'.$senderSubject.'"
    },
{
      "name": "name",
      "value": "'.$name.'"
    },
{
      "name": "email",
      "value": "'.$email.'"
    },
{
      "name": "phone",
      "value": "'.$pnumber.'"
    },{
      "name": "doctor",
      "value": "'.$doctorname.'"
    },
{
      "name": "appointmentdate",
      "value": "'.$appdate.'"
    },{
      "name": "appointmenttime",
      "value": "'.$apptime.'"
    }
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI1MzIwNDlkMC1mMGUyLTRhNWQtOWJhYy00ZTQwZTc1OTM3ZGMiLCJ1bmlxdWVfbmFtZSI6ImJjY21hcnRlY2hAZ21haWwuY29tIiwibmFtZWlkIjoiYmNjbWFydGVjaEBnbWFpbC5jb20iLCJlbWFpbCI6ImJjY21hcnRlY2hAZ21haWwuY29tIiwiYXV0aF90aW1lIjoiMDcvMDQvMjAyMiAxNDowNDoxMyIsImRiX25hbWUiOiIxMDkzMSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFETUlOSVNUUkFUT1IiLCJleHAiOjI1MzQwMjMwMDgwMCwiaXNzIjoiQ2xhcmVfQUkiLCJhdWQiOiJDbGFyZV9BSSJ9.YesBj7OLMGxiHX4ZO8peZ0Na9MDtj5QAGtsFFFAoeVc',
    'Content-Type: application/json-patch+json',
    'Cookie: affinity=1662970830.264.170.225110|9d37cc0b99fcea2247b6925e4d69bd4d'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
	
	
	$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output SMTP::DEBUG_SERVER
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'inhousemedicare.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mail@inhousemedicare.com';                     //SMTP username
    $mail->Password   = 'Developers@12345';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = '465';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->AddAddress('developer@bccmartech.in', 'Developers');
	$mail->AddAddress('digital@bccmartech.in');
    $mail->AddAddress('divya@bccmarcom.com');
    $mail->AddAddress('ilias@bccmartech.com');
    $mail->AddAddress('info@inhousemedicare.com','Info');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Inhouse Medicare - Book an appointment';
    
	$message = '<html><body>';
	$message .= '<table rules="all" style="width:100%;" cellpadding="10">';
	$message .= ($name) ? "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>" : '';
	$message .= ($email) ?"<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>" : '';
	$message .= ($pnumber) ?"<tr><td><strong>Phone:</strong> </td><td>" . $pnumber . "</td></tr>" : '';
	$message .= ($doctorname) ?"<tr><td><strong>Department:</strong> </td><td>" . $doctorname . "</td></tr>" : '';
	$message .= ($appdate) ?"<tr><td><strong>App Date:</strong> </td><td>" . $appdate . "</td></tr>" : '';
	$message .= ($apptime) ?"<tr><td><strong>App Time:</strong> </td><td>" . $apptime . "</td></tr>" : '';
	

	$message .= "</table>";
	$message .= "</body></html>";

	$mail->Body = $message;
	
    $mail->AltBody = 'Contact Inhouse Medicare';

    $mail->send();
    // echo 'Message has been sent';
    // Tfsc::saveAppointment($db,$senderName,'',$senderPhone,$senderEmail,$senderDepartment);
    
    header("location: https://inhousemedicare.com/thank-you/");
	exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} //else End

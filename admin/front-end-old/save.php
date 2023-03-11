<?php 

include('../users/includes/init.php');

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);



  $name;$email;$mobile;$doctor;$pagename;$appdate;$apptime;$captcha;
 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
    $doctor = filter_input(INPUT_POST, 'doctor', FILTER_SANITIZE_STRING);
    $pagename = filter_input(INPUT_POST, 'pagename', FILTER_SANITIZE_STRING);
    $appdate = filter_input(INPUT_POST, 'appdate', FILTER_SANITIZE_STRING);
    $apptime = filter_input(INPUT_POST, 'apptime', FILTER_SANITIZE_STRING);
  $captcha = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
  if(!$captcha){
    echo '
    Please check the the captcha form.
    ';
    exit;
  }
  $secretKey = "6Lcn8VchAAAAABUzFJGT4DG3VTMdJpD1j6_VnlUn";
  $ip = $_SERVER['REMOTE_ADDR'];

  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array('secret' => $secretKey, 'response' => $captcha);

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  $responseKeys = json_decode($response,true);
  header('Content-type: application/json');
  if($responseKeys["success"]) {
     
      $doctorname = Details::getTableDetails($db,'doctor','id',$doctor,'spec');

        $today = date('Y-m-d');

        try {

        $query = $db->prepare("INSERT INTO `register` (`name`,`pnumber`,`email`,`doctorID`,`doctor`,`appdate`,`apptime`,`date_create`) VALUES 

                (:name,:pnumber,:email,:doctorID,:doctor,:appdate,:apptime,:dateCreate)");

        } catch (PDOException $e){ die($e->getMessage()); }


        $query->bindParam(':name',$name);
        $query->bindParam(':pnumber',$mobile);
        $query->bindParam(':email',$email);
        $query->bindParam(':doctor',$doctorname);
        $query->bindParam(':doctorID',$doctor);
        $query->bindParam(':appdate',$appdate);
        $query->bindParam(':apptime',$apptime);
        $query->bindParam(':dateCreate',$today);

        $query->execute();
        
     //require("PHPMailer/PHPMailerAutoload.php");
        
        //$recipientName='Appointment';
         $site = "Inhouse Medicare - Book an Appointment";
         require("PHPMailer/PHPMailerAutoload.php");
        $recipientName='Appointment';
        
         //$site = "Inhouse Medicare - Book an Appointment";
         
        //collect the posted variables into local variables before calling $mail = new mailer
    
        $senderName = $name;
        $senderPhone = $mobile;
        $senderEmail = $email;
        $Department= $doctorname;
        $appDate= $appdate;
        $appTime= $apptime;
        $senderSubject = $site;
   
     
    
        //Create a new PHPMailer instance
        $mail = new PHPMailer();
    
        //Set who the message is to be sent from
        $mail->setFrom('info@inhousemedicare.com', $recipientName);
        //Set an alternative reply-to address
        $mail->addReplyTo($senderEmail,$senderName);
        //Set who the message is to be sent to
        // $mail->addAddress($senderEmail, $senderName );
        $mail->AddAddress('ilias@bccmartech.com', 'Ilias');
        $mail->AddAddress('digital@bccmartech.in', 'Digital Marketing');
        $mail->AddAddress('divya@bccmarcom.com', 'Divya');
        $mail->AddAddress('developer@bccmartech.in', 'Development');
         $mail->AddAddress('developers@brandcarecom.in', 'Developers');
      $mail->AddAddress('digitalmarketing@brandcarecom.in', 'Digital');
        //Set the subject line
        $mail->Subject = $senderSubject;
    
        $mail->Body = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    
        $mail->MsgHTML($body);
        //$mail->AddAddress('developers@brandcarecom.in');
    
        //$mail-&gt;AddAttachment("images/phpmailer.gif"); // attachment
        //$mail-&gt;AddAttachment("images/phpmailer_mini.gif"); // attachment
    
        //now make those variables the body of the emails
        $message = '<html><body>';
        $message .= '<table rules="all" style="width:100%;" cellpadding="10">';
        $message .= ($senderName) ? "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $senderName . "</td></tr>" : '';
        $message .= ($senderPhone) ?"<tr><td><strong>Phone:</strong> </td><td>" . $senderPhone . "</td></tr>" : '';
        $message .= ($senderEmail) ?"<tr><td><strong>Email:</strong> </td><td>" . $senderEmail . "</td></tr>" : '';
        $message .= ($Department) ?"<tr><td><strong>Department:</strong> </td><td>" . $Department . "</td></tr>" : '';
        $message .= ($appDate) ?"<tr><td><strong>Appointment Date:</strong> </td><td>" . $appDate . "</td></tr>" : '';
        $message .= ($appTime) ?"<tr><td><strong>Appointment Time:</strong> </td><td>" . $appTime . "</td></tr>" : '';
    
        $message .= "</table>";
        $message .= "</body></html>";
    
        $mail->Body = $message;
        $mail->Send();
        
//     $url = "https://lead.brandonanything.com/api/lead-form.php";
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, "api=dllTMGhobm1yNzZIckFZRkdJV1Z3Zz09&name={$name}&email={$email}&mobile={$pnumber}&location=&message={$doctorname}&others={$appdate}&others1={$apptime}&type=lead&mailAddress1=info@regalhospital.com&mailAddress2=digitalmarketing@brandcarecom.in&mailAddress3=ilias@brandcarecom.in&mailAddress4=developers@brandcarecom.in&mailAddress5=divya@bccmarcom.com&site={$site}");
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//      $result = curl_exec($ch);
//   // echo $result;
//      curl_close($ch);
    
    // header('location: https://inhousemedicare.com/thank-you/');
    // exit();
    
    echo json_encode(array('success' => 'true'));
                
  } else {
    echo json_encode(array('error' => 'false'));
  
    

  }
  
  
  ?>
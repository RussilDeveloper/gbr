<?php include('../users/includes/init.php');

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
        
     $site = "Inhouse Medicare - Book an Appointment";
     
     require("PHPMailer/PHPMailerAutoload.php");
        
        $recipientName='Appointment';

        //collect the posted variables into local variables before calling $mail = new mailer
    
        $senderName = $name;
        $senderPhone = $pnumber;
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
        $mail->AddAddress('ilias@brandcarecom.in');
        $mail->AddAddress('designing@brandcarecom.in');
        $mail->AddAddress('digitalmarketing@brandcarecom.in');
        $mail->AddAddress('servicing@brandcarecom.in');
        $mail->AddAddress('developer@bccmartech.in', 'Development');
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
    $url = "https://lead.brandonanything.com/api/lead-form.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "api=dllTMGhobm1yNzZIckFZRkdJV1Z3Zz09&name={$name}&email={$email}&mobile={$pnumber}&location=&message={$doctorname}&others={$appdate}&others1={$apptime}&type=lead&mailAddress1=info@regalhospital.com&mailAddress2=digitalmarketing@brandcarecom.in&mailAddress3=ilias@brandcarecom.in&mailAddress4=developers@brandcarecom.in&mailAddress5=divya@bccmarcom.com&site={$site}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     $result = curl_exec($ch);
   // echo $result;
     curl_close($ch);
    
    header('location: https://inhousemedicare.com/thank-you/');
    exit();
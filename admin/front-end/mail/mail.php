<?php 



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	$senderName ="test";
	$senderPhone = "test";
	$senderEmail= "test";
	$senderDepartment= "test";
	$senderSubject = 'Bloom Hospital - Appointment';

	$message = '<html><body>';
	$message .= '<table rules="all" style="width:100%;" cellpadding="10">';
	$message .= ($senderName) ? "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $senderName . "</td></tr>" : '';
	$message .= ($senderEmail) ?"<tr><td><strong>Email:</strong> </td><td>" . $senderEmail . "</td></tr>" : '';
	$message .= ($senderPhone) ?"<tr><td><strong>Phone:</strong> </td><td>" . $senderPhone . "</td></tr>" : '';
	$message .= ($senderDepartment) ?"<tr><td><strong>Department:</strong> </td><td>" . $senderDepartment . "</td></tr>" : '';
	$message .= "</table>";
	$message .= "</body></html>";

    $headers = "From: developers@brandcarecom.in\r\n";
    $headers .= "Reply-To: developers@brandcarecom.in\r\n";
    $headers .= "Return-Path: developers@brandcarecom.in\r\n";
    $headers .= "CC: developers@brandcarecom.in\r\n";
    // $headers .= "BCC: hidden@example.com\r\n";
    
    if ( mail('bccmarcom@gmail.com',$senderSubject,$message,$headers) ) {
       echo "The email has been sent!";
       } else {
       echo "The email has failed!";
       }
    ?> 
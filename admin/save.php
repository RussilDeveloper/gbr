<?php include('users/includes/init.php');

if(isset($_POST['doctorupdate'])) {
	echo Clients::doctorupdate($db,$_POST['doctorname'],$_POST['doctorspec'],$_POST['doctorID']);
	header('location:   doctors.php');
	exit();
}
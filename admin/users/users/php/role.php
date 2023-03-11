<?php include('../../includes/init.php');

if(isset($_POST['roleSubmit'])) {
	Role::roleDescriptionUpdate($db,$_POST['roleDescription'],$_POST['userID']);
	$_SESSION['programMessage'] = "<h5 style=\"color:green;\">Role Description has been updated.</h5>";
	header("Location: ../manage-role-description.php");
	exit();
}



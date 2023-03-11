<?php include('../includes/init.php');

/* $password = crypt($_POST['password'],CRYPT);

	try {
$query = $db->prepare("SELECT COUNT('id') as 'number' FROM `users` WHERE `email` = :email AND `password` = :password");
	} catch (PDOException $e){ die($e->getMessage()); }
$query->bindParam(':email',$_POST['email']);
$query->bindParam(':password',$password);
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC); */

// echo $_POST['email'];
	try {
$query = $db->query("SELECT `password` FROM `users` WHERE `email` = '{$_POST['email']}'");
	} catch (PDOException $e){ die($e->getMessage()); }
$row = $query->fetch(PDO::FETCH_ASSOC);
if (password_verify($_POST['password'], $row['password'])) {
    //echo 'Verified<br>';
	$row['number'] = 1;
} else {
    //echo 'Invalid password<br>';
} 

if($row['number'] == 1 ) {
	if(User::checkUserVerifiedActive($db,$_POST['email'])) {
		$_SESSION['loggedIn'] = 1;
		$_SESSION['email'] = $_POST['email'];
		//$_SESSION['entityID'] = User::getEntityID($db,$_POST['email']);
		$_SESSION['userID'] = User::getID($db,$_POST['email']);
		$_SESSION['UserLoginName'] = User::getLoginName($db,$_POST['email']);
		header("Location: ".HOST."/dashboard.php");
		exit();
	} else {
		header("Location: ".HOST."/users/users/logout.php");
		exit();
	}
}
else {
	header("Location: ".HOST."/users/users/logout.php");
	exit();
}


?>
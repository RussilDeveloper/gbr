<?php include('../includes/init.php');

try {
$query = $db->query("SELECT * FROM `users` WHERE `email` = '{$_POST['email']}'");
	} catch (PDOException $e){ die($e->getMessage()); }
$row = $query->fetch(PDO::FETCH_ASSOC);

if ($row['password'] == '') {
	
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			try {

		$db->query("UPDATE `users` SET `password` = '{$password}' WHERE `email` = '{$_POST['email']}'");

			} catch (PDOException $e){ die($e->getMessage()); }

			header("location: ".HOST."/index.html");
			exit();

}else{
	$_SESSION['signupmsg'] = "Kindly contact Development Team";
	header("location: ".HOST."/sign-up.php");
	exit();
}
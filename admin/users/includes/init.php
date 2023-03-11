<?php
session_start();


//getting root and host values for database table = init
// 	echo __DIR__.'<br>';							//root
// 	echo 'http://'.$_SERVER['HTTP_HOST'].'<br>';	//host

//error reporting
error_reporting(0);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//defining various constants
	define("CRYPT", 'hello_BNIrejola*123');
	//echo crypt('test',CRYPT);

//database connection Inno Hosting
	$dbhost     = "localhost";
	$dbname     = "branddpc_gbr-clinic";
	$dbuser     = "branddpc_gbr-admin-user";
	$dbpass     = "Developers@12345";
	
	$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//extract Root and Host
		try {
	$query = $db->query("SELECT * FROM `init`");
		} catch (PDOException $e){ die($e->getMessage()); }
	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		if($row['name'] == 'root') {
			define("ROOT", $row['value']);
		} else if($row['name'] == 'host') {
			define("HOST", $row['value']);
		} else if($row['name'] == 'site_name') {
			define("SITE", $row['value']);
		} else if($row['name'] == 'author') {
			define("AUTHOR", $row['value']);
		} else if($row['name'] == 'keywords') {
			define("KEYWORDS", $row['value']);
		}
	}

    // $expdate='2021-09-06';
    // $expdate=strtotime("2021-09-06");
    // $now=strtotime("now");
    // if($now >= $expdate){
    // 	header('location:  exp.php');
    //     exit();
    // }
	define("HOSTapi", "http://apilive.ricemandi.in");
	//define("HOSTapi", "http://apilive.ricemandi.in");

//loading the CLASSES
	spl_autoload_register(function($className) {
		include(ROOT.'/users/objects/'.$className.'.php');
	});

	// function __autoload($className) {
	// 	include(ROOT.'/users/objects/'.$className.'.php');
	// }

//setting to Indian time
	date_default_timezone_set("Asia/Kolkata");

//user activity record
	/* if(isset($_SESSION['email'])) {
		User::recordActivity($db,User::getUserID($db,$_SESSION['email']),basename($_SERVER['PHP_SELF']));
	} */


?>
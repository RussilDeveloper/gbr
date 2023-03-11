<?php
session_start();
//getting root and host values for database table = init
	// echo __DIR__.'<br>';							//root
	// echo 'http://'.$_SERVER['HTTP_HOST'].'<br>';	//host

//error reporting
	error_reporting(0);

//defining various constants
	define("CRYPT", 'hello_BNIrejola*123', true);
	//echo crypt('test',CRYPT);

//database connection Inno Hosting
	$dbhost     = "localhost";
	$dbname     = "rejola_uthsmaya";
	$dbuser     = "rejola_uadmin";
	$dbpass     = "rejola_upass";
	
	$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//extract Root and Host
		try {
	$query = $db->query("SELECT * FROM `init`");
		} catch (PDOException $e){ die($e->getMessage()); }
	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		if($row['name'] == 'root') {
			define("ROOT", $row['value'], true);
		} else if($row['name'] == 'host') {
			define("HOST", $row['value'], true);
		} else if($row['name'] == 'site_name') {
			define("SITE", $row['value'], true);
		} else if($row['name'] == 'author') {
			define("AUTHOR", $row['value'], true);
		} else if($row['name'] == 'keywords') {
			define("KEYWORDS", $row['value'], true);
		}
	}
	define("HOSTapi", "http://apilive.ricemandi.in", true);
	//define("HOSTapi", "http://apilive.ricemandi.in", true);

//loading the CLASSES
	function __autoload($className) {
		include(ROOT.'/users/objects/'.$className.'.php');
	}

//setting to Indian time
	date_default_timezone_set("Asia/Kolkata");

//user activity record
	/* if(isset($_SESSION['email'])) {
		User::recordActivity($db,User::getUserID($db,$_SESSION['email']),basename($_SERVER['PHP_SELF']));
	} */


?>
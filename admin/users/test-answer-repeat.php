<?php 
include('includes/init.php');
//THIS FILE REMOVES ALL THE ANSWERS MORE THAN 40 COUNT OF THAT MEMBER
//loop through each member
//get count of answer entries of each 
	try {
$query = $db->query("SELECT * FROM `member`");
	} catch (PDOException $e){ die($e->getMessage()); }
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		try {
	$aquery = $db->query("SELECT COUNT(`id`) AS `number` FROM `test_answers` WHERE `memberid` = '{$row['id']}' AND (`who` IS NULL OR `who` = '')");
		} catch (PDOException $e){ die($e->getMessage()); }
	$arow = $aquery->fetch(PDO::FETCH_ASSOC);
	echo "{$row['name']} - {$arow['number']}<br>";
	if($arow['number'] > 40) {
			try {
		$dquery = $db->query("SELECT * FROM `test_answers` WHERE `memberid` = '{$row['id']}' AND (`who` IS NULL OR `who` = '') ORDER BY `id` ASC");
			} catch (PDOException $e){ die($e->getMessage()); }
		$count = 1;
		while($drow = $dquery->fetch(PDO::FETCH_ASSOC)) {
			$delete = "";
			if($count > 40) {
				$delete = "delete";
					try {
				$db->query("DELETE FROM `test_answers` WHERE `id` = '{$drow['id']}'");
					} catch (PDOException $e){ die($e->getMessage()); }
			}
			echo "{$count} - {$drow['id']} - {$delete}<br>";
			$count++;
		}
	}
}



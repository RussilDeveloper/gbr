<?php 

class Count {

	public static function fullClientCount($db) {

		try {

		$query = $db->query("SELECT count(*) AS `num` FROM `clients` WHERE  `active` = '1'  ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$row = $query->fetch(PDO::FETCH_ASSOC);

		return $row['num'];
	}

	public static function RetainerClientCount($db) {

		try {

		$query = $db->query("SELECT count(*) AS `num` FROM `clients` WHERE  `active` = '1' AND `type` = 'Retainer'  ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$row = $query->fetch(PDO::FETCH_ASSOC);

		return $row['num'];
	}

	public static function NonRetainerClientCount($db) {

		try {

		$query = $db->query("SELECT count(*) AS `num` FROM `clients` WHERE  `active` = '1' AND `type` != 'Retainer'  ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$row = $query->fetch(PDO::FETCH_ASSOC);

		return $row['num'];
	}

	public static function loadDomainRewalTwoMonth($db) {

		$from = date('Y-m-d',strtotime('+30 days',strtotime(date('Y-m-d')))) . PHP_EOL;
		$to = date('Y-m-d',strtotime('+60 days',strtotime(date('Y-m-d')))) . PHP_EOL;

		try {

		$query = $db->query("SELECT * FROM `credentials` WHERE  `active` = '1' AND `valid_to` BETWEEN '{$from}' AND '{$to}' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$count = 0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;

		}
		return $count;
	}

	public static function loadDomainRewaloneMonth($db) {

		$from = date('Y-m-d',strtotime('+0 days',strtotime(date('Y-m-d')))) . PHP_EOL;
		$to = date('Y-m-d',strtotime('+30 days',strtotime(date('Y-m-d')))) . PHP_EOL;

		try {

		$query = $db->query("SELECT * FROM `credentials` WHERE  `active` = '1' AND `valid_to` BETWEEN '{$from}' AND '{$to}' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$count = 0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;

		}
		return $count;
	}

}
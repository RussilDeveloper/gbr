<?php 

class Charts {

	public static function loadLeadchart($db,$ID) {

		try {

		$query = $db->query("SELECT * FROM `form` WHERE  `active` = '1' AND `clientID` = '{$ID}'  ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list="";
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
		
			$list .= self::loadRelatedLeadProjectLeads($db,$row['id']);
		}

		return $list;

	}

	public static function loadRelatedLeadProjectLeads($db,$ID) {

		try {

		$query = $db->query("SELECT * FROM `lead_form` WHERE  `active` = '1' AND `formID` = '{$ID}' Group By `dateCreate` Order By `dateCreate` DESC Limit 5 ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$x=0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$x++;
		}

		return $x;

	}

}
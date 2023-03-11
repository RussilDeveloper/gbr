<?php 
class Details {

	public static function getTableDetails($db,$table,$cond,$ID,$col) {
			
		try {
		$query = $db->query("SELECT * FROM {$table}  WHERE {$cond} = '{$ID}' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		
      $row = $query->fetch(PDO::FETCH_ASSOC);
		return $row[$col];
	}



	public static function getTableDetails2($db,$table,$cond,$ID,$cond1,$ID1,$col) {
			
		try {
		$query = $db->query("SELECT * FROM {$table}  WHERE {$cond} = '{$ID}'  AND {$cond1} = '{$ID1}' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		
      $row = $query->fetch(PDO::FETCH_ASSOC);
		return $row[$col];
	}

	public static function getTableDetailsSum($db,$table,$cond,$ID) {
			
		try {
		$query = $db->query("SELECT Sum(`feedbackvalue`) as Sum FROM {$table}  WHERE {$cond} = '{$ID}' AND `active`='1' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		
      $row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['Sum'];
	}

	public static function getTableDetailsCount($db,$table,$cond,$ID) {
			
		try {
		$query = $db->query("SELECT count(`id`) as count FROM {$table}  WHERE {$cond} = '{$ID}' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		
      $row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['count'];
	}

	public static function getTableDetailsCount2($db,$table,$cond,$ID,$cond1,$ID1) {
			
		try {
		$query = $db->query("SELECT count(`id`) as count FROM {$table}  WHERE {$cond} = '{$ID}' AND {$cond1} = '{$ID1}' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		
      $row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['count'];
	}

	public static function getTableDetailsCount3G($db,$table,$cond,$ID,$cond1,$ID1,$cond2,$ID2) {
			
		try {
		$query = $db->query("SELECT count(`id`) as count FROM {$table}  WHERE {$cond} = '{$ID}' AND {$cond1} = '{$ID1}' AND {$cond2} = '{$ID2}' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		
      $row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['count'];
	}

	
	

	

}
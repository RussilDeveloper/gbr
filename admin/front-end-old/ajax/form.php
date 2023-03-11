<?php include('../../users/includes/init.php');




            
       try {

		$query = $db->query("SELECT * FROM `doctor` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$list .= "<option value=\"{$row['id']}\">{$row['spec']}</option>";

		}

     

		echo $list;
        

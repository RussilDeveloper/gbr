<?php 
class User {
	public static function checkUserVerifiedActive($db,$email) {
			try {
		$query = $db->query("SELECT `active` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		if($row['active'] == 0) {
			return false;
		} else {
			return true;
		}
	}
	
	
	
	public static function getID($db,$email) {
			try {
		$query = $db->query("SELECT `id` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['id'];
	}

	public static function getDetails($db,$email) {
			try {
		$query = $db->query("SELECT * FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['company_id'];
	}
	

	public static function getLoginName($db,$email) {
			try {
		$query = $db->query("SELECT `name` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['name'];
	}

	public static function getClientID($db,$email) {
			try {
		$query = $db->query("SELECT `clientID` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['clientID'];
	}
	
	
	
	/* public static function getEntityID($db,$email) {
			try {
		$query = $db->query("SELECT `entityid` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['entityid'];
	} */
	
	
	
	public static function getEmailOfRole($db,$role) {
			try {
		$query = $db->query("SELECT `email` FROM `users` WHERE `role` = '{$role}' AND `active` > '0'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['email'];
	}
	
	
	
	public static function getEmailOfName($db,$name) {
			try {
		$query = $db->query("SELECT `email` FROM `users` WHERE `name` = '{$name}' AND `active` > '0'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['name'];
	}
	
	
	
	public static function getRole($db,$email) {
			try {
		$query = $db->query("SELECT `role` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['role'];
	}
	
	
	
	public static function getIDwithName($db,$name,$lastName) {
		if(strlen($lastName) > 0) {
			$where = "`firstname` = '{$name}' AND `lastname` = '{$lastName}'";
		} else {
			$where = "`name` = '{$name}'";
		}
			try {
		$query = $db->query("SELECT `id` FROM `users` WHERE {$where}");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['id'];
	}
	
	
	
	public static function getPassword($db,$logInID) {
			try {
		$query = $db->query("SELECT `password` FROM `users` WHERE `loginid` = '{$logInID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['password'];
	}
	
	
	
	public static function getName($db,$email) {
			try {
		$query = $db->query("SELECT `name` FROM `users` WHERE `id` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['name'];
	}
	
	
	
	public static function getNameWithID($db,$userID) {
			try {
		$query = $db->query("SELECT `name` FROM `users` WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['name'];
	}
	
	
	
	public static function getTeamWithID($db,$userID) {
			try {
		$query = $db->query("SELECT `team` FROM `users` WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['team'];
	}
	
	
	
	public static function getEmail($db,$userID) {
			try {
		$query = $db->query("SELECT `email` FROM `users` WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['email'];
	}

		public static function getEmail1($db,$userID) {
			try {
		$query = $db->query("SELECT * FROM `users` WHERE `name` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['email'];
	}
	
	
	
	public static function changePassword($db,$email,$rawPassword) {
		//$password = crypt($rawPassword,CRYPT);
		$password = password_hash($rawPassword, PASSWORD_DEFAULT);
			try {
		$db->query("UPDATE `users` SET `password` = '{$password}' WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	public static function updateActive($db,$email,$active) {
			try {
		$db->query("UPDATE `users` SET `active` = '{$active}' WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	public static function updateRights($db,$email,$rights) {
			try {
		$db->query("UPDATE `users` SET `rights` = '{$rights}' WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	
	public static function rights($db,$email) {
			try {
		$query = $db->query("SELECT `rights` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['rights'];
	}
	
	
	
	public static function checkEmailExists($db,$email) {
			try {
		$query = $db->query("SELECT COUNT(`id`) as `number` FROM `users` WHERE `email` = '{$email}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		if($row['number'] > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	
	
	public static function addUser($db,$name,$email) {
		//$password = crypt('password',CRYPT);
		$password = password_hash('password', PASSWORD_DEFAULT);
			try {
		$db->query("INSERT INTO `users` (`name`,`loginid`,`departmentid`,`password`,`rights`) VALUES ('{$name}','{$logInID}','{$departmentID}','{$password}','20')");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
								//active / passive   edit / list
	public static function getList($db,$userType,$listType) {
		if($userType == 'active') {
			$active = "`active` > '0'";
		} else {
			$active = "`active` = '0'";
		}
			try {
		$query = $db->query("SELECT * FROM `users` WHERE {$active} order by `name` ASC");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table class=\"table\">
					<tr>
						<th>Name</th>
						<th>Role Name</th>
						
					</tr>
				";
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			if($listType == 'edit') {
				$editFormStart = "
									<form method=\"post\" action=\"php/users.php\" onSubmit=\"return confirm('Edit Save?');\">
								";
				$editFormEnd = "
										<td><input type=\"submit\" name=\"userRoleSave\" value=\"ROLE SAVE\" class=\"btn btn-success\"></td>
										<input type=\"hidden\" name=\"userID\" value=\"{$row['id']}\">
									</form>
									<!--<form method=\"post\" action=\"php/users.php\" onSubmit=\"return confirm('Reset Password?');\">
										<td><input type=\"submit\" name=\"userResetPassword\" value=\"RESET PASSWORD\" class=\"btn btn-primary\"></td>
											<input type=\"hidden\" name=\"userID\" value=\"{$row['id']}\">
									</form>-->
									<form method=\"post\" action=\"php/users.php\" onSubmit=\"return confirm('De-activate User?');\">
										<td><input type=\"submit\" name=\"userDeActivate\" value=\"DE-ACTIVATE USER\" class=\"btn btn-danger\"></td>
											<input type=\"hidden\" name=\"userID\" value=\"{$row['id']}\">
									</form>
								";
			} else {
				$editFormStart = "";
				$editFormEnd = "";
			}
			$list .= "
						<tr>
							{$editFormStart}
							<td>{$row['name']}</td>
							<td><input class=\"form-control\" name=\"role\" value=\"{$row['role']}\"></td>
							{$editFormEnd}
						</tr>
					";
		}
		$list .= "</table>";
		return $list;
	}
	
	
	
	public static function listForSelect($db) {
			try {
		$query = $db->query("SELECT `id`,`firstname`,`lastname` FROM `users` WHERE `active` > '0' ORDER BY `name` ASC");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list == "";
		while($row = $query->fetch(PDO::FETCH_ASSOC)) { 
			if($row['firstname'] != 'Sabari') {
				$list .= "<option value=\"{$row['id']}\">{$row['firstname']} {$row['lastname']}</option>";
			}
		}
		return $list;
	}
	
	
	
	
	public static function checkLogInIDofUserID($db,$logInID,$userID) {
			try {
		$query = $db->query("SELECT `loginid` FROM `users` WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		if($row['loginid'] == $logInID) {
			return true;
		} else {
			return false;
		}
	}
	
	
	
	public static function roleUpdate($db,$role,$userID) {
			try {
		$db->query("UPDATE `users` SET `role` = '{$role}' WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	
	public static function editUser($db,$name,$logInID,$userID) {
			try {
		$db->query("UPDATE `users` SET `name` = '{$name}', `loginid` = '{$logInID}' WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	public static function resetPassword($db,$userID) {
		$password = crypt('password',CRYPT);
			try {
		$db->query("UPDATE `users` SET `password` = '{$password}' WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	public static function deActivate($db,$userID) {
			try {
		$db->query("UPDATE `users` SET `active` = '0' WHERE `id` = '{$userID}'");
			} catch (PDOException $e){ die($e->getMessage()); }
	}
	
	
	
	public static function totalActiveMembers($db) {
			try {
		$query = $db->query("SELECT COUNT(`id`) as `number` FROM `users` WHERE `active` > '0' AND `name` != 'BNI Visitor' AND  `name` != 'Sabari'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$row = $query->fetch(PDO::FETCH_ASSOC);
		return $row['number'];
	}
	
	
	
	
	
	
	
	
	
	
	
}
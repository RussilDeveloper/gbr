<?php 
class Feedback {

	public static function loadFeedBackDetails($db) {
			
		try {
		$query = $db->query("SELECT * FROM `feedback_main` WHERE `active` = '1' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Company</th>
                            <th>Place</th>
                            <th>Contact TPRS</th>
                            <th>Value</th>
                            <th>Remarks</th>
                            <th>Feedback</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td id=\"name{$row['id']}\">{$row['name']}</td>
	                        <td id=\"email{$row['id']}\">{$row['email']}</td>
	                        <td id=\"contact{$row['id']}\">{$row['contact']}</td>
	                        <td id=\"company{$row['id']}\">{$row['company']}</td>
	                        <td id=\"place{$row['id']}\">{$row['place']}</td>

	                        <td id=\"contact_tprs{$row['id']}\">{$row['contact_tprs']}</td>
	                        <td>".Details::getTableDetailsSum($db,'feedback_sub','feedbackid',$row['id'])."</td>
	                        <td id=\"remarks{$row['id']}\">{$row['remarks']}</td>
	                        <td><a href=\"view-feedback.php?id={$row['id']}\"><button  class=\"btn btn-info waves-effect waves-light\">View</button ></a></td>
	                        <td><button data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"editId({$row['id']})\" id=\"{$row['id']}\" class=\"btn btn-warning waves-effect waves-light editQuestion\">Edit</button ></td>
	                        <td><button id=\"{$row['id']}\" class=\"btn btn-danger waves-effect waves-light deleteFeedback\">Delete</button ></td>
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	
	public static function loadSubFeedBackDetailsView($db,$feedbackid) {
			
		try {
		$query = $db->query("SELECT * FROM `feedback_sub` WHERE `feedbackid`='{$feedbackid}' AND `active` = '1' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Question</th>
                            <th>Value</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td id=\"question{$row['id']}\">{$row['question']}</td>
	                        <td id=\"feedbackvalue{$row['id']}\">{$row['feedbackvalue']}</td>
	                        
	                        <td><button data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"editId({$row['id']})\" id=\"{$row['id']}\" class=\"btn btn-warning waves-effect waves-light editQuestion\">Edit</button ></td>
	                        <td><button id=\"{$row['id']}\" class=\"btn btn-danger waves-effect waves-light deleteFeedbackSub\">Delete</button ></td>
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	public static function loadFeedBackDetailsToday($db) {

		$today=date('Y-m-d');
			
		try {
		$query = $db->query("SELECT * FROM `feedback_main` WHERE `active` = '1' AND `dateadded`='{$today}'");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Company</th>
                            <th>Place</th>
                            <th>Contact TPRS</th>
                            <th>Value</th>
                            <th>Remarks</th>
                            <th>Feedback</th>
                            
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td id=\"name{$row['id']}\">{$row['name']}</td>
	                        <td id=\"email{$row['id']}\">{$row['email']}</td>
	                        <td id=\"contact{$row['id']}\">{$row['contact']}</td>
	                        <td id=\"company{$row['id']}\">{$row['company']}</td>
	                        <td id=\"place{$row['id']}\">{$row['place']}</td>
	                        <td id=\"contact_tprs{$row['id']}\">{$row['contact_tprs']}</td>
	                        <td>".Details::getTableDetailsSum($db,'feedback_sub','feedbackid',$row['id'])."</td>
	                        <td id=\"remarks{$row['id']}\">{$row['remarks']}</td>
	                        <td><a href=\"view-feedback.php?id={$row['id']}\"><button  class=\"btn btn-info waves-effect waves-light\">View</button ></a></td>
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	public static function EditFeedbackDet($db,$question,$feedbackvalue,$editid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `feedback_sub` SET `question` = '{$question}',`feedbackvalue` = '{$feedbackvalue}'WHERE `id` = '{$editid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	public static function deleteFeedbackSubDetails($db,$editid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `feedback_sub` SET `active` = '0' WHERE `id` = '{$editid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}
	
	
	public static function UpdateFeedback($db,$name,$email,$contact,$company,$place,$contact_tprs,$remarks,$editid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `feedback_main` SET `name` = '{$name}',`email` = '{$email}',`contact` = '{$contact}',`company` = '{$company}',`place` = '{$place}',`remarks` = '{$remarks}',`contact_tprs` = '{$contact_tprs}' WHERE `id` = '{$editid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	public static function deleteFeedback($db,$feedbackid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `feedback_main` SET `active` = '0' WHERE `id` = '{$feedbackid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	public static function createQuestion($db,$question) {

		$today = date('Y-m-d');
		try {
		$query = $db->prepare("INSERT INTO `questions` (`question`,`userID`,`dateCreate`) VALUES 
				(:question,:userID,:dateCreate)");

	  	} catch (PDOException $e){ die($e->getMessage()); }
	
		$query->bindParam(':question', $question);
		$query->bindParam(':userID', $_SESSION['userID']);
		$query->bindParam(':dateCreate', $today);
		$query->execute();
	  	$lastID = $db->lastInsertId();

	  	return $lastID;
	}



	public static function UpdateQuestion($db,$question,$editid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `questions` SET `question` = '{$question}' WHERE `id` = '{$editid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	public static function deleteQuestion($db,$questionid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `questions` SET `active` = '0' WHERE `id` = '{$questionid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	public static function loadQuestionDetails($db) {
			
		try {
		$query = $db->query("SELECT * FROM `questions` WHERE `active` = '1' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Question</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td id=\"question{$row['id']}\">{$row['question']}</td>
	                        <td><button onclick=\"editId({$row['id']})\" id=\"{$row['id']}\" class=\"btn btn-warning waves-effect waves-light editQuestion\">Edit</button ></td>
	                        <td><button id=\"{$row['id']}\" class=\"btn btn-danger waves-effect waves-light deleteQuestion\">Delete</button ></td>
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	public static function loadEmailDetailsView($db) {
			
		try {
		$query = $db->query("SELECT * FROM `mailist` WHERE `active` = '1' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Mail ID</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td id=\"email{$row['id']}\">{$row['email']}</td>
	                        <td><button onclick=\"editId({$row['id']})\" id=\"{$row['id']}\" class=\"btn btn-warning waves-effect waves-light editQuestion\">Edit</button ></td>
	                        <td><button id=\"{$row['id']}\" class=\"btn btn-danger waves-effect waves-light deleteEmail\">Delete</button ></td>
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	public static function createEmail($db,$email,$toemail,$subject,$message) {

		$today = date('Y-m-d');
		try {
		$query = $db->prepare("INSERT INTO `mailist` (`email`,`toemail`,`subject`,`message`,`userID`,`dateCreate`) VALUES 
				(:email,:toemail,:subject,:message,:userID,:dateCreate)");

	  	} catch (PDOException $e){ die($e->getMessage()); }
	
		$query->bindParam(':email', $email);
		$query->bindParam(':toemail', $toemail);
		$query->bindParam(':subject', $subject);
		$query->bindParam(':message', $message);
		$query->bindParam(':userID', $_SESSION['userID']);
		$query->bindParam(':dateCreate', $today);
		$query->execute();
	  	$lastID = $db->lastInsertId();
	  	Email::sendEmailFuntion($toemail,$subject,$message);
	  	return $lastID;
	}



	public static function UpdateEmail($db,$email,$editid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `mailist` SET `email` = '{$email}' WHERE `id` = '{$editid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	public static function deleteEmail($db,$emailid) {
		
		$today = date('Y-m-d');
	
		try {
		$db->query("UPDATE `mailist` SET `active` = '0' WHERE `id` = '{$emailid}'");
			} catch (PDOException $e){ die($e->getMessage()); }

	}

	
	public static function UpdateFeedbackDetails($db,$name,$email,$contact,$company,$place,$contact_tprs,$remarks) {

		$today = date('Y-m-d');
		try {
		$query = $db->prepare("INSERT INTO `feedback_main` (`name`,`email`,`contact`,`company`,`place`,`contact_tprs`,`remarks`,`dateadded`) VALUES 
				(:name,:email,:contact,:company,:place,:contact_tprs,:remarks,:dateCreate)");

	  	} catch (PDOException $e){ die($e->getMessage()); }
	
		$query->bindParam(':name', $name);
		$query->bindParam(':email', $email);
		$query->bindParam(':contact', $contact);
		$query->bindParam(':company', $company);
		$query->bindParam(':place', $place);
		$query->bindParam(':contact_tprs', $contact_tprs);
		$query->bindParam(':remarks', $remarks);
		$query->bindParam(':dateCreate', $today);
		$query->execute();
	  	$lastID = $db->lastInsertId();

	  	return $lastID;
	}

	public static function insertFeedbackDetails($db,$feedbackvalue,$question,$questionid,$feedbackid) {

		$today = date('Y-m-d');
		try {
		$query = $db->prepare("INSERT INTO `feedback_sub` (`feedbackvalue`,`question`,`questionid`,`feedbackid`) VALUES 
				(:feedbackvalue,:question,:questionid,:feedbackid)");

	  	} catch (PDOException $e){ die($e->getMessage()); }
	
		$query->bindParam(':feedbackvalue', $feedbackvalue);
		$query->bindParam(':question', $question);
		$query->bindParam(':questionid', $questionid);
		$query->bindParam(':feedbackid', $feedbackid);
		$query->execute();
	  	$lastID = $db->lastInsertId();

	  	return $lastID;
	}


}
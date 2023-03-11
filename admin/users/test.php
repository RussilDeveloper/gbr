<?php 
include('includes/init.php');

	try {
$query = $db->query("SELECT * FROM `test_answers`");
	} catch (PDOException $e){ die($e->getMessage()); }
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	if(Question::getValue($db,'type',$row['questionid']) == 'N') {
		$answerPositive = 11 - $row['answer'];
	} else {
		$answerPositive = $row['answer'];
	}
		try {
	$db->query("UPDATE `test_answers` SET `answer_positive` = '{$answerPositive}' WHERE `id` = '{$row['id']}'");
		} catch (PDOException $e){ die($e->getMessage()); }
}



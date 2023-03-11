<?php include('../../users/includes/init.php');
    
    $doctorID = $_POST['doctorID'];
    $appdate = $_POST['appdate'];
    
	$datemanagement = Details::getTableDetailsCount3G($db,'datemanagement','active','1','doctorID',$doctorID,'docdate',$appdate);	
        
        if($datemanagement != 0){
            
            try {
		    $query = $db->query("SELECT * FROM `datemanagement` WHERE  `active` = '1' AND `doctorID` = '{$doctorID}' AND `docdate` = '{$appdate}' ");
			} catch (PDOException $e){ die($e->getMessage()); }

		    $list="";
	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	    	    $FromTime = date('h:i A', strtotime($row['from_time']));
		    	$ToTime = date('h:i A', strtotime($row['to_time']));
		    	
			    $list .= "<option value=\"{$FromTime}\">{$FromTime}</option>";
		    }
            echo $list;
        }else{
            $dayofweek = date('w', strtotime($appdate));
            try {
		    $query = $db->query("SELECT * FROM `timemanagement` WHERE  `active` = '1' AND `doctorID` = '{$doctorID}' AND `docweek` = '{$dayofweek}' ");
			} catch (PDOException $e){ die($e->getMessage()); }

		    $list="";
	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	    	    $FromTime = date('h:i A', strtotime($row['from_time']));
		    	$ToTime = date('h:i A', strtotime($row['to_time']));
		    	
			    $list .= "<option value=\"{$FromTime}\">{$FromTime}</option>";
		    }
            echo $list;
        }
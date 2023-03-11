<?php 

class Clients {

	public static function createDoctor($db,$name,$spec) {



		$today = date('Y-m-d');

		try {

		$query = $db->prepare("INSERT INTO `doctor` (`name`,`spec`) VALUES 

				(:name,:spec)");


	  	} catch (PDOException $e){ die($e->getMessage()); }

	

		$query->bindParam(':name',$name);

		$query->bindParam(':spec',$spec);

		$query->execute();



	}

	public static function createDateman($db,$doctorID,$doctordate,$doctorfromtime,$doctortotime) {



		$today = date('Y-m-d');

		try {

		$query = $db->prepare("INSERT INTO `datemanagement` (`doctorID`,`docdate`,`from_time`,`to_time`,`dateCreate`) VALUES 

				(:doctorID,:doctordate,:doctorfromtime,:doctortotime,:dateCreate)");



	  	} catch (PDOException $e){ die($e->getMessage()); }

	

		$query->bindParam(':doctorID',$doctorID);

		$query->bindParam(':doctordate',$doctordate);
		$query->bindParam(':doctorfromtime',$doctorfromtime);
		$query->bindParam(':doctortotime',$doctortotime);
		$query->bindParam(':dateCreate',$today);

		$query->execute();



	}

	public static function doctortimeCreate($db,$doctorID,$doctorWeek,$doctorfromtime,$doctortotime,$duration) {
    
    $interval = ($duration * 60); // Interval in seconds
    
    $time = strtotime($doctortotime);
    $doctortotime = date("H:i", strtotime("+{$duration} minutes", $time));
    
    $date_first     = $doctorfromtime;
    $date_second    = $doctortotime;
    
    $time_first     = strtotime($date_first);
    $time_second    = strtotime($date_second);
    
    for ($i = $time_first; $i < $time_second; $i += $interval){
        $time = date('H:i', $i);
        self::insertTimeDetails($db,$doctorID,$doctorWeek,$doctorfromtime,$doctortotime,$time);
        
    }
      
	}
	
	public static function insertTimeDetails($db,$doctorID,$doctorWeek,$doctorfromtime,$doctortotime,$duration) {
    
        
        $today = date('Y-m-d');
		try {

		$query = $db->prepare("INSERT INTO `timemanagement` (`doctorID`,`docweek`,`from_time`,`to_time`,`dateCreate`) VALUES 

				(:doctorID,:doctorWeek,:doctorfromtime,:doctortotime,:dateCreate)");



	  	} catch (PDOException $e){ die($e->getMessage()); }

	

		$query->bindParam(':doctorID',$doctorID);

		$query->bindParam(':doctorWeek',$doctorWeek);
		$query->bindParam(':doctorfromtime',$duration);
		$query->bindParam(':doctortotime',$doctortotime);
		$query->bindParam(':dateCreate',$today);

		$query->execute();
		
    


	}
	
        public static function booknowappointment($db,$name,$pnumber,$email,$doctor,$appdate,$apptime,$message) {

        $doctorname = Details::getTableDetails($db,'doctor','id',$doctor,'name');

        $today = date('Y-m-d');

        try {

        $query = $db->prepare("INSERT INTO `register` (`name`,`pnumber`,`email`,`doctorID`,`doctor`,`appdate`,`apptime`,`message`,`date_create`) VALUES 

                (:name,:pnumber,:email,:doctorID,:doctor,:appdate,:apptime,:message,:dateCreate)");

        } catch (PDOException $e){ die($e->getMessage()); }


        $query->bindParam(':name',$name);
        $query->bindParam(':pnumber',$pnumber);
        $query->bindParam(':email',$email);
        $query->bindParam(':doctor',$doctorname);
        $query->bindParam(':doctorID',$doctor);
        $query->bindParam(':appdate',$appdate);
        $query->bindParam(':apptime',$apptime);
        $query->bindParam(':message',$message);
        $query->bindParam(':dateCreate',$today);

        $query->execute();



    }



	public static function loadDoctorList($db) {

			

		try {

		$query = $db->query("SELECT * FROM `doctor` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<table id=\"alter_pagination\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">

                    <thead>

                        <tr>

                            <th>S.No</th>

                            <th>Name</th>

                            <th>Specialist</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>";

                    $count=0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;

			$list .= "<tr>

	                        <td>{$count}</td>

	                        <td >{$row['name']}</td>
	                        <td >{$row['spec']}</td>

	                        <td class=\"text-center\">
                                <a href=\"update.php?id={$row['id']}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\"><i class=\"flaticon-fill-tick text-primary fs-20\"></i></a>
                                <a href=\"delete.php?type=doctor&id={$row['id']}\" class=\"bs-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"><i class=\"flaticon-close-fill text-danger fs-20\"></i></a>
                            </td>

	                    </tr>

	                    ";

		}


		$list .=" </tbody>

                </table>";

		return $list;

	}
	
	
	public static function loadDepartmentDetails($db,$pagename) {

		if($_SERVER['REQUEST_URI'] == '/urology-formtest/'){
		  return '<select><option value=\"12\">Urology</option></select>';
		}
        else{
            
       try {

		$query = $db->query("SELECT DISTINCT `spec` FROM `doctor` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<select>";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $ID = Details::getTableDetails($db,'doctor','spec',$row['spec'],'id');
			$list .= "<option value=\"{$ID}\">{$row['spec']}</option>";

		}

        $list = "</select>";

		return $list;
        }
		

	}
	
		public static function loadformbutton($db) {

			

                                
                           
	                  
		return "<a href=\"delete.php?type=doctor&id={$row['id']}\" class=\"bs-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"><i class=\"flaticon-close-fill text-danger fs-20\"></i></a>";

	}

	public static function loadDoctorDateList($db) {

			

		try {

		$query = $db->query("SELECT * FROM `datemanagement` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<table id=\"alter_pagination\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">

                    <thead>

                        <tr>

                            <th>S.No</th>

                            <th>Doctor Name</th>

                            <th>Date</th>
                            <th>From Time</th>
                            <th>To Time</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>";

                    $count=0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;
			$FromTime = date('h:i A', strtotime($row['from_time']));
			$ToTime = date('h:i A', strtotime($row['to_time']));
			$list .= "<tr>

	                        <td>{$count}</td>

	                        <td >".Details::getTableDetails($db,'doctor','id',$row['doctorID'],'name')."</td>
	                        <td >{$row['docdate']}</td>
	                        <td >{$FromTime}</td>
	                        <td >{$ToTime}</td>

	                        <td class=\"text-center\">
                                <a href=\"delete.php?type=date&id={$row['id']}\" class=\"bs-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"><i class=\"flaticon-close-fill text-danger fs-20\"></i></a>
                            </td>

	                    </tr>

	                    ";

		}

		$list .=" </tbody>

                </table>";

		return $list;

	}



	public static function loadDoctorTimeMan($db) {

			

		try {

		$query = $db->query("SELECT * FROM `timemanagement` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<table id=\"alter_pagination\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">

                    <thead>

                        <tr>

                            <th>S.No</th>

                            <th>Doctor Name</th>

                            <th>Week</th>
                            <th>From Time</th>
                            <th>To Time</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>";

                    $count=0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;
			$FromTime = date('h:i A', strtotime($row['from_time']));
			$ToTime = date('h:i A', strtotime($row['to_time']));
			if ($row['docweek'] == 0) {
				$week = 'Sunday';
			}if ($row['docweek'] == 1) {
				$week = 'Monday';
			}if ($row['docweek'] == 2) {
				$week = 'Tuesday';
			}if ($row['docweek'] == 3) {
				$week = 'Wednesday';
			}if ($row['docweek'] == 4) {
				$week = 'Thursday';
			}if ($row['docweek'] == 5) {
				$week = 'Friday';
			}if ($row['docweek'] == 6) {
				$week = 'Saturday';
			}
			$list .= "<tr>

	                        <td>{$count}</td>

	                        <td >".Details::getTableDetails($db,'doctor','id',$row['doctorID'],'name')."</td>
	                        <td >{$week}</td>
	                        <td >{$FromTime}</td>
	                        <td >{$ToTime}</td>

	                        <td class=\"text-center\">
                                <a href=\"delete.php?type=time&id={$row['id']}\" class=\"bs-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"><i class=\"flaticon-close-fill text-danger fs-20\"></i></a>
                            </td>

	                    </tr>

	                    ";

		}

		$list .=" </tbody>

                </table>";

		return $list;

	}


	public static function loadLeadMan($db) {

			

		try {

		$query = $db->query("SELECT * FROM `register` WHERE  `active` = '1' ORDER BY `id` DESC");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<table id=\"alter_pagination\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">

                    <thead>

                        <tr>

                            <th>S.No</th>

                            <th>Name</th>

                            <th>Email</th>
                            <th>Number</th>
                            <th>Doctor</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>";

                    $count=0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;
			$list .= "<tr>

	                        <td>{$count}</td>

	                        <td >{$row['name']}</td>
	                        <td >{$row['email']}</td>
	                        <td >{$row['pnumber']}</td>
	                        <td >{$row['doctor']}</td>

	                        <td >{$row['appdate']}</td>
	                        <td >{$row['apptime']}</td>
	                        <td class=\"text-center\">
                                <a href=\"delete.php?type=lead&id={$row['id']}\" class=\"bs-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"><i class=\"flaticon-close-fill text-danger fs-20\"></i></a>
                            </td>

	                    </tr>

	                    ";

		}

		$list .=" </tbody>

                </table>";

		return $list;

	}





	public static function loadDoctorDroupdown($db) {

			

		try {

		$query = $db->query("SELECT * FROM `doctor` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$list .= "<option value=\"{$row['id']}\">{$row['name']}</option>";

		}



		return $list;

	}
	
	public static function loadDepartmentDroupdown($db) {

			

		try {

		$query = $db->query("SELECT DISTINCT `spec` FROM `doctor` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $ID = Details::getTableDetails($db,'doctor','spec',$row['spec'],'id');
			$list .= "<option value=\"{$ID}\">{$row['spec']}</option>";

		}



		return $list;

	}
	
	public static function checkDocAppointment($db,$doctorID,$appdate) {

		$datemanagement = Details::getTableDetailsCount3G($db,'datemanagement','active','1','doctorID',$doctorID,'docdate',$appdate);	
        
        if($datemanagement != 0){
            
            try {
		    $query = $db->query("SELECT * FROM `datemanagement` WHERE  `active` = '1' AND `doctorID` = '{$doctorID}' AND `docdate` = '{$appdate}' ");
			} catch (PDOException $e){ die($e->getMessage()); }

		    $list="";
	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	    	    $FromTime = date('h:i A', strtotime($row['from_time']));
		    	$ToTime = date('h:i A', strtotime($row['to_time']));
		    	
			    $list .= "<option value=\"{$FromTime} - {$ToTime}\">{$FromTime} - {$ToTime}</option>";
		    }
            return $list;
        }else{
            $dayofweek = date('w', strtotime($appdate));
            try {
		    $query = $db->query("SELECT * FROM `timemanagement` WHERE  `active` = '1' AND `doctorID` = '{$doctorID}' AND `docweek` = '{$dayofweek}' ");
			} catch (PDOException $e){ die($e->getMessage()); }

		    $list="";
	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	    	    $FromTime = date('h:i A', strtotime($row['from_time']));
		    	$ToTime = date('h:i A', strtotime($row['to_time']));
		    	
			    $list .= "<option value=\"{$FromTime} - {$ToTime}\">{$FromTime} - {$ToTime}</option>";
		    }
            return $list;
        }
		

	}

	public static function getProjectNameAll($db) {

			

		try {

		$query = $db->query("SELECT * FROM `clients` WHERE  `active` = '1'  ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$list .= "<option value=\"{$row['id']}\">{$row['name']}</option>";

		}



		return $list;

	}

	public static function getFormName($db) {

			

		try {

		$query = $db->query("SELECT * FROM `form` WHERE  `active` = '1' AND `clientID` = '{$_SESSION['clientsID']}' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$list .= "<option value=\"{$row['formcode']}\">{$row['formname']}</option>";

		}



		return $list;

	}



	public static function loadSocialMediaListDetails($db) {

			

		try {

		$query = $db->query("SELECT * FROM `socialmedia_credentials` WHERE  `active` = '1' ORDER BY `id` DESC ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<table id=\"file_export\" class=\"table table-striped table-bordered display\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">

                    <thead>

                        <tr>

                            <th>S.No</th>

                            <th>Client</th>

                            <th>Platform</th>


                            <th>Username</th>

                            <th>Password</th>

                            <th>Recovery Email</th>
                            <th>Recovery Number</th>
                            <th>Others</th>

                        </tr>

                    </thead>

                    <tbody>";

                    $count=0;

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

			$count++;
			$list .= "<tr>

	                        <td>{$count}</td>

	                        <td >".Details::getTableDetails($db,'clients','id',$row['clientID'],'name')."</td>

	                        <td >{$row['platform']}</td>
	                        <td >{$row['username']}</td>
	                        <td >{$row['password']}</td>
	                        <td >{$row['rec_email']}</td>
	                        <td >{$row['rec_number']}</td>
	                        <td >{$row['others']}</td>
	                    </tr>

	                    ";

		}

		$list .=" </tbody>

                </table>";

		return $list;

	}



	public static function updateClientActive($db,$ID) {



	    try {

        $db->query("UPDATE `users` SET `active` = '0' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }

   

    }
    
    public static function deleteLEad($db,$ID) {



	    try {

        $db->query("UPDATE `register` SET `active` = '0' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }

   

    }
    
     public static function deletetimemanagement($db,$ID) {



	    try {

        $db->query("UPDATE `timemanagement` SET `active` = '0' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }

   

    }
    
     public static function deletedatemanagement($db,$ID) {



	    try {

        $db->query("UPDATE `datemanagement` SET `active` = '0' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }

   

    }
    
    public static function doctorupdate($db,$name,$spec,$ID) {



	    try {

        $db->query("UPDATE `doctor` SET `name` = '{$name}',`spec` = '{$spec}' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }

   

    }
    
    public static function deleteDoctor($db,$ID) {



	    try {

        $db->query("UPDATE `doctor` SET `active` = '0' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }
        
        try {

        $db->query("UPDATE `datemanagement` SET `active` = '0' WHERE `doctorID` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }
        
        
        try {

        $db->query("UPDATE `timemanagement` SET `active` = '0' WHERE `doctorID` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }
   

    }



    public static function changeClientPassword($db,$password,$ID) {



	    try {

        $db->query("UPDATE `users` SET `password` = '{$password}' WHERE `id` = '{$ID}'");

        } catch (PDOException $e){ die($e->getMessage()); }

   

    }




}
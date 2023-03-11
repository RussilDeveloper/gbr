<?php 
class Auto {


	public static function createForm($db,$category,$sub_category) {

		$today = date('Y-m-d');
		try {
		$query = $db->prepare("INSERT INTO `machine_form` (`category`,`sub_category`) VALUES 
				(:category,:sub_category)");

	  	} catch (PDOException $e){ die($e->getMessage()); }
	
		$query->bindParam(':category',$category);
		$query->bindParam(':sub_category',$sub_category);
		$query->execute();
	  	$lastID = $db->lastInsertId();

	  	return $lastID;
	}

	public static function loadForms($db) {
			
		try {
		$query = $db->query("SELECT * FROM `machine_form` WHERE  `delete_status` = '0' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Master Index</th>
                            <th>Sub Category</th>
                            <th>Date Added</th>
                            <th>PDF</th>
                            <th>Excel Data</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td >{$row['category']}</td>
	                        <td >{$row['sub_category']}</td>
	                        <td >{$row['date_added']}</td>
	                        <td><a href=\"uploads/{$row['id']}.pdf\" class=\"btn btn-warning waves-effect waves-light\">View</a></td>
	                        <td><a href=\"virtual.php?id=".$row['id']."\" class=\"btn btn-warning waves-effect waves-light\">View</a></td>
	                       
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	public static function loadFormsapprove($db) {
			
		try {
		$query = $db->query("SELECT * FROM `machine_form` WHERE  `delete_status` = '0' ");
			} catch (PDOException $e){ die($e->getMessage()); }
		$list = "<table id=\"datatable365\" class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Master Index</th>
                            <th>Sub Category</th>
                            <th>Date Added</th>
                            <th>PDF</th>
                            <th>Excel Data</th>
                            <th>Approve</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $count=0;
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$count++;
			$list .= "<tr>
	                        <td>{$count}</td>
	                        <td >{$row['category']}</td>
	                        <td >{$row['sub_category']}</td>
	                        <td >{$row['date_added']}</td>
	                        <td><a href=\"uploads/{$row['id']}.pdf\" class=\"btn btn-warning waves-effect waves-light\" target=\"_blank\">View</a></td>
	                        <td><a href=\"virtual.php?id=".$row['id']."\" class=\"btn btn-warning waves-effect waves-light\">View</a></td>
	                        <td><a href=\"#\" class=\"btn btn-success waves-effect waves-light\">Approve</a></td>
	                       
	                        
	                        
	                    </tr>
	                    ";
		}



		$list .=" </tbody>
                </table>";
		return $list;
	}

	public static function UpdateVirtualForm($db,$machine_formid,$profile_start_time,$product_name,$window_name,$oven_name,$window_desc,$oven_recipe_name,$profile_desc,$product_length,$product_width,$product_weight,$conveyor_speed,$temp_scale,$setuppoint_alignment,$max_slope,$fAirTCPeak,$fReportAnErrorIfAir,$PercentageOfProfileToLookForFirstZone,$sizeof_curing_w_in_sec,$valid_tcs,$sizeof_curing_w_in_deg,$oven_length,$MinFirstSetpointPosition,$fAirTCIncreasedByThisManyDegrees,$no_of_sector,$profile_type,$MaxFirstSetpointPosition) {

		$today = date('Y-m-d');
		try {
		$query = $db->prepare("INSERT INTO `virtula_soldering` (`machine_formid`,`profile_start_time`,`product_name`,`window_name`,`oven_name`,`window_desc`,`oven_recipe_name`,`profile_desc`,`product_length`,`product_width`,`product_weight`,`conveyor_speed`,`temp_scale`,`setuppoint_alignment`,`max_slope`,`fAirTCPeak`,`fReportAnErrorIfAir`,`PercentageOfProfileToLookForFirstZone`,`sizeof_curing_w_in_sec`,`valid_tcs`,`sizeof_curing_w_in_deg`,`oven_length`,`MinFirstSetpointPosition`,`fAirTCIncreasedByThisManyDegrees`,`no_of_sector`,`profile_type`,`MaxFirstSetpointPosition`) VALUES 
				(:machine_formid,:profile_start_time,:product_name,:window_name,:oven_name,:window_desc,:oven_recipe_name,:profile_desc,:product_length,:product_width,:product_weight,:conveyor_speed,:temp_scale,:setuppoint_alignment,:max_slope,:fAirTCPeak,:fReportAnErrorIfAir,:PercentageOfProfileToLookForFirstZone,:sizeof_curing_w_in_sec,:valid_tcs,:sizeof_curing_w_in_deg,:oven_length,:MinFirstSetpointPosition,:fAirTCIncreasedByThisManyDegrees,:no_of_sector,:profile_type,:MaxFirstSetpointPosition)");

	  	} catch (PDOException $e){ die($e->getMessage()); }
	
		$query->bindParam(':machine_formid',$machine_formid);
		$query->bindParam(':profile_start_time',$profile_start_time);
		$query->bindParam(':product_name',$product_name);
		$query->bindParam(':window_name',$window_name);
$query->bindParam(':oven_name',$oven_name);
$query->bindParam(':window_desc',$window_desc);
$query->bindParam(':oven_recipe_name',$oven_recipe_name);
$query->bindParam(':profile_desc',$profile_desc);
$query->bindParam(':product_length',$product_length);
$query->bindParam(':product_width',$product_width);
$query->bindParam(':product_weight',$product_weight);
$query->bindParam(':conveyor_speed',$conveyor_speed);
$query->bindParam(':temp_scale',$temp_scale);
$query->bindParam(':setuppoint_alignment',$setuppoint_alignment);
$query->bindParam(':max_slope',$max_slope);
$query->bindParam(':fAirTCPeak',$fAirTCPeak);
$query->bindParam(':fReportAnErrorIfAir',$fReportAnErrorIfAir);
$query->bindParam(':PercentageOfProfileToLookForFirstZone',$PercentageOfProfileToLookForFirstZone);
$query->bindParam(':sizeof_curing_w_in_deg',$sizeof_curing_w_in_deg);
$query->bindParam(':oven_length',$oven_length);
$query->bindParam(':MinFirstSetpointPosition',$MinFirstSetpointPosition);
$query->bindParam(':sizeof_curing_w_in_sec',$sizeof_curing_w_in_sec);
$query->bindParam(':valid_tcs',$valid_tcs);
$query->bindParam(':fAirTCIncreasedByThisManyDegrees',$fAirTCIncreasedByThisManyDegrees);
$query->bindParam(':no_of_sector',$no_of_sector);
$query->bindParam(':profile_type',$profile_type);
$query->bindParam(':MaxFirstSetpointPosition',$MaxFirstSetpointPosition);
		$query->execute();
	  	$lastID = $db->lastInsertId();

	  	return $lastID;
	}

	


}
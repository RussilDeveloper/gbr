<?php include('../../users/includes/init.php');



	if($_POST['pagename'] == '/dr-laxman-proctology-cent/circumcision-2/'){
      echo '<option value="1">Circumcision</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/elementor-225/'){
      echo '<option value="2">Colorectal Surgery</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/diabetic-foot-surgery-2/'){
      echo '<option value="3">Diabetic Foot Surgery</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/hernia-surgery-2/'){
      echo'<option value="4">Hernia surgery</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/laparoscopic-surgery-2/'){
      echo '<option value="5">Laparoscopic Surgery</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/laser-pilonidal-sinus-surgery-2/'){
      echo '<option value="6">Laser Pilonidal Sinus Surgery</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/laser-surgery-for-fissure-in-anus-2/'){
      echo '<option value="7">Laser Surgery For Fissure In Anus</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/laser-surgery-for-piles-haemorrhoids-2/'){
      echo '<option value="8">Laser Surgery For Piles</option>';
      exit();
    }
if($_POST['pagename'] == '/dr-laxman-proctology-cent/stapler-surgery-for-piles-mips-2/'){
      echo '<option value="9">Stapler surgery for piles</option>';
      exit();
    }
        else{
            
       try {

		$query = $db->query("SELECT DISTINCT `spec` FROM `doctor` WHERE  `active` = '1' ");

			} catch (PDOException $e){ die($e->getMessage()); }

		$list = "<option value=\"\">Select Specialties</option>";

		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $ID = Details::getTableDetails($db,'doctor','spec',$row['spec'],'id');
			$list .= "<option value=\"{$ID}\">{$row['spec']}</option>";

		}

     

		echo $list;
        }


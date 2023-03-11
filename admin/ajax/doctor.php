<?php include('../users/includes/init.php');

if(isset($_POST['loadDoctorList'])) {
	echo Clients::loadDoctorList($db);
}

if(isset($_POST['createDoctor'])) {
	echo Clients::createDoctor($db,$_POST['doctorname'],$_POST['doctorspec']);
}

if(isset($_POST['loadDoctorDateList'])) {
	echo Clients::loadDoctorDateList($db);
}

if(isset($_POST['createDateman'])) {
	echo Clients::createDateman($db,$_POST['doctorID'],$_POST['doctordate'],$_POST['doctorfromtime'],$_POST['doctortotime']);
}

if(isset($_POST['loadDoctorTimeMan'])) {
	echo Clients::loadDoctorTimeMan($db);
}

if(isset($_POST['doctortimeCreate'])) {
	echo Clients::doctortimeCreate($db,$_POST['doctorID'],$_POST['Week'],$_POST['doctorfromtimeMan'],$_POST['doctortotimeMan'],$_POST['duration']);
}

if(isset($_POST['loadLeadMan'])) {
	echo Clients::loadLeadMan($db);
}
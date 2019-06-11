<?php
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_EDUCATION_PATH . "/education.php";

if(isset($_POST['addEducation'])) {
	
	$school = $_POST['school'];
	$degree = $_POST['degree'];
	$field = $_POST['field'];
	$description = $_POST['description'];
	$start_date = $_POST['sDate'];
	$end_date = $_POST['eDate'];
	$profile_id = $_SESSION['spId'];
		
	$db = Database::getDb();
	$experienceObj = new Education();
	$add = $experienceObj->addEducation($school, $degree, $field, $description, $start_date, $end_date, $profile_id, $db);

	if($add) {
		//DISPLAY STATUS
		header("Location:user-profile.php")	;
	} else{
		$message = "Problem posting a status!";
	}
	exit();
}




?>
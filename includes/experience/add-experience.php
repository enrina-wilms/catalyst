<?php
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_EXPERIENCE_PATH . "/experience.php";

if(isset($_POST['addExperience'])) {
	
	$position = $_POST['position'];
	$company = $_POST['company'];
	$start_date = $_POST['sDate'];
	$end_date = $_POST['eDate'];
	$profile_id = $_SESSION['spId'];
		
	$db = Database::getDb();
	$experienceObj = new Experience();
	$add = $experienceObj->addExperience($position, $company, $start_date, $end_date, $profile_id, $db);

	if($add) {
		header("Location:user-profile.php")	;
	} else{
		$message = "Problem posting a status!";
	}
	exit();
}




?>
<?php
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_EDUCATION_PATH . "/education.php";

if(isset($_POST['delExp'])){
	$id = $_POST['id'];
	$db = Database::getDb();
		$educatoinObj = new Experience();
		$delete = $educatoinObj->deleteExperience($id, $db);
	if($delete) {
		header("Location:user-profile.php");
	}
	}

?>
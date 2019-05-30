<?php
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_EDUCATION_PATH . "/education.php";

if(isset($_POST['delEduc'])){
	$id = $_POST['id'];
	$db = Database::getDb();
		$educatoinObj = new Education();
		$delete = $educatoinObj->deleteEducation($id, $db);
	if($delete) {
		header("Location:user-profile.php");
	}
	}

?>
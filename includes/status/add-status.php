<?php
//require_once '../../session.php';
//require_once '../../config.php';
//require_once 'header.php';
//
//require_once MODELS_PATH . "/database.php";
//require_once MODELS_STATUS_PATH . "/status.php";

$profile_id = $_SESSION['spId'];
$user_id = $_SESSION['ruId'];

$dbcon = Database::getDb();
if(isset($_POST['addStatus'])){
	$message=filter_var($_POST['content'], FILTER_SANITIZE_STRING);
    //$user_id=6;

	$db = Database::getDb();
    $s = new Status();
   
	$c = $s->addStatus($message, $profile_id, $db);
	//header("Location: " . $includepath ."blogs/bloglistAdmin.php");
}

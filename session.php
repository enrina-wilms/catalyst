<?php 
require_once 'config.php';
require_once 'models/profile/user-profile.php';
require_once 'models/database.php';
require_once 'models/database.php';
require_once 'models/login/user.php';

@session_start();

$db = Database::getDb();
$r = new user();
$a = $r->getLatestUser($db);
$_SESSION['ruId'] = $a->id;

if(isset($_SESSION['uId'])){
    $uid = $_SESSION['uId'];
}else{
    $uid = $_SESSION['ruId'];
}

$db = Database::getDb();
$profileObj = new Profile();
$profiles = $profileObj->getProfileByUserId($uid, $db);

@$_SESSION['spId'] = $profiles->id;
@$_SESSION['sfname'] = $profiles->fname; 
@$_SESSION['slname'] = $profiles->lname; 

/*
if (empty($userid)){
    header("location:../../index.php");   
}
*/



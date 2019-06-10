<?php 
require_once 'config.php';
require_once 'models/profile/user-profile.php';
require_once 'models/database.php';
require_once 'models/database.php';
require_once 'models/login/user.php';

session_start();

$db = Database::getDb();
$r = new user();
$a = $r->getLatestUser($db);

$_SESSION['uId'] = $a->id;
$db = Database::getDb();
$profileObj = new Profile();
$profiles = $profileObj->getProfileByUserId(@$_SESSION['uId'], $db);

@$_SESSION['spId'] = $profiles->id;
@$_SESSION['sfname'] = $profiles->fname; 
@$_SESSION['slname'] = $profiles->lname; 

/*
if (empty($userid)){
    header("location:../../index.php");   
}
*/



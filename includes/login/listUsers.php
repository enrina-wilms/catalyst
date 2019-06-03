<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

$db = Database::getDb();
$listUsers = new user();
$usersList = $listUsers->getAllUsers(Database::getDb());

foreach($usersList as $users){
    echo
    "";
}
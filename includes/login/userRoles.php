<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

if(isset($_POST['user'])){
    $id =$_POST['id'];
    $role = "user";

    $db = Database::getDb();
    $userRole = new user();
    $count = $userRole->approveAdmin($role, $id, $db);

    if($count){
        header("Location: userAdmin.php"); 
    }else{
        echo "Problem Updating";
    }
}

if(isset($_POST['admin'])){
    $id =$_POST['id'];
    $role = "admin";

    $db = Database::getDb();
    $userRole = new user();
    $count = $userRole->approveAdmin($role, $id, $db);

    if($count){
        header("Location: userAdmin.php"); 
    }else{
        echo "Problem Updating";
    }
}

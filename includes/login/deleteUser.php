<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";


if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $db = Database::getDb();
    $delUser = new user();
    $count = $delUser->deleteUser($db);

    if($count){
        header("Location: userAdmin.php");
    }
}
 

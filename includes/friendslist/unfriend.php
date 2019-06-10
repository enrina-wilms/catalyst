<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_FRIENDS_PATH . "/friendsList.php";

if(isset($_POST['id'])){//was reject
    $id = $_POST['id'];
    $friends_status = $_POST['friends_status'];

    $db = Database::getDb();
    $friends = new Friends();
    $rejectFriends = $friends->unfriend($db, $id, $friends_status);

    echo $id;
    echo $friends_status;

    header('Location: ../userProfile/user-profile.php');
}
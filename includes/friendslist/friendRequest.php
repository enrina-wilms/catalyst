<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_FRIENDS_PATH . "/friendsList.php";

if(isset($_POST['friend'])){ //this right?
    $connect1 = $_POST['connect1'];
    $connect2 = $_POST['connect2'];
    $friends_status = $_POST['friends_status'];

    $db = Database::getDb();
    $friends = new Friends();
    $friendsRequest = $friends->friendRequest($db, $connect1, $connect2, $friends_status);

    echo $connect1;
    echo $connect2;
    echo $friends_status;
}
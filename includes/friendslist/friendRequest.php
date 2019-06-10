<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_FRIENDS_PATH . "/friendsList.php";

if(isset($_POST['id'])){ //this right?
    $sender = 5;//requester
    $receiver = $_POST['id'];//requestee
    $fname = 'Kyle';
    $lname = 'Wilms';
    $friends_status = 'pending';

    $db = Database::getDb();
    $friends = new Friends();
    $friendsRequest = $friends->friendRequest($db, $sender, $receiver, $fname, $lname, $friends_status);

    /*echo $sender;
    echo $receiver;
    echo $friends_status;*/
}
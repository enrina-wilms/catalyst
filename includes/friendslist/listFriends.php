<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_FRIENDS_PATH . "/friendsList.php";

    $db = Database::getDb();
    $friends = new Friends();
    $friendsList = $friends->getPendingFriendRequestsById($db, $id = 7);

    foreach($friendsList as $row){
        $fullName = ucfirst($row->friends_fname) .' '. ucfirst($row->friends_lname);
        $fName = $row->friends_fname;
        $lName = $row->friends_lname;
        $firstChar = mb_substr($fName, 0, 1, "UTF-8");
        $secChar = mb_substr($lName, 0, 1, "UTF-8");

        echo 
        '<div class="row">
        <div class="col-sm-2">
            <div class="profile-avatar-circle-mentor ml-n2">
                <span class="profile-initials-mentor">'.$firstChar . $secChar.'</span>
            </div>
        </div>
        <div class="col-sm-10">
            <h6 class="profile-name-mentor text-left">'.$fullName.'</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <form method="POST" action="../mentorship/accept-mentor-status.php">
                <input type="hidden" name="id" value="'.$row->id.'">
                <input type="hidden" name="status" value="approved">
                <button type="submit" name="accept" class="btn btn-sm request-accept" data-toggle="tooltip" data-placement="top" title="Accept">Accept</button>
            </form>
        </div>
        <div class="col-sm-4 ml-n2">
            <form method="POST" action="../mentorship/reject-mentor-status.php">
                <input type="hidden" name="id" value="'.$row->id.'">
                <input type="hidden" name="status" value="rejected">
                <button type="submit" name="reject" class="btn btn-sm request-decline" data-toggle="tooltip" data-placement="top" title="Reject">Decline</button>
            </form>
        </div>
    </div><hr/>';
    }
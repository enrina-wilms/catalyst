<?php
require_once '../../session.php';
require_once 'mentor-request-modal.php';
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

$dbcon = Database::getDb();
$mentors = new Mentors();
$mentors = $mentors->getMentorRequestById($dbcon, $_SESSION['spId']);

foreach($mentors as $mentor){
    $fullName = ucfirst($mentor->apprentice_fname) .' '. ucfirst($mentor->apprentice_lname);
    $fName = $mentor->apprentice_fname;
    $lName = $mentor->apprentice_lname;
    $firstChar = mb_substr($fName, 0, 1, "UTF-8");
    $secChar = mb_substr($lName, 0, 1, "UTF-8");
    
    echo '<div class="row">
        <div class="col-sm-2">
            <div class="profile-avatar-circle-mentor ml-n2">
                <span class="profile-initials-mentor">'.$firstChar . $secChar.'</span>
            </div>
        </div>
        <div class="col-sm-10">
            <a href=../developers/profile.php?id='.$mentor->profile_id.'><h6 class="profile-name-mentor text-left">'.$fullName.'</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 ">
            <button type="button" data-toggle="modal" data-target="#message-modal" onclick="show_message(\'' .$mentor->message. '\')"; class="btn btn-sm text-right request-msg">Message</button>
        </div>
        <div class="col-sm-4">
            <form method="POST" action="../mentorship/accept-mentor-status.php">
                <input type="hidden" name="id" value="'.$mentor->id.'">
                <input type="hidden" name="status" value="approved">
                <button type="submit" name="accept" class="btn btn-sm request-accept" data-toggle="tooltip" data-placement="top" title="Accept">Accept</button>
            </form>
        </div>
        <div class="col-sm-4 ml-n2">
            <form method="POST" action="../mentorship/reject-mentor-status.php">
                <input type="hidden" name="id" value="'.$mentor->id.'">
                <input type="hidden" name="status" value="rejected">
                <button type="submit" name="reject" class="btn btn-sm request-decline" data-toggle="tooltip" data-placement="top" title="Reject">Decline</button>
            </form>
        </div>
    </div><hr/>';
}




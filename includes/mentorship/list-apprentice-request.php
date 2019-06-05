<?php
require_once 'mentor-request-modal.php';
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

$dbcon = Database::getDb();
$mentors = new Mentors();
$mentors = $mentors->getMentorRequestById($dbcon, 7);


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
            <h6 class="profile-name-mentor text-left">'.$fullName.'</h6>
        </div>
    </div>
    <div class="row mt-n2">
        <div class="col-sm-4">
            <button type="button" onclick="show_message(\'' .$mentor->message. '\')"; class="btn btn-sm text-right pp ml-4"><i class="fas fa-envelope" data-toggle="modal" data-target="#message-modal"></i></button>
        </div>
        <div class="col-sm-4 ml-1">
            <button type="button" class="btn btn-sm pp" data-toggle="tooltip" data-placement="top" title="Reject"><i class="fas fa-times"></i></button>
        </div>
        <div class="col-sm-4 ml-n4">
            <button type="button" class="btn btn-sm aa" data-toggle="tooltip" data-placement="top" title="Accept"><i class="fas fa-check"></i></button>
        </div>
    </div><hr/>';
}




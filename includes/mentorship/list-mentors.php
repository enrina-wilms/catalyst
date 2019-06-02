<?php
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

$dbcon = Database::getDb();
//calling the get portfolio in the portfolio model and passing in the data and the active user id
$mentors = new Mentors();
$mentors = $mentors->listAllMentor($dbcon);

foreach($mentors as $mentor){
    echo
    '<div class="col-md-3 mt-4">
        <div class="card text-center">
            <div class="card-header main-left-sidebar-header">
                <div class="dev-profile-contatiner" style="margin:0 auto;top:30px;">
                    <div class="profile-avatar-circle">
                        <span class="profile-initials">KM</span>
                    </div>
                </div>	
            </div>
            <div class="card-body text-center">
                <h4>'.$mentor->fname. ' '. $mentor->lname.'</h4>
                <p class="mt-n1 mb-3 mentor-title">'.$mentor->position.'</p>
                <p class="mb-2"><a href="#" class="mentor-gray">Become my Apprentice</a></p>
                <a href="#" class="mentor-gray">Message</a>
                <hr>
                <h6 class="mentor-num">Number of Apprentice</h6>
                <span>10</span>
                <hr>
                <p class="mt-3"><a href="../developers/profile.php?id='.$mentor->user_id.'" class="mentor-profile">View Profile</a></p>
            </div>
        </div>
    </div>
    <!--end col-->';
}
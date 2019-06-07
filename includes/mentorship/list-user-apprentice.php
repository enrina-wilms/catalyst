<?php
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

$dbcon = Database::getDb();
$apprentice= new Mentors();
$apprentice = $apprentice->listApprentice($dbcon, 7);

@session_start();
$friendId = $_SESSION['id'];

foreach($apprentice as $app){
    $fullName = ucfirst($app->apprentice_fname) .' '. ucfirst($app->apprentice_lname);
    $fName = $app->apprentice_fname;
    $lName = $app->apprentice_lname;
    $firstChar = mb_substr($fName, 0, 1, "UTF-8");
    $secChar = mb_substr($lName, 0, 1, "UTF-8");
    
    $active = '';
    if($friendId == $app->profile_id){
        $active = "active-chat";
    }
    echo '<a href="?id='.$app->profile_id.'">
        <div class="row linka '.$active.'">
            <div class="col-sm-2">
                <div class="profile-avatar-circle-mentor ml-n2">
                    <span class="profile-initials-mentor">'.$firstChar . $secChar.'</span>
                </div>
            </div>
            <div class="col-sm-10">
                <h6 class="profile-name-mentor text-left">'.$fullName.'</h6>
            </div>
        </div></a>';
}
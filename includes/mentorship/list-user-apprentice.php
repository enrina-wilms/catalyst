<?php
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

$dbcon = Database::getDb();
$apprentice= new Mentors();
$apprentice = $apprentice->listApprentice($dbcon, 7);

foreach($apprentice as $app){
    $fullName = ucfirst($app->apprentice_fname) .' '. ucfirst($app->apprentice_lname);
    $fName = $app->apprentice_fname;
    $lName = $app->apprentice_lname;
    $firstChar = mb_substr($fName, 0, 1, "UTF-8");
    $secChar = mb_substr($lName, 0, 1, "UTF-8");
    
    echo '<a href="?id='.$app->profile_id.'"><div class="row">
        <div class="col-sm-2">
            <div class="profile-avatar-circle-mentor ml-n2">
                <span class="profile-initials-mentor">'.$firstChar . $secChar.'</span>
            </div>
        </div>
        <div class="col-sm-10">
            <h6 class="profile-name-mentor text-left">'.$fullName.'</h6>
        </div>
    </div></a>
    <hr/>';
}
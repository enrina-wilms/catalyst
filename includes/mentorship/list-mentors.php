<?php
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

$dbcon = Database::getDb();
$mentors = new Mentors();
$mentors = $mentors->listAllMentor($dbcon);

foreach($mentors as $mentor){
    $fullName = ucfirst($mentor->fname) .' '. ucfirst($mentor->lname);
    $fName = $mentor->fname;
	$lName = $mentor->lname;
	
	$firstChar = mb_substr($fName, 0, 1, "UTF-8");
    $secChar = mb_substr($lName, 0, 1, "UTF-8");
    
    echo
    '<div class="col-md-3 mt-4">
        <div class="card text-center">
            <div class="card-header main-left-sidebar-header">
                <div class="dev-profile-contatiner" style="margin:0 auto;top:30px;">
                    <div class="profile-avatar-circle">
                        <span class="profile-initials">'.$firstChar.$secChar.'</span>
                    </div>
                </div>	
            </div>
            <div class="card-body text-center">
                <a href="../developers/profile.php?id='.$mentor->id.'"><h4>'.ucfirst($mentor->fname). ' '. ucfirst($mentor->lname).'</h4></a>
                <p class="mt-n1 mb-3 mentor-title">'.$mentor->position.'</p>
                <a onclick="mentor_id('.$mentor->id.');mentor_name(\'' .$fullName. '\'); apprentice_id(5); apprentice_fname(\'Kenneth\'); apprentice_lname(\'Mendoza\');" ref="javascript:void(0)"><p class="mb-2 mentor-gray" data-toggle="modal" data-target="#apprentice" data-test="test">Become my Apprentice</p></a>
                <a href="#" class="mentor-gray">Message</a>
                <hr>
                <h6 class="mentor-num">Number of Apprentice</h6>
                <span>10</span>
                <hr>
                <p class="mt-3"><a href="../developers/profile.php?id='.$mentor->id.'" class="mentor-profile">View Profile</a></p>
            </div>
        </div>
    </div>
    <!--end col-->';
}
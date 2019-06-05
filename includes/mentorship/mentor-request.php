<?php
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

if(isset($_POST['apprentice'])){
    $desc = substr($_POST['description'], 3,-5);
    $mentor_id = $_POST['mentor_id'];
    $apprentice_id = $_POST['apprentice_id'];

    $dbcon = Database::getDb();
    $mentors = new Mentors();
    $mentors = $mentors->mentorshipRequest($dbcon, $mentor_id, $desc, 'pending', $apprentice_id);

    echo $desc;
    echo $mentor_id;
    echo $apprentice_id;
}

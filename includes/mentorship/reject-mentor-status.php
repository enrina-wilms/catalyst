<?php
require_once '../../models/database.php';
require_once '../../models/mentorship/mentors.php';

if(isset($_POST['reject'])){
    $status = $_POST['status'];
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $apprentice = new Mentors();
    $apprentice = $apprentice->updateMentorRequestStatus($dbcon, $id, $status);

    echo $status;
    echo $id;

    header('Location: ../userProfile/user-profile.php');
}
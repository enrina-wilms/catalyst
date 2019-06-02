<?php

class Mentors{
    //getting all the mentors from the database
    public function listAllMentor($db){
            
        $query = "SELECT * FROM profiles WHERE mentorship_status = 1";
        $pdost = $db->prepare($query);
        $pdost->execute();
        
        $mentors = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $mentors;
    }
}


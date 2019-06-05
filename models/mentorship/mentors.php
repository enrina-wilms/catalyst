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

    //adding a mentorship request
	public function mentorshipRequest($db, $mentor, $message, $status, $profile_id){
			
		$query = "INSERT INTO mentors(mentor, message, status, profile_id)
        VALUES (:mentor, :message, :status, :profile_id)";
        
        $pdost = $db->prepare($query);
        
		$pdost->bindParam(':mentor', $mentor);
		$pdost->bindParam(':message', $message);
		$pdost->bindParam(':status', $status);
		$pdost->bindParam(':profile_id', $profile_id);
	
		$mentor = $pdost->execute();
		
		return $mentor;
	}
}


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

    //getting all the mentors from the database
    public function listMentorApprentice($db){
            
        $query = "SELECT * FROM mentors where status = 'approved'";
        $pdost = $db->prepare($query);
        $pdost->execute();
        
        $mentors = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $mentors;
    }

    //adding a mentorship request
	public function mentorshipRequest($db, $mentor, $apprentice_fname, $apprentice_lname, $message, $status, $profile_id){
			
		$query = "INSERT INTO mentors(mentor, apprentice_fname, apprentice_lname, message, status, profile_id)
        VALUES (:mentor, :apprentice_fname, :apprentice_lname, :message, :status, :profile_id)";
        
        $pdost = $db->prepare($query);
        
		$pdost->bindParam(':mentor', $mentor);
		$pdost->bindParam(':apprentice_fname', $apprentice_fname);
		$pdost->bindParam(':apprentice_lname', $apprentice_lname);
		$pdost->bindParam(':message', $message);
		$pdost->bindParam(':status', $status);
		$pdost->bindParam(':profile_id', $profile_id);
	
		$mentor = $pdost->execute();
		
		return $mentor;
    }
    public function getMentorRequestById($db, $id){
            
        $query = "SELECT * FROM mentors WHERE mentor = :id AND status = 'pending' ORDER BY request_date desc";

        $pdost = $db->prepare($query);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        
        $mentors = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $mentors;
    }
    //listing mentorship request
    public function listApprenticeRequest($db, $id){
            
        $query = "SELECT * FROM profiles WHERE id = :id";

        $pdost = $db->prepare($query);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        
        $mentors = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $mentors;
    }
    //lingting user apprentice
    public function listApprentice($db, $id){
            
        $query = "SELECT * FROM mentors WHERE mentor = :id AND status = 'approved' ORDER BY request_date desc";

        $pdost = $db->prepare($query);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        
        $mentors = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $mentors;
    }
    //updating mentorship request status
	public function updateMentorRequestStatus($db, $id, $status){
		$query = "UPDATE mentors
				  SET status = :status
				  WHERE id = :id";

		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		$pdost->bindParam(':status', $status);
		$status = $pdost->execute();
		
		return $status;
	}
}


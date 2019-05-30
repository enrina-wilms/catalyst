<?php

//create class for user Experience

class Experience
{
	//getting a specific Experience post
	public function getExperienceById($profile_id, $db){
		
		$query = "SELECT * FROM experiences WHERE profile_id = :profile_id";
		$pdost = $db->prepare($query);
		
		//bindParam = Binds a parameter to the specified variable name
		$pdost->bindParam(':profile_id', $profile_id);
		$pdost->execute();
		
		$Experience = $pdost->fetch(PDO::FETCH_OBJ);
		
		return $Experience;
		
	}

	//getting all the Experience created and save on the database
	public function getAllExperience($db){
		
		$query = "SELECT * FROM experiences ORDER BY start_date Desc";
		$pdost = $db->prepare($query);
		$pdost->execute();
		
		$Experience = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $Experience;
	}
	
	//adding Experience
	public function addExperience($position, $company, $start_date, $end_date, $profile_id, $db){
			
		$query = "INSERT INTO experiences(position, company, start_date, end_date, profile_id)
		VALUES (:position, :company, :start_date, :end_date, :profile_id)";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':position', $position);
		$pdost->bindParam(':company', $company);
		$pdost->bindParam(':start_date', $start_date);
		$pdost->bindParam(':end_date', $end_date);
		$pdost->bindParam(':profile_id', $profile_id);
		$Experience = $pdost->execute();
		
		return $Experience;
	}
	
	//updating Experience
	public function updateExperience($id, $position, $company, $start_date, $end_date, $profile_id, $db){
		
		$query = "UPDATE experiences
				  SET position = :position,
				  	  company = :company,
					  start_date = :start_date,
					  end_date = :end_date,
					  profile_id = :profile_id
				  WHERE id = :id";
		
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		$pdost->bindParam(':position', $position);
		$pdost->bindParam(':company' , $company);
		$pdost->bindParam(':start_date' , $start_date);
		$pdost->bindParam(':end_date' , $end_date);
		$pdost->bindParam(':profile_id' , $profile_id);
		
		$Experience = $pdost->execute();
		
		return $Experience;
		
	}
	
	//deleting a Experience
	public function deleteExperience($id, $db){
		
		$query = "DELETE FROM experiences WHERE id = :id";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		
		$Experience = $pdost->execute();
		
		return $Experience;
		
	}
	
	public function userExperience($profile_id, $db){
		$query = "SELECT * FROM experiences WHERE profile_id = :profile_id";
		
		$pdost = $db->prepare($query);
		
		$pdost->bindParam(':profile_id', $profile_id);

		$Experience = $pdost->execute();
		
		$Experience = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $Experience;
		
	}
}
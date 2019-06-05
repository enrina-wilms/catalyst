<?php

//Class for status
class Status
{
    //getting all status by profile
    	public function getStatusByProfileId($user_id, $db){
		
		$query = "SELECT * FROM statuss WHERE profile_id = :id";
		$pdost = $db->prepare($query);
		
		//bindParam = Binds a parameter to the specified variable name
		$pdost->bindParam(':id', $user_id);
		$pdost->execute();
		
		$status = $pdost->fetch(PDO::FETCH_OBJ);
		
		return $status;
		
    }

	//getting all the profile created and save on the database
	public function getAllStatus($db){
		
		$query = "SELECT * FROM statuss ORDER BY status_date, status_time Asc";
		$pdost = $db->prepare($query);
		$pdost->execute();
		
		$status = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $status;
	}
	
	//adding status
	public function addStatus($message, $status_date, $status_time, $user_id, $db){
			
		$query = "INSERT INTO statuss(message, status_date, status_time, profile_id)
		VALUES (:message, :status_date, :status_time, :user_id)";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':message', $message);
        $pdost->bindParam(':status_date', $status_date);
        $pdost->bindParam(':status_time', $status_time);
		$pdost->bindParam(':user_id', $user_id);
		$status = $pdost->execute();
		
		return $status;
	}
	
	
	//deleting a status
	public function deleteStatus($id, $db){
		
		$query = "DELETE FROM statuss WHERE id = :id";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		
		$status = $pdost->execute();
		
		return $status;
		
	}
}
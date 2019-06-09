<?php

//Class for status
class Status
{
    //getting all status by profile
    	public function getStatusByProfileId($user_id, $db){
		
		$query = "SELECT * FROM status WHERE profile_id = :id ORDER BY status_date DESC";
		$pdost = $db->prepare($query);
		
		//bindParam = Binds a parameter to the specified variable name
		$pdost->bindParam(':id', $user_id);
		$pdost->execute();
		
		$status = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $status;
		
    }

	//getting all the profile created and save on the database
	public function getAllStatus($db){
		
		$query = "SELECT * FROM status ORDER BY status_date DESC";
		$pdost = $db->prepare($query);
		$pdost->execute();
		
		$status = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $status;
	}
	
	//adding status
	public function addStatus($message, $user_id, $db){
			
		$query = "INSERT INTO status(message, profile_id)
		VALUES (:message, :user_id)";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':message', $message);
		$pdost->bindParam(':user_id', $user_id);
		$status = $pdost->execute();
		
		return $status;
	}
	
	
	//deleting a status
	public function deleteStatus($id, $db){
		
		$query = "DELETE FROM status WHERE id = :id";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		
		$status = $pdost->execute();
		
		return $status;
		
	}
}
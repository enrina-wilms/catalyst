<?php

//create class for user Education

class Education
{
	//getting a specific Education post
	public function getEducationById($id, $db){
		
		$query = "SELECT * FROM education WHERE start_date = :start_date";
		$pdost = $db->prepare($query);
		
		//bindParam = Binds a parameter to the specified variable name
		$pdost->bindParam(':start_date', $id);
		$pdost->execute();
		
		$education = $pdost->fetch(PDO::FETCH_OBJ);
		
		return $education;
		
	}

	//getting all the Education created and save on the database
	public function getAllEducation($db){
		
		$query = "SELECT * FROM education ORDER BY field Desc";
		$pdost = $db->prepare($query);
		$pdost->execute();
		
		$education = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $education;
	}
	
	//adding Education
	public function addEducation($school, $degree, $field, $description, $start_date, $end_date, $profile_id, $db){
			
		$query = "INSERT INTO education(school, degree, field, description, start_date, end_date, profile_id)
		VALUES (:school, :degree, :field, :description, :start_date, :end_date, :profile_id)";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':school', $school);
		$pdost->bindParam(':degree', $degree);
		$pdost->bindParam(':field', $field);
		$pdost->bindParam(':description', $description);
		$pdost->bindParam(':start_date', $start_date);
		$pdost->bindParam(':end_date', $end_date);
		$pdost->bindParam(':profile_id', $profile_id);
		
		$education = $pdost->execute();
		
		return $education;
	}
	
	//updating Education
	public function updateEducation($id, $school, $degree, $field, $description, $start_date, $db){
		
		$query = "UPDATE education
				  SET school = :school,
				  	  degree = :degree,
					  field = :field,
					  description = :description,
					  start_date = :start_date
				  WHERE id = :id";
		
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		$pdost->bindParam(':school', $school);
		$pdost->bindParam(':degree' , $degree);
		$pdost->bindParam(':field' , $field);
		$pdost->bindParam(':description' , $description);
		$pdost->bindParam(':start_date' , $start_date);
		
		$education = $pdost->execute();
		
		return $education;
		
	}
	
	//deleting a Education
	public function deleteEducation($id, $db){
		
		$query = "DELETE FROM education WHERE id = :id";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		
		$education = $pdost->execute();
		
		return $education;
		
	}
	
	public function userEducation($profile_id, $db){
		$query = "SELECT * FROM education WHERE profile_id = :profile_id";
		
		$pdost = $db->prepare($query);
		
		$pdost->bindParam(':profile_id', $profile_id);

		$education = $pdost->execute();
		
		$education = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $education;
		
	}
}
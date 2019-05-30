<?php

//create class for user profile

class Profile
{
	//getting a specific profile post
	public function getProfileById($id, $db){
		
		$query = "SELECT * FROM profiles WHERE id = :id";
		$pdost = $db->prepare($query);
		
		//bindParam = Binds a parameter to the specified variable name
		$pdost->bindParam(':id', $id);
		$pdost->execute();
		
		$profile = $pdost->fetch(PDO::FETCH_OBJ);
		
		return $profile;
		
	}
	
//	public function getProfileById($id, $db){
//		
//		$query = "SELECT * FROM profiles WHERE user_id = :user_id";
//		$pdost = $db->prepare($query);
//		
//		//bindParam = Binds a parameter to the specified variable name
//		$pdost->bindParam(':user_id', $id);
//		$pdost->execute();
//		
//		$profile = $pdost->fetch(PDO::FETCH_OBJ);
//		
//		return $profile;
//		
//	}

	//getting all the profile created and save on the database
	public function getAllProfile($db){
		
		$query = "SELECT * FROM profiles ORDER BY fname Asc";
		$pdost = $db->prepare($query);
		$pdost->execute();
		
		$profile = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $profile;
	}
	
	//adding profile
	public function addProfile($fname, $lname, $email, $contact, $image, $location, $position, $portfolio_url, $mentorship_status, $user_id, $db){
			
		$query = "INSERT INTO profiles(fname, lname, email, contact, image, location, position, portfolio_url, mentorship_status, user_id)
		VALUES (:fname, :lname, :email, :contact, :image, :location, :position, :portfolio_url, :mentorship_status, :user_id)";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':fname', $fname);
		$pdost->bindParam(':lname', $lname);
		$pdost->bindParam(':email', $email);
		$pdost->bindParam(':contact', $contact);
		$pdost->bindParam(':image', $image);
		$pdost->bindParam(':location', $location);
		$pdost->bindParam(':position', $position);
		$pdost->bindParam(':portfolio_url', $portfolio_url);
		$pdost->bindParam(':mentorship_status', $mentorship_status);
		$pdost->bindParam(':user_id', $user_id);
		
		$profile = $pdost->execute();
		
		return $profile;
	}
	
	//updating profile
	public function updateProfile($id, $fname, $lname, $email, $contact, $image, $location, $position, $portfolio_url, $mentorship_status, $user_id, $db){
		
		$query = "UPDATE profiles
				  SET fname = :fname,
				  	  lname = :lname,
					  email = :email,
					  contact = :contact,
					  image = :image
					  location = :location
					  position = :position
					  portfolio_url = :portfolio_url
					  mentorship_status = :mentorship_status
					  user_id = :user_id
				  WHERE id = :id";
		
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		$pdost->bindParam(':fname', $fname);
		$pdost->bindParam(':lname' , $lname);
		$pdost->bindParam(':email' , $email);
		$pdost->bindParam(':contact' , $contact);
		$pdost->bindParam(':image' , $image);
		$pdost->bindParam(':location' , $location);
		$pdost->bindParam(':position' , $position);
		$pdost->bindParam(':portfolio_url' , $portfolio_url);
		$pdost->bindParam(':mentorship_status' , $mentorship_status);
		$pdost->bindParam(':user_id' , $user_id);
		
		$profile = $pdost->execute();
		
		return $profile;
		
	}
	
	//deleting a profile
	public function deleteProfile($id, $db){
		
		$query = "DELETE FROM profiles WHERE id = :id";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		
		$profile = $pdost->execute();
		
		return $profile;
		
	}
	
	public function userProfile($id, $db){
		
		$query = "SELECT * FROM profiles WHERE user_id = :user_id";
		
		$pdost = $db->prepare($query);

		$profile = $pdost->execute();
		
		$profile = $pdost->fetch(PDO::FETCH_OBJ);
		
		return $profile;
		
	}
}
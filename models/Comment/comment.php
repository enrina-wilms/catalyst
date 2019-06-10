<?php

//Class for Comments
class Comment
{
    //getting all status by profile
    	public function getCommentsByStatusId($status_id, $db){
		
		$query = "SELECT * FROM comments WHERE status_id = :id ORDER BY comment_date DESC";
		$pdost = $db->prepare($query);
		
		//bindParam = Binds a parameter to the specified variable name
		$pdost->bindParam(':id', $status_id);
		$pdost->execute();
		
		$status = $pdost->fetchAll(PDO::FETCH_OBJ);
		
		return $status;
		
    }

	//adding Comment
	public function addComments($comment, $status_id, $profile_id, $db){
			
		$query = "INSERT INTO comments(comment, status_id, profile_id)
		VALUES (:comment, :status_id, :profile_id)";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':comment', $comment);
        $pdost->bindParam(':status_id', $status_id);
		$pdost->bindParam(':profile_id', $profile_id);
		$comment = $pdost->execute();
		
		return $comment;
	}
	
	
	//deleting a comment
	public function deleteComment($id, $db){
		
		$query = "DELETE FROM comments WHERE id = :id";
		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		
		$comments = $pdost->execute();
		
		return $comments;
		
	}
}
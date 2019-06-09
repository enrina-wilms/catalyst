<?php

class Friends{

    public function listAllFriends($db){
        $sql = "SELECT * FROM friends WHERE friends_status = 'accepted'";
        $pdost = $db->prepare($sql);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);
        return $friends;
    }

    public function friendRequest($db, $connect1, $connect2, $friends_status){
        $sql = "INSERT INTO friends (connect1, connect2, friends_status)
                VALUES (:connect1, :connect2, :friends_status)";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':connect1', $connect1);
        $pdost->bindParam('connect2', $connect2);
        $pdost->bindParam(':friends_status', $friends_status);
        $friends = $pdost->execute();
        return $friends;
    }
    public function getPendingFriendRequestsById($db, $id){
        $sql = "SELECT * FROM friends where connect1 = :id 
        AND friends_status = 'pending' ORDER BY friends_date desc";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);

        return $friends;
    }
    public function getApprovedFriendRequestsById($db, $id){
        $sql = "SELECT * FROM friends where connect1 = :id 
        AND friends_status = 'accepted' ORDER BY friends_date desc";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);

        return $friends;
    }
    /*public function getFriendsById($id, $db){
        $sql = "SELECT * FROM friends WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $friends = $pdost->fetch(PDO::FETCH_OBJ);
        return $friends;
    } */
    public function unfriend($db, $id, $friends_status){
		$query = "UPDATE friends
				  SET friends_status = :friends_status
				  WHERE id = :id";

		$pdost = $db->prepare($query);
		$pdost->bindParam(':id', $id);
		$pdost->bindParam(':friends_status', $friends_status);
		$friends = $pdost->execute();
		
		return $friends;
	}
}
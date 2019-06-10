<?php

class Friends{

    public function listAllFriends($db){
        $sql = "SELECT * FROM friends WHERE friends_status = 'accepted'";
        $pdost = $db->prepare($sql);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);

        return $friends;
    }

    public function friendRequest($db, $sender, $receiver, $fname, $lname, $friends_status){
        $sql = "INSERT INTO friends (sender, receiver, friends_fname, friends_lname, friends_status)
                VALUES (:sender, :receiver, :friends_fname, :friends_lname, :friends_status)";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':sender', $sender);
        $pdost->bindParam('receiver', $receiver);
        $pdost->bindParam('friends_fname', $fname);
        $pdost->bindParam('friends_lname', $lname);
        $pdost->bindParam(':friends_status', $friends_status);
        $friends = $pdost->execute();

        return $friends;

    }
    public function getPendingFriendRequestsById($db, $id){
        $sql = "SELECT * FROM friends 
        where sender = :id AND friends_status = 'pending' 
        ORDER BY friends_date desc";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);

        return $friends;
    }
    public function listAllFriendsProfiles($db, $id){
        $sql =  "SELECT * FROM friends INNER JOIN profiles on friends.receiver = profiles.id 
        where friends.receiver = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $friends;
    }
    public function getApprovedFriendRequestsById($db, $id){
        $sql = "SELECT * FROM friends where sender = :id 
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
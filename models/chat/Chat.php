<?php

class Chat{
    //getting all the message
    public function fetchMessage($db){
            
        $query = "SELECT * FROM chat ORDER BY date desc";
        $pdost = $db->prepare($query);
        $pdost->execute();
        
        $message = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $message;
    }
    public function throwMessage($db, $sender, $receiver, $message){
            
        $query = "INSERT INTO chat (sender, receiver, message)
        VALUES (:sender, :receiver, :message)";
        
        $pdost = $db->prepare($query);
		$pdost->bindParam(':sender', $sender);
		$pdost->bindParam(':receiver', $receiver);
		$pdost->bindParam(':message', $message);
	
		$message = $pdost->execute();
		
		return $message;
    }
    public function listActiveChatReceiver($db, $id){
            
        $query = "SELECT * FROM profiles INNER JOIN chat ON profiles.id = chat.sender ORDER BY date desc";
        $pdost = $db->prepare($query);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        
        $message = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $message;
    }
    public function listActiveChatSender($db, $id){
            
        $query = "SELECT profiles.id, profiles.fname, profiles.lname FROM profiles INNER JOIN chat ON profiles.id = chat.sender GROUP BY profiles.id, profiles.fname, profiles.lname HAVING profiles.id = :id";
        $pdost = $db->prepare($query);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        
        $message = $pdost->fetchAll(PDO::FETCH_OBJ);
        
        return $message;
    }

}
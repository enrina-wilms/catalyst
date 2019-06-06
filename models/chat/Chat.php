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
}
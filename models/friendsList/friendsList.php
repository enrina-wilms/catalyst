<?php

class Friends{

    public function getAllFriends($db){
        $sql = "SELECT * FROM friends WHERE friends_status = 1";
        $pdost = $db->prepare($sql);
        $pdost->execute();
        $friends = $pdost->fetchAll(PDO::FETCH_OBJ);

        return $friends;
    }

    public function friendRequest($db, $connect1, $connect2, $friends_status){
        
    }

}
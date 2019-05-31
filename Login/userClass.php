<?php

class registration
{

    public function approveAdmin($role, $id, $db){
        $sql = "UPDATE users SET role = :role where id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->bindParam(':role', $role);
        $count = $pdost->execute();
        return $count;
    }

    public function addUser($email, $password, $db){// where do I put password hash
        $sql = "INSERT INTO users(email, password)
                VALUES(:email, :password)";
        $pdost = $db->prepare($sql);
        $pdost = bindParam(':email', $email);
        $pdost = bindParam(':password', $password);
        $count = $pdost->execute();
        return $count;
    }
}


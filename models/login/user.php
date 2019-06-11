<?php
class user
{
    public function approveAdmin($role, $id, $db){
        $sql = "UPDATE users SET role = :role where id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->bindParam(':role', $role);
        $count = $pdost->execute();
        return $count;
    }
    public function login($email, $password, $db){
        $sql = "SELECT id,password FROM users WHERE email = :email";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(":email", $email);
        $pdost->execute();
        if ($pdost->rowCount() > 0) { //0 or 1 boolean value
            $result = $pdost->fetch(PDO::FETCH_OBJ);
            if(password_verify($password,$result->password)){
                $_SESSION['uId'] = $result->id;
                return true;
            }
        } else {
            return false;
        }
    }
    public function addUser($email, $password, $db){
        $sql = "INSERT INTO users(email, password)
                VALUES(:email, :password)";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':email', $email);
        $enc_password = password_hash($password, 1);
        $pdost->bindParam(':password', $enc_password);
        $count = $pdost->execute();
        return $count;
    }
    public function getUserById($id, $db){
        $sql = "SELECT * FROM users WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $count = $pdost->fetch(PDO::FETCH_OBJ);
        return $count;
    }
    public function getAllUsers($db){
        $sql = "SELECT * FROM users";
        $pdost = $db->prepare($sql);
        $pdost->execute();
        $count = $pdost->fetchAll(PDO::FETCH_OBJ);
        return $count;
    }
    public function deleteUser($db, $id){
        $sql = "DELETE FROM users WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $count = $pdost->execute();
        return $count;
    }
 
    public function updateUser($id, $email, $password, $db){
        $sql = "UPDATE users SET email = :email, password = :password WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->bindParam(':email', $email);
        $enc_password = password_hash($password, 1);
        $pdost->bindParam(':password', $enc_password);
        $count = $pdost->execute();
        return $count;
    }

    public function getlatestUser($db){
        $sql = "SELECT * FROM users ORDER BY date desc LIMIT 0,1";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $count = $pdost->fetch(PDO::FETCH_OBJ);
        return $count;
    }
}


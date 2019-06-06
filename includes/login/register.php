<?php
session_start();
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";


$emailErr = "";
$passErr = "";
$conPassErr = "";
$isValid = true;

$email = $password = $conPass = "";

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conPass = $_POST['confirmPassword'];
    

    if(empty($email)){
        $emailErr = "Please Enter Your Email";
        $isValid = false;
    }elseif(empty($password)){
        $passErr = "Please Enter Your Password";
        $isValid = false;
    }elseif(empty($conPass)){
        $conPassErr = "Please Reenter Your Password";
        $isValid = false;
    }elseif($password !== $conPass){
        $conPassErr = "Passwords Do Not Match";
        $isValid = false;
    }

    if($isValid){
        $db = Database::getDb();
        $register = new user();
        $addUser = $register->addUser($email, $password, $db);

        if($addUser){
            echo "<p class = 'addUser'> Welcome! </p>";
        }
    }
}


?>

<form action="" method="POST">

    Email:<input class="userInput" type="text" name="email"/>
    <span id="emailErr" style="color:red;">
        <?php
            if(isset($emailErr)) {
                echo $emailErr;
            }
        ?>
    </span><br>
    Password:<input class="userInput" type="password" name="password"/>
    <span id="passErr" style="color:red;">
        <?php
            if(isset($passErr)) {
                echo $passErr;
            }
        ?>
    </span><br>
    Confirm Password:<input class="userInput" type="password" name="confirmPassword"/>
    <span id="conPassErr" style="color:red;">
        <?php
            if(isset($conPassErr)) {
                echo $conPassErr;
            }
        ?>
    </span><br>
    <input id="userSubmit" type="submit" name="register" value="Register">
</form>
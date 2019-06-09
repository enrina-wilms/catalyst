<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

    if(isset($_POST['update'])){
        $id = $_POST['id'];

        $db = Database::getDb();
        $updUser = new user();
        $user = $updUser->getUserById($id, $db);

        $email = $user->email;
        $password = $user->password;
    }

    if(isset($_POST['updUser'])){
        $id = $_POST['uid']; 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conPass = $_POST['confirmPassword'];
        


        if($email == ""){
            echo "Please Enter an Email";
        }elseif($password == ""){
            echo "Please Enter a Password";
        }elseif($password !== $conPass){
            echo "Passwords Do Not Match";
        }else{
            $db = Database::getDb();
            $updUser = new user();
            $count = $updUser->updateUser($id, $email, $password, $db);

            if($count){
                header("Location: userAdmin.php"); /*****************************pick a location */
            }
        }exit;
    }
?>
<form action="" method="POST">
<h2>Update</h2>
<input type="hidden" name="uid" value="<?= $user->id; ?>" />
Email:<input class="userInput" type="text" name="email" value="<?=$user->email;?>" /> <br/>
<span id="emailErr" style="color:red;">
    <?php
        if(isset($emailErr)) {
            echo $emailErr;
        }
    ?>
</span>
Password:<input class="userInput" type="text" name="password" value="<?=$user->password;?>" /><br/>
<span id="passErr" style="color:red;">
    <?php
        if(isset($passErr)) {
            echo $passErr;
        }
    ?>
</span>
Confirm Password:<input class="userInput" type="text" name="confirmPassword"/><br/>
<span id="conPassErr" style="color:red;">
    <?php
        if(isset($conPassErr)) {
            echo $conPassErr;
        }
    ?>
</span>
<input id="userSubmit" type="submit" name="updUser" value="Update User">
</form>
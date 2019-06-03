<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

    if(isset($_POST['update'])){
        $id = $_POST['id'];

        $db = Database::getDb();
        $updUser = new user();
        $user = $updUser->getUserById($id, $db);

        $userEmail = $user->email;
        $userPass = $user->password;
    }

    if(isset($_POST['updUser'])){
        $id = $_POST['uid']; 
        $email = $_POST['email'];
        $password = $_POST['password'];


        if($userEmail == ""){
            echo "Please Enter an Email";
        }elseif($userPass == ""){
            echo "Please Enter a Password";
        }else{
            $db = Database::getDb();
            $updUser = new user();
            $count = $updUser->updateUser($id, $email, $password, $db);

            if($count){
                header("Location: "); /*****************************pick a location */
            }
        }exit;
    }
?>
<form action="" method="POST">
<h2>Update</h2>
<input type="hidden" name="uid" value="<?= $user->id; ?>" />
Email:<input class="userInput" type="text" name="email"/>
<span id="emailErr" style="color:red;">
    <?php
        if(isset($emailErr)) {
            echo $emailErr;
        }
    ?>
</span>
Password:<input class="userInput" type="text" name="password"/>
<span id="passErr" style="color:red;">
    <?php
        if(isset($passErr)) {
            echo $passErr;
        }
    ?>
</span>
Confirm Password:<input class="userInput" type="text" name="confirmPassword"/>
<span id="conPassErr" style="color:red;">
    <?php
        if(isset($conPassErr)) {
            echo $conPassErr;
        }
    ?>
</span>
<input id="userSubmit" type="submit" name="updUser" value="Update User">
</form>
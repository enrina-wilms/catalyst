<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

    if(isset($_POST['update'])){

    }

    if(isset($_POST['updUser'])){
        
    }
?>
<form action="" method="POST">
<h2>Update</h2>
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
<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

$emailErr = "";
$passErr = "";
$isValid = true;

$email = $password = "";

    //print_r( $_POST );
    
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
    //Validation
    if(empty($email)){
        $emailErr = "Please Enter Your Email";
        $isValid = false;
    }elseif(empty($password)){
        $passErr = "Please Enter Your Password";
        $isValid = false;
    }
//Login

    if($isValid){
        $db = Database::getDb();
        $login = new user();
        $loginUser = $login->login($email, $password, $db);
            
        /*echo 'here';
        echo 'LU: '.$loginUser;*/
        
        if($loginUser){
            header( "Location: ../homepage/homepage.php");
        }
    }
}
//$_SESSION['id'];
?>
<!--
        <div class="col-md-6 align-self-center"> center-div
        <h2 class="loginForms">Login</h2>
-->
            <form class="login-form-style" action="" method="POST">
                <div class="form-group">
                    <label for="loginEmail">Email:</label>
                    <input id="loginEmail" class="userInput form-control" type="text" name="email"/>
                    <span id="emailErr" style="color:red;">
                        <?php
                            if(isset($emailErr)) {
                                echo $emailErr;
                            }
                        ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="loginPass">Password:</label>
                   <input id="loginPass" class="userInput form-control" type="password" name="password"/>
                    <span id="passErr" style="color:red;">
                        <?php
                            if(isset($passErr)) {
                                echo $passErr;
                            }
                        ?>
                    </span>
                </div>
                <input class="btn btn-dark login-btn-login" id="loginSubmit" type="submit" name="login" value="Login">
            </form>
<!--        </div>-->
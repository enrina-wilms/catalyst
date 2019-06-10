<?php
@session_start();
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
            header( "Location: ../userProfile/create-profile.php");
        }
    }
}


?>
<!--<div class="col-md-6 align-self-center">-->
	<!--center-div-->
<!--	<h2 class="loginForms">SignUp</h2>-->
	<form action="" method="POST">
		<div class="form-group">
			<label for="regEmail">Email:</label>
			<input id="regEmail" class="userInput form-control" type="text" name="email" />
			<span id="emailErr" style="color:red;">
				<?php
                        if(isset($emailErr)) {
                            echo $emailErr;
                        }
                    ?>
			</span><br>
		</div>
		<div class="form-group">
			<label for="regPass">Password:</label>
			<input id="regPass" class="userInput form-control" type="password" name="password" />
			<span id="passErr" style="color:red;">
				<?php
                        if(isset($passErr)) {
                            echo $passErr;
                        }
                    ?>
			</span><br>
		</div>
		<div class="form-group">
			<label for="regConPass">Confirm Password:</label>
			<input id="regConPass" class="userInput form-control" type="password" name="confirmPassword" />
			<span id="conPassErr" style="color:red;">
				<?php
                        if(isset($conPassErr)) {
                            echo $conPassErr;
                        }
                    ?>
			</span><br>
		</div>

		<input class="btn btn-dark login-btn-signup" id="userSubmit" type="submit" name="register" value="Register">
	</form>
<!--</div>-->

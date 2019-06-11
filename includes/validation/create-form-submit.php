<?php

//validation fro create profile
    $nameErr = $emailErr = $phoneErr = $emptyErr = $success = "";
    $fname = $lname  = $email = $contact = $location = $position = $portfolio_url = $errMessage = "";

    if(isset($_POST['createProfile'])){
		
		
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['phone'];
	$location = $_POST['location'];
	$position = $_POST['position'];
	$portfolio_url = $_POST['portfolio'];
    $user_id = $uid;
    //FUNCTION AND VALIDATION FOR INPUT FIELDS
        
    //VALIDATION FOR NAME
    if (!valid_name($fname)) {
        $nameErr = "Only characters and spaces allowed <br/> <br/>";
    } else {
         echo empty_message();
    }

	if (!valid_name($lname)) {
        $nameErr = "Only characters and spaces allowed <br/> <br/>";
    } else {
         echo empty_message();
    }
		
    //VALIDATION FOR EMAIL
    if (valid_email($email)) {
        $emailErr = "Please enter a valid email format <br/> <br/>";
    } else {
        echo empty_message();
    }
        
    //VALIDATION FOR PHONE
    if (!valid_phone($contact)) {
        $phoneErr = "Please fill a valid phone number format <br/> <br/>";
    } else {
        echo empty_message();   
    }
	
	if (!empty_required($fname) || !empty_required($lname) || !empty_required($email) || !empty_required($contact) || !empty_required($position) || !empty_required($location) || !empty_required($portfolio_url)) {

        $errMessage = "Please fill the field";
    } else {
        echo empty_message();
    }	
		
    //IF ALL INPUT FIELDS DOESN'T HAVE ERROR MESSAGE A CONFIRMATION OR THANK YOU MESSAGE WILL APPEAR
    if ($errMessage == "" && $nameErr == "" && $emailErr == "" && $phoneErr == "") {
        
	$db = Database::getDb();
	$statusObj = new Profile();
	$add = $statusObj->addProfile($fname, $lname, $email, $contact, $location, $position, $portfolio_url, $user_id, $db);

	if($add) {
		header("Location:user-profile.php")	;
	} else{
		$message = "Problem posting a status!";
	}
	exit();

    }
} // end of isset
//EOF
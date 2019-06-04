<?php
    $nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = $success = "";
    $name = $email = $phone = $subject = $message = $errMessage = "";

    if(isset($_POST['createProfile'])){
		
		
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['phone'];
	$location = $_POST['location'];
	$position = $_POST['position'];
	$portfolio_url = $_POST['portfolio'];

//    $name = $_POST['yourName'];
//    $email = $_POST['yourEmail'];
//    $phone = $_POST['phoneNumber'];
//    $subject = $_POST['subject'];
//    $message = $_POST['message'];
    
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

    //IF ALL INPUT FIELDS DOESN'T HAVE ERROR MESSAGE A CONFIRMATION OR THANK YOU MESSAGE WILL APPEAR
    if ($errMessage == "" && $nameErr == "" && $emailErr == "" && $phoneErr == "") {
        
        if( $_FILES['image']['error'] == 0 )
    {
        
        // Convert the image to a base64 string
        $file = base64_encode( file_get_contents( $_FILES['profilePicture']['tmp_name'] ) );
        
    }
    else
    {
        
        $file = '';
        
    }
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['phone'];
//	$image = $_POST['profilePicture'];
	$image = $file;
	$location = $_POST['location'];
	$position = $_POST['position'];
	$portfolio_url = $_POST['portfolio'];
//	$mentorship_status = $_POST['mentor-status'];
	$mentorship_status = 1;
	$user_id = 1;
		
	$db = Database::getDb();
	$statusObj = new Profile();
	$add = $statusObj->addProfile($fname, $lname, $email, $contact, $image, $location, $position, $portfolio_url, $mentorship_status, $user_id, $db);

	if($add) {
		//DISPLAY STATUS
		header("Location:user-profile.php")	;
	} else{
		$message = "Problem posting a status!";
	}
	exit();
    }
} // end of isset
//EOF
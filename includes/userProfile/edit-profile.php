<?php
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";

if(isset($_POST['update'])) {
	$id = $_POST['id'];
	
	$db = Database::getDb();
	$profileObj = new Profile();
	$update = $profileObj->getProfileById($id, $db);
}

if(isset($_POST['updateProfile'])) {
	
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
	$profileObj = new Profile();
	$update = $profileObj->updateProfile($fname, $lname, $email, $contact, $image, $location, $position, $portfolio_url, $mentorship_status, $user_id, $db);

	if($update) {
		//DISPLAY STATUS
		header("Location:user-profile.php")	;
	} else{
		$message = "Problem posting a status!";
	}
	exit();
}




?>

<br>
<br>
<div class="container">
	<h1 class="text-center">Update Profile</h1>
	<!--	<div class="row">-->

	<!--CREATE PROFILE FORM-->

	<div class="d-block col-md-9" style="margin:0 auto;">
		<form id="createProfileForm" method="post" action="" enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="fname">First Name></label>
					<input type="text" class="form-control" id="fname" name="fname" class="fname" placeholder="First Name">
				</div>
				<div class="form-group col-md-6">
					<label for="lname">Last Name</label>
					<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="ex email@gmail.com">
				</div>
				<div class="form-group col-md-6">
					<label for="phone">Phone</label>
					<input type="phone" class="form-control" id="phone" name="phone" placeholder="ex. (000) - 000 - 0000">
				</div>
				<div class="form-group col-md-6">
					<label for="location">Location</label>
					<input type="text" class="form-control" id="location" name="location" placeholder="City, Country">
				</div>
				<div class="form-group col-md-6">
					<label for="portfolio">Position</label>
					<input type="text" class="form-control" id="position" name="position" placeholder="www.portfolio.com">
				</div>
				<div class="form-group col-md-6">
					<label for="portfolio">Portfolio Website</label>
					<input type="text" class="form-control" id="portfolio" name="portfolio" placeholder="www.portfolio.com">
				</div>
				<div class="form-group col-md-6">
					<label class="labelname">Mentorship Status</label>
					<div class="inputbreak">
						<select id="mentor-status" name="mentor-status" class="dropdown btn btn-dark dropdown-toggle btn-block" onchange="">
							<option value="1">Active</option>
							<option value="0">inactive</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label for="profilePicture">Upload Profile Picture</label>
					<input type="file" class="form-control-file" id="profilePicture" name="profilePicture">
				</div>
			</div>

			<button id="updateProfile" name="updateProfile" type="submit" class="btn btn-dark createProfile-button">Update Profile</button>
		</form>
	</div>
	<!--	</div>-->
</div>

<?php
require_once 'footer.php';

?>

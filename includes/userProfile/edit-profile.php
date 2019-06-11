<?php
require_once '../../session.php';
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";
	$profile_id = $_SESSION['spId'];
	$user_id = $_SESSION['ruId'];
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	
	$db = Database::getDb();
	$profileObj = new Profile();
	$update = $profileObj->userProfile($id, $db);
}

if(isset($_POST['updateProfile'])) {
	$profile_id = $_SESSION['spId'];
	$user_id = $_SESSION['ruId'];
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['phone'];
	$location = $_POST['location'];
	$position = $_POST['position'];
	$portfolio_url = $_POST['portfolio'];
	$mentorship_status = $_POST['mentor-status'];

	$db = Database::getDb();
	$profileObj = new Profile();
	$update = $profileObj->updateProfile($profile_id, $fname, $lname, $email, $contact, $location, $position, $portfolio_url, $mentorship_status, $user_id, $db);

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
					<input type="text" class="form-control" id="fname" name="fname" class="fname" value="<?= $update->fname; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="lname">Last Name</label>
					<input type="text" class="form-control" id="lname" name="lname" value="<?= $update->lname; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?= $update->email; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="phone">Phone</label>
					<input type="phone" class="form-control" id="phone" name="phone" value="<?= $update->contact; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="location">Location</label>
					<input type="text" class="form-control" id="location" name="location" value="<?= $update->location; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="portfolio">Position</label>
					<input type="text" class="form-control" id="position" name="position" value="<?= $update->position; ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="portfolio">Portfolio Website</label>
					<input type="text" class="form-control" id="portfolio" name="portfolio" value="<?= $update->portfolio_url; ?>">
				</div>
				<div class="form-group col-md-6">
					<label class="labelname">Mentorship Status</label>
					<div class="inputbreak">
						<select id="mentor-status" name="mentor-status" class="dropdown btn btn-dark dropdown-toggle btn-block" onchange="">
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</select>
					</div>
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

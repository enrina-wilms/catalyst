<?php
require_once '../../session.php';
require_once '../../config.php';
require_once 'header.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";
require_once INCLUDES_VALIDATION_PATH . "/form-validation.php";
require_once INCLUDES_VALIDATION_PATH . "/create-form-submit.php";

?>

<br>
<br>
<div class="container">
	<h1 class="text-center">Create Profile</h1>
	<!--	<div class="row">-->

	<!--CREATE PROFILE FORM-->

	<div class="d-block col-md-9" style="margin:0 auto;">
		<form id="createProfileForm" method="post" action="" enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="fname">First Name<span class="dev-required ml-2">*</span></label>
					<input type="text" class="form-control" id="fname" name="fname" class="fname" placeholder="First Name" value="<?= $fname; ?>">
					<span class="error-message">
					<?= $nameErr; ?>
					<?= $errMessage; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="lname">Last Name<span class="dev-required ml-2">*</span></label>
					<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?= $lname; ?>">
					<span class="error-message">
					<?= $nameErr; ?>
					<?= $errMessage; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email<span class="dev-required ml-2">*</span></label>
					<input type="email" class="form-control" id="email" name="email" placeholder="ex email@gmail.com" value="<?= $email; ?>">
					<span class="error-message">
					<?= $emailErr; ?>
					<?= $errMessage; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="phone">Phone<span class="dev-required ml-2">*</span></label>
					<input type="phone" class="form-control" id="phone" name="phone" placeholder="ex. 000 - 000 - 0000" value="<?= $contact; ?>">
					<span class="error-message">
					<?= $phoneErr; ?>
					<?= $errMessage; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="location">Location</label>
					<input type="text" class="form-control" id="location" name="location" placeholder="City, Country" value="<?= $location; ?>">
					<span class="error-message">
					<?= $errMessage; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="portfolio">Position</label>
					<input type="text" class="form-control" id="position" name="position" placeholder="www.portfolio.com" value="<?= $position; ?>">
					<span class="error-message">
					<?= $errMessage; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="portfolio">Portfolio Website</label>
					<input type="text" class="form-control" id="portfolio" name="portfolio" placeholder="www.portfolio.com" value="<?= $portfolio_url; ?>">
					<span class="error-message">
					<?= $errMessage; ?>
					</span>
				</div>
<!--
				<div class="form-group col-md-6">
					<label for="portfolio">Github Account</label>
					<input type="text" class="form-control" id="github" name="github" placeholder="github username">
					<span class="error-message">
					<?= $nameErr; ?>
					</span>
				</div>
				<div class="form-group col-md-6">
					<label for="profilePicture">Upload Profile Picture</label>
					<input type="file" class="form-control-file" id="profilePicture" name="profilePicture">
				</div>
-->
<!--
				<div class="form-group col-md-6">
					<label class="labelname">Mentorship Status</label>
					<div class="inputbreak">
						<select id="mentor-status" name="mentor-status" class="dropdown btn btn-dark dropdown-toggle btn-block" onchange="">
							<option value="1">Active</option>
							<option value="0">inactive</option>
						</select>
					</div>
				</div>
-->
			</div>

			<button id="createProfile" name="createProfile" type="submit" class="btn btn-dark createProfile-button">Create Profile</button>
		</form>
	</div>
	<!--	</div>-->
</div>

<?php
require_once 'footer.php';

?>

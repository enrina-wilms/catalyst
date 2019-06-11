<?php
require_once '../../session.php';
require_once '../../config.php';
require_once 'header.php';
require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";
require_once MODELS_EXPERIENCE_PATH . "/experience.php";
require_once MODELS_EDUCATION_PATH . "/education.php";
require_once INCLUDES_EXPERIENCE_PATH . "/add-experience.php";
require_once INCLUDES_EXPERIENCE_PATH . "/delete-experience.php";
require_once INCLUDES_EDUCATION_PATH . "/add-education.php";
require_once INCLUDES_EDUCATION_PATH . "/delete-education.php";
require_once MODELS_STATUS_PATH . "/status.php";
require_once MODELS_COMMENT_PATH . "/comment.php";

	$profile_id = $_SESSION['spId'];
	$user_id = $_SESSION['ruId'];
	

	// how to put the userId value on the sql query?
	$query = "SELECT * FROM profiles WHERE id = :id";
	//echo $query;	
	$db = Database::getDb();
	$pdost = $db->prepare($query);
	$pdost->bindParam(":id", $profile_id);
	$profile = $pdost->execute();
	$profile = $pdost->fetch(PDO::FETCH_OBJ);

	//*********STATUS***********/
	$s = new Status();
	$statuss =  $s->getAllStatus($db);

	$c=new Comment();
	$p = new Profile();
	if(isset($_POST['comment']))
	{
		$c->addComments($_POST['comment'], $_POST['status_id'], $profile_id,  $db); 
	}

	
	$db = Database::getDb();
	$experienceObj = new Experience();
	$listExp = $experienceObj->userExperience($profile_id,$db);

	$db = Database::getDb();
	$educationObj = new Education();
	$listEduc = $educationObj->userEducation($profile_id,$db);

    $fName = $profile->fname;
	$lName = $profile->lname;
	
	
	$firstChar = mb_substr($fName, 0, 1, "UTF-8");
	$secChar = mb_substr($lName, 0, 1, "UTF-8");

	//UPDATE USERPROFILE
	if(isset($_POST['update'])) {
		$id = $_POST['id'];
		
		$db = Database::getDb();
		$profileObj = new Profile();
		$statusId = $profileObj->getProfileById($profile_id, $db);
	}

	//Mentorship Feature - update profile mentorship status
	if(isset($_GET['mentorStatus'])){
		$mentorStatus = $_GET['mentorStatus'];

		$db = Database::getDb();

		$profileObj  = new Profile();
		$updateMentorStatus = $profileObj->updateMentorStatus($db, $user_id, $mentorStatus);

		$referer = $_SERVER['HTTP_REFERER'];
		header("Location: $referer");
	}
?>

<br>
<br>
<div class="container mb-4">
	<div class="row">

		<!--LEFT SIDEBAR PROFILE-->
		<div class="col-md-3 main-left-sidebar">
			<div class="card text-center">
				<div class="card-header main-left-sidebar-header">

					<div class="dev-profile-contatiner" style="margin:0 auto;top:30px;">
						<div class="profile-avatar-circle">
							<span class="profile-initials"><?php echo $firstChar . $secChar ?></span>
						</div>
					</div>

				</div>
				<div class="card-body text-left dev-contact">
					<hr>
					<?php 
					if($profile->mentorship_status == 0){
						echo '<a href="?mentorStatus=1" class="">Become a Mentor</a>';} 
					?>
					<a href="#" class="">Become my Apprentice</a>
					<a href="#" class="">Add Friend</a>
					<a href="#" class="">Message</a>
					<hr>
					<p><i class="fas fa-link mr-2 dev-contact-icon"></i>Portfolio:</p>
					<a href="http://<?= $profile->portfolio_url?>" class="dev-contact-info" target="_blank"><?= $profile->portfolio_url?></a>
					<p><i class="fas fa-envelope-open-text mr-2 dev-contact-icon mt-3"></i>Email:</p>
					<a href="mailto:<?=$profile->email?>" class="dev-contact-info"><?= $profile->email?></a>
					<p><i class="fas fa-phone mr-2 dev-contact-icon mt-3"></i>Phone:</p>
					<a href="tel:<?= $profile->contact?>" class="dev-contact-info"><?= $profile->contact?></a>
				</div>
				<div class="card-footer text-muted">
					<form class="action-btn-style" action="../userProfile/edit-profile.php" method="post">
						<input type='hidden' value="<?php echo $profile->user_id; ?>" name="id" class="updateBtn" />
						<button class="btn dev-editBtn" type="submit" value="update Profile" name="update">Edit Profile
						</button>
					</form>
				</div>
			</div>
		</div>

		<!--CENTER MAIN PROFILE-->
		<div class="col-md-6 main-profile">
			<h2 class="main-h2"><?= $profile->fname . " " . $profile->lname ?><?php if($profile->mentorship_status == 1){echo '<span class="badge badge-pill badge-primary ml-3">Mentor</span>';} ?></h2>
			<span class="main-devposition"><?= $profile->position?></span>
			<span class="main-location"><?= $profile->location?></span>
			<br>
			<!--PROFILE TABS-->

			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link main-tablink" id="nav-feeds-tab" data-toggle="tab" href="#nav-feeds" role="tab" aria-controls="nav-feeds" aria-selected="true">Feeds</a>
					<a class="nav-item nav-link main-tablink" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
					<a class="nav-item nav-link main-tablink" id="nav-friends-tab" data-toggle="tab" href="#nav-friends" role="tab" aria-controls="nav-friends" aria-selected="false">Friends</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">

				<!--FEEDS TAB CONTAINER-->
				<div class="tab-pane fade" id="nav-feeds" role="tabpanel" aria-labelledby="nav-feeds-tab">
					<h5 class="sidebar-h5" style="background:white;">Share Your Status
						<hr />
						<div class="status-container">
							<button type="button" class="btn btn-block btn-lg text-left status-text-modal" data-toggle="modal" data-target="#exampleModalCenter">
								What's on your mind <?= $profile->fname ?>, Share It!
							</button>
							<?php require_once "../../includes/status/status-modal.php";?>
						</div>
					</h5>
					<div>
						<?php require_once "../../includes/status/status-list.php";?>
					</div>

				</div>
				<!--ABOUT TAB CONTAINER-->
				<div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
					<!--EXPERIENCE SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header mb-4">
							<div class="d-inline">
								<h3 class="d-inline">Experience</h3>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#addExperience">
									<i class="fas fa-plus"></i>
								</button>
							</div>
						</div>
						<!--LIST OF EXPERIENCE-->
						<?php require_once INCLUDES_EXPERIENCE_PATH . "/list-experience.php";?>
						<br>
					</div>
					<!--EDUCATION SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header mb-4">
							<div class="d-inline">
								<h3 class="d-inline">Education</h3>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#addEducation">
									<i class="fas fa-plus"></i>
								</button>
							</div>
						</div>
						<!--LIST OF EDUCATION-->
						<?php require_once INCLUDES_EDUCATION_PATH . "/list-education.php";?>
						<br>
					</div>

					<!--END OF EXPERIENCE AND EDUCATION -->
				</div>
				<!--FRIENDS TAB CONTAINER-->
				<div class="tab-pane fade" id="nav-friends" role="tabpanel" aria-labelledby="nav-friends-tab">

				</div>
			</div>
		</div>
		<!--RIGHT SIDEBAR PROFILE-->
		<div class="col-md-3 main-right-sidebar">

			<!--MENTORS REQUEST SIDEBAR-->
			<h5 class="sidebar-h5">Mentorship Requests</h5>
			<div class="sidebar-right-height">

				<?php require_once '../mentorship/list-apprentice-request.php'; ?>
			</div>

			<!--FRIENDS REQUEST SIDEBAR-->
			<h5 class="sidebar-h5">Friend Requests</h5>

			<div class="sidebar-right-height">
				<?php require_once '../friendslist/listFriends.php'; ?>
			</div>

			<!--APPRENTICE SIDEBAR-->
			<h5 class="sidebar-h5">Apprentices</h5>
			<div class="sidebar-right-height">
				<?php require_once '../mentorship/list-user-apprentice.php'; ?>
			</div>
		</div>
	</div>
</div>
<br>
<?php require_once INCLUDES_USERPROFILE_PATH . "/experience-modal.php";?>
<?php require_once INCLUDES_USERPROFILE_PATH . "/education-modal.php";?>


<?php
require_once 'footer.php';

?>

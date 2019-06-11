<?php
require_once '../../config.php';
require_once 'header.php';
require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";
require_once MODELS_EXPERIENCE_PATH . "/experience.php";
require_once MODELS_EDUCATION_PATH . "/education.php";
require_once INCLUDES_EXPERIENCE_PATH . "/add-experience.php";
require_once INCLUDES_EDUCATION_PATH . "/add-education.php";
require_once INCLUDES_EDUCATION_PATH . "/delete-education.php";

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$db = Database::getDb();
	$s = new Profile();
	$profile= $s->getProfileById($id, $db);




//	$query = "SELECT * FROM profiles WHERE user_id = 1";
//		
//	$db = Database::getDb();
//	$pdost = $db->prepare($query);
//	$profile = $pdost->execute();
//	$profile = $pdost->fetch(PDO::FETCH_OBJ);
//
//
	$db = Database::getDb();
	$experienceObj = new Experience();
	$listExp = $experienceObj->userExperience($id,$db);

	$db = Database::getDb();
	$educationObj = new Education();
	$listEduc = $educationObj->userEducation($id,$db);
//	$db = Database::getDb();
//	$educationObj = new Education();
//	$listEduc = $educationObj->getAllEducation($id,$db);
	}

    $fName = $profile->fname;
	$lName = $profile->lname;
	
	
	$firstChar = mb_substr($fName, 0, 1, "UTF-8");
	$secChar = mb_substr($lName, 0, 1, "UTF-8");
?>

<br>
<br>
<div class="container">
	<div class="row">

		<!--LEFT SIDEBAR PROFILE-->
		<div class="col-md-3 main-left-sidebar">
			<div class="card text-center">
				<div class="card-header main-left-sidebar-header">
					<!--
					<?php
    
    // Fetch all of the images
    $query = "SELECT * FROM profiles";
    $result = $db->query($query);

    // If there are any records
    if ($result->rowCount() > 0) 
    {

        // Loop through the records
        while($row = $result->fetch() ) 
        {

            // Display the image
            if( $row['image'] )
            {
                
                // Get the typ eof image
//                $mime_type = base64_decode( $row['image'] );
//                $mime_type = finfo_open();
//                $mime_type = finfo_buffer( $file_info, $image, FILEINFO_MIME_TYPE );
                
                echo '<img id="circle" src="data:'.'jpg'.';base64, '.$row['image'].'" height="200">';
                
            }

        }

    }
    else 
    {

        echo "0 results";
    }
    
    
    ?>
-->

					<!-- BEFORE CIRCLE -->

					<!--					<div id="circle"></div>-->

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
					<hr>

					<!--GITHUB ACCOUNT-->
					<!--
					<?php
					require_once MODELS_PROFILE_PATH . "/github.php";
					$username = 'enrina-wilms';
					echo getGithub($username);
					?>
-->
				</div>
				<div class="card-footer text-muted">
					<a href="#" class="">View Profile</a>
				</div>
			</div>
		</div>

		<!--CENTER MAIN PROFILE-->
		<div class="col-md-6 main-profile">
			<h2 class="main-h2"><?= $profile->fname . " " . $profile->lname ?><span class="badge badge-pill badge-primary ml-3">Mentor</span></h2>
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
				<div class="tab-pane fade show active" id="nav-feeds" role="tabpanel" aria-labelledby="nav-feeds-tab">




				</div>

				<!--ABOUT TAB CONTAINER-->
				<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

					<!--EXPERIENCE SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header">
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
						<div class="card-header">
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

			<!--APPRENTICE SIDEBAR-->
			<h5 class="sidebar-h5">Apprentices</h5>


		</div>
	</div>
</div>
<?php require_once INCLUDES_USERPROFILE_PATH . "/experience-modal.php";?>
<?php require_once INCLUDES_USERPROFILE_PATH . "/education-modal.php";?>

<?php
require_once 'footer.php';

?>

<?php
require_once '../../session.php';
require_once '../../config.php';
require_once 'header.php';
require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";
require_once MODELS_STATUS_PATH . "/status.php";
require_once MODELS_COMMENT_PATH . "/comment.php";
require_once INCLUDES_STATUS_PATH . "/add-status.php";

/*
echo $_SESSION['spId'];
echo $_SESSION['sfname'];
echo $_SESSION['slname'];
*/
	$profile_id = $_SESSION['spId'];
	$user_id = $_SESSION['ruId'];
	
	$query = "SELECT * FROM profiles WHERE id = :id";
	//echo $query;	
	$db = Database::getDb();
	$pdost = $db->prepare($query);
	$pdost->bindParam(":id", $profile_id);
	$profile = $pdost->execute();
	$profile = $pdost->fetch(PDO::FETCH_OBJ);


	/****************STATUS******* */
	$s = new Status();
	$statuss =  $s->getAllStatus($db);

	$c=new Comment();
	$p = new Profile();
	if(isset($_POST['comment']))
	{
		$c->addComments($_POST['comment'], $_POST['status_id'], $profile_id,  $db); 
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
		<div class="col-md-3 homepage-left-sidebar">
			<div class="card text-center">
				<div class="card-header homepage-left-sidebar-header">
					<div class="dev-profile-contatiner" style="margin:0 auto;top:30px;">
						<div class="profile-avatar-circle">
							<span class="profile-initials"><?php echo $firstChar . $secChar ?></span>
						</div>
					</div>
				</div>
				<div class="card-body text-center">
					<hr>
					<a href="../userProfile/user-profile.php" class="text-center" style="font-weight:bold; font-size:20px; text-transform:uppercase"><?php echo $profile->fname . " " . $profile->lname; ?></a>
					<hr>
					<p>200 FRIENDS</p>
				</div>
				<div class="card-footer text-muted">
					<a href="../userProfile/user-profile.php" class="" style="color: #E74C3C;font-weight:bold;">View Profile</a>
				</div>
			</div>
		</div>

		<!--CENTER homepage PROFILE-->
		<div class="col-md-5 homepage-profile">
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
		<!--RIGHT SIDEBAR PROFILE-->
		<div class="col-md-3 homepage-right-sidebar">

			<!--FRIENDS SUGGESTION SIDEBAR-->
			<div class="sidebar-right-height">
				<h5 class="sidebar-h5">Friend Suggestions</h5>
			</div>
			<!--MENTORS SUGGESTION SIDEBAR-->
			<div class="sidebar-right-height">
				<h5 class="sidebar-h5">Mentors Suggestions</h5>
			</div>
			<!--TUTORIALS/VIDEOS ADS SIDEBAR-->
			<div class="sidebar-right-height">
				<h5 class="sidebar-h5">Banner Ads</h5>
			</div>
		</div>
	</div>
</div>
<?php require_once INCLUDES_USERPROFILE_PATH . "/experience-modal.php";?>
<?php require_once INCLUDES_USERPROFILE_PATH . "/education-modal.php";?>

<?php
require_once 'footer.php';

?>

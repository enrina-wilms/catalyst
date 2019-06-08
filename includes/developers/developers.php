<?php
require_once '../../config.php';
require_once 'header.php';
require_once MODELS_PATH . "/database.php";
require_once MODELS_PROFILE_PATH . "/user-profile.php";



//TO DISPLAY THE LIST OF THE Profile STORED IN THE DATABASE
$db = Database::getDb();
$profileObj = new Profile();
$list = $profileObj->getAllProfile($db);


?>

<div class="container-fluid mt-4">
	<div class="row">

<!--		<div class="card-deck" style="width:100%;">-->
		<?php require_once INCLUDES_DEVELOPER_PATH . "/list-developers.php";  ?>

<!--		</div>-->
		</div>
	</div>
	<br>
	<br>
	<?php
require_once 'footer.php';

?>

<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$db = Database::getDb();
	$s = new Experience();
	$profile= $s->getExperienceById($id, $db);
	

}
?>
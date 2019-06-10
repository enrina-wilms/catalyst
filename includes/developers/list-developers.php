<?php  
echo $_GET['id'];
foreach($list as $profile) {	
	
//	//DATE WHEN THE profile WAS CREATED
//	$datePosted = date('l, F d, Y', strtotime($profile->date_post));
//	
	//GETTING FIRSTNAME AND LASTNAME FOR USERS NAME AND INITIALS TO BE DISPLAY SO USER WILL KNOW WHO OWNS THE POSTS
	$fName = $profile->fname;
	$lName = $profile->lname;
	
	/*THIS PART WILL ACT LIKE AND AVATAR FOR POSTED profile
	 *FIRST LETTER OF THE FIRSTNAME AND LASTNAME OF THE USER WILL
	 *BE TAKEN AND DISPLAY IT*/
	
	$firstChar = mb_substr($fName, 0, 1, "UTF-8");
	$secChar = mb_substr($lName, 0, 1, "UTF-8");
	
	
	
echo '<div class="dev-container">'
.'<div class="card dev-card">'
.'<div class="card-header dev-header">'	
. '<div class="dev-avatar-circle">'
. '<span class="dev-initials">' . $firstChar . $secChar . '</span>'
. '</div>'
//.'<div class="dev-circle"></div>'
.'</div>'
.'<h3 class="dev-h3">' . $profile->fname . ' ' . $profile->lname . '</h3>'
.'<p class="text-center">' . $profile->position . '</p>'
.'<div class="card-body dev-card-body">'
.'<hr>'
.'<a href="?id='.$profile->id.'" class="add-friend">Add Friend</a>'
.'<br>'
.'<a href="#" class="">Message</a>'
.'</div>'
.'<div class="card-footer dev-footer">'
.'<a href="profile.php?id=' . $profile->id . '" class="" style="color: #E74C3C;font-weight:bold;">View Profile</a>'
.'</div>'
.'</div>'
.'</div>';


}

//EOF
<?php  
foreach($list as $profile) {	
	
	//GETTING FIRSTNAME AND LASTNAME FOR USERS NAME AND INITIALS TO BE DISPLAY SO USER WILL KNOW WHO OWNS THE POSTS
	$fullName = ucfirst($profile->fname) .' '. ucfirst($profile->lname);
	
	$fName = $profile->fname;
	$lName = $profile->lname;
	
	/*THIS PART WILL ACT LIKE AND AVATAR FOR POSTED profile
	 *FIRST LETTER OF THE FIRSTNAME AND LASTNAME OF THE USER WILL
	 *BE TAKEN AND DISPLAY IT*/
	
	$firstChar = mb_substr($fName, 0, 1, "UTF-8");
	$secChar = mb_substr($lName, 0, 1, "UTF-8");
	

    echo
    '<div class="col-md-3 mt-4">
        <div class="card text-center">
            <div class="card-header main-left-sidebar-header">
                <div class="dev-profile-contatiner" style="margin:0 auto;top:30px;">
                    <div class="profile-avatar-circle">
                        <span class="profile-initials">'.$firstChar.$secChar.'</span>
                    </div>
                </div>	
            </div>
            <div class="card-body text-center">
                <a href="../developers/profile.php?id='.$profile->id.'"><h4>'.ucfirst($fName). ' '. ucfirst($lName).'</h4></a>
                <p class="mt-n1 mb-3 mentor-title">'.$profile->position.'</p>
                <a data-id="'.$profile->id.'" class="add-friend">Add Friend</a>
                <hr>
                <h6 class="mentor-num mb-1">Friends</h6>
                <span>1000</span>
                <hr>
                <p class="mt-3"><a href="../developers/profile.php?id='.$profile->id.'" class="mentor-profile">View Profile</a></p>
            </div>
        </div>
    </div>
    <!--end col-->';	
	
	
	
	
//echo '<div class="dev-container">'
//.'<div class="card dev-card">'
//.'<div class="card-header dev-header">'	
//. '<div class="dev-avatar-circle">'
//. '<span class="dev-initials">' . $firstChar . $secChar . '</span>'
//. '</div>'
////.'<div class="dev-circle"></div>'
//.'</div>'
//.'<h3 class="dev-h3">' . $profile->fname . ' ' . $profile->lname . '</h3>'
//.'<p class="text-center">' . $profile->position . '</p>'
//.'<div class="card-body dev-card-body">'
//.'<hr>'
//.'<a href="#" class="">Add Friend</a>'
//.'<br>'
//.'<a href="#" class="">Message</a>'
//.'</div>'
//.'<div class="card-footer dev-footer">'
//.'<a href="profile.php?id=' . $profile->id . '" class="" style="color: #E74C3C;font-weight:bold;">View Profile</a>'
//.'</div>'
//.'</div>'
//.'</div>';


}

//EOF
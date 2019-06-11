<?php 
foreach($statuss as $status){
	$profile = $p->getProfileById($status->profile_id, $db);
//	echo '<div class="status-container"><h5>'. $status->message .'<strong> by ' . $profile->fname.'</strong></h5></div>' .
//	'<div class="comment-section">'.
//	'<label>Comment: </label>'.
//	'<form action = "" method = POST >'.
//		'<input type="hidden" name= "status_id" value ="' . $status->id . '" />'.
//		'<input type="text" class="form-control" name="comment" />'.
//	'</form>';
//	$c = new Comment();
//	$statusComments =  $c->getCommentsByStatusId($status->id, Database::getDb());
//	//var_dump($statusComments);
//	if($statusComments)
//	{
//		echo '<ul class="list-group list-group-flush comment-list">';
//		foreach($statusComments as $statusComment)
//		{
//			$profile = $p->getProfileById($statusComment->profile_id, $db);
//			//echo $blogcomment;
//				echo '<li class="list-group-item comment">' . $statusComment->comment . '<strong id="response"> by ' . $profile->fname . '</strong></li>';
//		}
//		echo '</ul></div></div>';
//	}
//	else
//	{
//		'</div></div>' ;
//	}
//
//} 


//DATE WHEN THE STATUS WAS CREATED
	$datePosted = date('l, F d, Y', strtotime($status->status_date));
	
	//GETTING FIRSTNAME AND LASTNAME FOR USERS NAME AND INITIALS TO BE DISPLAY SO USER WILL KNOW WHO OWNS THE POSTS
	$fName = $profile->fname;
	$lName = $profile->lname;
	
	/*THIS PART WILL ACT LIKE AND AVATAR FOR POSTED STATUS
	 *FIRST LETTER OF THE FIRSTNAME AND LASTNAME OF THE USER WILL
	 *BE TAKEN AND DISPLAY IT*/
	
	$firstChar = mb_substr($fName, 0, 1, "UTF-8");
	$secChar = mb_substr($lName, 0, 1, "UTF-8");
	
	
	
	echo '<div class="card text-center status-container">'
	.'<div class="card-header text-left status-headbg">'
	. '<div class="status-avatar-circle">'
	. '<span class="status-initials">' . $firstChar . $secChar . '</span>'
	. '</div>'
	. '<div class="status-userInfo">' . '<span class="status-userName">' . $fName . " " . $lName
	. '</span>'
	. '<span class="status-date"><i class="fas fa-clock"></i>&nbsp;'
	. $datePosted
	. '</span>' 
	. '</div>'
	. '</div>'
	.'<div class="card-body status-card-body">'
	. '<span class="status-content">' . $status->message . '</span>'
	.'</div>'
	. '<div class="status-settings mr-auto">'
		
	.'<div class="dropdown">'
	.'<a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
	. '<i class="fas fa-ellipsis-h"></i>'
	.'</a>'
	.'<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
//	if($status->user_id == $_SESSION['uid']) {
		
	echo '<a class="dropdown-item">'
	. '<input type="hidden" value="' . $status->id . '" name="id"'
	. 'class="statusBtn"' . '/>'
	. '<button class="btn statusBtn status-actn-btn" type="submit" value="Update Status" id="update" name="updateBtn" data-toggle="modal" data-target="#updateModal">' . '<i class="fas fa-user-edit"></i>' . '</i>&nbsp; Edit Status</button>'
	.'</a>'	
		
	.'<a class="dropdown-item" href="">'
	. "<form class='action-btn-style' action='' method='post'>" 
	. "<input type='hidden' value='$status->id' name='id'"
	. 'class="statusBtn"'
	. " />" 
	. '<button class="btn statusBtn status-actn-btn" type="submit" value="Delete Status" name="delStatus">'
	. '<i class="fas fa-trash-alt status-delete"></i>&nbsp; Delete Status'
	. '</button>'
	. "</form>"
	.'</a>';
//	}else{
//		echo '<a class="dropdown-item" href="">'
//		.'Hide Post'
//		
//	.'</a>';
//	}
	echo '</div>'
	.'</div>'
	. '</div>'
	.'<div class="card-footer status-headbg">';
	
	 echo ' <button class="btn comment-button btn-block" type="button" data-toggle="collapse" data-target="#collapseComments' . $status->id . '" aria-expanded="false" aria-controls="collapseComments">'
   . '<i class="far fa-comments">Comments</i>'
  .'</button>';
	
	echo '<div class="collapse" id="collapseComments' . $status->id . '">
  <div class="card card-body">';
    echo'<br><form action = "" method = POST >'.
		'<input type="hidden" name= "status_id" value ="' . $status->id . '" />'.
		'<input type="text" class="form-control" name="comment" placeholder="enter your comment here..."/>'.
		'</form>';
	
	$c = new Comment();
	$statusComments =  $c->getCommentsByStatusId($status->id, Database::getDb());
	//var_dump($statusComments);
	if($statusComments)
	{
		foreach($statusComments as $statusComment)
		{
			$profile = $p->getProfileById($statusComment->profile_id, $db);
			
			
			echo '<div class="comment-messages text-left">' . '<span class="comment-name">'. $profile->fname . ' ' . $profile->lname . '</span>&nbsp;' . '<span class="comment-message">' . $statusComment->comment . '</span>' . '</div>';
			//echo $blogcomment;
//				echo '<li class="list-group-item comment">' . $statusComment->comment . '<strong id="response"> by ' . $profile->fname . '</strong></li>';
		}
	}
echo '  </div>
</div>';
	
	
	
	//COMMENT INPUT TEXT FORM
//	echo'<form action = "" method = POST >'.
//		'<input type="hidden" name= "status_id" value ="' . $status->id . '" />'.
//		'<input type="text" class="form-control" name="comment" placeholder="enter your comment here..."/>'.
//		'</form>';
//	
//	$c = new Comment();
//	$statusComments =  $c->getCommentsByStatusId($status->id, Database::getDb());
//	//var_dump($statusComments);
//	if($statusComments)
//	{
//		foreach($statusComments as $statusComment)
//		{
//			$profile = $p->getProfileById($statusComment->profile_id, $db);
//			
//			
//			echo '<div class="comment-messages text-left">' . '<span class="comment-name">'. $profile->fname . ' ' . $profile->lname . '</span>&nbsp;' . '<span class="comment-message">' . $statusComment->comment . '</span>' . '</div>';
//			//echo $blogcomment;
////				echo '<li class="list-group-item comment">' . $statusComment->comment . '<strong id="response"> by ' . $profile->fname . '</strong></li>';
//		}
//	}

	
	
	
	
	
//	echo '<div class="status-action-btn">'
//	. '<button class="btn statusBtn status-actn-btn" type="submit" value="Favourite Status" name="favourite">' . '<i class="far fa-thumbs-up"></i>' . '</i>&nbsp; Favourite</button>'
//	. "</div>";
//	echo '<div class="status-action-btn">'
//	. '<button class="btn statusBtn status-actn-btn" type="submit" value="Comment Status" name="comment" data-toggle="modal" data-target="#CommentsModalCenter">' . '<i class="far fa-comments"></i>' . '</i>&nbsp; Comment</button>'
//	. "</div>";
//	echo '<div class="status-action-btn">'
//	. '<button class="btn statusBtn status-actn-btn" type="submit" value="Comment Status" name="comment">' . '<i class="far fa-share-square"></i>' . '</i>&nbsp; Share</button>'
//	. "</div>";
		
	echo "</div>"
	. '</div>';

}

?>
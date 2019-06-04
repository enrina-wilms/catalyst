<?php  

foreach($listExp as $exp) {	
$sDate = date('F Y', strtotime($exp->start_date));
$eDate = date('F Y', strtotime($exp->end_date));
	
echo 
'<div class="card-body main-cardBody">'
. '<div class="d-inline">'
. '<h5 class="card-title main-h5 d-inline">' . $exp->position. '</h5>'
. '</div>'
. '<div class="main-modal-button">'
//EDIT BUTTON
//. '<button type="button" class="btn" data-toggle="modal" data-target="#editExperience">'
//. '<i class="fas fa-pen"></i>'
//. '</button>'
	
. "<form class='action-btn-style' action='' method='post'>" 
. "<input type='hidden' value='$exp->id' name='id'"
. 'class="statusBtn"'
. " />" 
. '<button class="btn" type="submit" value="Delete Experience" name="delExp">'
. '<i class="fas fa-trash"></i>'
. '</button>'
. "</form>"	

. '</div>'
. '<p class="card-text">' . $exp->company . '</p>'
. '<p class="card-text" style="color:#636e72;">' . $sDate . " " . "-" . " " . $eDate . '</p>'
//. '<p class="card-text">' . $exp->location . '</p>'
. '<hr>'
. '</div>';


}

//EOF
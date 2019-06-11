<?php  

foreach($listEduc as $exp) {	
$sDate = date('F Y', strtotime($exp->start_date));
$eDate = date('F Y', strtotime($exp->end_date));
	
echo '<div class="card-body main-cardBody">'
. '<div class="d-inline">'
. '<h5 class="card-title main-h5 d-inline">' . $exp->school. '</h5>'
. '</div>'
. '<div class="main-modal-button">'
. "<form class='action-btn-style' action='' method='post'>" 
. "<input type='hidden' value='$exp->id' name='id'"
. 'class="statusBtn"'
. " />" 
. '<button class="btn statusBtn status-actn-btn" type="submit" value="Delete Education" name="delEduc">'
. '<i class="fas fa-trash"></i>'
. '</button>'
. "</form>"
. '</div>'

. '<p class="card-text">' . $exp->degree . ", " . $exp->field . '</p>'
. '<p class="card-text" style="color:#636e72;">' . $sDate . " " . "-" . " " . $eDate . '</p>'
. '<p class="card-text mt-1 ml-2" style="font-style:italic;color:#636e72;">' . $exp->description . '</p>'
. '<hr>'
. '</div>';


}

//EOF
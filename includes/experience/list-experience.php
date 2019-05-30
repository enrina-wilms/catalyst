<?php  

foreach($listExp as $exp) {	
$sDate = date('F Y', strtotime($exp->start_date));
$eDate = date('F Y', strtotime($exp->end_date));
	
echo '<div class="card-body main-cardBody">'
. '<div class="d-inline">'
. '<h5 class="card-title main-h5 d-inline">' . $exp->position. '</h5>'
. '</div>'
. '<div class="main-modal-button">'
. '<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">'
. '<i class="fas fa-pen"></i>'
. '</button>'
. '</div>'
. '<p class="card-text">' . $exp->company . '</p>'
. '<p class="card-text">' . $sDate . " " . "-" . " " . $eDate . '</p>'
//. '<p class="card-text">' . $exp->location . '</p>'
. '<hr>'
. '</div>';


}

//EOF
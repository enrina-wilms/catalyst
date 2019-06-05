<?php

include '../../config.php';
include 'header.php';

?>
<div class="container-fluid mt-4">
    <div class="row">
        <?php require_once 'list-mentors.php'; ?>  
    </div>
    <br/><br/>
    <?php require_once 'apprentice-modal.php'; ?>
</div>
<script src="../../js/alertifyjs/alertify.js"></script>
<?php require_once 'footer.php'; ?>
<?php

require_once '../../config.php';
require_once 'header.php';

?>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-3 chat-box chat-users">
            <?php require_once '../mentorship/list-user-apprentice.php';?>
        </div>
        <div class="col-sm-8 chat-box form-group">
            <div class="row messages"><?php require_once 'chat.php';?></div>
            <div class="row vbottom">
                <input type="text" class="form-control entry" placeholder="Type a message...">
            </div>
        </div>
    </div>
</div>


<?php require_once 'footer.php'; ?>
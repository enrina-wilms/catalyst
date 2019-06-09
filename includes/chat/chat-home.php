<?php

require_once '../../config.php';
require_once 'header.php';

session_start();
if(isset($_GET['id'])){
    $_SESSION["id"] = $_GET['id'];
}

?>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-3 chat-box chat-users">
            <?php require_once '../mentorship/list-user-apprentice.php';?>
        </div>
        <div class="col-sm-8 chat-box form-group chat-m">
			<div class="chat-message-container">
                <div class="row messages"><?php require_once 'chat.php';?></div>
			</div>
			<div class="row input-group mb-3 chat-input">
				<input type="text" class="form-control entry form-control-chat" placeholder="Type a message..." aria-label="message" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn chat-button" type="button"><i class="fas fa-paper-plane"></i></button>
				</div>
			</div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
<?php
require_once '../../session.php';
require_once '../../models/database.php';
require_once '../../models/chat/Chat.php';

@session_start();
$dbcon = Database::getDb();

if(isset($_SESSION['id'])){
    $friendId = $_SESSION['id'];
}
if(isset($_POST['method']) && isset($_SESSION['id'])){
    $chat = new Chat();
    $method = trim($_POST['method']);

    if($method === 'fetch'){
        $messages = $chat->fetchMessage($dbcon);

        if(empty($messages) === true){
            echo 'No message';
        }else{
            //add the messages inside the echo here
            foreach($messages as $message){
                if($message->sender == $_SESSION['spId'] /*active user*/ && $message->receiver == $friendId){
                    echo
                    '<div class="row chat-user mt-2 mb-2 mr-3">
                    <span class="chat-msg">' . $message->message . '</span>
                    </div>';
                }
                if($message->sender == $friendId  && $message->receiver == $_SESSION['spId']){
                    echo
                    '<div class="row chat-friend mt-2 mb-2 mr-3 ml-1">
                    <span class="chat-msg">' . $message->message . '</span>
                    </div>';
                }
            }
        }
    }else if($method === 'throw'){
        $message = trim($_POST['message']);

        $chat->throwMessage($dbcon, $_SESSION['spId'], $friendId, $message);
    }

}
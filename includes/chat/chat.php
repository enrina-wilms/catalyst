<?php

require_once '../../models/database.php';
require_once '../../models/chat/Chat.php';

session_start();
$dbcon = Database::getDb();
$friendId = $_SESSION['id'];
if(isset($_POST['method'])){
    $chat = new Chat();
    $method = trim($_POST['method']);

    if($method === 'fetch'){
        $messages = $chat->fetchMessage($dbcon);

        if(empty($messages) === true){
            echo 'No message';
        }else{
            //add the messages inside the echo here
            foreach($messages as $message){
                if($message->sender == 7 /*active user*/ && $message->receiver == $friendId){
                    echo
                    '<div class="row chat-user mt-2 mb-2 mr-3">
                    <span class="chat-msg">' . $message->message . '</span>
                    </div>';
                }
                if($message->sender == $friendId  && $message->receiver == 7){
                    echo
                    '<div class="row chat-friend mt-2 mb-2 mr-3 ml-1">
                    <span class="chat-msg">' . $message->message . '</span>
                    </div>';
                }
            }
        }
    }else if($method === 'throw'){
        $message = trim($_POST['message']);

        $chat->throwMessage($dbcon, 7, $friendId, $message);
    }

}
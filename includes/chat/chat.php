<?php

require_once '../../models/database.php';
require_once '../../models/chat/Chat.php';

$dbcon = Database::getDb();
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
                echo $message->message.'<br/>';
            }
        }
    }else if($method === 'throw'){
        $message = trim($_POST['message']);

        $chat->throwMessage($dbcon, 1, 2, $message);
    }

}
<?php
require_once '../../session.php';
require_once '../../models/database.php';
require_once '../../models/chat/Chat.php';


$profile_id = $_SESSION['spId'];
$dbcon = Database::getDb();
$chat = new Chat();

$chatReceiver = $chat->listActiveChatReceiver($dbcon, $profile_id);

$friendId = '';
if(isset($_SESSION['id'])){
    $friendId = $_SESSION['id'];
}
foreach($chatReceiver as $row){
    $fullName = ucfirst($row->fname) .' '. ucfirst($row->lname);
    $fName = $row->fname;
    $lName = $row->lname;
    $firstChar = mb_substr($fName, 0, 1, "UTF-8");
    $secChar = mb_substr($lName, 0, 1, "UTF-8");
    
    $active = '';
    if($friendId == $row->id){
        $active = "active-chat";
    }
    echo '<a href="?id='.$row->id.'">
        <div class="row linka '.$active.'">
            <div class="col-sm-2">
                <div class="profile-avatar-circle-mentor ml-n2">
                    <span class="profile-initials-mentor">'.$firstChar . $secChar.'</span>
                </div>
            </div>
            <div class="col-sm-10">
                <h6 class="profile-name-mentor text-left">'.$fullName.'</h6>
            </div>
        </div></a>';
}

<?php
require_once '../../config.php';

require_once MODELS_PATH . "/database.php";
require_once MODELS_LOGIN_PATH . "/user.php";

$db = Database::getDb();
$listUsers = new user();
$usersList = $listUsers->getAllUsers(Database::getDb());

foreach($usersList as $users){
    echo
        "<tr>" .
            "<td> $users->email </td>" .
            "<td> $users->password </td>" .
            "<td> $users->date </td>" .
            "<td> $users->role</td>" .
            "<td>" .
                "<form action='updateUser.php' method='post'>" . 
                    "<input type='hidden' value='$users->id' name='id' />" . 
                    "<input type='submit' value='Update' name='update' />" .
                "</form>" .
            "</td>" .
            "<td>" .
                "<form action='deleteUser.php' method='post'>" . 
                    "<input type='hidden' value='$users->id' name='id' />" . 
                    "<input type='submit' value='Delete' name='delete' />" . 
                "</form>" . 
            "</td>" .
            "<td>" .
                "<form action='userRoles.php' method='post'>" . 
                    "<input type='hidden' value='$users->id' name='id' />" . 
                    "<input type='submit' value='User' name='user' />" . 
                "</form>" .
            "</td>" .
            "<td>" .
                "<form action='userRoles.php' method='post'>" . 
                    "<input type='hidden' value='$users->id' name='id' />" . 
                    "<input type='submit' value='Admin' name='admin' />" . 
                "</form>" .
            "</td>" .
        "</tr>";

}
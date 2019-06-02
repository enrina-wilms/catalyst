<?php

session_start();

// Supposed to unset all of the session variables
//$_SESSION = array();

session_destory();

header("location: login.php");

die();
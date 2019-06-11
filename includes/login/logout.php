<?php

session_start();

// Supposed to unset all of the session variables
$_SESSION = [];

session_destroy();

header("location: ../../index.php");


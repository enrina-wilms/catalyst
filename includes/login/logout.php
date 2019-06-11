<?php

session_start();

// Supposed to unset all of the session variables
$_SESSION = [];

session_destroy();

<<<<<<< HEAD
header("location: ../../index.php");
=======

header("location: ../../index.php");
>>>>>>> 3c174043f31aecf35647ebb00f8bb0f116e42bbe

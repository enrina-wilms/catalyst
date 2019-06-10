<?php

session_start();

$id = $_SESSION['uId'];

$profile = new Profile();

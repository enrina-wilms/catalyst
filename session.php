<?php 

session_start();

if (empty($userid)){
    header("location:../../index.php");   
}
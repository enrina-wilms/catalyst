<<<<<<< HEAD
<?php

session_start();

$id = $_SESSION['uId'];

$profile = new Profile();
=======
<?php 

session_start();

if (empty($userid)){
    header("location:../../index.php");   
}
>>>>>>> 3397a1275298c9df7454fbdc45a41efc58945572

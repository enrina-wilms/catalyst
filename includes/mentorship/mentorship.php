<?php

include '../../config.php';
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mentorship</title>
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="row">
            <?php require_once 'list-mentors.php'; ?>  
        </div>
        <br/><br/>
    </div>
</body>
</html>
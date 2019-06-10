<?php
require_once '../../config.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= $csspath ?>style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../js/alertifyjs/css/alertify.css">
        <link rel="stylesheet" href="../../js/alertifyjs/css/themes/default.css">
        <title>Catalyst</title>
    </head>

    <body>
    <div class="container">
        <div class="row">
			
			
			<?php
            require_once 'login.php';
            require_once 'register.php';

			?>
			</div>
            
        </div>
    </div>
    </body>
</html>

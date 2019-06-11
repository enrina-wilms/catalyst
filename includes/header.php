<?php
require_once "../../config.php";
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
	<header id="header">
		<nav class="navbar navbar-expand-lg navbar-dark header-bg">
			<div class="container">
				<a class="navbar-brand" href="../homepage/homepage.php"><img src="../../images/logo.png" style="height:40px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<form class="form-inline my-2 my-lg-0">
						<div class="input-group">
							<input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2"  style="width:300px;">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="../homepage/homepage.php">home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../mentorship/mentorship.php">mentorship</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../developers/developers.php">developers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../chat/chat-home.php">messenger</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-cog"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../userProfile/user-profile.php">My Profile</a>
								<a class="dropdown-item" href="#">Privacy Settings</a>
								<a class="dropdown-item" href="../login/logout.php">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

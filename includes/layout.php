<?php
require_once 'header.php';

?>

<br>
<br>
<div class="container">
	<div class="row">

		<!--LEFT SIDEBAR PROFILE-->
		<div class="col main-left-sidebar">
			<div class="card text-center">
				<div class="card-header main-left-sidebar-header">
					<div id="circle"></div>
				</div>
				<div class="card-body text-left">
					<hr>
					<a href="#" class="">Become a Mentor</a>
					<a href="#" class="">Become my Apprentice</a>
					<a href="#" class="">Add Friend</a>
					<a href="#" class="">Message</a>
					<hr>
					<p>Portfolio:</p>
					<a href="#" class="">www.potfolio.com</a>
					<p>Email:</p>
					<a href="#" class="">email@gmail.com</a>
					<p>Phone:</p>
					<a href="#" class="">+1 (416) - 234 - 2345</a>
				</div>
				<div class="card-footer text-muted">
					<a href="#" class="">View Profile</a>
				</div>
			</div>
		</div>

		<!--CENTER MAIN PROFILE-->
		<div class="col-6 main-profile">
			<h2 class="main-h2">adam thomas<span class="badge badge-pill badge-primary ml-3">Mentor</span></h2>
			<span class="main-devposition">full stack web developer at my company</span>
			<span class="main-location"> Toronto, Canada</span>
			<br>
			<!--PROFILE TABS-->

			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link main-tablink" id="nav-feeds-tab" data-toggle="tab" href="#nav-feeds" role="tab" aria-controls="nav-feeds" aria-selected="true">Feeds</a>
					<a class="nav-item nav-link main-tablink" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
					<a class="nav-item nav-link main-tablink" id="nav-friends-tab" data-toggle="tab" href="#nav-friends" role="tab" aria-controls="nav-friends" aria-selected="false">Friends</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">

				<!--FEEDS TAB CONTAINER-->
				<div class="tab-pane fade show active" id="nav-feeds" role="tabpanel" aria-labelledby="nav-feeds-tab">

					<!--EXPERIENCE SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header">
							<div class="d-inline">
								<h3 class="d-inline">Experience</h3>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-plus"></i>
								</button>
							</div>
						</div>

						<!--LIST OF EXPERIENCE-->
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Full Stack Developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Front-End Web developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						<br>
					</div>

					
					<!--EDUCATION SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header">
							<div class="d-inline">
								<h3 class="d-inline">Education</h3>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-plus"></i>
								</button>
							</div>
						</div>

						<!--LIST OF EDUCATION-->
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Full Stack Developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Front-End Web developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						<br>
					</div>
	
					<!--END OF EXPERIENCE AND EDUCATION -->

				</div>

				<!--ABOUT TAB CONTAINER-->
				<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

									<!--EXPERIENCE SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header">
							<div class="d-inline">
								<h3 class="d-inline">Experience</h3>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-plus"></i>
								</button>
							</div>
						</div>

						<!--LIST OF EXPERIENCE-->
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Full Stack Developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Front-End Web developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						<br>
					</div>

					
					<!--EDUCATION SECTION-->
					<div class="card main-profile-card">

						<!--CARD HEADER-->
						<div class="card-header">
							<div class="d-inline">
								<h3 class="d-inline">Education</h3>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-plus"></i>
								</button>
							</div>
						</div>

						<!--LIST OF EDUCATION-->
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Full Stack Developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						
						<div class="card-body main-cardBody">
							<div class="d-inline">
								<h5 class="card-title main-h5 d-inline">Front-End Web developer</h5>
							</div>
							<div class="main-modal-button">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-pen"></i>
								</button>
							</div>
							<p class="card-text">Flywheel Stategic</p>
							<p class="card-text">Jul 2018 - August 2019</p>
							<p class="card-text">Toronto, Canada</p>
							<hr>
						</div>
						<br>
					</div>
	
					<!--END OF EXPERIENCE AND EDUCATION -->

				</div>


				<!--FRIENDS TAB CONTAINER-->
				<div class="tab-pane fade" id="nav-friends" role="tabpanel" aria-labelledby="nav-friends-tab">



				</div>
			</div>
		</div>

		<!--RIGHT SIDEBAR PROFILE-->
		<div class="col main-right-sidebar" style="background:green;">
			3 of 3
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<?php
require_once 'footer.php';

?>

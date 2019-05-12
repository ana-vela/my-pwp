<!DOCTYPE html>

	<html lang="en">
	<head>
		<?php require_once("lib/head-utils.php");?>
	</head>

	<!-- begin header and navbar-->
	<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>


				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Home</a></li>
						<li><a href="#about">About Me</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#contact">Let's Connect</a></li>
					</ul>
					<div class="navbar-left">
						<a href="https://github.com/ana-vela">
							<span class="fa fa-github-square fa-3x" aria-hidden="true"></span></a>
						<a href="https://www.linkedin.com/in/ana-vela">
						<span class="fa fa-linkedin-square fa-3x" aria-hidden="true"></span></a>
						<a href="https://twitter.com/AnaVelaWebDev">
						<span class="fa fa-twitter-square fa-3x" aria-hidden="true"></span></a>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<!-- begin name and title section -->
	<div class="welcome">
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-sm-12">
					<div class="jumbotron vertical-center">
						<h1>Ana Vela</h1>
						<h2>Web Developer</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- about me section -->
	<section id="about">
		<div class="container-fluid center-fixed">
			<div class="row">
				<div class="col-md-6">
					<h1>About Me</h1>
					<p>After coming up with ideas for websites and looking for resources to build them, I discovered that I would like to become a professional in the web development field. With this passion, I took the necessary steps to complete an immersive, instructor-led, mobile first, full-stack web development coding bootcamp where I enjoyed problem solving and taking ideas from the preliminary planning stages to completion while working with an agile development team. It is exhilarating to be part of the creative process in building something from scratch. When I am not coding, you can find me reading fiction, learning guitar chords, or enjoying the outdoors in beautiful Albuquerque, New Mexico.</p>
				</div>
				<div class="col-md-6">
					<img src="../img/keyboard.jpg" alt="table" class="img-responsive">
				</div>
			</div> <!-- /.row -->
		</div> <!-- container-fluid -->
	</section>


	<!-- Portfolio Grid Section -->
	<section id="portfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="text-center">
					<h1 class="section-heading">Portfolio</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6 portfolio-item">
					<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
						<img src="../img/growify-splash.png" class="img-responsive" alt="growify app">
					</a>
				</div>
				<div class="col-xs-12 col-md-6 portfolio-caption">
					<h4>Growify</h4>
					<p>Growify is a web application for home gardeners. Users can get planting information based on weather data as well as local climate growing conditions. By selecting specific herbs and plants, users can create personalized garden lists in order to receive tailored growing information to improve their gardening decisions.</p>
					<p>Languages and Frameworks: HTML5, CSS3, Bootstrap, MySQL, PHP, and Angular 2.</p>
				</div>
			</div> <!-- /.row -->
		</div> <!-- container-fluid-->
	</section>

	<!--Begin Contact Form-->
	<section id="contact">
		<div class="container-fluid">
		<div class="row">
			<div class="text-center">
				<h1 class="section-heading">Let's Connect</h1>
			</div>
		</div>
		<form id="contact-form" method="POST" action="php/mailer.php"  novalidate>
			<div class="form-group">
				<label for="name">Name <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
				</div>
			</div>
			<div class="form-group">
				<label for="message">Message <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-comment" aria-hidden="true"></i>
					</div>
					<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
				</div>

		</div>

			<!-- reCAPTCHA -->
			<div class="col-md-3">
			<div class="g-recaptcha" data-sitekey="6Lfglg0UAAAAAKhR31tKdglArDc9FPGbGn6zB9ap"></div>

			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</div>
		</form>

		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>
		</div>
	</section>

	<footer class="footer text-center">
		<div class="container">
			<div>
				&copy;Ana Vela 2019
			</div>
		</div>
	</footer>
	</body>
</html>

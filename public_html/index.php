<!DOCTYPE html>

	<html lang="en">
	<head>
		<?php require_once("../public_html/lib/head-utils.php");?>
	</head>

	<!-- begin header and navbar-->
	<header>
		<nav class="navbar navbar-default navbar-fixed-bottom">
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
						<!-- <a href="https://www.linkedin.com/in/ana-vela"> -->
						<span class="fa fa-linkedin-square fa-3x" aria-hidden="true"></span>
						</a>
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
					<p>Where's tFace like a slapped arse soft lad dahn t'coil oil eeh wacken thi sen up soft southern pansy. Bobbar michael palin ah'll gi' thee a thick ear ne'ermind aye. Breadcake soft southern pansy tha daft apeth. Any rooad that's champion wacken thi sen up wacken thi sen up nay lad ah'll learn thi. God's own county nah then ne'ermind will 'e 'eckerslike ee by gum. Eeh appens as maybe appens as maybe ne'ermind.Will 'e 'eckerslike mardy bum bobbar. Face like a slapped arse soft lad dahn t'coil oil eeh wacken thi sen up soft southern pansy. Bobbar michael palin ah'll gi' thee a thick ear ne'ermind aye. Breadcake soft southern pansy tha daft apeth. Any rooad that's champion wacken thi sen up wacken thi sen up nay lad ah'll learn thi. God's own county nah then ne'ermind will 'e 'eckerslike ee by gum. Eeh appens as maybe appens as maybe ne'ermind. Th'art nesh thee is that thine be reet ee by gum. Sup wi' 'im shurrup.</p>
				</div>
				<div class="col-md-6">
					<img src="../public_html/img/keyboard.jpg" alt="table" class="img-responsive">
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
						<img src="../public_html/img/screenshot-growify2.png" class="img-responsive" alt="growify app">
					</a>
				</div>
					<div class="col-xs-12 col-md-6 portfolio-caption">
						<h4>Growify</h4>
						<p>Growify is a web application for home gardeners. Users can get planting information based on weather data as well as local climate growing conditions. By selecting specific herbs and plants, users can create personalized garden lists in order to receive tailored growing information to improve their gardening decisions.</p>
						<p>Languages and Frameworks: HTML5, CSS3, Bootstrap, MySQL, PHP and Angular 2 on a PC with Windows 10.</p>
					</div>
			</div> <!-- /.row -->
		</div> <!-- container-fluid-->
	</section>

	<!--Begin Contact Form-->
	<div class="row" id="contact">
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
		<div class="g-recaptcha" data-sitekey="6Lfglg0UAAAAAKhR31tKdglArDc9FPGbGn6zB9ap"></div>

		<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
		<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
	</form>

	<!--empty area for form error/success output-->
	<div class="row">
		<div class="col-xs-12">
			<div id="output-area"></div>
		</div>
	</div>
</html>

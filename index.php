<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--		Google Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

<!--		Font Awesome JavaScript-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

		<!-- Custom JS -->
		<script src="script.js"></script>

		<title>About Me</title>
	</head>
	<body>



		<nav class="navbar fixed-bottom navbar-dark">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item m-5">
						<button class="btn nav-link text-white" data-toggle="modal" data-target="#myModal"><i class="fas fa-envelope fa-3x"></i></button>
					</li>
				</ul>
		</nav>


		<div class="modal animated fadeIn" id="myModal">
			<div class="modal-dialog modal-lg border" id="myModal">
				<div class="modal-content">
					<div class="modal-header">
						<div class="row m-2 w-100">
							<div class="col">
								<h1>Contact</h1>
							</div>
							<div class="col text-right">
								<a class="mx-2" target="_blank" href="https://www.linkedin.com/in/ken-keyes/"><i class="fab fa-linkedin fa-3x"></i></a>
								<a class="mx-2" target="_blank" href="https://github.com/KKeyes1"><i class="fab fa-github-square fa-3x"></i></a>
								<a class="mx-2" data-dismiss="modal" href="#"><i class="fas fa-times fa-3x"></i></a>
							</div>
						</div>
					</div>
					<div class="modal-body">


						<form class="form-horizontal" role="form" method="post" action="php/mailer.php" id="contactForm">
							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">
									<span class="required">*</span> Name:</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="First & Last" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label">
									<span class="required">*</span> Email: </label>
								<div class="col-sm-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="you@domain.com" required>
								</div>
							</div>
							<div class="form-group">
								<label for="subject" class="col-sm-3 control-label">
									<span class="required">*</span> Subject:</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-3 control-label">
									<span class="required">*</span> Message:</label>
								<div class="col-sm-12">
									<textarea name="message" rows="4" required class="form-control" id="message" placeholder="Comments"></textarea>
								</div>
							</div>
							<div class="form-group px-3">
								<span class="required">* Required</span>
								<div class="row">
									<div class="col-6">
										<div class="g-recaptcha" data-theme="dark" data-sitekey="6LdL90cUAAAAAAAVEvxsqj4n0BT2MpfG1rJjcsbu"></div>
									</div>
									<div class="col-6 text-right">
										<input type="submit" class="btn-lg btn-primary p-4" value="Send" name="enter" id="sendButton">
									</div>
								</div>
							</div>
						</form>
						<div class="modal-footer">
							<div id="success-output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<div class="jumbotron m-0 rounded-0">
			<div class="container h-100 d-flex text-white">
				<div class="my-auto mx-auto">
					<div class="text-center">
						<h3>Who is Ken?</h3>
						<p>To learn about me, press Play.</p>
					</div>
					<div class="text-center">
						<input type="button" class="btn btn-lg btn-default button-glow" id="play" onclick="location.href ='https://bootcamp-coders.cnm.edu/~kkeyes1/javascript-about-me/php/';" value="PLAY"></input>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
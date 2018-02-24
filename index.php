<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>


		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

		<!-- Custom JS -->
		<script src="script.js"></script>

		<title>About Me</title>
	</head>
	<body>



		<nav class="navbar navbar-expand-md fixed-bottom navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item m-5">
						<button class="btn nav-link border" data-toggle="modal" data-target="#">Learn More</button>
					</li>
					<li class="nav-item m-5">
						<button class="btn nav-link border" data-toggle="modal" data-target="#myModal">Contact</button>
					</li>
				</ul>
			</div>
		</nav>


		<div class="modal animated fadeIn" id="myModal">
			<div class="modal-dialog modal-lg border">
				<div class="modal-content">
					<div class="modal-header">
						<div class="row">
							<div class="col-11">
								<h3 class="">Get In Touch</h3>
							</div>
							<div class="col-1">
								<button type="button" class="btn close" data-dismiss="modal" title="Close"><i class="fas fa-window-close"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="modal-body">


						<form class="form-horizontal" role="form" method="post" action="">
							<span class="required">* Required</span>
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
									<textarea name="subject" rows="4" required class="form-control" id="subject" placeholder="Subject"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-3 control-label">
									<span class="required">*</span> Message:</label>
								<div class="col-sm-12">
									<textarea name="message" rows="4" required class="form-control" id="message" placeholder="Comments"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
									<button type="submit" id="submit" name="submit" class="btn-lg btn-primary">SUBMIT</button>
									<a href="https://www.linkedin.com/in/ken-keyes/"><i class="fab fa-linkedin fa-3x"></i></a>
									<a href="https://github.com/KKeyes1"><i class="fab fa-github-square fa-3x"></i></a>
								</div>
							</div>
						</form>
					</div>
<!--					<div class="modal-footer">-->
<!--						<button class="btn btn-sm close" type="button" data-dismiss="modal"></button>-->
<!--					</div>-->
				</div>
			</div>
		</div>



		<div class="jumbotron m-0">
			<div class="container h-100 d-flex">
				<div class="my-auto">
						<input type="button" class="btn btn-lg btn-default button-glow" data-toggle="collapse" data-target="#collapseExample" id="generate" onclick="generate()" value="Who Is Ken?"></input>
					<div class="collapse" id="collapseExample">
						<div class="card card-body">
							<div id="whoAmI">
								<p>I’m a <span id="jobTitle"></span>.</p>
								<p>I help <span id="colleagues"></span> make <span id="products"></span>.</p>
								<p>When I’m not <span id="jobTitleVerb"></span> you can find me <span id="hobbies"></span>.</p>
								<p>Want to work together? I’d love to hear from you.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
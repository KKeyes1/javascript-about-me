<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

		<!-- Custom JS -->
		<script src="script.js"></script>

		<title>About Me</title>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
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
<!--				<button type="button" class="btn btn-lg btn-default button-glow" data-toggle="collapse" data-target="#collapseExample" id="generate" onclick="generate()">Who Is Ken?</button>-->
				<input type="button" class="btn btn-lg btn-default button-glow" data-toggle="collapse" data-target="#collapseExample" id="generate" onclick="generate()" value="Who Is Ken?"></input>
			</div>
		</div>
	</body>
</html>
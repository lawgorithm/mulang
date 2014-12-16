<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>mulang</title>
<link rel="icon" type="image/ico" href="assets/images/tempicon.ico" />
<script type="text/javascript"
	src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<!-- <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->
<!-- Latest compiled and minified JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<audio id="mulang-player" autoplay></audio>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button"
					data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="" class="navbar-brand">mulang</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse"
				role="navigation">
				<ul class="nav navbar-nav">
					<li><a><span class="glyphicon glyphicon-play mulang-control"></span></a></li>
				</ul>
			</nav>
		</div>
	</nav>
	<div class="container mulang-message"></div>
	<div class="container noteContainer">
		<div class="btn-group btn-group-justified" role="group"
			aria-label="...">
			<div class="btn-group" role="group">
				<button type="button" id="c" class="btn btn-default btn-lg">C</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="d-flat" class="btn btn-default btn-lg">Db</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="d" class="btn btn-default btn-lg">D</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="e-flat" class="btn btn-default btn-lg">Eb</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="e" class="btn btn-default btn-lg">E</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="f" class="btn btn-default btn-lg">F</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="g-flat" class="btn btn-default btn-lg">Gb</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="g" class="btn btn-default btn-lg">G</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="a-flat" class="btn btn-default btn-lg">Ab</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="a" class="btn btn-default btn-lg">A</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="b-flat" class="btn btn-default btn-lg">Bb</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="b" class="btn btn-default btn-lg">B</button>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
			aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span> <span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="loginModalLabel">Login</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" action="" method="post">
							<div class="form-group">
								<label for="inputUsername" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputUsername"
										placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword"
										placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Sign in</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Login</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Settings Modal -->
		<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Settings</h4>
					</div>
					<div class="modal-body">...</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
	<?php
	$notes = array (
			"a",
			"a-flat",
			"b",
			"b-flat",
			"c",
			"d-flat",
			"d",
			"e-flat",
			"e",
			"f",
			"g-flat",
			"g" 
	);
	
	if (isset ( $_GET ['note'] )) {
		$note = htmlspecialchars ( $_GET ['note'] );
		$i = 0;
		do {
			if ($notes [$i] == $note) {
				echo "<audio id='userNotePlayer' src='assets/{$notes[$i]}-3.wav' type='wav' autoplay></audio>";
			}
		} while ( $notes [$i] != $note && (++ $i < count ( $notes )) );
	}
	?>
</body>
</html>
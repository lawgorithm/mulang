<!-- TODO -->
<!-- Fix modal dialogs for navbar elements on mobile devices -->
<!-- Make login and register pages -->
<!-- Make GET data functionality to play note from web address -->

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

<script>
	$(document).ready(function() {
		$('body').append("<audio id='notePlayer' autoplay='true'></audio>")
		$noteBtn = $(".noteContainer button");
		$noteBtn.click(function() {
			notePath = "assets/" + this.id + "-3.wav";
			$("#notePlayer").attr({src:notePath, type:"audio/vand.wav"});
			//document.getElementById('notePlayer').play();
			$("")			
		});
		$("#horse").click(function() {
			$("#notePlayer").attr('src', "../wash/horse.ogg");
		})
	});
</script>

</head>
<body>
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
					<li><a><span class="glyphicon glyphicon-cog"
							data-toggle="modal" data-target="#settingsModal"></span></a></li>
					<li><a>Getting started</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class="glyphicon glyphicon-user"></span> Sign
							Up</a></li>
					<li data-toggle="modal" data-target="#loginModal"><a><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</nav>
		</div>
	</nav>
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
		</div>
		<div class="btn-group btn-group-justified" role="group"
			aria-label="...">
			<div class="btn-group" role="group">
				<button type="button" id="e-flat" class="btn btn-default btn-lg">Eb</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="e" class="btn btn-default btn-lg">E</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="f" class="btn btn-default btn-lg">F</button>
			</div>
		</div>
		<div class="btn-group btn-group-justified" role="group"
			aria-label="...">
			<div class="btn-group" role="group">
				<button type="button" id="g-flat" class="btn btn-default btn-lg">Gb</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="g" class="btn btn-default btn-lg">G</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" id="a-flat" class="btn btn-default btn-lg">Ab</button>
			</div>
		</div>
		<div class="btn-group btn-group-justified" role="group"
			aria-label="...">
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
		<button id="horse" class="btn btn-lg btn-primary">Horse</button>
		

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
					<div class="modal-body">...</div>
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
						<button type="button" class="btn btn-primary">Save
							changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
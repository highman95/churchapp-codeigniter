<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="mskrWcH6Y4ILIkWsaxNvvrZ00XlRxARmLdZQZIIP">

	<title>Churchapp | {{title}}</title>

	<!-- Scripts -->
	<script src="/assets/js/app.js" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="/assets/css/app.css" rel="stylesheet">
	<link href="/assets/css/app-2.css" rel="stylesheet">
	<style type="text/css">
		.sapi-content-wrapper {
			min-height: 640px;
		}

		.row label {
			display: block;
			font-weight: bold;
			font-size: 13px;
		}

		.form-group label {
			font-weight: bold;
			font-size: 13px;
		}
	</style>
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
			<div class="container">
				<a class="navbar-brand font-weight-bold" href=".">
					Churchapp |
					<span class="small font-weight-bold text-uppercasex text-danger">
						{{title}}
					</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href=".">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/stations">Stations</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/meetings">Meetings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/users">Users</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<main class="py-4 sapi-content-wrapper">
				{{{body}}}
			</main>

			<hr>
			<footer class="small">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-8">
						<p>&copy; 2021. <a href="#" class="font-weight-bold text-dark">Churchapp / Media-X</a>. All Rights Reserved.</p>
					</div>
					<div class="col-md-5 col-4 text-right">
						<a href="#terms" class="font-weight-bold text-danger">Terms</a> |
						<a href="#privacy" class="font-weight-bold text-danger">Privacy</a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>

</html>
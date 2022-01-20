<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Consultation System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						
						<h1>Log in</h1>
						
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="/" >Home</a></li>
							<li><a href="log" class="active">Log in</a></li>
							<li><a href="reg">Register</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<h1>Enter Log in credentials</h1>
								<form  action="{{route ('auth.check')}}" method="post" id="myform">
									@if(Session::get('fail'))
									<div style="color: rgb(231, 79, 79);width:14em; padding:1em;border-radius:1em;">
										{{Session::get('fail')}}
									</div>
									@endif
									@csrf
									<input type="hidden" name="usertype" value="student">
									<label for=""></label>
									<input type="text" name="username" required  value="{{old('username')}}" placeholder="Username">
									<input type="password" name="password" required placeholder="Password">
									
									<button type="submit" style="margin-top:1em;">Log in</button>
									
								</form>
							</section>

						<!-- First Section -->
						

						<!-- Second Section -->
							
						<!-- Get Started -->
						

					</div>

				<!-- Footer -->
					<footer id="footer">
					
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
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
						
						<h1>Welcome {{$LoggedUserInfo['name']}}</h1>
						<p></p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="Instructor" >Student requests</a></li>
							<li><a href="mySchedules" class="active">My available Schedules</a></li>
							
							<li><a href="{{route('auth.logout')}}">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 2em;">
						<br> 
						<p style="text-align:center;">This is the list of your available schedules that are displayed for the students.</p>

						<a href="/add" style="background: #6e6e6e27;padding-top:.4em;padding-bottom:.4em;margin-bottom:1em;padding-left:2em;padding-right:2em;;border-radius: 50px;margin-left:0.5em;">Add</a> <br>
						<table border="2" style="margin-top:1em;">
								
							<tr>
							
								
								<td>Available Day</td>
								<td>Part of the day</td>
								<td>Time</td>
							</tr>
						   @foreach($avail as $available)
						   
						   <tr>
						
							
							<td>{{$available['day']}}</td>
							<td>{{$available['part_of_the_day']}}</td>
							<td>{{$available['time']}}</td>
							<td>
								<a href={{"delete/".$available['id']}}>DELETE</a>
								<a href={{"edit/".$available['id']}} id="myBtn">EDIT</a>
								
							</td>
						   
						</tr>
						
						   @endforeach
						  
						</table>
					</div>
					{{ $avail->links() }}
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
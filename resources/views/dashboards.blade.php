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
							<li><a href="/student" class="active">Available Scheduels</a></li>
							<li><a href="/myRequests">My Requested Schedules</a></li>
							
							<li><a href="{{route('auth.logout')}}">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 2em;">
						<br> 
						<p style="text-align:center;">This is where the available schedule of instructors are displayed. Request a consultation by clicking the request button.</p>

						<form action="searchh" method="post">
							@csrf
								  <input type="text" name="insnem" placeholder="Search for a teacher/instructor">
								  <input type="submit" value="search" style="margin-top:1.5em;margin-bottom:1.5em;" >
								  <a href="/student" class="button" style="margin-bottom:1.5em;margin-bottom:1.5em;">Reset Search</a>
							  </form>
							  <div style="display:flex;justify-content:space-evenly;flex-wrap:wrap;">
							  @foreach($avail as $available)
							  <div style="border:1px solid;text-align:center;margin:0.5em;">
							  <header>
							  <span class="date">Instructor</span>
							  <h2><a href="#">{{$available['instructor_id']}}</a></h2>
							  </header>
							  <br>
							  <span class="date">Available on</span>
							  <h1>{{$available['day']}}</h1>
							  <h2>{{$available['part_of_the_day']}}</h2>
							  <p style="text-align:center;">Available Time: {{$available['time']}}</p>
							  <ul class="actions special">
							  @if($available->available=='yes')
							  
							  <li><a href={{"request/".$available['id']}} class="button" style="padding:1px;margin-right:2em;margin-left:2em;height: 2.5em;padding-top:0px;">Request for a consultation</a></li>
							  @else
							  <h3 style="color:rgb(184, 47, 47);">This schedule is currently unavailable</h3>
							  @endif
							  </ul>
							  </div>
							  @endforeach
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
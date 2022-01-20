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
							<li><a href="/student" >Available Scheduels</a></li>
							<li><a href="/myRequests" class="active">My Requested Schedules</a></li>
							
							<li><a href="{{route('auth.logout')}}">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 2em;">
						<br> 
						<p style="text-align:center;">View the current status of your requested consultations here. Always check this tab, your instrcutor might already accepted your request.</p>

						
							  <div style="display:flex;justify-content:space-evenly;flex-wrap:wrap;">
								@foreach($req as $reqme)
								<div style="border:1px solid;width:20em;text-align:center;">
										<header>
										
											<span class="date">Consultation Request for:</span>
											<h1><a href="#">{{$reqme['instructor_name']}}</a></h1>
								
										</header>
										
										<span class="date">On:</span>
										 <h2>{{$reqme['day']}} {{$reqme['part_of_the_day']}}</h2>
										 <h1>{{$reqme['time']}}</h1>
										 
										 @if($reqme->status=='accepted')
										<span class="date">Request Status:</span>
										 <h2 style="color:green;"> {{$reqme['status']}}</h2>
										  <span class="date">You can now meet with your instructor</span>
										 @elseif($reqme->status=='rejected')
										 <span class="date">Request Status:</span>
										 <h2 style="color:red;"> {{$reqme['status']}}</h2>
										 @else
										 <span class="date">Request Status:</span>
										 <h2 style="color:#6a2999;"> {{$reqme['status']}}</h2>
										<ul class="actions special">
										
											<li><a href={{"cancel/".$reqme['id']."/".$reqme['avail_id']}} class="button">Cancel the consultation request</a></li>
										</ul>
										 @endif
										
									</div>
								
								@endforeach
							</div>
						{{ $req->links() }}
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
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
							<li><a href="Instructor" class="active">Student requests</a></li>
							<li><a href="mySchedules">My available Schedules</a></li>
							
							<li><a href="{{route('auth.logout')}}">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 2em;">
						<br> 
						<p style="text-align:center;">Student consultation requests will be displayed here.</p>
						<div style="display:flex;justify-content:space-evenly;flex-wrap:wrap;">

						
						@foreach($req as $reqq)
						<div style="border:1px solid;width:20em; margin-left:1em;margin-bottom:1em;text-align:center;">
							<header>
								<span class="date">Request From</span>
								<h2><a href="#">{{$reqq['student_name']}}</a></h2>
							</header>
							<br>
							<span class="date">Requesting for consultation on:</span>
							<h1>{{$reqq['day']}} {{$reqq['part_of_the_day']}} {{$reqq['time']}}</h1>
							<h2 ></h2>
							<h2 style="text-align:center;"> </h2>
							<span class="date">Subject:</span>
							<h4 style="text-align:center;"> {{$reqq['subject']}}</h4>
							<span class="date">Meeting Place:</span>
							<h4 style="text-align:center;"> {{$reqq['meeting_place']}}</h4>
							<span class="date">Message:</span>
							<h4 style="text-align:center;"> {{$reqq['message']}}</h4>
							
							@if($reqq->status=='accepted')
							<span class="date">Status:</span>
							<h2 style="text-align:center;color:green;"> {{$reqq['status']}}</h2>
							<span class="date">You can now meet with the students and conduct the consultation.</span>
							<ul class="actions special">
							<li><a href={{"consultdone/".$reqq['id']."/".$reqq['avail_id']}} class="button" >Mark as done</a></li>
							<li><a href={{"cancelreq/".$reqq['id']."/".$reqq['avail_id']}} class="button">Cancel</a></li>
							</ul>
							@elseif($reqq->status=='rejected')
							<span class="date">Status:</span>
							<h3 style="text-align:center;color:rgb(161, 37, 37);"> {{$reqq['status']}}</h3>
								<ul class="actions special">
							<li><a href={{"cancelrej/".$reqq['id']}} class="button">undo</a></li>
								<li><a href={{"deletereq/".$reqq['id']}} class="button">Delete this request</a></li>
							</ul>
							@elseif($reqq->status=='consultation done')
							<h3 style="text-align:center;color:#278f24;"> {{$reqq['status']}}</h3>
							<a href={{"deletereq/".$reqq['id']}} class="button">Delete record</a>
							@else
							<span class="date">Status:</span>
							<h3 style="text-align:center;color:#c112c7;"> {{$reqq['status']}}</h3>
							<ul class="actions special">
								<li><a href={{"updatereq/".$reqq['id']."/".$reqq['avail_id']}} class="button">Accept</a></li>
								<li><a href={{"rejectreq/".$reqq['id']}} class="button">Reject</a></li>
							</ul>	
							@endif
							
						</div>
						@endforeach
						{{ $req->links() }}
					</div>
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
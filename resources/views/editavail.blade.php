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
		<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" >
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						
						
					</header>

				<!-- Nav -->
				

				<!-- Main -->
					<div id="main" style="padding-bottom: 2em;text-align:center;">
						<br> 
						<p style="text-align:center;">Add your available schedule.</p>

						<form action="/update" method="post" id="myform">
										
							@csrf
							<input type="hidden" name="id" value="{{$availability['id']}}">
							<label for="daay" style="padding:.5em;color:rgb(73, 73, 73);">Edit Day</label> <p style="padding:.5em;color:rgb(73, 73, 73);">Current: {{$availability['day']}}</p>
							<select name="daay" id="select" required  style="border-bottom-color:green;">
								<option value="">Change here</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
								<option value="Saturday">Saturday</option>
								<option value="Sunday">Sunday</option>
							</select> 
							<label for="part_f_the_day" style="margin-top:1em;padding:.5em;color:rgb(80, 80, 80);">Edit Part of the day</label> <p style="margin-top:1em;padding:.5em;color:rgb(73, 73, 73);">Current: {{$availability['part_of_the_day']}}</p>
							<select name="paart_of_the_day" id="select" required style="border-bottom-color:rgb(102, 0, 128);">
								<option value="">Change here</option>
								<option value="Morning">Morning</option>
								<option value="Afternoon">Afternoon</option>
								<option value="Evening">Evening</option>
							</select> 
							<label for="time" style="">Edit Time</label><br>
							<input type="time" name="time" value="{{$availability['time']}}" required id="time">
							<br> <br>
							<input type="submit" id="sss"value="Update">
							<br>
							<a href="/mySchedules">Cancel</a>
						</form>
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

			<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/util.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>
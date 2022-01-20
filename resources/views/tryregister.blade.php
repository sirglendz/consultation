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
						
						<h1>Create Account</h1>
						
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="/" >Home</a></li>
							<li><a href="log" >Log in</a></li>
							<li><a href="reg" class="active">Register</a></li>
				
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
							
								<form action="{{route ('auth.save')}}" method="post" id="myform">
									@if($errors->any())
									
										<p style="color:red;">!{{ implode('', $errors->all(':message')) }}</p> 
										<br>
									
									@endif
									@if(Session::get('success'))

									<div style="color: rgb(74, 212, 69);width:14em; padding:1em;border-radius:1em;">
										{{Session::get('success')}}
									</div>
							
									@endif
									
										   @if(Session::get('fail'))
									
									<div style="background-color: rgb(74, 212, 69);color:#a83242;width:14em; padding:1em;border-radius:1em;">
										{{Session::get('fail')}}
									</div>
							
									@endif
								   
									@csrf
								 
									
									   <label style="padding-bottom: 0;margin-bottom:0;">User Type</label>
									   <select name="usertype" id="select" required >
										   <option value="">Choose Usertype 🔻</option>
										   <option value="student">Student</option>
										   <option value="instructor">Instructor</option>
									   </select> <br>
										<input type="text" name="name" required value="{{old('name')}}" placeholder="Complete Name">
										<span>@error('name'){{$message}}@enderror</span>
		
										
										<input type="email" name="email" required value="{{old('email')}}" placeholder="Email/Gmail">
										<span>@error('email'){{$message}}@enderror</span>
									<br>
									   
									
								  
									<input type="text" name="username" required value="{{old('username')}}" placeholder="Username"> 
									
		
									
									<input type="password" name="password" required placeholder="Password(must exceed 8 characters)" >
									
									
									<button type="submit" style="margin-top:1em;">Create Account</button>
								   
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
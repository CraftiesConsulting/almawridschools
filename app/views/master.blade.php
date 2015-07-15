<!DOCTYPE html>
<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>AL-MAWRID Islamic International College</title>
		<meta name="description" content="AL-MAWRID Islamic International College">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href=" {{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
		<link href=" {{ asset('css/bootstrap-glyphicons.css') }} " rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/colorbox.css') }} ">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src=" {{ asset('js/modernizr-2.6.2.min.js') }} "></script>
		
	</head>
	<body>


<!-- Admission Modal -->	
		<div class="modal fade" id="admissionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Admission Information</h4>
		      </div>
		      <div class="modal-body">
			Admission into JSS and SS class starts every july. Countdown to next admission
			<div id="countDown" class="countdown">
				<span class = "days">00</span> days
				<span class = "hours">00:</span> Hours
				<span class = "minutes">00:</span> Minutes and
				<span class = "seconds">00</span> Seconds.
			</div>
			<hr>
			<a href="{{ url('admission_form') }}" class="btn btn-block btn-info ">Download Admission Form</a>
		      </div>
		    </div>
		  </div>
		</div>
<!-- end modal -->

<!-- Login Modal -->	
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Login</h4>
		      </div>
		      <div class="modal-body">
				
				<form class="form-horizontal">
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputName">Username</label>
							<div class="col-lg-10">
								<input class="form-control" id="inputName" placeholder="Name" type="text">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputEmail">Password</label>
							<div class="col-lg-10">
								<input class="form-control" id="inputEmail" placeholder="Email" type="email">
							</div>
						</div>
						<input type="submit" value="Login" name="submit" class="btn btn-info btn-block">
						
					</form>
				
		      </div>
		    </div>
		  </div>
		</div>
<!-- end login modal -->
<?php $id = ""; ?>
@if($active !== "home")
    <?php $id = "header-bg"; ?>
@endif
<header id="{{ $id }}">
<div class="container" id="navbarContainer">
		<nav class = "navbar">
			<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-sm" href="/"><img src="images/logo.png" alt="Your Logo"></a>
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($active == "home"){ echo "class=\"active\""; } ?>>
					    <a href=" {{ URL::to('/') }}">Home</a>
					</li>
					<li <?php if($active == "about"){ echo "class=\"active\""; } ?>>
					    <a href="about">About Us</a>
					</li>
					<li <?php if($active == "facilities"){ echo "class=\"active\""; } ?>>
					    <a href="about#facilities">Facilities</a>
					</li>
					<li <?php if($active == "gallery"){ echo "class=\"active\""; } ?>>
					    <a href="gallery">Gallery</a>
					</li>
					<li id="logo" class="visible-lg"><img src = "{{ asset('images/logo.jpg') }}" alt = "LOGO"></li>
					<li><a href="admission" data-toggle="modal" data-target="#admissionModal">Admission</a></li>
					<li <?php if($active == "achievers"){ echo "class=\"active\""; } ?>>
					    <a href="achievers">Achievers</a>
					</li>
					<li <?php if($active == "contact"){ echo "class=\"active\""; } ?>>
					    <a href="contact-us">Contact Us</a>
					</li>
					<li><a href="login" data-toggle="modal" data-target="#loginModal">Login</a></li>
				</ul>
			</div>
		</nav>
	</div><!-- end container -->
</header>
<div class="row page-info">
    <h3 class="text-center page-name">{{ strtoupper($active) }}</h3>
</div>
@yield('content')

<div class="row pre-footer">
	<div class="container">
		<div class="col-lg-4">
			<h4 class="pre-footer">Join us on</h4>
			<a class="btn btn-block btn-primary" href="#">FACEBOOK</a><br>
			<a class="btn btn-block btn-info" href="#">TWIITER</a><br>
			<a class="btn btn-block btn-danger" href="#">GOOGLE+</a><br>
		</div>
		<div class="col-lg-4">
			<h4 class="pre-footer">Address</h4>
			<address class="address">
				Umar Audi Road, Opp. Tiger House, Beside Unilorin Staff Quarters, Fate Area, GRA., P.M.B., 1604, Ilorin, Kwara State.<br>
				Tel: <br>
				Email: <span class="text-info">info@almaridschools.com</span><br>
			</address>
		</div>
		<div class="col-lg-4">
			<h4 class="pre-footer">Locate us on map</h4>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1973.0559131264454!2d4.593486999999991!3d8.488507000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMjknMTguNiJOIDTCsDM1JzM2LjUiRQ!5e0!3m2!1sen!2sng!4v1436440019388" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<footer>
	<div class= "container">
		<div class="row copyright">
			Copyright &copy; Designed By <a href="http://www.craftiesconsulting.com" target="_blank" title="Crafties Consulting Limited" class="copy">Crafties Consulting Limited</a>.
		</div><!-- end row -->	
	</div><!-- end container -->
</footer>


<!-- All Javascript at the bottom of the page for faster page loading -->
	
<!-- First try for the online version of jQuery
<script src="http://code.jquery.com/jquery.js"></script> -->

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<!-- <script>window.jQuery || document.write('<script src="../../public/assets/js/jquery-1.8.2.min.js"></script>')</script> -->
<script src="{{ asset('js/jquery-1.8.2.min.js') }}" ></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Custom JS -->
@yield('script')
<script type="text/javascript" src=" {{ asset('js/script.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/day_hour_min_countdown_plugin.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/day_hour_min_countdown.js') }} "></script>
<script type="text/javascript" src=" {{ asset('js/jquery.magnific-popup.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/mvpready-core.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/mvpready-admin.js') }}"></script>

</body>
</html>

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
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src=" {{ asset('js/modernizr-2.6.2.min.js') }} "></script>
		
	</head>
	<body>

<header>
	<div class="container">
		<nav class = "navbar">
			<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-sm" href="/"><img src="images/logo.png" alt="Your Logo"></a>
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="page_settings">page setting</a></li>
					<li><a href="gallery_settings">Gallery</a></li>
					<li id="logo" class="visible-lg"><img src = "{{ asset('images/logo.jpg') }}" alt = "LOGO"></li>
					<li><a href="achievers_settings">Achievers</a></li>
					<li><a href="password_management">Password management</a></li>
				</ul>
			</div>
		</nav>
	</div><!-- end container -->
</header>


@yield('content')


<footer>
	<div class= "container">
		<div class="row copyright">
			Copyright &copy; Designed By craftiesworld.
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
<script type="text/javascript" src=" {{ asset('js/mvpready-core.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/mvpready-admin.js') }}"></script>

</body>
</html>

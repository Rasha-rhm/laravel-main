<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WESTWOOD DINER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

	</head>
	<body>
	<?php
use App\Http\Controllers\ItemController;
$total=ItemController::cartItem();
?>
	<div class="gtco-loader"></div>
	
	<div id="page">

	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row"  style="background:#293241;">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="/CustHome">WESTWOOD DINER<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul stye="color:#fff;">
						<li><a class="nav-item nav-link" href="#">Welcome, {{Session::get('user')}}</a></li>
					    <li><a href="/CustHome">Home</a></li>
						<li><a href="/menu">Menu</a></li>
						<li><a href="/about">About</a></li>
						<li><a href='/cartlist'>Cart({{$total}})</a></li>

						<li><a href="/logout">Logout</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGL5I_c6OVk8nadGxpxCXd1z8ijMJxKUvveg&usqp=CAU)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
				
							<h1 class="cursive-font">All in good taste!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> 0484321678</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@westood.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	
	<script src="{{asset('js/moment.min.js')}}"></script>
	<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>


	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>


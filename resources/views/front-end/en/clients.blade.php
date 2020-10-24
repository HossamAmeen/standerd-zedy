<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Nour - Personal Portfolio HTML Template">
	<meta name="keywords" content="new, html, Nour, design, creative, onepage, Portfolio, personal, advanced,">

	<!-- Main Page Title -->
	<title>clients</title>
	<!-- Google Font -->

	<link href="https://fonts.googleapis.com/css?family=Long+Cang&display=swap" rel="stylesheet">
	<!-- All css -->
	<link rel="stylesheet" href="{{asset('web/css/all.css')}}">

	<!-- Animate css -->
	<link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
	<!-- Magnific css -->
	<link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}">
	<!-- Owl carousel css  -->
	<link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/owl.theme.green.min.css')}}">
	<!-- Bootstrap 4 css -->
	<link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{asset('web/css/fontawesome.min.css')}}">
	<!-- Main style css -->
	<link rel="stylesheet" href="{{asset('web/css/main.css')}}">

</head>

<body>
	<div class="main-site">

		<!--==================================================================== 
			Start Header	
	   =====================================================================-->
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('web/images/ZEDY_final-02.png')}}"></a>
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="{{url('/en')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/#about')}}" data-scroll="about">About us </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/#serve')}}" data-scroll="serve">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/#team')}}" data-scroll="team">Our Team</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/#work')}}" data-scroll="work">Works</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('en/clients')}}">Our Clients</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-scroll="contact"> Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Language
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="{{url('/ar/clients')}}">Arabic</a>
									
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>


		<!--==================================================================== 
			End Header	
	   =====================================================================-->


		<!--==================================================================== 
			Start Our-Clients
	   =====================================================================-->

		<div class="our-clients ">
			<div class="container">
				<h1 class="text-center">Our Clients</h1>

				<div class="details-logo">
					<div class="row">
						@foreach ($clients as $item)
						<div class="col-sm-3">
							<div class="client-logo">
								<img src="{{asset($item->image)}}">
							</div>
							<div class="{{$item->en_name}}">
								<h5>{{$item->en_name}}</h5>
							</div>
						</div>
						@endforeach



					</div>
				</div>
			</div>
		</div>

		<!--==================================================================== 
			End Our-Clients
	   =====================================================================-->

	
	</div>
	</div>
	</div>
	<!--==================================================================== 
			End Our-team
	   =====================================================================-->


	<!--==================================================================== 
			Start Contact
	   =====================================================================-->
	<div class="contact" id="contact">
		<div class="container">
			<div class="contact-header text-center">
				<h1>Contact Us</h1>
			</div>

			<div class="footer">
				<div class="row">
					<div class="col-md-4">
						<div class="address">
							<p> Address:{{$configration->en_address}}
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<ul class="list-unstyled">
							<li><a href="{{$configration->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a  href="{{'https://wa.me/'.$configration->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
							<li><a href="{{$configration->behance}}" target="_blank"><i class="fab fa-behance-square"></i></li></a>
							<li><a href="{{$configration->facebook}}" target="_blank"><i class="fab fa-youtube" ></i></a></li>
						</ul>
					</div>
					<div class="col-md-4">

						<p>Copyright &copy;2020 By <img src="{{asset('web/images/ZEDY_final-02.png')}}"> </p>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!--==================================================================== 
			End Contact
	   =====================================================================-->

	<!--==================================================================== 
			Start scroll to top
	   =====================================================================-->

	<div class="sroll-button">
		<i class="fa fa-arrow-up"></i>
	</div>


	<!--==================================================================== 
			End scroll to top
	   =====================================================================-->



	<!--  jQuery js  -->
	<script src="{{asset('web/js/jquery-3.2.1.min.js')}}"></script>
	<!-- Popper Js  -->
	<script src="{{asset('web/js/popper.min.js')}}"></script>
	<!-- Bootstrap 4 Js  -->
	<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
	<!-- OWL Carousel JS  -->
	<script src="{{asset('web/js/owl.carousel.js')}}"></script>
	<script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup JS  -->
	<script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
	<!--  WOW Js  -->
	<script src="{{asset('web/js/wow.min.js')}}"></script>
	<!-- Script Font Awesome 5 -->
	<script defer src="{{asset('web/js/fontawesome.min.js')}}"></script>
	<!-- My Custom Js  -->
	<script src="{{asset('web/js/main.js')}}"></script>

	</div>
</body>


</html>
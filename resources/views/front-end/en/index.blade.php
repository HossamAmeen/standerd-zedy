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
	<title>Home</title>
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
								<a class="nav-link" href="#" data-scroll="about">About us </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-scroll="serve">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-scroll="team">Our Team</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-scroll="work">Works</a>
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
									<a class="dropdown-item" href="{{url('/')}}">Arabic</a>
									
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
			Start landing	
	   =====================================================================-->
		<div class="landing" id="home">
			<header>
				<div class="overlay"></div>
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="{{asset('web/Zedy Header Slide.mp4')}}" type="video/mp4">
				</video>
				<div class="container h-100">
					<div class="d-flex h-100 text-center align-items-center">
						<div class="w-100 text-white">

						</div>
					</div>
				</div>
			</header>
		</div>
		<!--==================================================================== 
			End landing	
	   =====================================================================-->

		<!--==================================================================== 
			Start How Zedy	
	   =====================================================================-->
		<div class="how-zedy section" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="how-content">
							<span>How is <img src="{{asset('web/images/ZEDY_final_2.png')}}">?</span>
							<p>{{$configration->en_description}}</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="how-photo">
							<img src="{{asset('web/images/who.png')}}" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================================== 
			End How Zedy
	   =====================================================================-->


		<!--==================================================================== 
			Start Services
	   =====================================================================-->

		<div class="services section" id="serve">
			<div class="container">
				<div class="section-header text-center">
					<h1>Services</h1>
					<div class="serivce-line"><span></span></div>
				</div>

				<div class="our-services">
					<div class="row">
						@foreach ($services as $item)
						<div class="col-md-4">
							<div class="service-deatils text-center">
								<i class="{{$item->icon}}"></i>
								<h4>{{$item->en_name}}</h4>

							</div>
						</div>
						@endforeach



					</div>
				</div>
			</div>
		</div>

		<!--==================================================================== 
			End Services
	   =====================================================================-->

		<!--==================================================================== 
		Start Why
	   =====================================================================-->

		<div class="why">
			<div class="container">
				<div class="why-header text-center">
					<h1>Why Zedy?</h1>
					<div class="line"></div>
				</div>

				<div class="why-details">
					<div class="row">
						<div class="col-md-4">
							<i class="fas fa-leaf"></i>
							<div class="why-content">
								<h3>Creativity</h3>
								<p>Creativity is not a means but an end that is accomplished by integrating experiences
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fas fa-laptop"></i>
							<div class="why-content">
								<h3>Experience </h3>
								<p>Years of real work experience. </p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fas fa-tachometer-alt"></i>
							<div class="why-content">
								<h3>Fast</h3>
								<p>Time equals money, so speed of achievement equals a lot for you</p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fas fa-hand-peace"></i>
							<div class="why-content">
								<h3>Variety</h3>
								<p>The diversity of services makes us able to provide an integrated work</p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fas fa-check"></i>
							<div class="why-content">
								<h3>Management</h3>
								<p>A management style that is based on communication between the customer and the team,
									so we achieve what exceeds expectations.</p>
							</div>
						</div>
						<div class="col-md-4">
							<i class="fas fa-crosshairs"></i>
							<div class="why-content">
								<h3>Precision</h3>
								<p>Accuracy is our goal, and customer satisfaction is our goal</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--==================================================================== 
			End Why
	   =====================================================================-->

		<!--==================================================================== 
			Start Where You Can find
	   =====================================================================-->


		<div class="where-find section">
			<div class="container">
				<div class="where-header">
					<h1>You can find our business in the Arab world</h1>
				</div>
				<p>Egypt - Saudi Arabia - Emirates - Bahrain - Kuwait</p>
			</div>
		</div>

		<!--==================================================================== 
			End Where You Can find
	   =====================================================================-->



		<!--==================================================================== 
			Start Our Works
	   =====================================================================-->
		<div class="our-works" id="work">
			<div class="container">
				<div class="works text-center">
					<h1>Our Works</h1>
					<p>You can find our business here</p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="face text-center">
							<a href="{{$configration->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="beha text-center">
							<a href="{{$configration->behance}}" target="_blank"><i class="fab fa-behance-square"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="you text-center">
							<a href="{{$configration->youtube}}" target="_blank"> <i class="fab fa-youtube"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--==================================================================== 
			End Our Works
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

		<!--==================================================================== 
			Start Our-team
	   =====================================================================-->

		<div class="team section" id="team">
			<div class="container">
				<div class="section-header text-center">
					<h1>Our Team</h1>
					<p>A good work team consisting of several people with different skills</p>
				</div>

				<div class="our-team">
					<div class="row">
						
						@foreach ($employees as $item)
						<div class="col-md-3 col-sm-6">
							<div class="team-details">
								<div class="content_img">

									<img src='{{asset($item->image)}}' title="{{$item->name}}" width='100%' height='100%'>
									<div>
										<h6>{{$item->name}}</h6>
										<span>{{$item->job}}</span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>

			</div>
		</div>
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
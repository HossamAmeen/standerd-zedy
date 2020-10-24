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
    <title>العملاء</title>
    <!-- Google Font -->

 <link href="https://fonts.googleapis.com/css?family=Long+Cang&display=swap" rel="stylesheet">
     <!-- All css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/all.css')}}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/animate.css')}}">
    <!-- Magnific css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/magnific-popup.css')}}">
    <!-- Owl carousel css  -->
    <link rel="stylesheet" href="{{asset('web/ar/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/ar/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/ar/css/owl.theme.green.min.css')}}">
    <!-- Bootstrap 4 css -->
   <link rel="stylesheet" href="{{asset('web/ar/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('web/ar/css/fontawesome.min.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('web/ar/css/main.css')}}">
	
</head>
<body>
   <div class="main-site">
    
     <!--==================================================================== 
			Start Header	
	   =====================================================================-->
	<div class="header" >
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#"><img src="{{asset('web/ar/images/ZEDY_final-02.png')}}"></a>
			<div class="container">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
				  <li class="nav-item">
					<a class="nav-link" href="{{url('/')}}" data-scroll="home">الرئيسية</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{url('/#about')}}" data-scroll="about">من نحن</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{url('/#serve')}}" data-scroll="serve">خدماتنا</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{url('/#team')}}" data-scroll="team">فريق العمل</a>
				  </li>
					<li class="nav-item">
					<a class="nav-link" href="{{url('/#work')}}" data-scroll="work">اعمالنا</a>
				  </li>
					<li class="nav-item">
					<a class="nav-link" href="{{url('/')}}" data-scroll="contact">تواصل معنا</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						اللغة
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						{{-- <a class="dropdown-item" href="#">عربى</a> --}}
					<a class="dropdown-item" href="{{url('/en/clients')}}">إنجليزى</a>
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
		Start Details Of Cleints	
	   =====================================================================-->
	   
	   <div class="our-clients-page">
		   <div class="container">
			   <div class="section-header text-center">
				<h1>عملا<span>ئنا</span></h1>
				<div class="serivce-line"><span></span></div>
				   
				   <div class="c-details">
					   <div class="row">
					  @foreach ($clients as $item)
					  <div class="col-md-3">
						<div class="c-client">
							<div class="c-brand">
								<img src="{{asset($item->image)}}">
							</div>
						 
						</div>
					</div>
					  @endforeach
						
					   
				   </div>
			   </div>
			</div>
		   </div>
	   </div>
	   
	   <!--==================================================================== 
		End Details Of Cleints	
	   =====================================================================-->
	   
	      
	   <!--==================================================================== 
			Start Contact
	   =====================================================================-->
	<div class="contact" id="contact">
		<div class="container">
			<div class="contact-header text-center">
				<h1>تواصل معنا</h1>
				<ul class="list-unstyled">
					<li><span>osamaaskar0100@gmail.com</span><img src="{{asset('web/ar/images/envelope.png')}}"></li>
					<li><span>01015293997</span><img src="{{asset('web/ar/images/call-answer.png')}}"></li>
				</ul>
			</div>
			
			<div class="footer">
				<div class="row">
					<div class="col-md-8 text-center">
						<h4 class="text-right">تقدر تسيب ايميلك او موبيلك واحنا هنتواصل معاك</h4>
						<input type="text" class="form-control" placeholder="البريد الالكتروني \ الموبيل">
						<button type="submit">ارسال</button>
					</div>
					<div class="col-md-4">
						<div class="zedy-footer">
							<img src="{{asset('web/ar/images/Layer%202.png')}}">
						</div>
						
						<ul class="list-unstyled">
							<li><i class="fab fa-facebook-f"></i></li>
							<li><i class="fab fa-twitter"></i></li>
							<li><i class="fab fa-instagram"></i></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="copy">
				<p class="text-center">Copy Right@2019 By : Zedy</p>
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
	
	
		<!--==================================================================== 
			End scroll to top
	   =====================================================================-->
		
    
    
     <!--  jQuery js  -->
    <script src="{{asset('web/ar/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Popper Js  -->
    <script src="{{asset('web/ar/js/popper.min.js')}}"></script>
    <!-- Bootstrap 4 Js  -->
   <script src="{{asset('web/ar/js/bootstrap.min.js')}}"></script>
    <!-- OWL Carousel JS  -->
    <script src="{{asset('web/ar/js/owl.carousel.js')}}"></script>
	<script src="{{asset('web/ar/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JS  -->
    <script src="{{asset('web/ar/js/jquery.magnific-popup.min.js')}}"></script>
    <!--  WOW Js  -->
    <script src="{{asset('web/ar/js/wow.min.js')}}"></script>
    <!-- Script Font Awesome 5 -->
    <script defer src="{{asset('web/ar/js/fontawesome.min.js')}}"></script>
    <!-- My Custom Js  -->
    <script src="{{asset('web/ar/js/main.js')}}"></script>

    </div>
</body>
	

</html>
	
	
	
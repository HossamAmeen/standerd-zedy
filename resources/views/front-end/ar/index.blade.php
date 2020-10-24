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
    <title>الرئيسية</title>
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
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="{{asset('web/ar/images/ZEDY_final-02.png')}}"></a>
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll="about">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll="serve">خدماتنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll="team">فريق العمل</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll="work">أعمالنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('ar/clients')}}">عملائنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll="contact">تواصل معنا</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    اللغة
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    {{-- <a class="dropdown-item" href="#">عربى</a> --}}
                                <a class="dropdown-item" href="{{url('/en')}}">إنجليزى</a>
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
                            <span>من هي <img src="{{asset('web/ar/images/ZEDY_final_2.png')}}">؟</span>
                            <p>{{$configration->description}}</p>
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
                    <h1>خدما<span>تنا</span></h1>
                    <div class="serivce-line"><span></span></div>
                </div>

                <div class="our-services">
                    <div class="row">
                        @foreach ($services as $item)
                        <div class="col-md-4">
                            <div class="service-deatils text-center">
                                <i class="{{$item->icon}}"></i>
                                <h4>{{$item->name}}</h4>

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
                    <h1>لماذا زيدي؟</h1>
                    <div class="line"></div>
                </div>

                <div class="why-details">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-leaf"></i>
                            <div class="why-content">
                                <h3>الابداع</h3>
                                <p>الابداع ليس وسيلة بل غاية تتم بتكامل الخبرات.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-laptop"></i>
                            <div class="why-content">
                                <h3>الخبرة</h3>
                                <p>خبرة نتيجة سنوات عمل حقيقة</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-tachometer-alt"></i>
                            <div class="why-content">
                                <h3>سرعة</h3>
                                <p>لان الوقت يساوى المال فسرعة الانجاز تساوى لك الكثير</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-hand-peace"></i>
                            <div class="why-content">
                                <h3>التنوع</h3>
                                <p>تنوع الخدمات جعل لدينا القدرة علي تقديم عمل متكامل</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-check"></i>
                            <div class="why-content">
                                <h3>الادارة</h3>
                                <p>أسلوب ادارة اساسه التواصل بين العميل والفريق فنحقق ما يفوق التوقعات</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-crosshairs"></i>
                            <div class="why-content">
                                <h3>الدقة</h3>
                                <p>الدقه هدفنا الذي نسعي اليه وارضاء العميل هو الغاايه</p>
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
                    <h1>تستطيع ان تجد أعمالنا فى الوطن العربى</h1>
                </div>
                <p>مصر - السعودية -الإمارات - البحرين - الكويت</p>
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
                    <h1>أعمالنا</h1>
                    <p>تستطيع ان تجد اعمالنا هنا</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="face text-center">
                            <a href="{{$configration->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="beha text-center">
                        <a href="{{$configration->behance}}"><i class="fab fa-behance-square"></i></a>
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
                <h1 class="text-center">عملائنا</h1>

                <div class="details-logo">
                    <div class="row">
                        @foreach ($clients as $item)
                        <div class="col-sm-3">
                            <div class="client-logo">
                                <img src="{{asset($item->image)}}">
                            </div>
                            <div class="{{$item->name}}">
                                <h5>{{$item->name}}</h5>
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
                    <h1>فريق العمل</h1>
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلهابشكل </p>
                </div>

                <div class="our-team">
                    <div class="row">
                        @foreach ($employees as $item)
                        <div class="col-md-3 col-sm-6">
                            <div class="team-details">
                                <div class="content_img">

                                    <img src='{{asset($item->image)}}' title="{{$item->name}}" width='100%'
                                        height='100%'>
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
    <!--==================================================================== 
			End Our-team
	   =====================================================================-->


    <!--==================================================================== 
			Start Contact
	   =====================================================================-->
    <div class="contact" id="contact">
        <div class="container">
            <div class="contact-header text-center">
                <h1>تواصل معنا</h1>
            </div>

            <div class="footer">
                <div class="row">
                    <div class="col-md-4">
                        <div class="address">
                            <p> العنوان:{{$configration->address}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="{{$configration->facebook}}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{'https://wa.me/'.$configration->whatsapp}}" target="_blank"><i
                                        class="fab fa-whatsapp"></i></a></li>
                            <li><a href="{{$configration->behance}}" target="_blank"><i class="fab fa-behance-square"></i></li>
                            <li><a href="{{$configration->facebook}}" target="_blank"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">

                        <p><img src="{{asset('web/ar/images/ZEDY_final-02.png')}}"> Copyright &copy;2020 By</p>

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
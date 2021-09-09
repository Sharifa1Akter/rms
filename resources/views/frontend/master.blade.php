
<!DOCTYPE html>
<html lang="en">

    <!-- Basic {{ asset('frontend/') }} -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
 
     <!-- Site Metas -->
    <title>Green Special - Restaurant Responsive HTML5 OnePage Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon-1.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
	
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/flaticon-1.css') }}">

	<script src="{{ asset('frontend/js/modernizr.js') }}j"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div>
   
	



    
   @include('frontend.partial.header')
	


	 @yield('content')



	@include('frontend.partial.footer')
	


    <!-- ALL JS FILES -->
    <script src="{{ asset('frontend/js/all.js') }}"></script>
	<!-- Camera Slider {{ asset('') }}-->
	<script src="{{ asset('frontend/js/jquery.mobile.customized.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script> 
	<script src="{{ asset('frontend/js/parallaxie.js') }}"></script>
	<script src="{{ asset('frontend/js/headline.js') }}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.nicescroll.min.js') }}"></script>
	<!-- Contact form JavaScript -->
    <script src="{{ asset('frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('frontend/js/contact_me.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
	
</body>
</html>
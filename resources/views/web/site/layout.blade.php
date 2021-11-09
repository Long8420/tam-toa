<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giáo xứ tam tòa </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('static/site/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('static/site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/ticker-style.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('static/site/css/style1.css')}}">

    <!-- Seo -->
	<meta name="description" content="{{$meta_desc}}" />
	<meta name="keywords" content=" {{$meta_keywords}}"/> 
	<meta name ="robots" content ="INDEX,FOLLOW"/>
	<link rel ="canonical" href="{{$url_canonical}}"/>
	<meta name="author" content="Long Nguyễn">
	<!-- <link rel="icon" type="image/x-icon" href=""> -->
<meta property="og:site_name" content=""; />
<meta property="og:description" content="{{$meta_desc}}" />
<meta property="og:title" content="{{$meta_title}}" />
<meta property="og:url" content="{{$url_canonical}}" />
<meta property="og:type" content="website" />
	
	<!-- end seo -->

    <title>{{$meta_title}}</title>

      <!-- CSS Libraries -->
      <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('static/site/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('static/site/lib/slick/slick-theme.css')}}" rel="stylesheet">
</head>

<body>

@include('web.site.header')
   <!-- Top News Start-->
   <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            @include('web.site.topnew_left')
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                     @include('web.site.topnew_right')
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <!-- Noi Dung -->
                    @yield('content')
                    <!-- Siedebar-right -->
                   @include('web.site.sidebar')
                </div>
            </div>
        </div>
        <!-- Category News End-->

@include('web.site.footer')
   
    
<!-- Search model Begin -->
<!-- <div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div> -->
<!-- Search model end -->

<!-- JS here -->

    <script src="{{asset('static/site/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('static/site/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('static/site/js/popper.min.js')}}"></script>
    <script src="{{asset('static/site/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('static/site/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('static/site/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('static/site/js/slick.min.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('static/site/js/gijgo.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('static/site/js/wow.min.js')}}"></script>
    <script src="{{asset('static/site/js/animated.headline.js')}}"></script>
    <script src="{{asset('static/site/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('static/site/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('static/site/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('static/site/js/jquery.sticky.js')}}"></script>
    
    <!-- contact js -->
    <script src="{{asset('static/site/js/contact.js')}}"></script>
    <script src="{{asset('static/site/js/jquery.form.js')}}"></script>
    <script src="{{asset('static/site/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('static/site/js/mail-script.js')}}"></script>
    <script src="{{asset('static/site/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('static/site/js/plugins.js')}}"></script>
    <script src="{{asset('static/site/js/main.js')}}"></script>
    <script src="{{asset('static/site/js/main1.js')}}"></script>

   
    
</body>
</html>
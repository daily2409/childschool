<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIDS SCHOOL | @yield('title')</title>

    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="landing/images/logo/logo.png" >
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <base href="asset('')">
	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="landing/images/logo/logo.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="landing/images/logo/logo.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="landing/images/logo/logo.png">
	<link rel="apple-touch-icon-precomposed" href="landing/images/logo/logo.png">

    <link rel="stylesheet" type="text/css" href="landing/css/smartkids.css?v={{time()}}" />
    <link rel="stylesheet" type="text/css" href="landing/css/air.css?v={{time()}}" />


    <link rel="stylesheet" type="text/css" href="landing/css/p7HLS-01.css?v={{time()}}" />
    <link rel="stylesheet" type="text/css" href="landing/css/p7IR2-01.css?v={{time()}}" />
    <link rel="stylesheet" type="text/css" href="landing/css/p7PM3-16.css?v={{time()}}" />
    <link rel="stylesheet" type="text/css" href="landing/css/p7STT-01.css?v={{time()}}" />

    <link rel="stylesheet" type="text/css" href="landing/css/p7TTM01.css?v={{time()}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">

    <script src="landing/js/p7TTMscripts.js"></script>
    <script src="landing/js/p7HLSscripts.js"></script>
    <script src="landing/js/p7PM3scripts.js"></script>
    <script src="landing/js/p7IR2scripts.js"></script>
    <script src="landing/js/p7STTscripts.js"></script>
    <script src="landing/js/p7EHCscripts.js"></script>
    {{-- <script type="text/javascript">
        P7_opTTM('id:p7Tooltip_2','id:nachricht','p7TTM01',8,520,11,0,1,0,0,1,460,2,1,1,0,1,0,0);
    </script> --}}

    {{-- <link rel="stylesheet" type="text/css" href="landing/libraries/lightslider/lightslider.min.css" />
	<link rel="stylesheet" type="text/css" href="landing/libraries/lightslider/lightslider.min.css" />

	<link rel="stylesheet" type="text/css" href="landing/revolution/css/settings.css">

	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="landing/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="landing/revolution/css/navigation.css?v={{time()}}">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="landing/libraries/lib.css" />
	<link rel="stylesheet" type="text/css" href="landing/css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="landing/css/navigation-menu.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="landing/css/footer.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/shortcodes.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/woocommerce.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/header.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/style-2.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/style.css?v={{time()}}" /> --}}

	<!--[if lt IE 9]>
		<script src="landing/js/html5/respond.min.js"></script>
    <![endif]-->
    {{-- <script type="text/javascript">
        P7_opTTM('id:p7Tooltip_2','id:nachricht','p7TTM01',8,520,11,0,1,0,0,1,460,2,1,1,0,1,0,0);
    </script>

    <!--GA-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4910734-15', 'smartkidsinfo.com');
        ga('send', 'pageview');
        ga('set', 'anonymizeIP', true);

    </script> --}}
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    {{-- <div id="p7STT_1" class="p7STT right dark"> <a id="p7STTa_1" class="p7STT-anchor" href="#"><i></i><span>Scroll To Top</span></a>
        <script type="text/javascript">P7_STTop('p7STT_1',200,1,450)</script>
    </div> --}}
    {{-- <div id="p7HLS_1" class="p7HLS-01 p7HLS bullet">
        <div id="p7HLStb_1" class="tool-bar">
            <ul>
                <li><a class="previous" id="p7HLSrp_1" href="#">Previous</a></li>
                <li><a class="pause play" id="p7HLSrpp_1" href="#">Play</a></li>
                <li><a class="next" id="p7HLSrn_1" href="#">Next</a></li>
            </ul>
        </div>
        <div id="p7HLSvp_1" class="p7hls-viewport">
            <div id="p7HLSwp_1" class="p7hls-wrapper">
                <div class="p7hls-item">New – Afternoon English Language Classes – <a href="http://smartkids.edu.vn/" target="_blank">Smartkids.edu.vn</a></div>
                <div class="p7hls-item">Thursday 08:30-10:00 FREE PLAY GROUP</div>
                <div class="p7hls-item">After School Activities ask the location Manager</div>
            </div>
        </div>
        <script type="text/javascript">P7_HLSop('p7HLS_1',1,8,1,1,250,2000);</script>
    </div> --}}
    {{-- <div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=187681425351598&autoLogAppEvents=1" nonce="lJKoxoqA"></script>

	<div class="preloader">
        <div class="cws_loader">
            <span>LOADING...</span>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
        </div>
    </div> --}}
	{{-- <a id="top"></a> --}}
	{{-- <div class="corporate-home-light container-fluid no-padding"> --}}
        <div id="layout">
            <div id="logo">
                <a href="index.html"><img src="landing/images/logo/kidlogo.png" alt="Smartkids - International Kindergarten Ho Chi Minh City, Saigon" width="220" height="73" class="scalable shadowLogo" title="Smartkids - International Kindergarten Ho Chi Minh City, Saigon"/></a>
            </div>
            <div id="top-navigation">
                @include('Home.Layout.Navbar')
            </div>
            <div id="content">

                @include('Home.Layout.Header')

                <div class="column-content fancyBlue border-top">
                    <h2 align="center">WORLD-CLASS INTERNATIONAL PRE-SCHOOL/ KINDERGARTEN<br>
                        WITH NORTH EUROPEAN PRINCIPLES IN HO CHI MINH CITY</h2>
                </div>
                @yield('content')

            </div>


            @include('Home.Layout.Footer')
        </div>


	{{-- </div> --}}



	<!-- JQuery v1.11.3 -->
     <!--<script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
    <script src="landing/js/p7TTMscripts.js"></script>
    <script src="landing/js/p7HLSscripts.js"></script>
    <script src="landing/js/p7PM3scripts.js"></script>
    <script src="landing/js/p7IR2scripts.js"></script>
    <script src="landing/js/p7STTscripts.js"></script>
    <script src="landing/js/p7EHCscripts.js"></script>
    <script src="landing/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="landing/js/osano.js" />
	<!-- Library JS -->
    <script src="landing/libraries/lib.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
                items:1,
                itemsDesktop:[1000,1],
                itemsDesktopSmall:[979,1],
                itemsTablet:[768,1],
                pagination:true,
                transitionStyle:"backSlide",
                autoPlay:true
            });
        });
    </script>
	<!--<script src="landing/js/mailchip.js"></script> -->

	{{-- <script type="text/javascript" src="landing/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="landing/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.navigation.min.js"></script> --}}
	<!--Maps -->

	{{-- <script src="landing/js/jquery-jvectormap.min.js"></script>
	<script src="landing/js/jquery-jvectormap-world-mill.js"></script>
	<script src="landing/js/wow.js"></script>
	<script src="landing/js/jquery.bxslider.min.js"></script>
	<script src="landing/js/theme.js"></script>
	<script src="landing/js/custom.js"></script> --}}
	{{-- @yield('script')
	<!-- Library - Theme JS -->
	<script src="landing/js/functions.js?v={{time()}}"></script>
	<script>
		$(window).on("load", function(){
			setInterval(function(){
				$('.preloader').fadeOut('zoom-in');
			}, 1500);

		});
	</script> --}}
</body>
</html>

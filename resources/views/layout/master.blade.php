<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Current Tech</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="favicon.ico" type="Current Tech">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/home_1.css" rel="stylesheet">
    <link href="css/listing.css" rel="stylesheet">
    <link href="css/product_page.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
    <link href="css/checkout.css" rel="stylesheet">
    <link href="css/account.css" rel="stylesheet">
    <link href="css/error_track.css" rel="stylesheet">
    <link href="css/faq.css" rel="stylesheet">
    <link href="css/leave_review.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
    

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page" class="theia-exception">

    @include('layout.navbar')
		
	<!-- /header -->
	
    @yield('content')
	
	<!-- /main -->
	
    @include('layout.footer')
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/sticky_sidebar.min.js"></script>
	<script src="js/specific_listing.js"></script>

    {{-- ---------------------Home-------------------------}}

	{{-- Home Page Specific Scripts --}}
    @if (Request::is('home'))
        <script src="js/carousel-home.min.js"></script>
    @endif


	{{-- videoBackground Page Specific Scripts --}}
    @if (Request::is('videoBackground'))
        <script src="js/modernizr.js"></script>
        <script src="js/video_header.min.js"></script>
        <script>
            // Video Header
            HeaderVideo.init({
                container: $('.header-video'),
                header: $('.header-video--media'),
                videoTrigger: $("#video-trigger"),
                autoPlayVideo: true
            });
        </script>
        <script src="js/isotope.min.js"></script>
        <script>
            // Isotope filter
            $(window).on('load',function(){
              var $container = $('.isotope-wrapper');
              $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
            });
            $('.isotope_filter').on( 'click', 'a', 'change', function(){
              var selector = $(this).attr('data-filter');
              $('.isotope-wrapper').isotope({ filter: selector });
            });
        </script>
    @endif

	{{-- verticalSlider Page Specific Scripts --}}
    @if (Request::is('verticalSlider'))
        <script src="js/carousel-home-2.js"></script>
    @endif

	{{-- gdprCookie Page Specific Scripts --}}
	@if (Request::is('gdprCookie'))
		<script src="js/carousel-home.js"></script>
		<script src="js/jquery.cookiebar.js"></script>
		<script>
			$(document).ready(function() {
				'use strict';
				$.cookieBar({
					fixed: true
				});
			});
		</script>
	@endif




    {{-- ---------------------ListingGrid-------------------------}}

	{{-- listingGrid1_FullWidth Page Specific Scripts --}}
	@if (Request::is('fullWidth1'))
		<script src="js/sticky_sidebar.min.js"></script>
		<script src="js/specific_listing.js"></script>
	@endif

	{{-- listingGrid2_FullWidth Page Specific Scripts --}}
	@if (Request::is('fullWidth2'))
		<script src="js/sticky_sidebar.min.js"></script>
		<script src="js/specific_listing.js"></script>
	@endif

	{{-- listingGrid3_Boxed Page Specific Scripts --}}
	@if (Request::is('boxed'))
		<script src="js/sticky_sidebar.min.js"></script>
		<script src="js/specific_listing.js"></script>
	@endif

    {{-- sidebarLeft Page Specific Scripts --}}
	@if (Request::is('sidebarLeft'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- sidebarRight Page Specific Scripts --}}
	@if (Request::is('sidebarRight'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- sidebarLeft2 Page Specific Scripts --}}
	@if (Request::is('sidebarLeft2'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- sidebarRight2 Page Specific Scripts --}}
	@if (Request::is('sidebarRight2'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif



    {{-- ---------------------ListingRow-------------------------}}

    {{-- rowSidebar_Left Page Specific Scripts --}}
	@if (Request::is('rowSidebar_Left'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- rowSidebar_Right Page Specific Scripts --}}
	@if (Request::is('rowSidebar_Right'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- rowSidebar_Left2 Page Specific Scripts --}}
	@if (Request::is('rowSidebar_Left2'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- rowSidebar_Extended Page Specific Scripts --}}
    @if (Request::is('rowSidebar_Extended'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif

    {{-- product_LargeImage Page Specific Scripts --}}
    {{-- @if (Request::is('product_LargeImage'))
        <script src="js/sticky_sidebar.min.js"></script>
        <script src="js/specific_listing.js"></script>
    @endif --}}

    {{-- product_Carousel Page Specific Scripts --}}
    @if (Request::is('product_Carousel'))
        <script  src="js/carousel_with_thumbs.js"></script>
    @endif

    {{-- product_StickyInfo Page Specific Scripts --}}
    @if (Request::is('product_StickyInfo'))
    <script src="js/sticky_sidebar.min.js"></script>
        <script>
            // Sticky sidebar
            $('#sidebar_fixed').theiaStickySidebar({
                minWidth: 991,
                updateSidebarHeight: false,
                additionalMarginTop: 90
            });
        </script>
    @endif



    {{-- ---------------------OtherPages-------------------------}}
    {{-- checkoutPage Page Specific Scripts --}}
    @if (Request::is('checkoutPage'))
        <<script>
            // Other address Panel
            $('#other_addr input').on("change", function (){
                if(this.checked)
                    $('#other_addr_c').fadeIn('fast');
                else
                    $('#other_addr_c').fadeOut('fast');
            });
        </script>
    @endif   

    {{-- createAccountPage Page Specific Scripts --}}
    @if (Request::is('createAccountPage'))
        <script>
            // Client type Panel
            $('input[name="client_type"]').on("click", function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        </script>
    @endif
    
    

    {{-- ---------------------ExtraPages-------------------------}}
    {{-- headerStyle_2 Page Specific Scripts --}}
	@if (Request::is('headerStyle_2'))
	    <script src="js/carousel-home.js"></script>
    @endif

    {{-- headerStyle_3 Page Specific Scripts --}}
	@if (Request::is('headerStyle_3'))
        <script src="js/carousel-home.js"></script>
    @endif

    {{-- headerStyle_4 Page Specific Scripts --}}
    @if (Request::is('headerStyle_4'))
        <script src="js/carousel-home.js"></script>
    @endif

    {{-- headerStyle_5 Page Specific Scripts --}}
    @if (Request::is('headerStyle_5'))
        <script src="js/carousel-home.js"></script>
    @endif

    {{-- signinModel Page Specific Scripts --}}
    @if (Request::is('signinModel'))
        <script src="js/carousel-home.js"></script>
    @endif

    {{-- about_2 Page Specific Scripts --}}
    @if (Request::is('about_2'))
        <script src="js/carousel-home.js"></script>
    @endif

    {{-- modalAdvertise Page Specific Scripts --}}
    @if (Request::is('modalAdvertise'))
        <script src="js/carousel-home.js"></script>
    @endif

    {{-- modalNewsletter Page Specific Scripts --}}
    @if (Request::is('modalNewsletter'))
        <script src="js/carousel-home.js"></script>
    @endif
		
</body>
</html>
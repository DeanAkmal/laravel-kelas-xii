<head>
  <title>{{ env('APP_NAME', 'REPAL MOVIE') }}</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="{{ env('APP_NAME', 'REPAL MOVIE') }}" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //for-mobile-apps -->
  <link href="{{ asset('template/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('template/css/medile.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('template/css/single.css') }}" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="{{ asset('template/css/contactstyle.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('template/css/faqstyle.css') }}" type="text/css" media="all" />
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}" />
  <!-- //font-awesome icons -->
  <!-- news-css -->
  <link rel="stylesheet" href="{{ asset('template/css/news.css') }}" type="text/css" media="all" />
  <!-- //news-css -->
  <!-- list-css -->
  <link rel="stylesheet" href="{{ asset('template/list-css/list.css') }}" type="text/css" media="all" />
  <!-- //list-css -->
  <!-- js -->
  <script type="text/javascript" src="{{ asset('template/js/jquery-2.1.4.min.js') }}"></script>
  <!-- //js -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{{ asset('template/js/move-top.js') }}"></script>
  <script type="text/javascript" src="{{ asset('template/js/easing.js') }}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <link href="{{ asset('template/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
  <script src="{{ asset('template/js/owl.carousel.js') }}"></script>
  <script>
    $(document).ready(function() { 
      $("#owl-demo").owlCarousel({
     
        autoPlay: 3000, //Set AutoPlay to 3 seconds
     
        items : 5,
        itemsDesktop : [640,5],
        itemsDesktopSmall : [414,4]
     
      });
     
    }); 
  </script> 

  @stack('style')
  </head>
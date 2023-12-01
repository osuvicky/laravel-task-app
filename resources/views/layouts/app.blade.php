<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Tasky') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/slicknav.css">

    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/owl.carousel.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/responsive.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

  </head>
  <body>

    

    <!-- Page Content -->
    {{ $header }}
    {{ $slot }}
    

    
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('')}}assets/js/jquery-min.js"></script>
    <script src="{{asset('')}}assets/js/popper.min.js"></script>
    <script src="{{asset('')}}assets/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}assets/js/jquery.counterup.min.js"></script>
    <script src="{{asset('')}}assets/js/waypoints.min.js"></script>
    <script src="{{asset('')}}assets/js/wow.js"></script>
    <script src="{{asset('')}}assets/js/owl.carousel.min.js"></script>
    <script src="{{asset('')}}assets/js/nivo-lightbox.js"></script>
    <script src="{{asset('')}}assets/js/jquery.slicknav.js"></script>
    <script src="{{asset('')}}assets/js/main.js"></script>
    <script src="{{asset('')}}assets/js/form-validator.min.js"></script>
    <script src="{{asset('')}}assets/js/contact-form-script.min.js"></script>
    <script src="{{asset('')}}assets/js/summernote.js"></script>
    @stack('modals')

    @livewireScripts
  </body>

</html>
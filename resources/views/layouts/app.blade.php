<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <meta name="title" content="Erfolgskompass: Führung, Wachstum und Resilienz | Know4you" />
    <meta name="description" content="Know4You – Ihre Plattform für Führung, Karriere, Kommunikation, Produktivität, Wachstum und Resilienz im Berufsleben." />
    <meta name="keywords" content="leadership, career development, communication, collaboration, productivity, efficiency, business growth, resilience, professional life" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="revisit-after" content="7 days" />
    <meta name="author" content="Softbery Solutions" />
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Erfolgskompass: Führung, Wachstum und Resilienz | Know4you" />
    <meta property="og:site_name" content="Know4you" />
    <meta property="og:url" content="crunch.softbery.com" />
    <meta property="og:description" content="Know4You – Ihre Plattform für Führung, Karriere, Kommunikation, Produktivität, Wachstum und Resilienz im Berufsleben." />
    <!-- <meta property="og:image" content={{ asset('assets/images/know4you_og_image.png') }}> -->
    <meta property="og:image" content="{{ asset('assets/images/know4you_og_image.png') }}">

    <meta property="og:url" content="{{ url('/')}}" />
    <meta property="og:type" content="business.business" />
    <meta property="og:site_name" content="Know4you" />
    
    <title>@yield('title')</title>
    
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fustat:wght@200..800&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <!-- SlickNav Css -->
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" media="screen" />
    <!-- Animated Css -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}" />
    <!-- Main Custom Css -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
      .video-container {
        position: relative;
        display: inline-block;
        width: 100%;
      }
    </style>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="{{ asset('assets/js/script.js') }}"></script> <!-- Jquery Library File -->
      <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
      <!-- Bootstrap js file -->
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <!-- Validator js file -->
      <script src="{{ asset('assets/js/validator.min.js') }}"></script>
      <!-- SlickNav js file -->
      <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
      <!-- Swiper js file -->
      <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
      <!-- Counter js file -->
      <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
      <!-- Magnific js file -->
      <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- SmoothScroll -->
      <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
      <!-- Parallax js -->
      <script src="{{ asset('assets/s/parallaxie.js') }}"></script>
      <!-- MagicCursor js file -->
      <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
      <script src="{{ asset('assets/js/magiccursor.js') }}"></script>
      <!-- Text Effect js file -->
      <script src="{{ asset('assets/js/SplitText.js') }}"></script>
      <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
      <!-- YTPlayer js File -->
      <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
      <!-- Wow js file -->
      <script src="{{ asset('assets/js/wow.js') }}"></script>
      <!-- Main Custom js file -->
      <script src="{{ asset('assets/js/function.js') }}"></script>
      <script src="{{ asset('assets/js/theme-panel.js') }}"></script>
      <script>
        window.addEventListener("load", function() {
          setTimeout(function() {
            var myModal = new bootstrap.Modal(document.getElementById("myModal"));
            myModal.show();
          }, 5000); //
        });
      </script>
      <script>
        const video = document.getElementById("myVideo");
        const muteButton = document.getElementById("muteButton");
        const muteIcon = muteButton.querySelector("i");
        const muteText = muteButton.querySelector("span");
        muteButton.addEventListener("click", () => {
          if (video.muted) {
            video.muted = false;
            muteIcon.classList.replace("fa-volume-xmark", "fa-volume-high");
            // muteText.textContent = 'Mute';
          } else {
            video.muted = true;
            muteIcon.classList.replace("fa-volume-high", "fa-volume-xmark");
            // muteText.textContent = 'Unmute';
          }
        });
      </script>
    </body>
    </html>

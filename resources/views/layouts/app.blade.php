<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="margin-top:-150px;  width: 100%;   position: absolute;">
      <source src="videos/testt.mp4" type="video/mp4">
     </video>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light twt1 shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="./images/logo2.png" class="img-fluid" style="     margin-top: -14px;    width: 190px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav twt125 ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/home') }}">Dashboard</a>
                                     </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/') }}">Home</a>
                                     </li>
                                     <li class="nav-item ">
                                        <a class="nav-link xdb" href="{{ asset('./freelancers') }}">Crew-Members</a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('./editprofile') }}">User-Profile</a>
                                    </li>

                                    


                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    
    <div class="footer bg-light" style=" margin-top: 405px;  padding-top: 40px; padding-bottom:40px; ">
      <div class="container" style="text-align: center;">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo1.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Company</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Industrial</a></li>
                  <li><a href="#">Construction</a></li>
                  <li><a href="#">Remodeling</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Partners</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->

  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./js/jquery-ui.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/jquery.stellar.min.js"></script>
  <script src="./js/jquery.countdown.min.js"></script>
  <script src="./js/bootstrap-datepicker.min.js"></script>
  <script src="./js/jquery.easing.1.3.js"></script>
  <script src="./js/aos.js"></script>
  <script src="./js/jquery.fancybox.min.js"></script>
  <script src="./js/jquery.sticky.js"></script>
  <script src="./js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>



</body>

</body>
</html>


<style>

    .xdb{
        background:orange;
        border: 1px solid orange;
        border-radius:20px;
    }

    .twt125{
        margin-left: 116px;
    }

    .navbar-light .navbar-nav .nav-link{
        font-family: Futura, "Trebuchet MS", Arial, sans-serif !important;
        color: white;
    font-weight: bold;
    }

    li{
        padding-right:20px;
        font-family: Futura, "Trebuchet MS", Arial, sans-serif !important;

    }

    
     a{
      font-family: Futura, "Trebuchet MS", Arial, sans-serif;
     }

     .twt1{
        height: 70px;
    background: black;
     }
</style>
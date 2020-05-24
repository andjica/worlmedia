<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The best database platform for Media crew members</title>
  <link rel="icon" type="image/png" href="{{asset('/')}}/images/logo1.png">
  <meta name="description" content="World Media Crew is new database platform. You can contact people from all the 46 countries all around the world.">
  <meta name="keywords" content="World Media Crew platform, users, all around world">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<video playsinline="playsinline" autoplay="autoplay"  poster="../images/3627634.jpg" class="responsic" muted="muted" loop="loop" >
      <source src="videos/testt.mp4" type="video/mp4">
     </video>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light twt1 shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/')}}images/logo3.png" class="img-fluid" style="     margin-top: -14px;    width: 122px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse nekpukne" id="navbarSupportedContent">
                    

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
                                        <a class="nav-link" href="{{ asset('./editprofile') }}">My Profile</a>
                                    </li>
                                     <li class="nav-item ">
                                        <a class="nav-link xdb" href="{{ asset('./allmembers') }}">Crew-Members</a>
                                    </li>
                                     
                                    <li class="nav-item">
                                        <a class="nav-link" href="#invite">Invite-friends</a>
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


    <div class="wrapper" id="invite">
        <div class="content u-flexCenter u-sizeViewHeightMin100">
            <div class="shareUrl u-verticalGrid u-marginAuto u-size1040">
            <header class="shareUrl-header">
            <h3 class="">Copy the link and win huge prices!</h3>

            </header>
            <div class="shareUrl-body">
                <div class="container">
                <!-- COPY INPUT -->
                <input class="shareUrl-input js-shareUrl" type="text" readonly="readonly" />
                </div>
            </div>
            
            </div>
        </div>
    </div>


    <div class="footer bg-light nopp" style="  padding-top: 40px; padding-bottom:40px; ">
      <div class="container" style="text-align: center;">
      <div class="row">
          <div class="col-lg-3">
            <p class="mb-4" style="    margin-top: -24px;"><img src="{{asset('/')}}images/logo1.png" alt="Image" class="img-fluid" alt="world media crew"></p>
            <p>The number #1 place to hire and find your right media crew member in the world!</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>World media crew</span></h3>
            <ul class="list-unstyled">
                <li><a href="{{asset('/')}}">Home</a></li>
                <li><a href="{{asset('/services')}}" title="Challenger from world media crew">Challenges</a></li>
                <li><a href="{{asset('/freelancers')}}" title="Members from world media crew">Crew-Members</a></li>
                {{-- <li><a href="{{asset('/blog')}}" title="Blog Page for World Media Crew platform">Blog</a></li> --}}
                <li><a href="{{asset('/contact-us')}}" title="Contact Us">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{asset('/register')}}" title="Register in World Media Crew platform">Make an account</a></li>
                  <li><a href="{{asset('/login')}}" title="Login page">Login with account</a></li>
                  <li><a href="{{asset('/services')}}" title="Challengers page">Challengers</a></li>
                  <li><a href="{{asset('/about')}}" title="About World Media Crew platform">about us</a></li>

              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{asset('/contact-us')}}" title="Contact Us">Contact</a></li>
                  <li><a href="{{asset('/Contact-us')}}" title="Contact Us">Support Community</a></li>
                  <li><a href="{{asset('/terms')}}" title="Contact Us">Terms & Conditions</a></li>
                  
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                   Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved World Media Crew Members
                    <!--| This website is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://dfambusiness.com" target="_blank">DFAM Digital Agency</a>-->
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
<script>
(function() {
    
    // Create reusable copy fn
    function copy(element) {
        
        return function() {
          document.execCommand('copy', false, element.select());
        }
    }
    
    // Grab shareUrl element
    var shareUrl = document.querySelector('.js-shareUrl');

    // Create new instance of copy, passing in shareUrl element
    var copyShareUrl = copy(shareUrl);
    
    // Set value via markup or JS
    shareUrl.value = "https://worldmediacrew.com/";
  
    // Click listener with copyShareUrl handler
    shareUrl.addEventListener('click', copyShareUrl, false);
  
}());
</script>


 



</body>

</body>
</html>


<style>

    @media screen and (min-width:768px){
      .nekpukne{
        position: absolute;
    right: 16%;
      }
    }
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

     .wrapper {
  background: white;
}
p {
  line-height: 1.3;
}

.shareUrl {
  width: 100%;
  padding: 40px 20px;
  text-align: center;
}
.shareUrl-header {
  margin-bottom: 40px;
}
.shareUrl-headerText {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 22px;
}
.shareUrl-subtext {
  margin-top: 10px;
  font-size: 14px;
}
.shareUrl-body {
  margin-bottom: 70px;
}
.shareUrl-input {
  width: 100%;
  padding: 10px 0;
  border: 2px solid rgba(0,0,0,.09);
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: black;
  background: $transparent;
  border-radius: 3px;
  transition: all 300ms ease;

}

@media screen and (min-width: 568px) {
  .shareUrl {
    padding: 70px 20px;
  }
  .shareUrl-input {
    max-width: 100%;
    font-size: 56px;
  }
  .shareUrl-headerText {
    font-size: 32px;
  }
}

.u-verticalGrid {
  display: flex;
  flex-flow: column wrap;
}
.u-flexCenter {
  display: flex;
  align-items: center !important;
}
.u-flexCenterHorizontal {
  display: flex;
  justify-content: center !important;
}
.u-sizeViewHeightMin100 {
  min-height: auto;
}
.u-size1040 {
  max-width: 1040px;
}
.u-marginAuto {
  margin: 0 auto;
}


</style>
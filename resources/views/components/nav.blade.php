<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap ">
<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<div class="header-top bg-light ">
<div class="container tw24 ">
<div class="row align-items-center">
<div class="col-5 col-lg-3 strava">
<a href="{{asset ('/')}}">
<img src="{{asset('/')}}images/logo1.png" alt="Image" class="img-fluid jebemga">

</a>
</div>



<div class="col-6 d-block d-lg-none text-right">
<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
  <span class="icon-menu h3 usta"></span></a>
</div>
</div>
</div>


    
   
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block radi"  style="position: fixed;
    width: 100%; ">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mx-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
              <li>

         <a href="{{asset('/')}}">
                <img src="{{asset('/')}}images/logo3.png" rel="canonical" alt="Image" title="Logo world media crew"class="img-fluid new-rep druga-clasa img-logo">
          </a>
          </li>
             <!-- <li class="active">
                  <a href="{{ asset('/')}}" class="nav-link text-left">Home</a>
                </li>-->
               
                <li>
                  <a href="{{ asset('/services')}}" rel="canonical" class="nav-link text-left" title="Challenger from world media crew">Challenges</a>
                </li>
                

                <li>
                    <a href="{{ asset('/allmembers')}}" rel="canonical" class="nav-link text-left" title="Members from world media crew" style="background: deepskyblue;  padding: 10px;  border-radius: 20px;">Crew Members</a>
                </li>
                <!--<li>
                  <a href="{{ asset('/aboutus')}}" class="nav-link text-left">About Us</a>
                </li>-->
                
                
                <li><a href="{{ asset('/register')}}" rel="canonical" class="nav-link text-left" title="Register in world media crew platform">Join Us</a></li>
               
                  
                  @if(auth()->user() && auth()->user()->role_id == 2)
                  <li><a href="{{ asset ('/editprofile')}}" class="nav-link text-left">Edit profile</a></li>
                  <li><a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
                  @elseif(auth()->user()  && auth()->user()->role_id == 1)
                  <li><a href="{{ asset ('/admin-home')}}" class="nav-link text-left">Admin panel</a></li>
                  <li><a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
                  @else
                    <li><a href="{{route('login')}}" rel="canonical">Login</a></li>
                  @endif
                  </li>
                  <li>
                    <a href="{{ asset('/contact-us')}}" rel="canonical" class="nav-link text-left" title="Contact World Media Crew"> Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
  
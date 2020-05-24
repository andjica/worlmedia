
<div class="site-wrap jbt">
<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle" ></span>
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
<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black" >
  <span class="icon-menu h3 usta" style="    color: black !important;"></span></a>
</div>
</div>
</div>



  
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" style="    background: black;" role="banner">

      <div class="container">
        <div class="d-flex align-items-right samodesno">
          
        <div class="mx-right" style="width:100%;">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-right d-none pl-0 d-lg-block">
              <li class="samolevo">
              <a href="{{asset ('/')}}">
                <img src="{{asset('/')}}images/logo3.png" alt="Image" class="img-fluid new-rep nemga img-logo1">
              </a>
                </li>
              <li>
                  <a href="{{ asset ('/')}}" class="nav-link text-left">Home</a>
                </li>
               
                <li>
                  <a href="{{ asset ('/services')}}" class="nav-link text-left">Challenges</a>
                 
                </li>

                <li>
                    <a href="{{ asset ('/allmembers')}}" class="nav-link text-left" style="  padding: 10px;  border-radius: 20px;">Crew Members</a>
                </li>
               
              
                  @if(auth()->user() && auth()->user()->role_id == 2)
                  <li><a href="{{ asset ('/editprofile')}}" class="nav-link text-left">Edit profile</a></li>
                  <li><a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
                  @elseif(auth()->user()  && auth()->user()->role_id == 1)
                  <li><a href="{{ asset ('/admin-home')}}" class="nav-link text-left">Admin panel</a></li>
                  <li><a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
                  @else
                    <li><a href="{{route('login')}}">Login</a></li>
                  @endif
                  </li>
                  <li><a href="{{ asset ('/contact-us')}}" class="nav-link text-left">Help</a></li>

              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
<style>
@media screen and (min-width:768px){
  .samolevo{
    float: left;
  }
}
</style>


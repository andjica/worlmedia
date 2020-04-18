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
<div class="col-6 col-lg-3">
<a href="{{asset ('/')}}">
<img src="images/logo1.png" alt="Image" class="img-fluid">

</a>
</div>
<div class="col-lg-3 d-none d-lg-block">
<div class="quick-contact-icons d-flex">
<div class="icon align-self-start">
<span class="icon-location-arrow text-primary"></span>
</div>
<div class="text">
<span class="h4 d-block">San Francisco</span>
<span class="caption-text">Mountain View, Fake st., CA</span>
</div>
</div>
</div>
<div class="col-lg-3 d-none d-lg-block">
<div class="quick-contact-icons d-flex">
<div class="icon align-self-start">
<span class="icon-phone text-primary"></span>
</div>
<div class="text">
<span class="h4 d-block">000 209 392 312</span>
<span class="caption-text">Toll free</span>
</div>
</div>
</div>
<div class="col-lg-3 d-none d-lg-block">
<div class="quick-contact-icons d-flex">
<div class="icon align-self-start">
<span class="icon-envelope text-primary"></span>
</div>
<div class="text">
<span class="h4 d-block"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="264f48404966414b474f4a0845494b">[email&#160;protected]</a></span>
<span class="caption-text">Gournadi, 1230 Bariasl</span>
</div>
</div>
</div>
<div class="col-6 d-block d-lg-none text-right">
<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
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

<a href="{{asset ('/')}}">
      <img src="images/logo2.png" alt="Image" class="img-fluid new-rep" style="     max-width: 100%;
    height: 50px;
    margin-top: -20px;">
 </a>
</li>
              <li class="active">
                  <a href="{{ asset ('/')}}" class="nav-link text-left">Home</a>
                </li>
               
                <li>
                  <a href="{{ asset ('/services')}}" class="nav-link text-left">Services</a>
                </li>

                <li>
                    <a href="{{ asset ('/freelancers')}}" class="nav-link text-left" style="background: deepskyblue;  padding: 10px;  border-radius: 20px;">Crew Members</a>
                </li>
                <li>
                  <a href="{{ asset ('/aboutus')}}" class="nav-link text-left">About Us</a>
                </li>
                
                
                <li><a href="{{ asset ('/blog')}}" class="nav-link text-left">Blog</a></li>
                <li>
                    <a href="{{ asset ('/contact')}}" class="nav-link text-left">Contact</a>
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
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
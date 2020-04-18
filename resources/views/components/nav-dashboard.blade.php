

  <div class="site-wrap jbt">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


  
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" style="    background: black;" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mx-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
              <li>

                <a href="index.html">
                    <img src="images/logo2.png" alt="Image" class="img-fluid" style="     max-width: 100%;
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
                    <a href="{{ asset ('/freelancers')}}" class="nav-link text-left" style="background: orange;  padding: 10px;  border-radius: 20px;">Crew Members</a>
                </li>
               
                 <li><a href="{{ asset ('/blog')}}" class="nav-link text-left">Blog</a></li>
              
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

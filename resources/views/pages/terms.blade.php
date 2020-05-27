@include('components.head')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap ">
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


    
   
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target bg-black d-none pl-0 d-lg-block radi"  style="position: fixed;
    width: 100%; ">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mx-right" style="width:100%;">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-right d-none pl-0 d-lg-block">
              <li class="samolevo">

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
                    <a href="{{ asset('/allmembers')}}" rel="canonical" class="nav-link text-left" title="Members from world media crew" style=" padding: 10px; background:deepskyblue; border-radius: 20px;">Crew Members</a>
                </li>
                <!--<li>
                  <a href="{{ asset('/aboutus')}}" class="nav-link text-left">About Us</a>
                </li>-->
                
                
               
                  
                  @if(auth()->user() && auth()->user()->role_id == 2)
                  <li><a href="{{ asset ('/editprofile')}}" class="nav-link text-left">My profile</a></li>
                  <li><a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
                  @elseif(auth()->user()  && auth()->user()->role_id == 1)
                  <li><a href="{{ asset ('/admin-home')}}" class="nav-link text-left">Admin panel</a></li>
                  <li><a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
                  @else
                    <li><a href="{{route('login')}}" rel="canonical">Login</a></li>
                    <li><a href="{{ asset('/register')}}" rel="canonical" class="nav-link text-left" title="Register in world media crew platform">Join Us</a></li>

                  @endif
                  </li>
                  <li>
                    <a href="{{ asset('/contact-us')}}" rel="canonical" class="nav-link text-left" title="Contact World Media Crew"> Help</a>
                  </li>
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
<div class="section" style="margin-top:120px;">
    <div class="container">
        <div class="row">
            <h1>Terms and Conditions</h1>
            <p>These terms and conditions are valid for private persons as well as companies that register a
                profile at WMC
                This website is created to unite international media and film productions with professional
                crewmembers on a worldwide basis.
                By using this site, you agree to comply with and be bound by the following terms and conditions of
                use.</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>1.0</h1>
            <p>Please review these terms and conditions carefully. If you do not agree to these terms and
conditions, you should not use this site.
This Agreement specifies the Terms and Conditions for access to and use of the site
worldmediacrew.com and describes the terms and conditions applicable to your access to and use
of the Site.
These Terms of Agreement (“Agreement”) set forth the legally binding terms for your use of the
World Media Crew (the “Services”). By using the services, you agree to be bound by this
Agreement, whether you are not registered (“Visitor”) or you are a registered or subscribing user
(“Member”). The term “User” refers to both Visitors and members.</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>2.0</h1>
            <p>You are only authorised to use
the Services if you agree to abide by all applicable laws and to this Agreement.
World Media Crew reserves the right, at its discretion, to make changes to any part of the Site. Due
to its policy of updating and improving the site, World Media Crew may wish to change these
Terms (including those relating to your use of the Content). When terms are changed, they will be
made effective by posting them on the Site. If you use the Services after World Media Crew has
posted or notified you of the changes, you are agreeing to be bound by those changes.
When using the services of WMC after WMC has posted changes or has notified you of said
changes, you automatically agree to be bound by those changes.</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>3.0</h1>
            <p>
            By creating a profile on WMC, you agree to the following
            WMC is given permission to publish your name, profile picture, content and contact information in
            the WMC database in order to be found by other crewmembers.

           WMC can not be held responsible for any business or financial agreement made by parties through
           the site of WMC.
WMC can not guarantee the quality delivered by database registered crewmembers.
WMC will not require a fee for parties united through the website coming to a financial agreement.
Your profile will be blocked or removed when:
Your profile contains incorrect data.
Pornographic texts, photos, videos or any other content related to pornography are placed.
The annual membership fee is not paid on time.
Termination of membership and removing of your account with WMC.
You can terminate your membership and remove your account at any time.
When you decide to stop your profile, it will stay active until the membership ends and will then be
subsequently removed.
In case you would not want to wait till the end of your membership but want to remove your profile
immediately, you can do so easily in profile settings.
In case of ending a registration or removing an account before the membership ends, there will be
no refund.
WMC has the right to refuse, block or remove profiles.
</p>
        </div>
    </div>
</div>
 

<div class="section">
    <div class="container">
        <div class="row">
            <h1>4.0</h1>
            <p>
            2. Privacy
Some parts of the information you give (photos, profile information, contact information) can reveal
your nationality, ethnic background, religion etc. This is your own choice and will therefore be your
own responsibility. The data you reveal will not be exchanged with other parties and will stay within
WMC.
The rights of the materials you use on your profile page like photos, logos, video images in your
show reel, texts and names in your CV, contact information of references, graphics, music etc, are 
to be justified by you to third parties and owners of these materials. WMC cannot be held
accountable for the rights of the materials used by you.
New members are required to choose a password.You are solely responsible for any and all use of
your password and account. You agree not to use the account, username, or password of another
member at any time or to disclose your password to any third party. You agree to notify WMC
immediately if you suspect any unauthorised use of your account or access to your password.
World Media Crew shall not, in any circumstances, be liable whether in contract, tort, misuse or
otherwise for any indirect, special or consequential damages, howsoever arising
</p>
        </div>
    </div>
</div>



<div class="section">
    <div class="container">
        <div class="row">
            <h1>5.0</h1>
            <p>
            Intended Audience
This website is intended for adults only.
Therefore all members should be over 16 and be able to prove so when asked.
            5. Indemnification
You agree to indemnify, defend and hold WMC and our partners, employees, and affiliates,
harmless from any liability, loss, claim and expense, including reasonable attorney’s fees, related
to your violation of this Agreement and or use of the Site.
6. Services
These services are owned and operated by World Media Crew. World Media Crew is hosted in the
Netherlands.
The Services are provided as-is and as available and World Media Crew expressly disclaims any
warranty of fitness for a particular purpose or non-infringement. World Media Crew cannot
guarantee and does not promise any specific results from use of the Services.
There are two categories of membership described below. World Media Crew reserves the right to
expand or amend these categories at its sole discretion. By accessing the World Media Crew all
Members and Visitors are agreeing to these terms.
Personal profile page
This membership is based on a one year subscription
Company page
This membership is based on a one year subscription
</p>
        </div>
    </div>
</div>



@include('components.footer')

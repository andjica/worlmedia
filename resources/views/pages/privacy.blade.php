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


    
   
      


      
      <div class="site-navbar py-2 js-sticky-header bg-black site-navbar-target d-none pl-0 d-lg-block radi"  style="position: fixed;
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
    <div class="section" style="margin-top:120px;">
    <div class="container">
        <div class="row">
            <h1>PRIVACY POLICY</h1>
            <p>


 
World Media Crew respects the privacy of its website visitors, in particular their rights regarding the automatic processing of personal data. We have therefore formulated and implemented a policy on complete transparency with our customers regarding the processing of personal data, its purpose(s) and the possibilities to exercise your legal rights in the best possible way.
 
If you require any additional information about the protection of personal data, please visit the website of the Dutch Data Protection Authority (Autoriteit Persoonsgegevens): https://autoriteitpersoonsgegevens.nl/nl.
 
Until you accept the use of cookies and other tracking devices, we will not place any non-anonymised analytical cookies and / or tracking cookies on your computer, mobile phone or tablet.
With the continued visit of this website you accept these terms of use and you accept the use of cookies and other tracking systems, unless we have provided for another method of accepting cookies on our website.  
 
The current available version of this privacy policy is the only version that applies while visiting our website until a new version replaces the current version.

</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>Article 1 - Definitions</h1>
            <p>
            Access to and use of the website are strictly personal. You will refrain from using the data and information of this website for your own commercial, political or advertising purposes, as well as for any commercial offers, in particular unsolicited electronic offers.  

</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>Article 2 - Access to the website</h1>
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
            <h1>Article 3 - Website content  </h1>
            <p>
            All brands, images, texts, comments, illustrations (animated) images, video images, sounds and all the technical applications that can be used to operate this website and more generally all the components used on this website, are protected by the laws on intellectual property. Any reproduction, repetition, use or modification, by any means whatsoever, of all or just part of it, including technical applications, without the prior written permission of the controller, is strictly prohibited. The fact that the controller may not take immediate action against any infringement, can not be considered as a tacit consent, nor of a waiver of any right to prosecute the infringing party.
</p>
        </div>
    </div>
</div>
 

<div class="section">
    <div class="container">
        <div class="row">
            <h1>Article 4 - Management of the website</h1>
            <p>
            For the purpose of proper management of the site, the controller may at any time:
•	suspend, interrupt, reduce or decline the access to the website for a particular category of visitors
•	delete all information that may disrupt the functioning of the website or conflicts with national or international laws or is contrary to internet etiquette
•	make the website temporarily unavailable in order to perform updates

</p>
        </div>
    </div>
</div>



<div class="section">
    <div class="container">
        <div class="row">
            <h1>Article 5 - Responsibilities</h1>
            <p>
            1.	The controller is not liable for any failure, disturbances, difficulties or interruptions in the functioning of the website, causing the (temporary) inaccessibility of the website or of any of its functionalities. You, yourself, are responsible for the way you seek connection to our website. You need to take all appropriate steps to protect your equipment and data against hazards such as virus attacks on the Internet. Furthermore, you are responsible for which websites you visit and what information you seek.
2.	The controller is not liable for any legal proceedings taken against you:
•	because of the use of the website or services accessible via the Internet
•	for violating the terms of this privacy policy
3.	The controller is not liable for any damages that incur to you or third parties or your equipment, as a result of your connection to or use of the website and you will refrain from any subsequent (legal) action against the controller.
4.	If the controller is involved in a dispute because of your (ab)use of this website, he is entitled to (re)claim all subsequent damages from you.

</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>            Article 6 - Collection of data
</h1>
            <p>
1.	Your personal data will be collected by World Media Crew and (an) external processor(s) . 
2.	Personal data means any information relating to an identified or identifiable natural person (‘data subject’). 
3.	An identifiable natural person is one who can be identified, directly or indirectly, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity of that natural person.
4.	The personal data that are collected on the website are used mainly by the collector in order to maintain a (commercial) relationship with you and if applicable in order to process your orders. They are recorded in an (electronic) register. 


</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>            Article 7 - Your rights regarding information
</h1>
            <p>
1.	Pursuant to Article 13 paragraph 2 sub b GDPR each data subject has the right to information on and access to, and rectification, erasure and restriction of processing of his personal data, as well as the right to object to the processing and the right to data portability. 
2.	You can exercise these rights by contacting us at support@worldmediacrew.com.
3.	Each request must be accompanied by a copy of a valid ID, on which you put your signature and state the address where we can contact you. 
4.	Within one month of the submitted request, you will receive an answer from us. 
5.	Depending on the complexity and the number of the requests this period may be extended to two months.


</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>                        Article 8 - Legal obligations

</h1>
            <p>
1.	In case of infringement of any law or regulation, of which a visitor is suspected and for which the authorities require the personal data collected by the collector, they will be provided to them after an explicit and reasoned request of those authorities, after which these personal data do not fall anymore under the protection of the provisions of this Privacy policy.
2.	If any information is necessary in order to obtain access to certain features of the website, the controller will indicate the mandatory nature of this information when requesting these data.


</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>                       Article 9 - Collected data and commercial offers

</h1>
            <p>
1.	You may receive commercial offers from the collector. If you do not wish to receive them (anymore), please send us an email to the following address: support@worldmediacrew.com.
2.	Your personal data will not be used by our partners for commercial purposes.   
3.	If you encounter any personal data from other data subjects while visiting our website, you are to refrain from collection, any unauthorized use or any other act that constitutes an infringement of the privacy of the data subject(s) in question. The collector is not responsible in these circumstances.



</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h1>                       Article 10 - Data retention


</h1>
            <p>
 
 The collected data are used and retained for the duration determined by law.
 



</p>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <h1>                                  Article 11 - Cookies


</h1>
            <p>
1.	A cookie is a small text file placed on the hard drive of your electronic device upon visiting our website. A cookie contains data so you can be recognized as a visitor when you are visiting our website. It enables us to adjust to your needs and it facilitates you to log in on our website. When you visit our website, we inform you about the use of cookies. By continuing to use our website you accept its use, unless we ask permission by other means. Your consent is valid for a period of thirteen months. 
2.	We use the following types of cookies on our website:
- Functional cookies: like session and login cookies to collect session and login information.     
- Anonymised Analytic cookies: to obtain information regarding the visits to our website, like numbers of visitors, popular pages and topics. In this way we can adjust our communication and information to the needs of our visitors. We can not see who visits our sites or from which personal device the visit has taken place.
3.	Specifically, we use the following cookies on our website:
No other cookies
4.	When you visit our website, cookies from the controller and / or third parties may be installed on your equipment. 
5.	For more information about using, managing and deleting cookies for each electronic device, we invite you to consult the following link:  https://autoriteitpersoonsgegevens.nl/nl/onderwerpen/internet-telefoon-tv-en-post / cookies # faq



</p>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <h1>                           Article 12 - Imagery and products offered



</h1>
            <p>
 
 You cannot derive any rights from the imagery that accompanies any offered product on our website.
  
  
 


</p>
        </div>
    </div>
</div>



<div class="section">
    <div class="container">
        <div class="row">
            <h1>                                        Article 13 - Applicable Law



</h1>
            <p>
 
 These conditions are governed by Dutch law. The court in the district where the collector has its place of business has the sole jurisdiction if any dispute regarding these conditions may arise, save when a legal exception applies.
  
 

 
 <h1> Article 14 - Contact </h1>
 
 <p>For questions, product information or information about the website itself, please contact: Support , support@worldmediacrew.com .</p>
  
 

</p>
        </div>
    </div>
</div>


@include('components.footer')


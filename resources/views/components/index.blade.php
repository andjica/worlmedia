<div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
              <h1>The best database platform for Media crew members</h1>
              <p>On our platform you will find the right media crew member you need!, Register quick and search for the right crew member.</p>
              <p><a href="{{asset ('/aboutus')}}" class="btn btn-primary py-3 px-5" style="background:orange;" title="About World Media Crew Members">Read More</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>You will find the right crew member here</h1>
              <p> Look for you right crew member easy on our platform</p>
              <p><a href="{{asset ('/freelancers')}}" class="btn btn-primary py-3 px-5" style="background:orange;">See Members</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/welcome.jpg" alt="Image" class="img-fluid" style="    border-top-right-radius: 120px;
    border-bottom-left-radius: 120px;">
          </div>
          <div class="col-md-6">
        
            <h1 class="heading-92913 text-black">About World Media Crew Members </h1>
            <p>We have the worlds leading platform for media crew members, all the categories are there for everyone that is working in the media industrie. You can contact people from all the 46 countries all around the world.</p>
            <p>We have made this platform so user friendly that it is very easy to use and for a very reasonable price you can join the community to gain more jobs in the media world!
              
            <Br>
          We also have over 100.000 visitors a month on our platform, so it is very easy to generate more customers and clients through our platform! Make sure you make an account to stay updated!</p>
            <p><a href="{{asset ('/freelancers')}}" class="btn btn-primary py-3 px-4">Explore oppertunity's</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5" style="    text-align: center;">
      <div class="container">
        <div class="row ">
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-yacht" style="color:orange;"></span>
              </span>
              <h3>Fast and smooth platform </h3>
              <p> The platform is easy to use and everywhere available, if you want to look for the right media crew member, you will find it easy on our platform</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-shield"></span>
              </span>
              <h3>20 Years of Experience</h3>
              <p>With over 20 years of experience in the media, we know exactly what the needs and demands are to succeed for the media crew members.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-captain" style="color:orange;"></span>
              </span>
              <h3>User friendly</h3>
              <p>World Media Crew, is very user friendly and very easy to use. All you have to do is register and that is it.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-image overlay h76" style="background-image: url('images/5.jpg');">
      <div class="container">
        <div class="row res" >
          <div class="col">
          @include('components.search')

          </div>
        </div>
      </div>
    </div>

      <section id="carousel-random">
          @include('components.slider-random')
      </section>

    
    

   


    <div class="site-section bg-image overlay" style="    background-image: url(./images/4.jpg);
    background-size: contain;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-white">Get In Touch With Us</h2>
            <p class="lead text-white"></p>
                <a href="{{asset('/contact-us')}}" class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
<style>

@media screen and (max-width:468px){
  .res{
    display:block;
  }

  .dab{
    height: 80px;
  }

  .new-rep{
    display:none;
  }
}
  .rondje{
    border-radius:100%;
  }
  .card{
    border:none !important;
  }


</style>
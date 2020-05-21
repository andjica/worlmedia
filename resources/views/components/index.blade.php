

<div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
              <h1>The right database platform for Media crew members</h1>
              <p>On our platform you will find the right media crew member you need!, Register quick and search for the right crew member.</p>
              <p><a href="{{asset ('./about')}}" class="btn btn-primary py-3 px-5" style="background:orange;" title="About World Media Crew Members">Read More</a></p>
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
              <p><a href="{{asset ('/allmembers')}}" class="btn btn-primary py-3 px-5" style="background:orange;">See Members</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section">
      <div class="container" style="text-align: center;">
      <h1>What we offer our Crew Members</h1>
        <div class="row">
          <div class="col-md-3">
            <img src="./images/12.jpeg" class="img-fluid">
            <h3>Save time & Money</h3>
            <p>By creating an account on our platform you will save alot of time and money to get nice jobs!</p>
          </div>
          <div class="col-md-3">
            <img src="./images/13.jpeg" class="img-fluid">
            <h3>Create Your Profile</h3>
            <p>On our platform you can create your unique and custom profile to impress you job-giver!</p>
          </div>
          <div class="col-md-3">
            <img src="./images/15.jpeg" class="img-fluid">
            <h3>Search Crew Profiles</h3>
            <p>With our handy filter you can search for the right crew member very easy</p>
          </div>
          <div class="col-md-3">
            <img src="./images/14.jpeg" class="img-fluid">
            <h3>Win Huge prices!</h3>
            <p>Yes you see it correctly, you can win prices of $30.000 dollars on our platform! just by joining!</p>
          </div>
        </div>
      </div>
    </div>
    


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('/')}}images/welcome2.jpg" alt="Image" class="img-fluid" style="    border-top-right-radius: 120px;
    border-bottom-left-radius: 120px;">
          </div>
          <div class="col-md-6">
        
            <h1 class="heading-92913 text-black">About World Media Crew </h1>
            <p>
World Media Crew is an international organization connecting all professionals in the area of
Media to provide those in need essential and necessary solutions. World Media Crew is
committed to building an environment where professionals are feeling welcome to help out
others in the field of media or finding others to help them out.
Focus on the world of Media
World Media Crew is unique because it is a platform specifically developed for professionals
in the field of media, but at the same time, it is diverse because it embraces all the broad
spectrum of backgrounds, functions, and jobs found in the industry. From screenwriters to
videographers, to make-up artists. You can find it all, within one network, and find the right
person or job with only one click on our website or app.</p>
              
<a href="{{asset ('/allmembers')}}" class="btn btn-primary py-3 px-4">Explore oppertunities</a></p>
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
  .nekaproba {
  background-color: #95b9ec42;
  border-radius: 22px;
  margin-top: -22px;
  height: 272px;
}

.hah{
  color: white;
    font-size: 12px;
    margin-top: -42px;
    margin-bottom:10px !important;
}
}
  .rondje{
    border-radius:100%;
  }
  .card{
    border:none !important;
  }

 


</style>
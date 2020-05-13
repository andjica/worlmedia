
    <div class="footer bg-light">
      <div class="container" style="text-align: center">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4" style="margin-top: -10px;"><img src="{{asset('/')}}images/logo1.png" alt="Image" class="img-fluid" alt="world media crew"></p>
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
                <li><a href="{{asset('/contact')}}" title="Contact Us">Contact</a></li>
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
                  <li><a href="{{asset('/contact')}}" title="Contact Us">Contact</a></li>
                  <li><a href="{{asset('/Contact')}}" title="Contact Us">Support Community</a></li>
                  <li><a href="{{asset('/terms')}}" title="Contact Us">Terms & Conditions</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Partners</a></li>
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

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- loader -->
  <div id="loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"></circle></svg></div>
  <script src="{{asset('/')}}jquery-1.9.1.min.js"></script>
 
 <!-- Include js plugin -->
  <script src="{{asset('/')}}owl-carousel/owl.carousel.js"></script>
  <script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('/')}}js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('/')}}js/jquery-ui.js"></script>
  <script src="{{asset('/')}}js/popper.min.js"></script>
  <script src="{{asset('/')}}js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}js/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}js/jquery.stellar.min.js"></script>
  <script src="{{asset('/')}}js/jquery.countdown.min.js"></script>
  <script src="{{asset('/')}}js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('/')}}js/jquery.easing.1.3.js"></script>
  <script src="{{asset('/')}}js/aos.js"></script>
  <script src="{{asset('/')}}js/jquery.fancybox.min.js"></script>
  <script src="{{asset('/')}}js/jquery.sticky.js"></script>
  <script src="{{asset('/')}}js/jquery.mb.YTPlayer.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


  <script src="{{asset('/')}}js/main.js"></script>

  <script src="{{asset('/')}}js/form-upgrade.js"></script>
  <script src="{{asset('/')}}js/contact-form.js"></script>

  <script src="{{asset('/')}}js/speed-counter.js"></script>
  <script src="{{asset('/')}}js/go-back.js"></script>
  <script src="{{asset('/')}}js/select2.js"></script>

  <script>
      $(document).ready(function(){
        $('#form-search').submit(function(e){
          let cat = $('#categorys').val();
          let cit = $('#citys').val();

          let ercat = document.getElementById('er-category');
          let ercit = document.getElementById('er-city');

          let errors = [];

          if(cat == "")
          {
            e.preventDefault();
            errors.push = "Neka mistake";
            ercat.innerHTML = "Please enter category";     
          }

          if(cit == "")
          {
            e.preventDefault();
            errors.push = "Neka mistake";
            ercit.innerHTML = "Please enter city";     
          }

          if(errors.length == 0)
          {
            return true;
          }
        });
      });
    </script>

    <script>
        $(document).ready(function(){
            $('#contact-fs').submit(function(e){

                let den = $('#val1').val();
                let erden = document.getElementById('erval1');

                let and = $('#val2').val();
                let erand = document.getElementById('erval2');

                let svetlanica = $('#val3').val();
                let ersvetlanica = document.getElementById('erval3');

                let ljubisa = $('#val4').val();
                let erljubisa = document.getElementById('erval4');


                let errors = [];

                if(den == ""){
                  e.preventDefault();
                  errors.push = "Please fil in your name";
                  erden.innerHTML = "Please fil in your name";     

                }

                if(and == ""){
                  e.preventDefault();
                  errors.push = "ouch, mistake is made";
                  erand.innerHTML = "please fill in your email";
                }

                if(svetlanica == ""){
                  e.preventDefault();
                  errors.push = "ouch, another mistake";
                  ersvetlanica.innerHTML = "please fill in the subject";
                }

                if(ljubisa == ""){
                  e.preventDefault();
                  errors.push = "mistake again";
                  erljubisa.innerHTML = "please fill in the message";
                }
                let emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

                if(!emailReg.test(and))
                {
        
                      erand.innerHTML = "Please enter a valid email address";
                      errors.push = "nije ok";
                      e.preventDefault();
                }

                if(erros.length == 0){
                  return true;
                }

                
                                  


            });
        });
    </script>
  <script>
  </script>


</body>
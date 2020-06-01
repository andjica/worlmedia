

@isset($user)

<!------ Include the above in your HEAD tag ---------->
<section class="db12">
<div class="container">


  
            <div class="row profile-padding-top">
               <div class="col-lg-12 pufna" style="        text-align: left;
    position: relative;
    top: 231px; z-index: 10000;">
            @if(auth()->user())
                    @if(auth()->user()->id == $user->id)
                    @elseif($matched)
                       @if($matched->matched_status == 0)
                      <button class="btn btn-warning float-left btn-lg" data-toggle="modal" data-target="#andjica"><i class="fa fa-heart text-light"></i>Give a rate to {{$user->name}}</button>
                        @else
                        <button class="btn btn-warning float-left btn-lg" data-toggle="modal" data-target="#andjica-update"><i class="fa fa-heart text-light"></i>Update{{$user->name}}</button>
                        @endif
                    @else
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="idemo">
                      Match
                    </button>
                    @include('components.match')
                    @endif
                    @else
                    <a href="{{route('login')}}" class="btn btn-primary">
                      Give a match
                  </a>
                          @endif   
                          </div>       
                       
                        
                        
                            <div class="col-lg-4 ggg mx-auto pb-5 text-center" style="color: white;">
                            <div class="col-lg-12 daodah">
                                    <div class="col-lg-6 ">
                                    @isset($countfollowers)
                                    <button type="button" class="btn btn-success teck desno molibci" data-toggle="modal" data-target="#followers">Connections ({{$countfollowers}})</button>
                                    <!-- Modal Followers -->
                                      <div class="modal fadeInUp" id="followers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content bg-light " style="margin-top:120px;">
                                            <div class="modal-header">
                                              <h5 class="modal-title text-dark" id="exampleModalLabel">People who follow {{$user->name}}</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <div class="my-3 p-3 bg-light rounded shadow-sm text-left">
                                                  @foreach($followers as $fl)
                                                  <a href="{{asset('/freelancer/'.$fl->user->id)}}">
                                                  <div class="media text-muted pt-3">
                                                  <div class="rounded-circle mx-auto image-background5"  style="background-image: url({{asset('/image-users/'.$fl->user->url)}});     background-size: cover;">
                                                        
                                                  </div>
                                                    <a href="{{asset('/freelancer/'.$fl->user->id)}}" class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                                                      <strong class="d-block text-gray-dark"><br>&nbsp;{{$fl->user->email}}</strong>
                                                    </a>
                                                  </div>
                                                    </a>
                                                  @endforeach
                                                  <small class="d-block text-right mt-3">
                                                  </small>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    @endisset
                                    </div>
                                  
                                      <div class="col-lg-6 ">
                                        @isset($countfollowing)
                                          <button type="button" class="btn btn-primary daf levo molibci" data-toggle="modal" data-target="#following"> Crew Members ({{$countfollowing}})</button>
                                          
                                           <!-- Modal Following -->
                                          <div class="modal fadeInUp" id="following" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content bg-light " style=" margin-top: 120px;">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body text-dark">
                                                  <div class="my-3 p-3 bg-light rounded shadow-sm text-left">
                                                    @foreach($following as $fg)
                                                    <a href="{{asset('/freelancer/'.$fg->id)}}">
                                                    <div class="media text-muted pt-3">
                                                      <div class="rounded-circle mx-auto image-background5"  style="background-image: url({{asset('/image-users/'.$fg->url)}});">
                                                        
                                                      </div>
                                                      <a href="{{asset('/freelancer/'.$fg->id)}}" class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                                                        <strong class="d-block text-gray-dark"><br>&nbsp;{{$fg->email}}</strong>
                                                      </a>
                                                    </div>
                                                    </a>
                                                    @endforeach
                                                    <small class="d-block text-right mt-3">
                                                      </small>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          @endisset
                                      </div>
                            
                                  </div>
                               
                                <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                                  
                                </div><br>
                                <h1 class="media-heading text-center">{{$user->name}}</h1>
                                <p class="text-center mx-auto">{{$user->city->name}}, {{$user->city->country->name_country}}</p>
                                @if(auth()->user() == null)
                                <a href="{{route('login')}}"  class="btn btn-warning btn-sm p-4 mb-5 border-0 shadow zoom andjica faca">
                                <p class=" text-black ">Follow this user</p>
                                </a>
                                @elseif(auth()->user()->id == $user->id)
                                    
                                @elseif (auth()->user()->followings->contains($user->id))
                                <form action="{{route('unfollow')}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-info btn-sm p-4 andjela border-0 shadow zoom faca">
                                <p class=" text-w ">UnFollow this user</p>
                                </button>
                               <input type="hidden" value="{{$user->id}}" name="user">
                                </i><br>
                                </form>
                                @else
                                <form action="{{route('follow')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm p-4  border-0 shadow zoom btn-andjica faca">
                                <p class=" text-w">Follow this user</p>
                                </button>
                               <input type="hidden" value="{{$user->id}}" name="user">
                                </i><br>
                                </form>
                               
                                @endif
                                <Br>
                              
                        </div>
                    
                @if($countrate == null)
                @else
                <div class="card float-right shadow nova125">
                  <div class="card-body">
                  <h5 class="card-title text-center">Avarage rate</h5>
                  <div class="row">
                  <div class="col-lg-12 text-center">
                  <i class="fa fa-trophy fa-5x text-orange mt-3"></i>
                  @isset($useravg)
                    <h1 class="mt-3 stable">{{round($useravg, 2)}}</h1>
                    @endisset
                  </div>
                
                </div>
                </div>
                @isset($countrate)
                <p class="count-text text-center text-primary">({{$countrate}}) Rates</p>
                @endisset
                </div>
            
            @endif
</div>
</div>
    </section>
    <div class="row mx-auto">
      <div class="col-lg-12">
      @if(session('success'))
                <div class="alert alert-success bingp">
                    {{session('success')}} <i class="fa fa-check"></i>
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger mt-5">
                    {{session('error')}}
                </div>
                @endif
          </div>
</div>
 
              
    <section class="about-user">
      <div class="container">
         
          <div class="row mt-5 p-2 ">
          
          <div class="col-lg-4">
          <div class="card bg-light shadow prosche">
          <i class="fa fa-cogs text-orange mt-3 fa-2x text-center"></i>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark  text-center">Carreer</h1>
              <p class="card-text text-dark">
                {{$user->desc_one}}
              </p>
            </div>
          </div>
          
          </div>
          <div class="col-lg-4 prva">
          <div class="card bg-light shadow">
          <i class="fa fa-user-circle fa-2x text-orange text-center mt-3"></i>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark  text-center">Information</h1>
              <p class="card-text text-dark" style="    text-align: left;
    padding: 20px;">
                Name: &nbsp;{{$user->name}}<br>
                From: &nbsp;{{$user->city->country->name_country}}, {{$user->city->name}}<br>
                Email: &nbsp; {{$user->email}}<br>
                Mobile: &nbsp; {{$user->mobile}}<br>
                Category:&nbsp;   {{$user->category->name}}
                <a href="{{$user->link}}">{{$user->link}}</a>
              </p>
              
            </div>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark  text-center">Equipment</h1>
              <p class="card-text text-dark">
                {{$user->desc_three}}
              </p>
              
            </div>
          </div>
          </div>
          <div class="col-lg-4">
          <div class="card bg-light shadow">
          <i class="fa fa-user text-orange mt-3 fa-2x text-center"></i>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark  text-center">About Me</h1>
              <p class="card-text text-dark">
                {{$user->desc_two}}
              </p>
              
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
   
    <section class="skills">
    <hr class="style-six">

    <div class="container shadow p-3 ">
   
        @include('components.skills')
          
    </div>             
                
    </section>

    <section class="image-gallery">
      @include('components.image-gallery')
    </section>
    <section class="comments">
      
      @if($countrate == null)
      @else
      <div class="container shadow p-3">
          <div class="row m-5">
            <h1 class="text-dark  text-center mx-auto">Comments from users who matched {{$user->name}}</h1>
          </div>
          <div class="row">
          @include('components.comments')
      </div>
    </div>
      @endif
    </section>
    <button type="button" class="btn btn-default mt-5"  onclick="goBack()"><i class="fa fa-arrow-left text-info"></i> &nbsp;I've heard enough about {{$user->name}}</button>
    @include('components.rate')
    @endisset


    
    <div class="footer bg-light">
      <div class="container" style="text-align: center">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4" style="margin-top: -10px;"><img src="{{asset('/')}}images/logo1.png" alt="Image" class="img-fluid" alt="world media crew"></p>
            <p>The number #1 place to hire and find your right media crew member in the world!</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3" style="margin-top:16px;">
            <h3 class="footer-heading"><span>World media crew</span></h3>
            <ul class="list-unstyled">
                <li><a href="{{asset('/')}}">Home</a></li>
                <li><a href="{{asset('/services')}}" title="Challenger from world media crew">Challenges</a></li>
                <li><a href="{{asset('/freelancers')}}" title="Members from world media crew">Crew-Members</a></li>
                {{-- <li><a href="{{asset('/blog')}}" title="Blog Page for World Media Crew platform">Blog</a></li> --}}
                <li><a href="{{asset('/contact-us')}}" title="Contact Us">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-3" style="margin-top:16px;">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{asset('/register')}}" title="Register in World Media Crew platform">Make an account</a></li>
                  <li><a href="{{asset('/login')}}" title="Login page">Login with account</a></li>
                  <li><a href="{{asset('/services')}}" title="Challengers page">Challengers</a></li>
                  <li><a href="{{asset('/about')}}" title="About World Media Crew platform">About us</a></li>

              </ul>
          </div>
          <div class="col-lg-3" style="margin-top:16px;">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{asset('/contact-us')}}" title="Contact Us">Contact</a></li>
                  <li><a href="{{asset('/privacy')}}" title="Contact Us">Privacy & terms</a></li>
                  <li><a href="{{asset('/terms')}}" title="Contact Us">Terms and Conditions</a></li>
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
  <!-- Andjica Custom Js -->
  <script src="{{asset('/')}}js/form-upgrade.js"></script>
  <script src="{{asset('/')}}js/contact-form.js"></script>

  <script src="{{asset('/')}}js/speed-counter.js"></script>
  <script src="{{asset('/')}}js/go-back.js"></script>
  <script src="{{asset('/')}}js/select2.js"></script>

  <script src="{{asset('/')}}js/city-category.js"></script>
  <script src="{{asset('/')}}js/contact-fs.js"></script>
  <script src="{{asset('/')}}js/match.js"></script>

  <!-- End Andjica Custom Js -->
</body>

<style>
  .modal{
    z-index: 10000;
  }
  .zoom:-webkit-any-link {
    color: red;
  }
  .zoom:hover {
    transform: scale(1.07);
    color: lightblue;
  }
   /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
.btn-andjica
{
  background:no-repeat;
  background-color:black !important;
}
.text-w {
    color: white !important;
    font-family: sans-serif !important;
    font-weight: 700;
    line-height: 16px;
    padding-top: 10px;
    font-size: 12px;
}
.card{
  border-radius: 20px !important;
}

.andjela{
  background: black !important;
}
@media screen and (max-width:768px){
  .skills{
    margin-top: 1200px;
  }
  .prva{
    margin-top: 272px;
}
.molibci{
  font-size: 12px;

}
.nova125{
  height: 100px;
    width: 94px;
    font-size: x-small;}

.card-title{
  font-size: x-small;
}
.fa-trophy{
  position: relative;
    top: -14px;
}
.stable{
  position: absolute;
    left: 41px;
    top: -4px;
    text-align: center;
    float: left;
    font-size: 10px;
}
.count-text{
  font-size: 10px;
    position: relative;
    top: -28px;
}
.levo{
  font-size: 10px;
}
.desno{
  font-size:10px;
}
.prosche{
  margin-top: 198px;
    margin-bottom: -245px;
}

  }
  .faca{
    position:relative; z-index:1000;
  }
}

.nova125{
  top: 50%;
}

@media screen and (min-width:968px){
  .bingp{
    position: relative;
    top: -305px;
    width: 13%;
    border-radius: 10px;
    right: -1182px;
  }
}

@media screen and (max-width:528px){
.bingp{
  position: relative;
    top: -98px;
    width: 100%;
    border-radius: 10px;
    text-align: center;
}
}
</style>






@isset($user)

<!------ Include the above in your HEAD tag ---------->
<section class="db12">
<div class="night">
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
</div>


  
            <div class="row" style="padding-top: 88px;">
                <div class="col-lg-4 xvs">
                    <hr/>
                        </div>
                            <div class="col-lg-4 ggg mx-auto pb-5 text-center" style="color: white;">
                            <div class="col-lg-12 daodah">
                                    <div class="col-lg-6">
                                    @isset($countfollowers)
                                    <button type="button" class="btn btn-success teck desno">Followers ({{$countfollowers}})</button>
                                    @endisset
                                    </div>
                                      <div class="col-lg-6">
                                        @isset($countfollowing)
                                          <button type="button" class="btn btn-primary daf levo">Following ({{$countfollowing}})</button>
                                        @endisset
                                      </div>
                                  </div>
                               
                                <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                                  
                                </div>
                                <h1 class="media-heading text-center">{{$user->name}}</h1>
                                <p class="text-center mx-auto">{{$user->city->name}}, {{$user->city->country->name_country}}</p><br>
                                @if(auth()->user() == null)
                                @elseif(auth()->user()->id == $user->id)
                                    
                                @elseif (auth()->user()->followings->contains($user->id))
                                <form action="{{route('unfollow')}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-info btn-sm p-4  border-0 shadow zoom">
                                <p class="text-serif text-w ">UnFollow this user</p>
                                </button>
                               <input type="hidden" value="{{$user->id}}" name="user">
                                </i><br>
                                </form>
                                @else
                                <form action="{{route('follow')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm p-4  border-0 shadow zoom btn-andjica">
                                <p class="text-serif text-w ">Follow this user</p>
                                </button>
                               <input type="hidden" value="{{$user->id}}" name="user">
                                </i><br>
                                </form>
                               
                                @endif
                                <Br>
                               
                        </div>
                    <div class="col-lg-4 xvb">
                <hr/>
            </div>
        
</div>
    </section>
    <hr class="style-six"> 
 
              
    

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
  <div class="container">
    <div class="row d-flex">
   
          <div class="col-lg-6 shadow p-3">
          <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
        
          <h3 class="text-secondary">About {{$user->name}},</h3><small>{{$user->city->name}}, {{$user->city->country->name_country}}</small><br>
          <ul class="list-group ">
            <li class="list-group-item bg-light"><span>Name:</span> <span>x{{$user->name}}</span></li>
            <li class="list-group-item bg-light"><span>Country:</span> <span>{{$user->city->country->name_country}}</span></li>
            <li class="list-group-item bg-light"><span>City:</span> <span>{{$user->city->name}}</span></li>
            <li class="list-group-item bg-light"><span>Available:</span> <span>yes</span></li>
            <li class="list-group-item bg-light"><span>Email:</span> <span>{{$user->email}}</span></li>
            <li class="list-group-item bg-light"><span>Phone: </span> <span>{{$user->mobile}}</span></li>
          </ul>
        
         
          </div>
          </div>
          <div class="counter-wrap ftco-animate d-flex mt-md-3 fadeInUp ftco-animated">
          <div class="text">
          <p class="mb-4">
          <p>{{$user->desc_one}}</p><br>
                                      <p>{{$user->desc_two}}</p>
          </p>
          </div>
        </div>
      
          </div>

          <div class="col-lg-6">
          <div class="container">
            <div class="row justify-content-center pb-5">
              <div class="col-md-10 heading-section text-center ftco-animate fadeInUp ftco-animated">
                
                <h2 class="mb-4">Equipment</h2>
                <p class="cust">{{$user->desc_three}}</p>
                </div>
                </div>
                <div class="row">
               
            
                </div>



              </div>
              </div>

            </div>
          </div>
    </div>
  </div>
</section>



<hr class="style-six">


<section class="ftco-section" id="skills-section">
<div class="container">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
<h2 class="mb-4">My Skills</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
</div>
<div class="row">
    <div class="col-lg-12 mx-auto">
    @isset($skill)
      <div class="row">
           @if($skill->skill_one == null || $skill->percent_one == null)

           @else
          <div class="col-md-6 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$skill->skill_one}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_one}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_one}}%">
            <span>{{$skill->percent_one}}</span>
            </div>
            </div>
            </div>
          </div>
          @endif

          @if($skill->skill_two == null || $skill->percent_two == null)

          @else
            <div class="col-md-6 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$skill->skill_two}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_two}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_two}}%">
            <span>{{$skill->percent_two}}</span>
            </div>
            </div>
            </div>
            </div>
          @endif
           
          @if($skill->skill_three == null || $skill->percent_three == null)
        
          @else
          <div class="col-md-6 animate-box">
          <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
          <h3 class="text-dark">{{$skill->skill_three}}</h3>
          <div class="progress">
          <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_three}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_three}}%">
          <span>{{$skill->percent_three}}</span>
          </div>
          </div>
          </div>
          </div>
          @endif

          @if($skill->skill_four == null || $skill->percent_four == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_four}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_four}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_four}}%">
        <span>{{$skill->percent_four}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_five == null || $skill->percent_five == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_five}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_five}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_five}}%">
        <span>{{$skill->percent_five}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_six == null || $skill->percent_six == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_six}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_six}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_six}}%">
        <span>{{$skill->percent_six}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_seven == null || $skill->percent_seven == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_seven}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_seven}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_seven}}%">
        <span>{{$skill->percent_seven}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_eight == null || $skill->percent_eight == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_eight}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_eight}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_eight}}%">
        <span>{{$skill->percent_eight}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_nine == null || $skill->percent_nine == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_nine}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_nine}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_nine}}%">
        <span>{{$skill->percent_nine}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif

        @if($skill->skill_ten == null || $skill->percent_ten == null)
        
        @else
        <div class="col-md-6 animate-box">
        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
        <h3 class="text-dark">{{$skill->skill_ten}}</h3>
        <div class="progress">
        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percent_ten}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percent_ten}}%">
        <span>{{$skill->percent_ten}}</span>
        </div>
        </div>
        </div>
        </div>
        @endif
        
           
          
      </div>
    </div>
    <div class="col-lg-6 mx-auto">
      <div class="row">
   
           
        </div>
        @endisset
    </div>
      
</div>
@include('components.rate')  
                
</div>
</div>
</section>
<button type="button" class="btn btn-default mt-5"  onclick="goBack()"><i class="fa fa-arrow-left text-info"></i> &nbsp;I've heard enough about {{$user->name}}</button>

@endisset

<style>
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
}
.text-w
{
  color:white !important;
}
</style>




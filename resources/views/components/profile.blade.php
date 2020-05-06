

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


        <div class="" style="height: 420px; width: 100%;  padding-top: 88px;">
            <div class="row">
                <div class="col-lg-4 xvs">
                    <hr/>
                        </div>
                            <div class="col-lg-4 ggg" style="color: white;">

                                <center>
                                <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                                </div>
                                <h1 class="media-heading">{{$user->name}}</h1>
                                <small>{{$user->city->name}}, {{$user->city->country->name_country}}</small><br>
                                </center>
                        </div>
                    <div class="col-lg-4 xvb">
                <hr/>
            </div>
        </div>
</div>
    </section>
    
 
              
    

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
  <div class="container">
    <div class="row d-flex">
   
          <div class="col-lg-6 shadow p-3">
          <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
        
          <h3 class="text-secondary">About {{$user->name}},</h3><small>{{$user->city->name}}, {{$user->city->country->name_country}}</small><br>
          <ul class="list-group ">
            <li class="list-group-item bg-light"><span>Name:</span> <span>{{$user->name}}</span></li>
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
    <div class="col-lg-3 mx-auto">
      <div class="row">
            @if($user->skill_one == null)
            @else
            <div class="col-md-12 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$user->skill_one}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span>100%</span>
            </div>
            </div>
            </div>
            </div>
            @endif

            @if($user->skill_two == null)
            @else
            <div class="col-md-12 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$user->skill_two}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span>100%</span>
            </div>
            </div>
            </div>
            </div>
            @endif

            @if($user->skill_tree == null)
            @else
            <div class="col-md-12 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$user->skill_tree}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span>100%</span>
            </div>
            </div>
            </div>
            </div>
            @endif
        </div>
    </div>
    <div class="col-lg-3 mx-auto">
      <div class="row">
            @if($user->skill_four == null)
            @else
            <div class="col-md-12 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$user->skill_four}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span>100%</span>
            </div>
            </div>
            </div>
            </div>
            @endif

            @if($user->skill_five == null)
            @else
            <div class="col-md-12 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$user->skill_five}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span>100%</span>
            </div>
            </div>
            </div>
            </div>
            @endif

            @if($user->skill_six == null)
            @else
            <div class="col-md-12 animate-box">
            <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
            <h3 class="text-dark">{{$user->skill_six}}</h3>
            <div class="progress">
            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span>100%</span>
            </div>
            </div>
            </div>
            </div>
            @endif
        </div>
    </div>
    @include('components.rate')      
</div>

                
</div>
</div>
</section>
<button type="button" class="btn btn-default mt-5"  onclick="goBack()"><i class="fa fa-arrow-left text-info"></i> &nbsp;I've heard enough about {{$user->name}}</button>

@endisset




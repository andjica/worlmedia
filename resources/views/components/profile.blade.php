

@isset($user)

<!------ Include the above in your HEAD tag ---------->
<section class="db12">
<div class="container">
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
<div class="row mx-auto">
      <div class="col-lg-12">
          @if(session('success'))
                <div class="alert alert-success mt-5">
                    {{session('success')}}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger mt-5">
                    {{session('error')}}
                </div>
                @endif
          </div>
</div>
  
            <div class="row profile-padding-top">
                <div class="col-lg-4 xvs">
                    <hr/>
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
                                    <div class="col-lg-6">
                                    @isset($countfollowers)
                                    <button type="button" class="btn btn-success teck desno" data-toggle="modal" data-target="#followers">Connections ({{$countfollowers}})</button>
                                    <!-- Modal Followers -->
                                      <div class="modal fadeInUp" id="followers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content bg-light ">
                                            <div class="modal-header">
                                              <h5 class="modal-title text-dark" id="exampleModalLabel">People who follow {{$user->name}}</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <div class="my-3 p-3 bg-light rounded shadow-sm text-left">
                                                  <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
                                                  @foreach($followers as $fl)
                                                  <a href="{{asset('/freelancer/'.$fl->user->id)}}">
                                                  <div class="media text-muted pt-3">
                                                  <div class="rounded-circle mx-auto image-background5"  style="background-image: url({{asset('/image-users/'.$fl->user->url)}});">
                                                        
                                                  </div>
                                                    <a href="{{asset('/freelancer/'.$fl->user->id)}}" class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                                                      <strong class="d-block text-gray-dark"><br>&nbsp;{{$fl->user->email}}</strong>
                                                    </a>
                                                  </div>
                                                    </a>
                                                  @endforeach
                                                  <small class="d-block text-right mt-3">
                                                    <a href="#">All updates</a>
                                                  </small>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    @endisset
                                    </div>
                                      <div class="col-lg-6">
                                        @isset($countfollowing)
                                          <button type="button" class="btn btn-primary daf levo" data-toggle="modal" data-target="#following">Crew Members ({{$countfollowing}})</button>
                                           <!-- Modal Following -->
                                          <div class="modal fadeInUp" id="following" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content bg-light ">
                                                <div class="modal-header">
                                                  <h5 class="modal-title text-dark" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body text-dark">
                                                  <div class="my-3 p-3 bg-light rounded shadow-sm text-left">
                                                    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
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
                                                      <a href="#">All updates</a>
                                                    </small>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
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
                                <a href="{{route('login')}}"  class="btn btn-warning btn-sm p-4 mb-5 border-0 shadow zoom btn-andjica">
                                <p class="text-serif text-w ">Follow this user</p>
                                </a>
                                @elseif(auth()->user()->id == $user->id)
                                    
                                @elseif (auth()->user()->followings->contains($user->id))
                                <form action="{{route('unfollow')}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-info btn-sm p-4  border-0 shadow zoom">
                                <p class="text-serif text-w ">UnFollow this user</p>
                                </button>
                               <input type="hidden" value="{{$user->id}}" name="user">
                                </i><br>
                                </form>
                                @else
                                <form action="{{route('follow-user')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm p-4  border-0 shadow zoom btn-andjica">
                                <p class="text-serif text-w">Follow this user</p>
                                </button>
                               <input type="hidden" value="{{$user->id}}" name="user">
                                </i><br>
                                </form>
                               
                                @endif
                                <Br>
                              
                        </div>
                    <div class="col-lg-4 xvb">
                <hr/>
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
            </div>
            @endif
</div>
</div>
    </section>
   
 
              
    <section class="about-user">
      <div class="container">
         
          <div class="row mt-5 p-2">
          <div class="col-lg-4">
          <div class="card bg-light shadow">
          <i class="fa fa-user-circle fa-2x text-orange text-center mt-3"></i>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark text-serif text-center">About</h1>
              <p class="card-text text-dark">
                Name: &nbsp;{{$user->name}}<br>
                From: &nbsp;{{$user->city->country->name_country}}, {{$user->city->name}}<br>
                Email: &nbsp; {{$user->email}}<br>
                Mobile: &nbsp; {{$user->mobile}}<br>
                <a href="{{$user->link}}">{{$user->link}}</a>
              </p>
              
            </div>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark text-serif text-center">Equipment</h1>
              <p class="card-text text-dark">
                {{$user->desc_three}}
              </p>
              
            </div>
          </div>
          </div>
          <div class="col-lg-4">
          <div class="card bg-light shadow">
          <i class="fa fa-cogs text-orange mt-3 fa-2x text-center"></i>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark text-serif text-center">About</h1>
              <p class="card-text text-dark">
                {{$user->desc_one}}
              </p>
            </div>
          </div>
          
          </div>
          <div class="col-lg-4">
          <div class="card bg-light shadow">
          <i class="fa fa-cogs text-orange mt-3 fa-2x text-center"></i>
            <div class="card-body border-top mt-2">
              <h1 class="text-dark text-serif text-center">About</h1>
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

    <div class="container shadow p-3">
   
        @include('components.skills')
          
    </div>             
                
    </section>




<section class="image-gallery">
  @include('components.image-gallery')
</section>
<hr class="style-six">
<button type="button" class="btn btn-default mt-5"  onclick="goBack()"><i class="fa fa-arrow-left text-info"></i> &nbsp;I've heard enough about {{$user->name}}</button>
@include('components.rate')
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




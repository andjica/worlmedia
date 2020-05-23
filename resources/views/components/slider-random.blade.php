<div class="container">
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" style="margin-top:60px; text-align:center;">
<h1>Welcome to our new Media Crew Members</h1>
<!--Controls-->
<div class="controls-top" style="text-align: center;
    font-size: 42px;">
    
  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
      class="fa fa-chevron-right"></i></a>
</div>
<!--/.Controls-->

<!--Indicators-->
<ol class="carousel-indicators">
  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
  <li data-target="#multi-item-example" data-slide-to="1"></li>
  
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">
    @foreach($usersfirstrandom as $user)
  <div class="col-md-3" style="float:left">
        <div class="service-39381">
            <div class="rounded-circle mx-auto image-background4" style="background-image: url({{asset('/image-users/'.$user->url)}});">
            </div>
            <div class="p-4 mx-auto">
                <p><span class="icon-room mr-1 text-primary"></span>{{$user->category->name}} from
                 {{$user->city->name}}, {{$user->city->country->name_country}}</p>
                <p><span class="icon-room mr-1 text-primary"></span> {{$user->email}}</p>
                <small class="mr-1">Posted by: 26-04-2020</small><br>
                <div class="d-flex">
                  <div class="ml-auto price mx-auto">
                  <a href="{{asset('/freelancer/'.$user->id)}}" class="btn btn-warning py-3 px-5 text-white">Visit Member Profile</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class="carousel-item">
      @foreach($userssecondrandom as $usertwo)
    <div class="col-md-3" style="float:left">
    <div class="service-39381">
            <div class="rounded-circle mx-auto image-background4" style="background-image: url({{asset('/image-users/'.$usertwo->url)}});">
            </div>
            <div class="p-4 mx-auto">
                <p><span class="icon-room mr-1 text-primary"></span>{{$usertwo->category->name}} from
                 {{$usertwo->city->name}}, {{$usertwo->city->country->name_country}}</p>
                <p><span class="icon-room mr-1 text-primary"></span> {{$usertwo->email}}</p>
                <small class="mr-1">Posted by: 26-04-2020</small><br>
                <div class="d-flex">
                  <div class="ml-auto price mx-auto">
                  <a href="{{asset('/freelancer/'.$usertwo->id)}}" class="btn btn-warning py-3 px-5 text-white">Visit Member Profile</a>
                  </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
 </div>
  <!--/.Second slide-->
</div>
<!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->
</div>
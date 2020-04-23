@include('components.head')
@include('components.nav')
<div class="s01 tt">
@include('components.search')
    </div>
  
<section id="freelancers">
  <div class="container" style="  margin-top: 20px;">
        <div class="row" style="display:flex; margin-top:60px;">
   
        <div class="col-lg-9">
         
              <h5>@isset($categoryname){{$categoryname->name}} &nbsp;> @endisset @isset($cityname) {{$cityname->name}}@endisset</h5> 
             <br>
               
        <div class="row">  
        @foreach($users as $user)
        <div class="col-md-6 col-lg-4 mb-4">

            <div class="service-39381">
            <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
            </div>
         
              <div class="bruv bg-info">
              <i class="fa fa-star text-white"></i>
              <i class="fa fa-star text-white"></i>
              <i class="fa fa-star text-white"></i>
              <i class="fa fa-star text-white"></i>
              <i class="fa fa-star text-white"></i>
            </div>
              <div class="p-4">
                <p><span class="icon-room mr-1 text-primary"></span> {{$user->category->name}}</p>
                <p><span class="icon-room mr-1 text-primary"></span> {{$user->city->name}}, {{$user->city->country->name_country}}</p>
                <p><span class="icon-room mr-1 text-primary"></span> {{$user->email}}</p>
                <small class="mr-1">Posted by: {{$user->created_at->format('d-m-Y')}}</small><br>
                <div class="d-flex">
                  
                  <div class="ml-auto price">
                  <a href="{{asset('/freelancer/'.$user->id)}}" class="btn btn-warning py-3 px-5 text-white">Visit Member Profile</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach
            </div>
            <ul class="list-group">
              
            <li class="list-group">  {{$users->appends($_GET)->links()}}</li>
        </ul>
        </div>
 
        <div class="col-lg-3">
            @include('components.sidebar')
        </div>
    </div>
   

                
               
                
            </div>
        </div>
    </div>
</div>
</section>

<style>
    .tw34{
        font-family: Futura, "Trebuchet MS", Arial, sans-serif !important;
    }
</style>
@include('components.footer')

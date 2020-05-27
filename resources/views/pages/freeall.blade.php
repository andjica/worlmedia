@include('components.head')
@include('components.nav')

<div class="s01 tt znacinemam">
  
@include('components.search')

</div>
  
<section id="freelancers" class="nova">
    
  <div class="container" style="  margin-top: 20px;">
        <div class="row res65 zares ">

        <div class="col-lg-12 vrhunski">
         
              <h5>@isset($categoryname){{$categoryname->name}} &nbsp;> @endisset @isset($cityname) {{$cityname->name}}@endisset</h5> 
             <br>
               
        <div class="zares row">  
        @foreach($users as $user)
        <div class="col-md-6 col-lg-4 mb-4">
           
        
             
            
            <div class="service-39381" style="border-radius: 30px;">
            <a href="{{asset('/freelancer/'.$user->id)}}">
            <div class="rounded-circle mx-auto image-background2" style="background-image: url({{asset('/image-users/'.$user->url)}});     background-size: cover; background-position:center;">
            </div>
            </a>
         
              <div class="bruv bg-info">
              @foreach($user->reviews as $rs)
              {{round($rs->avg('rate'), 2)}}
              <i class="fa fa-trophy text-white"> </i>
              @endforeach
             
            </div>
              <div class="p-4">
              
                <div class="d-flex centri namob">
                <p style="font-size: 12px;">Function: {{$user->category->name}}</p>
                <p style="font-size: 12px;">Place: {{$user->city->name}}, {{$user->city->country->name_country}}</p>

                  <div class="ml-auto price centricac">
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
 
        
    </div>
   

                
               
                
            </div>
        </div>
    </div>
</div>
</section>

<section class="sponsor">
<div class="container">
<img src="./images/sponsor.jpeg" style="    width: 100%;" />
</div>
</section>

<style>
    .tw34{
        font-family: Futura, "Trebuchet MS", Arial, sans-serif !important;
    }

    @media screen and (max-width:1240px){
  .res65{
    margin-top: -140px !important;
  }
    }

    @media screen and (min-width:1440px){
    .bag{
      margin-top:160px !important;
    }
    }

    .tyt{
      font-size: 12px;   
    color:black;
    font-weight: 700;
    text-align: center;
    }

    .succes{
      background:#ffbd39 !important;
    }

    @media screen and (max-width:768px){
    .znacinemam{
      position: relative;
    z-index: 100000000;
    }
    .select2-container--open .select2-dropdown--below{
      position: relative;
    z-index: 100000000;
    }
    }

    @media screen and (min-width:768px){
      .znacinemam{
        margin-top:70px !important;
      }
    }
</style>
@include('components.footer')

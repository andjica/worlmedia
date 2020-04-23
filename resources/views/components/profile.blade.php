@isset($user)

<!------ Include the above in your HEAD tag ---------->
<section class="db12">


        <div class="" style="height: 420px;  padding-top: 88px;">
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
    <div class="container" >
      <div class="row" style="margin-top:60px;">
            <div class="col-lg-9 mb-5">
                        <p class="text-left" style="font-size: 20px;  font-weight: 600;"><strong>Posted at: {{$user->created_at->format('d-m-Y')}} </strong><br>
                          <h3>User id:{{$user->id}},&nbsp;{{$user->category->name}}</h3>
                            <p>{{$user->desc_one}}</p><br>
                            <p>{{$user->desc_two}}</p>
                            <hr class="sig">
                            <span><strong>Skills: </strong></span><br>
                                
                           
                                <h3>
                            <span class="label label-warning d-3 andjica-l" >{{$user->skills}}</span></h3>
                           
                                <ul style="padding:0;">
                                            <h1>Contact information</h1>
                                            <li>Email: {{$user->email}}</li>
                                            <li>Tel : {{$user->mobile}}</li>
                                            <li>Country : {{$user->city->country->name_country}}</li>
                                            <li>City: {{$user->city->name}}</li>
                                            <li>Available : yes</li>
                                            <li></li>
                                </ul> 
                        


                                <button type="button" class="btn btn-default mt-5"  onclick="goBack()"><i class="fa fa-arrow-left text-info"></i> &nbsp;I've heard enough about {{$user->name}}</button>
                      </div>
                      <div class="col-lg-3">
                      @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                         @include('components.rate')
                    </div>                     
        </div>
                            
        </div>
 
              
    
        @endisset


<style>
.andjica-l
{
    white-space: normal !important;
}
.sig
{
  margin-top:20px;
  margin-bottom:20px;
}
.sticky-wrapper{
    top:0;
}

hr{
    background: white;
    margin-top: 120px;
}

li{
    list-style:none;
}

.xvs{
    margin-left: 120px;
    margin-right: -120px;
}

.xvb{
    margin-left: -120px;
    margin-right: 120px;
}

.db12{
    background:url('{{asset("/")}}images/yes.jpg'); 
    background-size: cover;
    background-position: right; 
    
}

@media screen and (max-width:468px){
.zatel{
  margin-top: -88px;
}
.xvs{
  display:none;

}
.ggg{
  
}
}
</style>
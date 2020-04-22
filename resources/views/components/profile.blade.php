<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
@isset($user)
  <div class="site-wrap jbt">
  <div class="site-wrap ">
<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<div class="header-top bg-light ">
<div class="container tw24 ">
<div class="row align-items-center">
<div class="col-6 col-lg-3">
<a href="{{asset ('/')}}">
<img src="images/logo1.png" alt="Image" class="img-fluid">

</a>
</div>
<div class="col-lg-3 d-none d-lg-block">
<div class="quick-contact-icons d-flex">
<div class="icon align-self-start">
<span class="icon-location-arrow text-primary"></span>
</div>
<div class="text">
<span class="h4 d-block">San Francisco</span>
<span class="caption-text">Mountain View, Fake st., CA</span>
</div>
</div>
</div>
<div class="col-lg-3 d-none d-lg-block">
<div class="quick-contact-icons d-flex">
<div class="icon align-self-start">
<span class="icon-phone text-primary"></span>
</div>
<div class="text">
<span class="h4 d-block">000 209 392 312</span>
<span class="caption-text">Toll free</span>
</div>
</div>
</div>
<div class="col-lg-3 d-none d-lg-block">
<div class="quick-contact-icons d-flex">
<div class="icon align-self-start">
<span class="icon-envelope text-primary"></span>
</div>
<div class="text">
<span class="h4 d-block"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="264f48404966414b474f4a0845494b">[email&#160;protected]</a></span>
<span class="caption-text">Gournadi, 1230 Bariasl</span>
</div>
</div>
</div>
<div class="col-6 d-block d-lg-none text-right">
<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
</div>
</div>
</div>


    
   
    @include('components.nav')
    
    </div>
    </div>


<section class="zatel">
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
                <hr />
            </div>
        </div>
    </section>
    <div class="container" >
      <div class="row" style="margin-top:60px;">
            <div class="col-lg-9 mb-5">
                        <p class="text-left" style="font-size: 20px;  font-weight: 600;"><strong>Bio: </strong><br>
                          <h3>User id:{{$user->id}},&nbsp;{{$user->category->name}}</h3>
                            {{$user->desc_one}}<br>
                            {{$user->desc_two}}
                            <hr class="sig">
                            <span><strong>Skills: </strong></span><br>
                                <h3><span class="label label-warning d-3">{{$user->skills}}</span></h3>
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
                         @include('components.rate')
                    </div>                     
        </div>
                            
        </div>
        </div>
              
            </div>
        </div>
    </div>
</div>
</section>
@endisset
<style>

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
      margin-top: 85px;
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
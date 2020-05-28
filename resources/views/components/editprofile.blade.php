@include('components.nav-dashboard')

<div class="container p-0 mb-5 gore">
@isset($user)

    <h1 class="h3 mb-3" style="color: transparent;">Settings</h1>
    <div class="row main-row">
    <div class="card card-fixed">
        @include('components.card-account-info')
    </div>
    <div class="col-lg-12">
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
    @if(session('error'))
           <div class="alert alert-danger">{{session('error')}}</div>
     @endif
    
    </div>
    <div class="row">
  
        <div class="col-md-4 col-xl-4">
            <div class="card">
                

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#biography" role="tab">
                      Biography
                      
                    </a>
                  
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#information" role="tab">
                     My profile information
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                      Change password
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#skill" role="tab">
                      Manage skills
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#images" role="tab">
                     Portfolio images
                    </a>
                    
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#contact" role="tab">
                      Contact Support
                    </a>
                   
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#invoice" role="tab">
                      My Purchases
                    </a>
                    @if($user->city_id == null || $user->category_id == null)

                    @else
                    <a class="list-group-item list-group-item-action"  href="{{asset('/freelancer/'.$user->id)}}">
                      My Profile
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xl-8">
        @if ($errors->has('image2'))  <p style="color:red;">{{$errors->first('image2')}}</p> @endif
        @if ($errors->has('imagedesc'))  <p style="color:red;">{{$errors->first('imagedesc')}}</p> @endif
            <div class="tab-content">

                <div class="tab-pane  show active" id="biography" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                        
                            <h5 class="card-title mb-0">Public info</h5>
                        </div>
                <div class="card-body">
                   
                    <form action="{{route('upgrade-user')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" value="{{$user->name}}" id="inputUsername" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">Carreer History</label>
                                    <textarea rows="2" class="form-control" id="inputBio" name="desc1" placeholder="Tell something about yourself">{{$user->desc_one}}</textarea>
                                    @if ($errors->has('desc1'))  <p style="color:red;">{{$errors->first('desc1')}}</p> @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">Biography</label>
                                    <textarea rows="2" class="form-control" id="bio2" name="desc2" placeholder="Tell something about yourself">{{$user->desc_two}}</textarea>
                                    @if ($errors->has('desc2'))  <p style="color:red;">{{$errors->first('desc2')}}</p> @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">Enter here your Equipment</label>
                                    <textarea rows="2" class="form-control" id="bio3" name="desc3" placeholder="Tell something about yourself">{{$user->desc_three}}</textarea>
                                    @if ($errors->has('desc3'))  <p style="color:red;">{{$errors->first('desc3')}}</p> @endif
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                    @if($user->url == null)
                                        <img alt="Andrew Jones" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle img-responsive mt-2" width="128" height="128">
                                        @else
                                        
                                        <div class="rounded-circle mt-2 image-background"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                                        </div>
                                        @endif
                                        <div class="mt-2">
                                         <input type="file" class="form-controll text-white" name="image">
                                         @if ($errors->has('image'))  <p style="color:red;">{{$errors->first('image')}}</p> @endif
                                        </div>
                                            <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                        </div>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Save changes">
                    </form>

                        </div>
                    </div>

                 

                </div>
                <div class="tab-pane " id="information" role="tabpanel">
                <div class="card">
                        <div class="card-header">
                           
                            <h5 class="card-title mb-0">My information</h5>
                        </div>
                        <div class="card-body">
                        <form action="{{route('upgrade-info')}}" method="post" id="adding-info">
                        @csrf
                                <div class="form-group">
                                <label for="inputCategory">Choose category</label>
                                   @if($user->category_id == null)
                                    <select class="form-control" name="categoryid">
                                        @foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                    </select>
                                    @else
                                    <select class="form-control" name="categoryid">
                                       <option value="{{$user->category_id}}">My current Category: {{$user->category->name}}</option>
										@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                    </select>
                                    @endif
                                </div>
                                <div class="form-group">
                                <label for="inputCategory">Choose city</label>
                                    @if($user->city_id == null)
                                    <select class="form-control" name="cityid">
                                        @foreach($cities as $city)
											<option value="{{$city->id}}">{{$city->name}}</option>
                                         @endforeach
                                    </select>
                                    @else
                                    <select class="form-control" name="cityid">
                                       <option value="{{$user->city_id}}">My current City: {{$user->city->name}}</option>
										@foreach($cities as $city)
											<option value="{{$city->id}}">{{$city->name}}</option>
                                         @endforeach
                                    </select>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Mobile">My mobile telephone</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Link">My portfolio link</label>
                                        <input type="text" class="form-control" id="link" name="link" value="{{$user->link}}">
                                         <p id="er-url" class="text-danger"></p> 
                                         <p id="su-url" class="text-info"></p> 
                                    </div>
                                  
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </form>

                        </div>
                    </div>
                </div>

                <div class="tab-pane " id="password" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Password</h5>
                            <hr>
                            <form action="{{route('edit-user')}}" method="post" id="form-password">
                                @csrf
                                <div class="form-group">
                                    <label for="inputPasswordNew">New password</label>
                                    <input type="password" class="form-control" id="pass1" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Verify password</label>
                                    <input type="password" class="form-control" id="pass2">
                                    <p id="er-pass" class="text-danger"></p>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </form>

                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="skill" role="tabpanel">
                <div class="card">
                        <div class="card-header">
                           
                            <h5 class="card-title mb-0">Fill in here all your software skills</h5>
                        </div>
                        <div class="card-body">
                            @include('components.create-skills')

                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="images" role="tabpanel">
                <div class="card">
                        <div class="card-header">
                            
                            <h5 class="card-title mb-0">Your information</h5>
                        </div>
                        <div class="card-body">
                            @include('components.create-images')

                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="contact" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Us</h5>
                            <hr>
                            @include('components.contact-form')
                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="invoice" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                     
                            @include('components.invoice')
                            
                            </div>
                    </div>
                </div>


            </div>
        </div>
        @endisset
    </div>

</div>
</div>
<style>

body{
    
    background:#F0F8FF;
    width:100%;
}
.card-fixed
{
    width: 18rem;    
    position: fixed;
    right: 0;
    z-index: 1000;
}

@media screen and (max-width:468px){
    .card-fixed{
        display:none;
    }
}



</style>
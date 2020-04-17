@include('components.nav-dashboard')
<div class="container p-0">

    <h1 class="h3 mb-3" style="color: transparent;">Settings</h1>
    @if(session('success'))
                <div class="alert alert-success mt-5">
                    {{session('success')}}
                </div>
                @endif<Br>
    <div class="row main-row">
  
        <div class="col-md-5 col-xl-4">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Settings</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#biography" role="tab">
                      Biography
                      
                    </a>
                  
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#information" role="tab">
                     Your profile information
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                      Change password
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#contact" role="tab">
                      Contact Support
                    </a>
                   
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#data" role="tab">
                      Your Purchases
                    </a>
                    
                </div>
            </div>
        </div>
        @isset($user)
        <div class="col-md-7 col-xl-8">
            <div class="tab-content">

                <div class="tab-pane fade show active" id="biography" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Public info</h5>
                        </div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert- alert-danger p-2">{{session('error')}}</div>
                    @endif
                    <form action="{{route('upgrade-user')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" value="{{$user->name}}" id="inputUsername" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">Biography</label>
                                    <textarea rows="2" class="form-control" id="inputBio" name="desc1" placeholder="Tell something about yourself">{{$user->desc_one}}</textarea>
                                    @if ($errors->has('desc1'))  <p style="color:red;">{{$errors->first('desc1')}}</p> @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">More about Biography</label>
                                    <textarea rows="2" class="form-control" id="bio2" name="desc2" placeholder="Tell something about yourself">{{$user->desc_two}}</textarea>
                                    @if ($errors->has('desc2'))  <p style="color:red;">{{$errors->first('desc2')}}</p> @endif
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
                                         <input type="file" class="form-controll" name="image">
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
                <div class="tab-pane fade" id="information" role="tabpanel">
                <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Your information</h5>
                        </div>
                        <div class="card-body">
                        <form action="{{route('upgrade-info')}}" method="post" id="adding-info">
                        @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputFirstName">Write your skills</label>
                                        <textarea rows="2" class="form-control" name="skills" id="skills" placeholder="Type something about your sklills, Like programmer - CSS, HTML, JS">{{$user->skills}}</textarea>
                                        @if ($errors->has('skills'))  <p style="color:red;">{{$errors->first('skills')}}</p> @endif
                                    </div>
                                    
                                </div>
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
                                       <option value="">Your current Category: {{$user->category->name}}</option>
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
											<option value="{{$category->id}}">{{$city->name}}</option>
                                         @endforeach
                                    </select>
                                    @else
                                    <select class="form-control" name="cityid">
                                       <option value="">Your current City: {{$user->city->name}}</option>
										@foreach($cities as $city)
											<option value="{{$city->id}}">{{$city->name}}</option>
                                         @endforeach
                                    </select>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Mobile">Your mobile telephone</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile}}">
                                        <p id="er-mobile" class="text-danger"></p> 
                                        <p id="su-mobile" class="text-info"></p> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Link">Your website link</label>
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

                <div class="tab-pane fade" id="password" role="tabpanel">
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

                <div class="tab-pane fade" id="contact" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Us</h5>
                            <hr>
                            @include('components.contact-form')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="data" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                           
                            
                        </div>
                    </div>
                </div>


            </div>
        </div>
        @endisset
    </div>

</div>

<style>

body{
    
    background:#F0F8FF;
}

</style>
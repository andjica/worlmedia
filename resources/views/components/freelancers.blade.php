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
                <div class="d-flex">
                  
                  <div class="ml-auto price">
                <a href="" class="btn btn-warning py-3 px-5 text-white">Visit Member Profile</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <ul class="list-group">
            <li class="list-group">  {{$users->links()}}</li>
        </ul>
    </div>
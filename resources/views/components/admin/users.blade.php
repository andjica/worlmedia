@foreach($users as $user)
<div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                #id: {{$user->id}}
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: {{$user->name}}</h5>
                <div class="rounded-circle mt-2 image-background"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                </div>
                <p class="count-text ">Email: {{$user->email}}</p>
                <small>{{$user->city->name}}, {{$user->city->country->name_country}}</small>
             </div>
            </div>
            </div>
            
       @endforeach
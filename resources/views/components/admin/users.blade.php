@foreach($users as $user)
<div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <b class="text-info">#id: {{$user->id}}</b>, <small>Created at: {{$user->created_at->format('d-m-Y')}}</small>
            </div>
            <div class="card-body">
            @if($user->name == null && $user->url == null)
                <h5 class="card-title">Name: null</h5>
                <div class="rounded-circle mt-2 image-background"  style="">
                </div>
                <small></small>
            @else
                <h5 class="card-title">Name: {{$user->name}}</h5>
                <div class="rounded-circle mt-2 image-background"  style="background-image: url({{asset('/image-users/'.$user->url)}});">
                </div>
            @endif
                <small>Email: {{$user->email}}<br>
                @if($user->city_id == null && $user->category_id == null)

                @else
                Category:&nbsp;{{$user->category->name}}<br>
                Place: &nbsp;{{$user->city->name}}, {{$user->city->country->name_country}}</small>
               @endif
               <br>
               <a href="" class="btn btn-sm btn-info"><small>View more</small></a>
             </div>
            </div>
            </div>
            
       @endforeach